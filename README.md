# TUGAS CRUD Android Studio dengan Database MYSQL

## Syarat
1. Android Studio
2. XAMPP
3. Project Laravel (Pada saat pembuatan tugas saya memakai laravel 7.x)
4. Code editor seperti Visual Studio Code

Cara mengoperasikan :

## Cara Install
#### 1. Clone Project

```bash
https://github.com/fanifh11/Tugas-CRUD-Android-Laravel.git
```
#### 2. Run Laravel hingga aplikasi di emulator
1. Buka XAMPP dan jalankan APACHE server dan MYSQL
2. Buka PHPMyAdmin
3. Import database ke PHPMyAdmin (dbtokobuku.sql)
4. Kemudian buka project laravel yang bernama KasirLaravel pada code editor 
5. Setelah itu jalankan server pada terminal visual studio code dengan cara: php artisans serve
6. Buka project Android Studio
7. Buka java/com/example/kasirapp/rest/ApiConnection.java
8. Cari pada baris 9 yang bertuliskan: public static final String BASE_URL = "http://alamat ip anda/KasirLaravel/public/api/"; 
9. Jalankan emulator dan running.
10. Selesai



## Program Pendukung
- Android Studio
- XAMPP
- VisualStudio Code
- DBeaver
- Postman 
- Composer
