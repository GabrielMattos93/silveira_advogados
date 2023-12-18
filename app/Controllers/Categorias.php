<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Categorias extends BaseController
{
    public function index()
    {
        return view('areas-de-atuacao');
    }
}
