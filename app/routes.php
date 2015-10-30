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

Route::get('/downloadBooks','HomeController@getDownload');
Route::any("/about", [
    "as"   => "user/login",
    "uses" => "UserController@login"
]);
Route::any("/login", [
    "as"   => "user/login",
    "uses" => "UserController@login"
]);
Route::get('/', function()
{

	return View::make('pages.home');
});

Route::get('/view', function()
{

    return View::make('user.view');
});
Route::get('/search', [
    "as" => "user/search",
    "uses" => "UserController@search"
]);



Route::get('/about',function()
{
    return View::make('pages.about', ['squirrel' => 'Samantha', 'something' => 1]);
});;

Route::get('/cat',function(){
    return View::make('cat', ['squirrel' => 'Samantha', 'something' => 1]);
});

Route::get('/header',function(){
    return View::make('includes.header', ['squirrel' => 'Samantha', 'something' => 1]);
});

Route::any("/profile", [
    "as"   => "user.profile",
    "uses" => "UserController@profile",
    "before" => 'auth'
]);



Route::any("/logout", [
    "as"   => "user.logout",
    "uses" => "UserController@logout"
]);

Route::any("/upload",function(){
    return View::make('user.upload');
});


Route::any("/test",function(){
    $user = new User;
    $user->username = 'joe';
    $user->email = 'joe@gmail.com';
    $user->password = Hash::make('P@ssword1');

    if ( ! ($user->save()))
     {
         dd('user is not being saved to database properly - this is the problem');
     }

     if ( ! (Hash::check('P@ssword1', Hash::make('P@ssword1'))))
     {
         dd('hashing of password is not working correctly - this is the problem');
     }

     if ( ! (Auth::attempt(array('username' => 'joe', 'password' => 'P@ssword1'))))
     {
         dd('storage of user password is not working correctly - this is the problem');
     }

     else
     {
         dd('everything is working when the correct data is supplied - so the problem is related to your forms and the data being passed to the function');
     }
});

Route::get('/footer',function(){
    return View::make('includes.footer', ['squirrel' => 'Samantha', 'something' => 1]);
});


Route::resource('book', 'BookController');