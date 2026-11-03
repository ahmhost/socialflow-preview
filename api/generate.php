<?php
/**
 * JR Poster Generation API Gateway (PHP)
 * Forwards requests to local Node/Puppeteer microservice (port 3333)
 */

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}

$contentType = $_SERVER['CONTENT_TYPE'] ?? '';
$rawInput = file_get_contents('php://input');
$payload = [];

if (strpos($contentType, 'application/json') !== false) {
    $payload = json_decode($rawInput, true) ?: [];
} else {
    $payload = $_POST;
}

// Ensure template is JR
$payload['template'] = 'jr';

// Node.js backend URL
$backendUrl = 'http://127.0.0.1:3333/api/generate';

$ch = curl_init($backendUrl);
curl_setopt_array($ch, [
    CURLOPT_POST           => true,
    CURLOPT_POSTFIELDS     => json_encode($payload),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER     => ['Content-Type: application/json'],
    CURLOPT_TIMEOUT        => 60
]);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$error    = curl_error($ch);
curl_close($ch);

if ($error) {
    http_response_code(502);
    echo json_encode([
        'success' => false,
        'error'   => 'Backend render engine unreachable: ' . $error
    ]);
    exit;
}

http_response_code($httpCode ?: 200);
header('Content-Type: application/json; charset=utf-8');
echo $response;
