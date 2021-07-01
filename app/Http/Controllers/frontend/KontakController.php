<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request,
	App\http\Controllers\Controller;

class KontakController extends Controller
{
    public function index()
    {
    	return view('frontend.layouts.kontak');
    }
}
