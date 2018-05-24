<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [

    	'userSkill',
    	'jobLocation',
		'toDo',
		'deadline',
		'experience',
		'start',
		'priceRange',
		'noOfWorkers',
		'userId'

	];
	
	public function user(){
		return $this->belongsTo(User::class);
	}
}
