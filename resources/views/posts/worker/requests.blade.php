@extends('layouts.worker')


@section('content')
    
    <link rel="stylesheet" type="text/css" href="/css/empPages.css">
    <link rel="stylesheet" type="text/css" href="/css/empGenSearch.css">

    <div class="pageContent">
        <div class="container">
            <div class="row">
                
                @include('layouts.workerSideNav')

                  <!-- dashboard -->
                  <div class="col-md-9">
                    <!-- Write new code here-->

                    <h2>Show Work requests from employer(s) of user</h2>
                    

                  </div>
                  <!-- closing of dashboard -->

                 
            </div>
        </div>

    </div>


@endsection
