# CloudHost - Laravel Web Hosting Store (Dummy)

Proyek web statis *dummy* untuk layanan jual beli web hosting yang dibangun menggunakan framework Laravel dan Tailwind CSS, serta dikonfigurasi untuk *deployment* di server aaPanel.

---

## 📋 Prasyarat Sistem (Prerequisites)
Pastikan server Anda memenuhi spesifikasi berikut:
- **PHP**: Versi 8.3 atau 8.5 (pastikan ekstensi `fileinfo` aktif)
- **Composer**: Composer version 2.10.3
- **Web Server**: Nginx / OpenLiteSpeed (aaPanel)

---

## 🚀 Panduan Deploy di Server (aaPanel)

Jalankan perintah berikut secara berurutan melalui terminal SSH server Anda:

## 🚀 Install Dependensi Composer
composer install --optimize-autoloader --no-dev

## 🚀 Konfigurasi Environment & App Key
cp .env.example .env
php artisan key:generate

## 🚀 Sesuaikan Path pada File index.php
if (file_exists($maintenance = __DIR__.'/hosting-store/storage/framework/maintenance.php')) {
    require $maintenance;
}

require __DIR__.'/hosting-store/vendor/autoload.php';

$app = require_once __DIR__.'/hosting-store/bootstrap/app.php';
