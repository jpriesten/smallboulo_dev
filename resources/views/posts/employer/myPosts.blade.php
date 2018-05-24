
@extends('layouts.employer')


@section('content')


    <link rel="stylesheet" type="text/css" href="/css/empPages.css">
    <link rel="stylesheet" type="text/css" href="/css/empGenSearch.css">
    
    <div class="pageContent">
        <div class="container">
            <div class="row">
                
                @include('layouts.sideNav')

                  <!-- dashboard -->
                  <div class="col-md-9">
                      <!-- Write new code here-->
                      @foreach ($posts as $post)

                        @include('posts.post')

                      @endforeach
                  </div>
                 <!-- closing of dashboard -->

                 
            </div>
        </div>

    </div>

@endsection
	  	
