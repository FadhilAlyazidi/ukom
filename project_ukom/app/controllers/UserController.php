<?php
 
class UserController extends \BaseController {
 
    public function login()
    {
                    return View::make('login');
    }
	
	public function authenticate() {
	if (Auth::attempt(array('username' => Input::get('username'), 'password' => Input::get('password'))))
		{
		   echo "login berhasil";
		   return Redirect::to('inputdata');
		}
		else{
		  return Redirect::to('login')->with('pesan_error', 'Login gagal, username atau password salah!');
		}
	}

	
 
    public function doLogin()
    {
        $rules = array(
                        'username'    => 'required|username',
                        'password' => 'required|alphaNum|min:5'
        );
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
                        return Redirect::to('login')
                                        ->withErrors($validator)
                                        ->withInput(Input::except('password'));
        } else {
                        $userdata = array(
                                        'username'   => Input::get('username'),
                                        'password'          => Input::get('password')
                        );
                        if (Auth::attempt($userdata)) {
                                        return Redirect::to('/');
                        } else {               
                                        return Redirect::to('login');
                        }
        }
    }
 
    public function logout()
    {
        Auth::logout();
        return Redirect::to('login');
    }
 
}