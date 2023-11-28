<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Institucional extends BaseController
{
    public function index()
    {
        return view('institucional');
    }
}
