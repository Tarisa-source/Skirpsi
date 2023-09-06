<?php

namespace App\Controllers;

use App\Models\NewsModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class NewsController extends BaseController
{
	public function index()
	{
    // buat object model $news
    $news = new NewsModel();

    /*
     siapkan data untuk dikirim ke view dengan nama $newses
     dan isi datanya dengan news yang sudah terbit
    */
    $data['newses'] = $news->where('status', 'published')->findAll();
	// menggunakan method findAll() untuk mengambil semua data di database
	// where() untuk menentukan data mana yang akan di ambil.

    // kirim data ke view
    echo view('news', $data);
	}

	//------------------------------------------------------------

	public function viewNews($slug)
	{
		$news = new NewsModel();
		$data['news'] = $news->where([
			'slug' => $slug,
			'status' => 'published'
		])->first();
		// first() untuk mengambil satu data saja

        // tampilkan 404 error jika data tidak ditemukan
		if (!$data['news']) {
			throw PageNotFoundException::forPageNotFound();
		}

		echo view('news_detail', $data);
	}
	// Pada kasus di atas, kita mengambil data news yang statusnya sudah terbit (published) dan juga mengambil berdasarkan slug
}