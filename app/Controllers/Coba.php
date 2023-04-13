<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index()
    {
        echo "Ini adalah controller coba";
    }

    public function about($nama = '')
    {
        echo "Nama saya $nama.";
    }
}
