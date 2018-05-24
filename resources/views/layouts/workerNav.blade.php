 <!-- Navigation -->
 <nav class="navbar navbar-default navbar-static-top topnav">
        
        <div class="container">
            
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapse" data-toggle="collapse" data-target="#position" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                   
                </button>
                <a class="navbar-brand" href="/">
                    <img alt="Brand" src="/pics/logo.jpeg" width=70px height=70px>
                </a>
            </div>
            

            <!-- Collect the nav links, forms, and other content for toggling ,go-to structure -->
            <div class="collaps navbar-collaps" id="position" >
                <ul class="nav navbar-nav navbar-right">
                    
                    @if (Auth::check())
                        <li>
                            {{ Auth::user()->firstName }}
                        </li>
                        <li>
                            <a href="/worker" id="workerSearch">Search<span class="glyphicon glyphicon-search"></span></a>
                        </li>
                        <li>
                            <a href="/worker/profile" id="workerProfile">My Profile<span class="glyphicon glyphicon-user"></span></a>
                        </li>
                        <li>
                            <a id="logoutBtn" href="/logout" class="LogOut">Log Out<span class="glyphicon glyphicon-log-out"></span></a>
                        </li>
                    @else
                        <li>
                            <a href="/worker" id="workerSearch">Search<span class="glyphicon glyphicon-search"></span></a>
                        </li>
                        <li>
                            <a id="signupL" href="/signup">Sign Up<span class="glyphicon glyphicon-globe"></span></a>
                        </li>
                        <li>
                            <a  id="loginL" href="/login">Log In<span class="glyphicon glyphicon-log-in"></span></a>
                        </li>
                    
                    @endif
                </ul>
            </div> <!-- .navbar-collapse -->   
        </div><!-- /.container -->
    </nav> <!-- naivagtion -->

    

    
