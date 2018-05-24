<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserConfigController extends Controller
{
    public function log_in() {

    	return view('auth.log_in');

    }

    public function sign_up() {

    	return view('auth.sign_up');

    }

    public function storeSign_up() {
        // validate the form
        $this->validate(request(), [
            'userType' => 'required',
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'country' => 'required',
            'city' => 'required',
        ]);

        // create and save the user
        $user = User::create(request([
            'userType', 
            'firstName',
            'lastName',
            'email',
            'password',
            'country',
            'city',
            'tel',
            'birthday',
            'gender'
        ]));

        // sign the user in
        auth()->login($user);

        // redirect to welcome page
        return redirect()->home();

    }

    public function destroy(){
        auth()->logout();
        return redirect()->home();
    }
}
