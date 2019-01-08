<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

	public function index() {

		return view('pages.index');

	}
    
	public function who_we_are() {

		return view('pages.who_we_are');

	}

	public function programs() {

		return view('pages.programs');

	}

	public function about() {

		return view('pages.about');

	}

	public function contact() {

		return view('pages.contact');

	}


}
