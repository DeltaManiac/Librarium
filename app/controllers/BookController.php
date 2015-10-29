<?php

class BookController extends BaseController {

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


    public function getDownload($id){
        //PDF file is stored under project/public/download/info.pdf

        $file= public_path(). "/download/";
        $headers = array(
            'Content-Type: application/pdf',
        );
        return Response::download($file, 'info.pdf', $headers);
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
       // dd(Input::file('file'));
        $book = new Book();
        $book->bookName = Input::get("BookName");
        $book->fileName = Input::file('file')->getClientOriginalName();
        $book->image = Input::file('image')->getClientOriginalName();
        $book->author = Input::get("Author");
        $book->save();
        Input::file('file')->move(public_path().'/download/',Input::file('file')->getClientOriginalName());
        Input::file('image')->move(public_path().'/download/',Input::file('image')->getClientOriginalName());
        return Redirect::route("user.profile");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $book = Book::find($id);
        $file= public_path(). "/download/".$book->fileName;
        $headers = array(
            'Content-Type: application/pdf',
        );
        return Response::download($file, $book->bookName.".pdf", $headers);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}
