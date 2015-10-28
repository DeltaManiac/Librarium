<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{

	return View::make('pages.home');
});

Route::get('/cat',function(){
    $results = DB::select('select * from test');
    return View::make('cat', ['squirrel' => 'Samantha', 'something' => 1,'a' => $results]);
});

Route::get('/header',function(){
    return View::make('header', ['squirrel' => 'Samantha', 'something' => 1]);
});