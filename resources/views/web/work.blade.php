<!DOCTYPE html>
<html lang="en">
<head>
    {{--  Basic Page Needs
    ==================================================  --}}
    <meta charset="utf-8">
    {{-- <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9"/><![endif]--> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mi Portafolio - Rafael A. Ortega</title>
    <meta name="description" content="Your Description Here">
    <meta name="keywords" content="bootstrap themes, portfolio, responsive theme">
    <meta name="author" content="ThemeForces.Com">

    {{--  Favicons
    ==================================================  --}}
    <link rel="shortcut icon" href="/awesomess/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="/awesomess/img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/awesomess/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/awesomess/img/apple-touch-icon-114x114.png">

    {{--  Bootstrap  --}}
    <link rel="stylesheet" type="text/css" href="/awesomess/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/awesomess/fonts/font-awesome/css/font-awesome.css">

    {{--  Stylesheet
    ==================================================  --}}
    <link rel="stylesheet" type="text/css" href="/awesomess/css/style.css">
    <link rel="stylesheet" type="text/css" href="/awesomess/css/responsive.css">

    <script type="text/javascript" src="/awesomess/js/modernizr.custom.js"></script>

    <link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700,100,800,900,400,200,300' rel='stylesheet'
          type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>

    {{-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries --}}
    {{-- WARNING: Respond.js doesn't work if you view the page via file://
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]--> --}}
</head>
<body>
<div id="tf-home">
    <div class="overlay">
        <div id="sticky-anchor"></div>
        <nav id="tf-menu" class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand logo" href="/">Mi Portafolio</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/#tf-home">Portada</a></li>
                        <li><a href="/#tf-service">Habilidades</a></li>
                        <li><a href="/#tf-portfolio">Portfolio</a></li>
                        <li><a href="/#tf-about">Acerca De</a></li>
                        <li><a href="/#tf-contact">Contacto</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="container">
            <div class="content">
                <h1>{{ $project->title }}</h1>
                <a href="{{ $project->url_clean }}">
                    <h3>Visitar el sitio</h3>
                </a>
                <br><br><br><br><br>
            </div>
        </div>
    </div>
</div>

<div id="tf-service">
    <div class="container">

        <div class="col-md-12">

            <div class="media">
                <div class="col-md-4 media-left media-middle">
                <a href="/images/{{ $project->image }}">
                    <img src="/images/{{ $project->image }}" class="img-responsive">
                </a>
                </div>
                <br>
                <div class="media-body">
                    <h4 class="media-heading">Contenido:</h4>
                    <p>
                        {!! $project->content !!}
                    </p>
                </div>
            </div>

        </div>

    </div>
</div>

<nav id="tf-footer">
    <div class="container">
        <div class="pull-left">
            <p>© {{date('Y')}}: <a href="#">Rafael A. Ortega</a></p>
        </div>
        <div class="pull-right">
            <ul class="social-media list-inline">
                <li><a href="https://twitter.com/raortega8906"><span class="fa fa-twitter"></span></a></li>
                <li>
                   <a href="https://www.instagram.com/rafa_ortega89/"><span class="fa fa-instagram"></span></a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/in/rafael-a-ortega-valderrama-ab7a1aa8/">
                        <span class="fa fa-linkedin"></span>
                    </a>
                </li>
                <li><a href="https://github.com/raortega8906"><span class="fa fa-github"></span></a></li>
            </ul>
        </div>
    </div>
</nav>


{{--  jQuery (necessary for Bootstrap's JavaScript plugins)   --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="/awesomess/js/jquery.1.11.1.js"></script>
{{-- Include all compiled plugins (below), or include individual files as needed --}}
<script type="text/javascript" src="/awesomess/js/bootstrap.js"></script>

{{-- Javascripts
================================================== --}}
<script type="text/javascript" src="/awesomess/js/main.js"></script>

</body>
</html>
