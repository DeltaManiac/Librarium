<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function getDownload(){
		//PDF file is stored under project/public/download/info.pdf
		$file= public_path(). "/download/test.pdf";
		$headers = array(
			'Content-Type: application/pdf',
		);
		return Response::make(file_get_contents($file), 200, [
			'Content-Type' => 'application/pdf',
			'Content-Disposition' => 'inline; ' . 'info.pdf',
		]);
	}


}