<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\Hash;

class UserConfigController extends Controller
{

    public function __construct(){
        $this->middleware('guest')->except(['destroy']);
    }

    public function log_in() {

    	return view('auth.log_in');

    }

    public function storeLog_in(Request $request){

        // validate the form
        $this->validate(request(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user_data = array(
            'email' => $request->get('email'),
            'password' => $request->get('password')
        );

        // Attempt to authenticate the user
        if (Auth::attempt($user_data)){
            // If so, sign them in
            return redirect()->home();
        }
        else{
            // If not, redirect back
            return back();
        }
        
    }

    public function sign_up() {

    	return view('auth.sign_up');

    }

    public function storeSign_up(Request $request) {
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
        
        // $user = User::create(request([
        //     'userType', 
        //     'firstName',
        //     'lastName',
        //     'email',
        //     'password',
        //     'country',
        //     'city',
        //     'tel',
        //     'birthday',
        //     'gender'
        // ]));

        $user = User::create([
            'userType' => $request->get('userType'), 
            'firstName' => $request->get('firstName'),
            'lastName' => $request->get('lastName'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
            'country' => $request->get('country'),
            'city' => $request->get('city'),
            'tel' => $request->get('tel'),
            'birthday' => $request->get('birthday'),
            'gender' => $request->get('gender')
        ]);

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
