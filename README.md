### Sudah sampai Migrasi Database

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
 

# CodeIgniter 4 Application Starter

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](https://codeigniter.com).

This repository holds a composer-installable app starter.
It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [CodeIgniter 4](https://forum.codeigniter.com/forumdisplay.php?fid=28) on the forums.

The user guide corresponding to the latest version of the framework can be found
[here](https://codeigniter4.github.io/userguide/).

## Installation & updates

`composer create-project codeigniter4/appstarter` then `composer update` whenever
there is a new release of the framework.

When updating, check the release notes to see if there are any changes you might need to apply
to your `app` folder. The affected files can be copied or merged from
`vendor/codeigniter4/framework/app`.

## Setup

Copy `env` to `.env` and tailor for your app, specifically the baseURL
and any database settings.

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Repository Management

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

## Server Requirements

PHP version 7.4 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
