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
                <a class="navbar-brand" href="#">Learning Laravel</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <!-- <ul class="nav navbar-nav">
                <li class="active"><a href="#">Link <span class="sr-only">(current)</spa\n></a></li>
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="butto\n" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
                </ul>
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form> -->
                <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="/">Home</a></li>
                <li><a href="/blog">Blog</a></li> 
                <li><a href="/about">About</a></li> 
                <li><a href="/contact">Contact</a></li> 
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
