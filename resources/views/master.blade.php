<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>{{ $APP_NAME }}</title>
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:100">
        <!-- Bootstrap -->
        <link href="library/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Our main Style -->
        <link rel="stylesheet" type="text/css" href="main/style.css">
        
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="site-wrapper">
            <div class="site-wrapper-inner">
                <div class="cover-container">
                    <div class="masthead clearfix">
                        <div class="inner">
                            <h3 class="masthead-brand">FGU</h3>
                            <nav>
                                <ul class="nav masthead-nav">
                                    <li class="active"><a href="#">Home</a></li>
                                    <li><a href="#">Synopsis</a></li>
                                    <li><a href="#">Casts</a></li>
                                    <li><a href="#">Behind The Scene</a></li>
                                    <li><a href="#">Events</a></li>
                                    <li><a href="#">Crew</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    @yield('content')

                    <div class="mastfoot">
                        <div class="inner">
                            <p>Copyright FilmGetUpStandUp.com &copy;2015</p>
                        </div>
                    </div>

                </div>

            </div>

        </div>
        
        <script src="library/jquery/jquery-1.11.3.min.js"></script>
        <script src="library/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>

