<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request,
	App\http\Controllers\Controller;

class KeranjangController extends Controller
{
    public function index()
    {
    	return view('frontend.layouts.keranjang');
    }
}
