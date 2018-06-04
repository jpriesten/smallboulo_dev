@extends('layouts.employer')


@section('content')

    <link rel="stylesheet" type="text/css" href="/css/empPages.css">
    

    
    <div class="pageContent">
        <div class="container">
            <div class="row">
                

                  <!-- dashboard -->
                 <div class="col-md-10">
                 <!-- <p> No search results at the moment </p> -->
                    @if (isset($SearchR))
                        @foreach ($SearchR as $searchR)

                            @include('posts.search')

                        @endforeach
                    @endif
                    
                    
                    <button class="btn btn-primary" type="button" onclick="history.back();">Back</button>
                    

                 </div> <!-- closing of dashboard -->

                 
            </div>
        </div>

    </div>

@endsection

	  	
