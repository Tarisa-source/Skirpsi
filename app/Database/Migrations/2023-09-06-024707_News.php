<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class News extends Migration
{
    public function up()  
    {
        // Membuat kolom/field untuk tabel news
        // pertama kita membuat field terlebih dahulu baru membuat tabel. Field dibuat dengan fungsi $this->forge->addField() dan memberikan parameter berupa array yang berisi data dari field.
        // contoh lain untuk membuat filed 
        // $this->forge->addField([
        // 'id INT(5)',
        // 'title VARCHAR(255)'
        // ]);

		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'title'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'author'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
				'default'        => 'John Doe',
			],
			'content' => [
				'type'           => 'TEXT',
				'null'           => true,
			],
			'status'      => [
				'type'           => 'ENUM',
				'constraint'     => ['published', 'draft'],
				'default'        => 'draft',
			],
		]);

		// Membuat primary key
        // Paramater TRUE berfungsi untuk menyatakan key yang dibuat adalah Primary Key. Jika tidak diberikan TRUE maka akan dibuat menjadi key biasa atau foreign key.
		$this->forge->addKey('id', TRUE);

		// Membuat tabel news
        // Nilai TRUE berfungsi untuk mengecek apakah tabel sudah ada di database atau belum, jika ada maka tidak dilakukan pembuatan tabel. Jika kita tidak memberikan nilai TRUE, maka tabel akan tetap dibuat.. meskipun sudah ada
		$this->forge->createTable('news', TRUE);
    }

    public function down()
    {
        // menghapus tabel news
        // Karena kita menulisnya di dalam method down(), maka ini nantinya akan dipanggil saat kita melakukan rollback.
		$this->forge->dropTable('news');
    }
}
