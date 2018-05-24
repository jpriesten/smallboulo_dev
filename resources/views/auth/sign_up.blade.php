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

            		<form method="POST" action="/signup">
					{{ csrf_field() }}

						<div class="form-horizontal">
				
							<fieldset>
								<legend id="employerWorkerC">SmallBoulo SignUp</legend>

								<p id="signupError"></p><p id="signupSuccess"></p>

								<div class="form-group">
									<label for="firstName" class="col-sm-4 control-label">First Name</label>
									<div class="col-sm-8">
										<input type="text"  name="firstName" class="form-control" id="firstName" required>
									</div>
								</div>

								<div class="form-group">
									<label for="lastName" class="col-sm-4 control-label">Last Name</label>
									<div class="col-sm-8">
										<input type="text"  name="lastName" class="form-control" id="lastName" required> 
									</div>
								</div>

								<div class="form-group">
									<label for="birthday" class="col-sm-4 control-label">Date of Birth</label>
									<div class="col-sm-8">
										<input type="date" name="birthday" class="form-control" id="birthday">
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-4 control-label">Gender</label>
									<div class="col-sm-8">
										<select class="form-control" id="gender" name="gender">
											<option>I am a...</option>
											<option value="m">male</option>
											<option value="f">female</option>
										</select>
									</div>
								</div>

								<div class="form-group">
									<label for="country" class="col-sm-4 control-label">Country</label>
									<div class="col-sm-8">
										<input type="text" name="country" class="form-control" id="country" required>
									</div>
								</div>

								<div class="form-group">
									<label for="city" class="col-sm-4 control-label">City</label>
									<div class="col-sm-8">
										<input type="text" name="city" class="form-control" id="city" required>
									</div>
								</div>

								<div class="form-group">
									<label for="tel" class="col-sm-4 control-label">Phone Number</label>
									<div class="col-sm-8">
										<input type="text" name="tel" class="form-control" pattern="-?[0-9]*(\.[0-9]+)?" id="tel">
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-4 control-label">SignUp Type</label>
									<div class="col-sm-8">
										<select class="form-control" id="userType" name="userType" required>
											<option>I am signing up as a...</option>
											<option value="emp">employer</option>
											<option value="work">worker</option>
										</select>
									</div>
								</div>

								<div class="form-group">
									<label for="email" class="col-sm-4 control-label">Email</label>
									<div class="col-sm-8">
										<input type="email" name="email" class="form-control" id="email" required>
									</div>
								</div>

								<div class="form-group">
										<label for="password" class="col-sm-4 control-label">Password</label>
										<div class="col-sm-8">
											<input type="password" name="password" class="form-control" id="password" required>
										</div>
								</div>

								<div class="form-group">
										<label class="col-sm-4 control-label" for="password_confirmation">Confirm Password</label>
										<div class="col-sm-8">
											<input type="password" name="password_confirmation" class="form-control" id="password_confirmation" required>
										</div>
								</div>

								<div class="form-group col-sm-12">
									<p>By creating an account you agree to our <a href="#" id="employerColor">Terms & Privacy</a></p>
								</div>

								<div class="form-group">
									<button type="submit" class="btn btn-primary pull-right"> Sign Up </button>
								</div>
									
							</fieldset>

						</div>
						
						@include('layouts.errors')

            		</form>
					
				</div>

				
			</div>
		</div>
	</div>


@endsection