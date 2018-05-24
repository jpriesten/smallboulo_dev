<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostController extends Controller
{

    public function index(){
    	return view('posts.index');
    }

    public function create() {

    	return view('posts.create');
    }

    public function store() {

    	$this->validate(request(), [

    		'userSkill' => 'required',
            'jobLocation' => 'required',
			'toDo'		=> 'required',
			'deadline' 	=> 'required',
			'experience'=> 'required',
			'start'		=> 'required',
			'priceRange'=> 'required',
			'noOfWorkers'=>'required'

    	]);

		auth()->user()->publish(new Post(request([
			'userSkill', 'jobLocation', 'toDo', 'deadline',
			'experience', 'start', 'priceRange', 'noOfWorkers'
			]))
		);
    	// \App\Post::create([

    	// 	'userSkill' => request('userSkill'),
        //     'jobLocation' => request('jobLocation'),
		// 	'toDo' => request('toDo'),
		// 	'deadline' => request('deadline'),
		// 	'experience' => request('experience'),
		// 	'start' => request('start'),
		// 	'priceRange' => request('priceRange'),
		// 	'noOfWorkers' => request('noOfWorkers'),
		// 	'userId' => auth()->user()->userId

    	// ]);

    	return redirect('/employer/myPosts');
	}
	
	public function searchResults()
    {
		$SearchR = Post::where('jobLocation', '=', request('jobLocation'))->orWhere('userSkill', '=', request('userSkill'))->get(); 
        return view('posts.employer.searchResults', compact('SearchR'));
    }
}
