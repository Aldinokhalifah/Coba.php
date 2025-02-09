<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemasukkanController extends Controller
{
    public function index() {
        return view('pemasukkan.index');
    }
}
