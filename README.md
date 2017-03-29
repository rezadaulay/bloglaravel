# BlogLaravel
####  RESTful Resource Controllers
#### Membuat CRUD sederhana Dengan Laravel


#### Cara Install

  - Pastikan php anda sudah memiliki fitur berikut : **PHP >= 5.6.4,, OpenSSL PHP Extension, PDO PHP Extension,Mbstring PHP Extension, Tokenizer PHP Extension, XML PHP Extension**
  - Download Composer jika belum terinstal di komputer, klik link berikut https://getcomposer.org/
  - Lalu arahkan cmd ke folder bloglaravel yang telah anda download dari repo ini dan jalankan command `composer update` atau `php composer.phar update`
  - Setelah proses update composer selesai, silahkan buat database baru dan sesuai config anda di file `.ENV` pada folder `/bloglaravel`
  - Lalu jalankan `php artisan migrate`
  - Untuk menjalankan selai via `localhost/bloglaravel/public` bisa juga menggunakan fungsi command dengan mengetikkan `php artisan serve` pada cmd atau terminal anda dan di cmd atau terminal akan muncul url untuk mengakses contoh `localhost:8000`

Note :
- Didalam folder **/bloglaravel/resources/views** terdapat 3 folder template post controller yang mana itu fungsinya sama tetapi kontennya ada yang template memakai [bootstrap](getbootstrap.com) dan ada tidak. Untuk mencoba silahkan rename saja nama foldernya jadi **post**
- Jika ada pertanyaan jangan malu bertanya ke saya via **Issue** atau email **daulayreza@gmail.com**