<?php

namespace App\Controllers;

use App\Models\BookModel;

class Book extends BaseController
{
    protected $bookModel;
    public function __construct()
    {
        $this->bookModel = new BookModel();
    }
    public function index()
    {
        $buku = $this->bookModel->findAll();

        $data = [
            'title' => 'Daftar Buku',
            'buku' => $buku
        ];
        // $bookModel = new BookModel();

        return view('book/index', $data);
    }
}