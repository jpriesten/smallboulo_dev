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
                  <div class="jumbotron" style="background-color:#397539;" >

                    <form class="role" method="POST" action="/posts">
                      {{ csrf_field() }}

                      <div class="form-horizontal">

                        <div class="form-group">
                          <label for="job category" class="col-sm-2 control-label"> job category </label>
                          <div class="col-sm-8">
                            <select class="form-control" name="userSkill" >
                              <option> Carpenter </option>
                              <option> Gardener </option>
                              <option> Electrician </option>
                              <option> Plumber </option>
                              <option> House Teacher </option>
                              <option> Farm Worker </option>
                              <option> Painter </option>
                              <option> Brick Layer </option>
                              <option> Builder </option>
                            </select>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="job category" class="col-sm-2 control-label"> job location </label>
                          <div class="col-sm-8">
                            <select class="form-control" name="jobLocation">
                                <option > Buea-molyko </option>
                                <option > Buea-boukwango</option>  
                                <option > Buea-class-quarters </option>
                                <option > Buea-town </option>
                                <option > Buea-muea </option>                     
                                <option > mile 16 </option>
                                <option > mutengene </option>
                                <option > tiko </option>
                            </select>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="descriptions" class="col-sm-2 control-label"> Description </label>
                          <div class="col-sm-8"> 
                            <textarea class="form-control" placeholder="enter some details about the job you offer" name="toDo" ></textarea>
                          </div>
                        </div>    
                        
                        <div class="form-group">
                          <label for="experience" class="col-sm-2 control-label">Experience Level</label>
                          <div class="col-sm-8">
                            <input type="number" name="experience" class="form-control" id="experience" placeholder="0-4" >
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="start" class="col-sm-2 control-label">Start Date</label>
                          <div class="col-sm-8">
                            <input type="date" name="start" class="form-control" id="start" >
                          </div>
                        </div>

                        <div class="form-group">
                            <label for="date" class="col-sm-2 control-label"> Application Deadline </label>
                            <div class="col-sm-8">
                              <input type="date" name="deadline" class="form-control" >
                            </div>
                        </div>

                        <div class="form-group">
                          <label for="priceRange" class="col-sm-2 control-label">Price Range</label>
                          <div class="col-sm-8">
                            <input type="number" name="priceRange" class="form-control" id="priceRange" placeholder="0.0 XFA - 60000 XFA" >
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="noOfWorkers" class="col-sm-2 control-label">Number of Workers Needed</label>
                          <div class="col-sm-8">
                            <input type="number" name="noOfWorkers" class="form-control" id="noOfWorkers" placeholder="1" >
                          </div>
                        </div>
                        
                      </div> <!-- end of horizontal form -->

                      @include('layouts.errors')


                      <div class="form-group">
                        <button class="btn btn-success pull-right" type="submit"> POST </button>
                      </div>

                      <div class="form-group">
                        <button class="btn btn-default pull-left" id="cancel"> CANCEL </button>
                      </div>

                    </form>
                  </div> <!-- closing jumbotron -->  
              
                </div>  <!-- closing the dashboard -->
                

                 
            </div>
        </div>

    </div>

@endsection
	  	
