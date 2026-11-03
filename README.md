# SocialFlow Enterprise v4.2 (سوشل فلو)
## The Unified AI Publishing & Video Studio for Modern Media Teams

سوشل فلو (SocialFlow) ایک جدید ترین انٹرپرائز ملٹی پوسٹنگ اور ویڈیو پروڈکشن اسٹوڈیو ہے جو جدید نیوز رومز اور میڈیا ہاؤسز کے لیے تیار کیا گیا ہے۔

---

### 👥 صارف کے اکاؤنٹس اور لاگ ان کریڈینشلز (User Credentials)

| صارف کا نام | کردار (Role) | ای میل (Work Email) | پاس ورڈ (Password) | ورک اسپیس اور اختیارات |
| :--- | :--- | :--- | :--- | :--- |
| **جمشید رضوانی** | **سپر ایڈمن (Super Admin)** | `rizwani@socialflow.com` | `Rizwani@123` | کلسٹر انفراسٹرکچر، تمام 12 نوڈز، یوزر کنٹرول، گلوبل API کیز |
| **نیوز روم ایڈمن** | **ایڈمنسٹریٹر (Admin)** | `admin@socialflow.com` | `admin` یا `Admin@123` | ایڈیٹوریل اپروولز، 6 چینل ملٹی پوسٹنگ (FB, IG, WP, X, TT, YT) |
| **ساجد** | **کنٹینٹ کریٹر (User)** | `sajid@socialflow.com` | `sajid@123` | CapCut-اسٹائل NLE ٹائم لائن، 4K رینڈرنگ، اردو لوئر تھرڈ، پوسٹر جنریٹر |

---

### 🔐 تصدیقی طریقے (Authentication Methods)
1. **ای میل اور پاس ورڈ:** روایتی پاس ورڈ کی توثیق بمطابق `data/users.json`۔
2. **گوگل ورک اسپیس سنگل سائن آن (Google Workspace SSO):** ون کلک گوگل لاگ ان۔
3. **میٹا بزنس سوٹ لاگ ان (Meta Business Suite):** براہ راست فیس بک و انسٹاگرام میڈیا لیب انٹیگریشن۔
4. **انٹرپرائز اوکٹا / سیم ایل (Okta SAML 2.0):** انٹرپرائز کارپوریٹ سنگل سائن آن۔

---

### 📂 فائل اسٹرکچر (File Architecture)
```text
flow/
├── index.php             # انٹرپرائز v4.2 لاگ ان گیٹ وے (PHP Session & API)
├── index.html            # پبلک لائیو ٹیسٹ فرنٹ اینڈ (GitHub Pages سپورٹ)
├── dashboard.php         # رول بیسڈ ڈیش بورڈ (Super Admin, Admin, Sajid)
├── dashboard.html        # کلائنٹ سائیڈ ری ایکٹو ڈیش بورڈ (آن لائن ٹیسٹ کے لیے)
├── login.php             # تصدیقی بیک اینڈ اینڈ پوائنٹ (JSON API & POST)
├── logout.php            # محفوظ سیشن ٹرمینیشن
├── auth_sso.php          # گوگل اور میٹا SSO ہینڈلر
├── data/
│   └── users.json        # محفوظ یوزر پروفائلز، ہیشز، پرمیشنز اور کلسٹر میٹا ڈیٹا
└── assets/               # اسٹوڈیو ایسٹس اور میڈیا
```

---

### 🚀 ڈپلائیمنٹ لنکس (Live Links)
- **VPS پروڈکشن ایڈریس:** `https://editor.jamshedrizwani.com/flow/`
- **گٹ ہب پرائیویٹ ریپوزٹری:** `https://github.com/ahmhost/socialflow`
- **پبلک لائیو پریویو (GitHub Pages):** `https://ahmhost.github.io/socialflow-preview/`
