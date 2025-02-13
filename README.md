# **Panduan Pull Request Pertama pada Aplikasi Web Laravel**

Dokumen ini berisi langkah-langkah untuk melakukan pull request pertama kali pada repository aplikasi web Laravel.

## **Langkah-langkah Setup**

### **1. Clone Repository ke Lokal**
**Jalankan perintah berikut untuk meng-clone repository ke komputer lokal:**
```sh
git clone <URL_REPOSITORY>
```
**Gantilah** `<URL_REPOSITORY>` **dengan URL repository yang sesuai.**

### **2. Masuk ke Direktori Repository**
**Navigasikan ke direktori repository Laravel yang telah di-clone:**
```sh
cd nama-repository
```

### **3. Install Dependensi dengan Composer**
**Jalankan perintah berikut untuk menginstal dependensi yang diperlukan oleh Laravel:**
```sh
composer install
```

### **4. Generate Application Key**
**Laravel memerlukan application key yang dapat dihasilkan dengan perintah:**
```sh
php artisan key:generate
```

### **5. Konfigurasi Database**
**Buka file** `.env` **dan sesuaikan konfigurasi database, seperti contoh berikut:**
```
DB_DATABASE=nama_database
DB_USERNAME=username_database
DB_PASSWORD=password_database
```
**Pastikan database telah dibuat sebelum menjalankan migrasi.**

### **6. Jalankan Migrasi Database**
**Untuk menjalankan migrasi database, gunakan perintah berikut:**
```sh
php artisan migrate
```

### **7. Konfigurasi Mail Host**
**Atur konfigurasi mail pada file** `.env` **sesuai dengan provider email yang digunakan:**
```
MAIL_MAILER="smtp"
MAIL_SCHEME=null
MAIL_HOST="smtp.example.com"
MAIL_PORT=587
MAIL_USERNAME="email@example.com"
MAIL_PASSWORD=password_email
MAIL_ENCRYPTION="tls"
MAIL_FROM_ADDRESS="email@example.com"
MAIL_TO_ADDRESS="email@example.com"
MAIL_FROM_NAME="${APP_NAME}"
```

### **8. Konfigurasi Google reCAPTCHA**
**Tambahkan Google reCAPTCHA key ke dalam file** `.env`:
```
GOOGLE_RECAPTCHA_SITE_KEY=your_site_key
GOOGLE_RECAPTCHA_SECRET_KEY=your_secret_key
```

### **9. Jalankan Aplikasi**
**Terakhir, jalankan aplikasi Laravel dengan perintah berikut:**
```sh
php artisan serve
```
**Aplikasi akan berjalan pada** `http://127.0.0.1:8000/`. **Buka URL tersebut di browser untuk memastikan aplikasi berjalan dengan baik.**

---

**Jika mengalami kendala, silakan periksa log error atau baca dokumentasi Laravel untuk solusi lebih lanjut.**
