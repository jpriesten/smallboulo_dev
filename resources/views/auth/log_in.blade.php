

@extends('layouts.master')

@include('layouts.nav')

@section('content')

	<link rel="stylesheet" type="text/css" href="/css/empPages.css">
    
    <div class="pageContent">
        <div class="container">
            <div class="row">

            	<div class="col-md-8">
					<div class="jumbotron" >
						<!-- Show an advert here -->
						<!-- Sample view -->
						<img class="img img-reponsive img-thumbnail" src="/pics/intro-bg.png" alt="Some Advert" width="auto" height="auto">
					</div>
				</div>


            	<div class="col-md-4">

            		<form method="POST" action="/log_in">

            			<div class="form-horizontal">
					
						    <fieldset>
						        <legend id="employerWorkerC">SmallBoulo Login</legend>
						        <p id="loginError"></p><p id="loginSuccess"></p>

						        <div class="form-group">
						          <label for="email" class="col-sm-3 control-label">Email</label>
						          <div class="col-sm-8">
						            <input type="email" name="email" class="form-control" id="email">
						          </div>
						        </div>

						        <div class="form-group">
						          <label for="password" class="col-sm-3 control-label">Password</label>
						          <div class="col-sm-8">
						            <input type="password" name="password" class="form-control" id="password">
						          </div>
						        </div>

						        <div class="col-sm-offset-3 col-sm-8">
						          <a id="forgotPassword" href="#">Forgot your Password</a>
						        </div>

						        <div class="form-group">
									<button type="submit" class="btn btn-primary pull-right"> Log In </button>
								</div>

						    </fieldset>

						</div>

            		</form>

				</div>

				
			</div>
		</div>
	</div>


@endsection