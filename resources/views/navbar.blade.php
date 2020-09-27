<nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collaps\e" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">K17 WIBI</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                
                <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="/">Home</a></li>
                        <!-- contact  -->
                 <li><a href="/admin/posts/create">Reservation</a></li> 
                        <!-- blog -->
                <li><a href="/admin/posts">Reservation History</a></li>
                <li><a href="/about">About</a></li>
                       
                <li class="dropdown"> 
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Member <span class="caret"></span></a> 
                    <ul class="dropdown-menu" role="menu"> 
                        <!-- <li><a href="/register">Register</a></li> 
                        <li><a href="/users/login">Login</a></li>
                        <li><a href="/users/logout">Logout</a></li>   -->
                        @if (Auth::check()) 
                            @if(Auth::user()->hasRole('admin')) 
                                <li><a href="/admin">Admin</a></li> 
                            @endif <li><a href="/users/logout">Logout</a></li> 
                        @else
 
                        <li><a href="/register">Register</a></li> 
                        <li><a href="/login">Login</a></li> 
                        @endif
                    </ul> 
                </li> 
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
