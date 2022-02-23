<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        echo "Ini adalah halaman news";
    }

    public function details($id)
    {
        echo "Ini adalah halaman news dengan detail " . $id;
    }
}
