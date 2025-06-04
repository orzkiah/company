# 🏢 Company Profile Web

Aplikasi website profil perusahaan berbasis Laravel. Dirancang untuk menampilkan informasi perusahaan secara profesional kepada pengunjung dan calon pelanggan.

## 🚀 Fitur Utama

- 🧾 Halaman tentang perusahaan (About Us)
- 📊 Layanan atau produk yang ditawarkan
- 🖼️ Galeri dan testimoni klien
- 📩 Formulir kontak (Contact Us)
- 🔒 Login Admin (untuk update konten)

## 🛠️ Teknologi yang Digunakan

- Laravel 8.1 (Backend)
- Blade Template Engine
- Bootstrap 5 (Frontend)
- MySQL (Database)
- FontAwesome Icons

## 📷 Tampilan Antarmuka

![Screenshot 2025-01-03 100715](https://github.com/user-attachments/assets/332b3de3-8b64-44af-895b-d26421da88e5)
![Screenshot 2025-01-04 183927](https://github.com/user-attachments/assets/eaad08d1-4771-426a-ad33-1bf51e71c0ed)
![Screenshot 2025-01-04 184120](https://github.com/user-attachments/assets/d1490fde-8fc4-4786-a6e7-de96fd3dc035)
![Screenshot 2025-01-04 184946](https://github.com/user-attachments/assets/0ed85b0f-a3db-4670-a35a-642743c9ffec)
![Screenshot 2025-01-04 183927](https://github.com/user-attachments/assets/6664484b-e38f-4ed6-8472-485bf446e9f0)




## 📦 Cara Menjalankan Proyek

```bash
git clone https://github.com/orzkiah/company.git
cd company
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
