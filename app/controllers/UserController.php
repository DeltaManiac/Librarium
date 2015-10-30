<?php
class UserController
    extends Controller
{
    public function login()
    {
        if(Auth::check())
        {
            return Redirect::route("user.profile");
        }
        if ($this->isPostRequest()) {
            $validator = $this->getLoginValidator();
            if ($validator->passes()) {
                $credentials = $this->getLoginCredentials();
//                dd($credentials);
                if ( Auth::attempt($credentials)) {
                    return Redirect::route("user.profile");
                }
                return Redirect::back()->withErrors([
                    "password" => ["Credentials invalid."]
                ]);
            } else {
                return Redirect::back()
                    ->withInput()
                    ->withErrors($validator);
            }
        }

        return View::make("user.login");
    }

    public function search(){
        $name = Input::get('srch-term');
        $book = DB::table('book')->where('bookName', 'like', "%".$name."%")
            ->orWhere('author','like',"%".$name."%")
            ->get();
        return View::make("user.searchResult",["books"=>$book]);
    }


    public function profile()
    {
        $book = Book::all();
       // $book = Book::where("bookName","=","HarryPotter6")->get();

        return View::make("user.profile",["books"=>$book]);
    }
    protected function isPostRequest()
    {
        return Input::server("REQUEST_METHOD") == "POST";
    }

    protected function getLoginValidator()
    {
        return Validator::make(Input::all(), [
            "username" => "required",
            "password" => "required"
        ]);
    }
    protected function getLoginCredentials()
    {
        return [
            "username" => Input::get("username"),
            "password" => Input::get("password")
        ];
    }
    public function logout()
    {
        Auth::logout();

        return Redirect::route("user/login");
    }
//    public function login()
//    {
//        return View::make("user.login");
//    }
}