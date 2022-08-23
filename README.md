# Monitoring ED

Aplikasi untuk melakukan monitoring produk ED seluruh Kimia Farma Group.

Tim Development: 
- Ahmad Yani
- Lani Asep Sutisna
- Findryan KP
- Hesti Oktafiyani

## Requirement
- Buat Akun [gitlab.com](https://git-scm.com/downloads)
- Install [git](https://git-scm.com/downloads)
- Install [tortoistgit](https://tortoisegit.org/)
- Install [xampp](https://www.apachefriends.org/index.html)
- Install [visual code](https://code.visualstudio.com/)
- Install [navicat full version](https://gigapurbalingga.net/premiumsoft-navicat-premium-enterprise-full/)
- Install [composer](https://getcomposer.org/Composer-Setup.exe)

## Installation

Buka **terminal** silahkan ikuti proses installasi berikut langkah-langkah dibawah ini:

```bash
cd C:\xampp\htdocs
git clone https://gitlab.com/it.dev.kaef/monitoring-ed.git
cd monitoring-ed
composer install
copy .env.example .env (copy .env.example menjadi .env)
buat database 'monitoring-ed' & ubah konfigurasi database di file .env
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=monitoring-ed
  DB_USERNAME=root
  DB_PASSWORD=
php artisan key:generate
php artisan config:cache
php artisan serve (untuk running project)
```

## Contributing
Permintaan penarikan dipersilakan. Untuk perubahan besar, harap buka masalah terlebih dahulu untuk membahas apa yang ingin Anda ubah. 

Pastikan untuk memperbarui tes yang sesuai.

## License
[MIT](https://choosealicense.com/licenses/mit/)
