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

Route::get('/about',function()
{
    return View::make('pages.about', ['squirrel' => 'Samantha', 'something' => 1]);
});;

Route::get('/cat',function(){
    return View::make('cat', ['squirrel' => 'Samantha', 'something' => 1]);
});

Route::get('/header',function(){
    return View::make('header', ['squirrel' => 'Samantha', 'something' => 1]);
});