 

 <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="{{{ action('HomeController@showWelcome')}}}">beSpoke</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{{ action('HomeController@showResume')}}}">Resume</a>
                    </li>
                    <li>
                        <a href="{{{ action('HomeController@showPortfolio')}}}">Portfolio</a>
                    </li>
                    <li>
                        <a href="{{{ action('PostsController@index')}}}">Blog</a>
                    </li>
                    <li>
                        <a href="{{{ action('HomeController@showContact')}}}">Contact</a>
                    </li>
                    <li>
                        @if(Auth::check())
                        <a href="{{{ action('PostsController@create')}}}">Create</a>
                        @endif
                    </li>
                    <li>
                        @if(!Auth::check())
                        <a href="{{{ action('HomeController@getLogin')}}}">Login</a>
                        @else
                        <a href="{{{ action('HomeController@getLogout')}}}">Logout</a>
                        @endif
                    </li>
                </ul>
                    <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-default">
                                <span class="glyphicon glyphicon-search">
                                    <span class="sr-only">Search...</span>
                                </span>
                            </button>
                        </span>
                    </div>
                </form>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>