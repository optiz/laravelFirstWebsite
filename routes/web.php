<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('index');


Route::get('/home', function () {
    return view('home');
});

Route::get('/foo', function (){
	return view('foo');
    //return 'Hello Philippines<br> <a href="/bar">Go to Bar Page</a>'; THIS IS A MANUAL WAY 
})->name('foo');

Route::get('/bar', function (){
	return view('bar');
    //return 'Hello World<br> <a href="/foo"> Go to Foo Page</a>';
})->name('bar');

Route::get('/shoutout/{text}', function ($text){
	$colors=array (
		"red" => "means passion", //key value pair .. the "red" is thwe key and "means passion is the value"
		"green" => "color of nature",
		"blue" =>"color sa dagat",
		"yellow"=>"color sa ngipon nga way toothbrush"
	);
	return view('shoutout', 
		   array('text'=>$text,
		   'colors'=>$colors));
})->name('shoutout');


//==============================================================================================
Route::get('/basic-arithmetic/{operation}/{num1}/{num2}', function ($operation,$num1,$num2){
	
	return view('basic-arithmetic', 
		   array('operation'=>$operation, 
		   	     'num1'=>$num1,
		   	     'num2'=>$num2, 
		   	     'sum'=>$sum=$num1+$num2, 
		   	     'diff'=>$diff=$num1-$num2, 
		   	     'mul'=>$mul=$num1*$num2,
		   	 	 'div'=>$div=$num1/$num2));
})->name('basic-arithmetic');
