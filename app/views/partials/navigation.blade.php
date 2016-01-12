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
                <a class="navbar-brand" href="{{{ action('HomeController@showWelcome')}}}">The J Blog</a>
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
                        <a href="{{{ action('PostsController@create')}}}">Create</a>
                    </li>
                    <li>
                        <a href="{{{ action('HomeController@showContact')}}}">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>