CRUD LARAVEL 9
buat project baru, pastikan terminal/command prompt/gitbash anda ada di directory ‘htdocs’ ataupun di folder tempat penyimpanan project kesukaan anda

composer create-project laravel/laravel latihan-crud9
selanjutnya kita pindah directory project laravel menggunakan perintah

cd latihan-crud9
buat database baru bernama ‘latihan-crud’ atau bebas

selanjutnya konfigurasi database kalian di file ‘.env’ seperti dibawah ini

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_db_name
DB_USERNAME=your_db_username
DB_PASSWORD=your_db_password
membuat Authentication, jalankan perintah:

composer require laravel/ui
php artisan ui bootstrap --auth
1. Persiapan Assets
langkah selanjutnya kita disuruh mendownload app.js menggunakan node js namun akan kita skip dan diganti menggunakan bootstrap 5, silahkan kalian download bootstrap 5 , sesudah didownload langsung extract isi bootstrapnya dan copy folder ‘css’ & ‘js’ kemudian paste didalam folder ‘public’ project laravel kalian, setelah kita masukan css dan js nya, kita juga membutuhkan DataTable sebagai plugin untuk menampilkan data dari crud yang akan kita buat, silahkan kalian download DataTables5 , setelah di download langsung di extract to ‘DataTables’ kemudian kalian cut/copy foldernya ke dalam folder ‘public’ di dalam project kalian dan yang terakhir kita membutuhkan sebuah file yang bernama jquery silahkan kalian copy isi codenya dan buat sebuah file baru bernama ‘jquery-3.5.1.js’ didalam folder ‘public/js’

struktur folder di dalam ‘public’


2. Membuat Model Migration & Controller
membuat model & Migration Siswa

php artisan make:model Siswa -m
isi code migration & model



setelah mengisi model dan migration jangan lupa untuk menjalankan perintah

php artisan migrate
agar struktur table yang telah kita buat dapat terkirim ke database.

membuat Controller Siswa

php artisan make:controller SiswaController -r
isi code SiswaController.php


setelah membuat controller langkah selanjutnya mengisi routes/web.php


3. UI Template & CRUD Siswa
menyiapkan flash untuk notifikasi ketika data berhasil dibuat diedit maupun di hapus, silahkan kalian buat sebuah file baru bernama ‘_flash.blade.php’ di dalam folder ‘resources/views/layouts/’


flash untuk notifikasi pengolahan data siswa
selanjutnya buat folder siswa di dalam folder ‘resources/views’ kemudian kalian isi dengan 4 buah file

index.blade.php
create.blade.php
edit.blade.php
show.blade.php
nah setelah menambahkan ke 4 file tersebut kita edit template bawaan dari laravel di dalam folder ‘resources/views/layouts/app.blade.php’ menjadi seperti dibawah ini


setelah mengedit app.blade.php mari kita isi file dari index.blade.php di dalam folder ‘siswa’


silahkan kalian jalankan server laravelnya menggunakan perintah

php artisan serve
kemudian kalian register dan isi data siswa secara manual dari database kalian terlebih dahulu sebanyak 1–2 data, dan masuk ke dalam url

localhost:8000/siswa
maka tampilannya akan menjadi seperti dibawah ini


halaman index siswa
create.blade.php



Halaman Create Data Siswa
edit.blade.php



Halaman Edit Data Siswa
show.blade.php



Halaman Show Data Siswa
Proses Pembuatan Data Siswa


dan yang terakhir ubah isi file welcome.blade.php menjadi seperti dibawah ini


Sekian Terima Kasih Semoga Bermanfaat :)

