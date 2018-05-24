<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\User;

class EmployerController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except(['index', 'searchResult']);
    }
    public function index(){
    	return view('posts.employer.index');
    }

    public function profile(){
    	return view('posts.employer.profile');
    }

    public function postJob(){
    	return view('posts.employer.postJob');
    }

    public function notifications(){
    	return view('posts.employer.notifications');
    }

    public function myPosts(){
        $posts = Post::all();

    	return view('posts.employer.myPosts', compact('posts'));
    }

    public function searchResult($id)
    {
        $SearchR = Post::where('bouloId', '=', $id)->get();
        return view('posts.employer.searchResults', compact('SearchR'));		
    }

}
