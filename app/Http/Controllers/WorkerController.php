<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except(['index']);
    }
    public function index(){
    	return view('posts.worker.index');
    }

    public function profile(){
        return view('posts.worker.profile');
    }

    public function requests(){
        return view('posts.worker.requests');
    }

    public function catalog(){
    	return view('posts.worker.catalog');
    }

    public function notification(){
    	return view('posts.worker.notification');
    }

}
