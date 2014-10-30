<?php
/**
 * User: Anil
 * Date: 20/10/2014
 * Time: 9:22 AM
 * Auth Controller
 */

class AuthController extends Controller {

    public function getLogin()
    {
        return View::make('auth.login');
    }

    public function postLogin()
    {
        $rules = array( 'username' => 'required', 'password' => 'required' );

        $validator = Validator::make(Input::all(), $rules);

        if($validator->fails())
        {
            return Redirect::route('login')->withErrors($validator);
        }

        $auth = Auth::attempt( array(
            'name' => Input::get('username'),
            'password' => Input::get('password'),
        ), false);

        if($auth)
        {
            return Redirect::route('login')->withErrors(array('Invalid credentials provided'));
        }

        return Redirect::route('home');

    }

    public function logout(){

        Auth::logout();

        return Redirect::route('login');
    }

} 