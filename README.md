### Step 3 – Membuat Layout dan View untuk Admin

# Belajar CI 4
~ Page Layout
 * Setiap View yang ingin menggunakan layout harus meng-extend Layoutnya.
    `<?= $this->extend('layout/page_layout') ?>`
 * Setelah itu untuk menampilkan konten harus membuat view sectionn 
    `<?= $this->extend('layout/page_layout') ?>`
    `<?= $this->section('content') ?>`
     konten view di sini 
    `<?= $this->endSection() ?>`

~ View Partial untuk Layout
 * View Partial adalah view yang bisa digunakan kembali. View Partial bisa kita include-kan atau gunakan di dalam Layout maupun View.

~ View Cell
 * View Cell adalah bagian terkecil dari View. Secara teknis, View Cell sebenarnya adalah sebuah Class yang bertugas membuat kode HTML (generate HTML) dengan method-methodnya.
 * Class View Cell bukanlah Controller, karena ia tidak bertugas untuk membalas sebuah request. Ia hanya Class yang bertugas membuat HTML.
 * Fungsi view_cell() adalah fungsi untuk menggunakan View Cell.

~ View Cells dengan Parameter
 * 

~ Controller 
 * Saat fungsi view() dieksekusi, ia akan mencari file view pada folder 📁 app/Views berdasarkan nama file view yang diberikan.
 * Data yang akan dikirim ke view harus dalam bentuk array asosiatif. Array asosiatif adalah array yang memiliki key dan value. Key akan menjadi nama variabel di dalam view, dan value akan menjadi nilainya. Value ini bebas kita isi dengan apa saja.. boleh diisi dengan string, array, object, integer, dll
 
~ Migrasi Database 
 * Pada Codeigniter 4.. kita sudah disediakan program khusus, yakni melalui spark.
 * Perintah-perintah untuk membuat migrasi database dengan spark, bisa kita lihat dengan perintah php spark --help.
 * Jika kamu bingung dengan cara menggunakan perintah tersebut, bisa lihat bantuannya dengan contoh perintah: `php spark help migrate:create`
 * Untuk membuat file migrasi: `php spark migrate:create news`
 * isi file `2020-11-23-053942_news.php` terdapat 2 yaitu method up() akan dijalankan saat melakukan migrasi, sedangkan down() saat melakukan rollback. 
 * setelah menjalankan perintah `php spark migration` maka table pada db_ci4 akan menjadi seperti ![phpmyadmin](public/img/image.png)
 * Tabel migrations adalah tabel yang otomatis dibuat untuk menyimpan versi migrasi yang sudah dilakukan. Lalu tabel news adalah tabel yang kita buat berdasarkan file migrasi.
   ## Bagaimana Kalau ada Perubahan Skema?
   1. Membuat file migrasi baru dan menuliskan perubahannya di sana, lalu melakukan migrasi lagi. Cara pertama ini cocok dilakukan jika kita sudah punya data, karena perubahanya akan bisa di-rollback.
   2. Bisa malakukan rollback, lalu mengubah file migrasi yang sudah ada dan melakukan migrasi kembali atau ini bisa dipersingkat dengan `migrate:refresh`. Cocok dilakukan untuk migrasi awal. Namun kurang cocok dilakukan untuk aplikasi yang sudah punya data dan sudah melakukan migrasi berkali-kali, karena akan berpotensi menghapus data.
 * ![Alt text](public/img/image-1.png) isi dari table migration tersebut ada 2 yaitu batch 1 dan batch 2 Jika kita melakukan rollback ke batch 1, maka data dengan nomer batch 2 akan dihapus dan kondisi database akan kembali seperti saat batch 1.
 * mengecek status migrasi dengan perintah: `php spark migrate:status`

~ Membuat Seed Data untuk 
 * Seed data adalah data awal untuk mengisi tabel. Seed data kadang kita butuhkan untuk mengetes, dan menyiapkan data yang diperlukan di awal seperti user pertama pada aplikasi.
 * Untuk membuat seed data, kita membutuhkan file seeder. File seeder ini dapat dibuat dengan  contoh perintah: `php spark make:seeder news`
~ CRUD 
 * Model merupakan class yang berfungsi untuk operasi database seperti insert data, read data, update, dan delete.
 * [Dokumentasi model CLI](https://www.codeigniter.com/user_guide/models/model.html#configuring-your-model)
 * Bedanya, method add() bisa dibuka dengan dua method yakni get() dan post(). Sedangkan get() hanya untuk GET saja.