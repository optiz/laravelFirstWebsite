<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function contactPage(){
		return view('pages.contact');
	}

	public function __construct(){
		$this->middleware('age')->only('middlewareAgePage');	

	}

	public function middlewareAgePage(Request $request){
		$age = $request->age;

		return view('age', array('age'=>$age));
	}

	public function shoutoutPage(Request $request){
		$text = $request->text;

		$colors = array(
			"red" => "means passion", //key value pair .. the "red" is thwe key and "means passion is the value"
			"green" => "color of nature",
			"blue" =>"color sa dagat",
			"yellow"=>"color sa ngipon nga way toothbrush"
		);
		return view('shoutout', array(
			'text' => $text,
			'colors' => $colors
		));
	}
    //
}
