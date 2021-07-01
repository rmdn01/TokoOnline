<?php
namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request,
	App\http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
    	return view('frontend.home');
    }
}
