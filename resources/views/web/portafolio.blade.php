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
                        <li><a href="#tf-home">Portada</a></li>
                        <li><a href="#tf-service">Habilidades</a></li>
                        <li><a href="#tf-portfolio">Portfolio</a></li>
                        <li><a href="#tf-about">Acerca De</a></li>
                        <li><a href="#tf-contact">Contacto</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="container">
            <div class="content">
                <h1>Rafael A. Ortega</h1>
                <h3>Ingeniero Informático</h3>
                <br>
                <a href="#tf-contact" class="btn btn-primary my-btn">Contacto</a>
                <a href="#tf-portfolio" class="btn btn-primary my-btn2">Portfolio</a>
            </div>
        </div>
    </div>
</div>

<div id="tf-service">
    <div class="container">

        <div class="col-md-4">

            <div class="media">
                <div class="media-left media-middle">
                    <i class="fa fa-motorcycle"></i>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Desarrollado Web</h4>
                    <p>Desarrollo y mantenimiento de sitios y aplicaciones web.</p>
                </div>
            </div>

        </div>

        <div class="col-md-4">

            <div class="media">
                <div class="media-left media-middle">
                    <i class="fa fa-gears"></i>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Experiencia Laboral</h4>
                    <p>
                        Ceifor Estudios®: Empresa consultora. Desarrollo de tareas para una
                        plataforma de fichajes con Laravel 6, PHP, HTML, CSS3, MySQL y Boopstrap 3.
                    </p>
                    <p>
                        Colaboración en proyecto PCsilos para el control de pesos de los silos de las granjas.
                        Desarrollo de tareas con Laravel 6, PHP, Python y MySQL.
                    </p>
                </div>
            </div>

        </div>

        <div class="col-md-4">

            <div class="media">
                <div class="media-left media-middle">
                    <i class="fa fa-heartbeat"></i>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Agile</h4>
                    <p>Agiles es mucho más que una metodología para el desarrollo de proyectos que precisan de rapidez y
                        flexibilidad, es una filosofía que supone una forma distinta de trabajar y de organizarse.
                        De tal forma que cada proyecto se 'trocea' en pequeñas partes que tienen que completarse y
                        entregarse en pocas semanas.</p>
                </div>
            </div>

        </div>

    </div>
</div>

<div id="tf-portfolio">
    <div class="container">
        <div class="section-title">
            <h3>Últimos Proyectos</h3>
            <hr>
        </div>

        <div class="space"></div>

        <div class="row toppadding">
            @foreach ($projects as $project)
                <div class="col-md-4">
                    <h4 class="media-heading">{{ $project->title }}</h4>
                    <a href="{{ route('portafolio.show', $project) }}">
                        <img src="/images/{{ $project->image }}" class="img-fluid img-thumbnail rounded-circle">
                    </a>
                    <br>
                    <br>
                </div>
            @endforeach
        </div>

    </div>
</div>

<div id="tf-about">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-6">
                    <h3>Alcance Profesional</h3>
                    <br>
                    <p>
                        Graduado de Ingeniería Informática en la Universidad de las Ciencias Informáticas (UCi), en La
                        Habana, Cuba. Cursando un Master MBA - Administración de Empresas en EUDE Business School, en
                        Madrid, España.
                    </p>
                    <p>
                        Actualmente me desempeño como desarrollador web, específicamente en el lenguaje de programación
                        PHP con su framework Laravel.
                    </p>
                    <p>
                        A lo largo de mi formación he potenciado la adaptabilidad a las necesidades de la empresa, 
                        así como el espíritu de trabajo en equipo e implicación en las tareas. Estas capacidades hacen 
                        considerarme un candidato en favor de la empresa, ofreciendo mi crecimiento profesional 
                        y el aprendizaje diario en beneficio de su mercado.
                    </p>
                    <br>
                    <a href="#tf-why-me" class="btn btn-primary my-btn dark">Habilidades</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="tf-why-me">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>Habilidades</h3>
                    <br>
                    <ul class="list-inline why-me">
                        <li>
                            <h4>Lenguajes</h4>
                            <ul>
                                <li>HTML</li>
                                <li>CSS</li>
                                <li>PHP</li>
                                <li>Python</li>
                            </ul>
                        </li>
                        <br>
                        <li>
                            <h4>Frameworks</h4>
                            <ul>
                                <li>Laravel</li>
                                <li>Bootstrap</li>
                            </ul>
                        </li>
                        <br>
                        <li>
                            <h4>Base de Datos</h4>
                            <ul>
                                <li>MySQL</li>
                                <li>PostgreSQL</li>
                            </ul>
                        </li>
                        <br>
                        <li>
                            <h4>Metodologías Ágiles</h4>
                            <ul>
                                <li>SCRUM</li>
                            </ul>
                        </li>
                    </ul>
                    <a href="#tf-contact" class="btn btn-primary my-btn dark">Contacto</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="tf-contact">
    <div class="container">
        <div class="section-title">
            <h3>Mi información de contacto</h3>
            <p>Teléfono: +34 633 19 33 11</p>
            <p>Email: raortega8906@gmail.com</p>
            <p>Puede contactar conmigo como prefiera, directamente por teléfono o email, o llenando el formulario de
                contacto y esperando a que me comunique con usted.</p>
            <hr>
        </div>

        <div class="space"></div>

            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <form id="contact" action="{{ route('mail') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Entre su nombre">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Entre su email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="4" name="message" id="message" placeholder="Mensaje"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary my-btn dark">Enviar</button>
                    </form>
                </div>
            </div>

    </div>
</div>

<nav id="tf-footer">
    <div class="container">
        <div class="pull-left">
            <p>© {{date('Y')}} Copyright: <a href="#">Rafael A. Ortega</a></p>
        </div>
        <div class="pull-right">
            <ul class="social-media list-inline">
                <li><a href="https://www.google.es/"><span class="fa fa-google"></span></a></li>
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
