<?php
/**
 * Created by PhpStorm.
 * User: Sander
 * Date: 10-1-2015
 * Time: 14:10
 */

use \Technasium\Alert;


Class AuthController extends Controller{

    public function getLogin(){
        return View::make('layout.login');
    }

    public function postLogin(){
        $credentials = Input::only('email','password'); // Gebruik alleen email en password om te filteren voor users.
        $credentials['email'] || $credentials['email'] = ''; //Altijd een parameter voor email in de array hebben.
        $credentials['password'] || $credentials['password'] = ''; //Altijd een parameter voor password in de array hebben.
        $remember = (boolean)Input::get('remember'); // Als checkbox aangezet is, dan moet de gebruiker blijven ingelogged.


        if(Auth::attempt($credentials,$remember)){
            return Redirect::to('/');
        }else{
            AlertRepo::add(new Alert('danger','Ongeldige login'))     ;
            return Redirect::action('AuthController@getLogin');
        }
    }

    public function getLogout(){
    	Auth::logout();
    	return Redirect::to('/');
    }

}