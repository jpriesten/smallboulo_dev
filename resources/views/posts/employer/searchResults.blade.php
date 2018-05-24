@extends('layouts.employer')


@section('content')

    <link rel="stylesheet" type="text/css" href="/css/empPages.css">
    

    
    <div class="pageContent">
        <div class="container">
            <div class="row">
                

                  <!-- dashboard -->
                 <div class="col-md-10">
                 
                    @foreach ($SearchR as $searchR)

                        @include('posts.search')

                    @endforeach

                 </div> <!-- closing of dashboard -->

                 
            </div>
        </div>

    </div>

@endsection

	  	
