	
@extends('layouts.master')	

    <!-- write functional code to dynamically change the navbar according to the view -->
    @if('worker' == 'worker')

        @include('layouts.nav')

    @elseif('employer' == 'employer')

        @include('layouts.nav')

    @endif

 @section('content')

    <div id="bodyPosition">
        
         <!-- header -->
        <a name="search"></a>

        <div class="intro-header">
            <div class="container-fluid" >
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-6"  id="employerCol">

                        <br>
                        <br>
                        <h2 style="color:green"> GET WORKERS FOR YOUR JOBS FASTER THAN NEVER BEFORE <h1>
                            <hr>
                            <h2> post a <strong>SmallBoulo</strong> for workers around your location </h2>
                            <br>
                            <br>


                        <a href="/employer"><button class="btn btn-success btn-lg" id="employerBtn" > EMPLOYER </button></a>


                        <h3> get workers    </h3>
                    </div>

                    <div class="col-md-6 col-sm-6 col-lg-6" id="workerCol">

                        <br>
                        <br>
                        <h2 style="color:#db7b1e"> GET EMPLOYED FOR A SMALLBOULO FASTER THAN NEVER BEFORE <h1>
                            <hr>
                            <h2> check for any <strong>SmallBoulo</strong> posted around your location </h2>
                            <br>
                            <br>
                        

                            <a href="/worker"><button class="btn btn-warning btn-lg" id="workerBtn"> WORKER </button></a>

                            <h3> search SmallBoulo </h3>
                    </div>
                </div>  
            </div>
            <!-- /.container -->
        </div> 
        <!-- /.intro-header end -->
            

        <!-- about smallboulo  -->

        <a  name="about"></a>
        <!-- content-section a -->
        <div class="content-section-a">
        <div class="container">
                <div class="row">

                    <div class="col-md-4"  id="rightAlign">
                        <hr class="section-heading-spacer-right" id="hr">
                        <div class="clearfix"></div>                
                        <h2 class="section-emp-heading">are you an Employer ? <br><div id="ans"> Hire workers close to you <div></h2>
                        <p class="lead"> you need workers,connect and post a smallBoulo offer,when you get applicants, views thier profiles and hire one of them </p>
                        
                    </div>

                    <div class="clearfix visible-xs"></div> <!-- for mobile display -->  

                    <div class="col-md-4"  >
                        <br>
                        <img class="img-responsive rounded" src="/pics/sb.jpg" alt=" SmallBoulo" id="logo">
                    </div>

                    <div class="clearfix visible-xs"></div> <!-- for mobile display --> 

                    <div class="col-md-4">
                        <hr class="section-heading-spacer-left" id="hr">
                        <div class="clearfix"></div>                
                        <h2 class="section-wo-heading">are you a Worker ?<br><div id="ans"> There are jobs for you <div></h2>
                        <p class="lead"> Have the opportunity to apply for posted SmallBoulos around your residence, no more stress to have a deal with an employer,we bring the closet jobs to you</p>
                    </div>

                </div> <!-- row end -->
            </div> <!-- /.container -->
        </div> <!-- section-a end -->

    </div>





   

 @endsection