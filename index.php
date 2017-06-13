<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Equipos de seguridad</title>
    <style type="text/css">
    *{
        padding:0px;
        margin:0px;
    }
    #header {
        margin:auto;
        width:500px;
        font-family:Arial, Helvetica, sans-serif;
    }

    ul, ol {
        list-style:none;
    }

    .nav li a {
        background-color:#0000;
        color:#fff;
        text-decoration:none;
        padding:10px 15px;
        display:block;
    }

    .nav li a:hover {
        background-color:434343;
    }



    .nav li ul {
        display:none;
        position:absolute;
        min-width:140px;
    }
    .nav li:hover > ul {
        display:block;
    }
    nav.navbar {
    background-color:#FFFF00;
}
    /*AQUI EMPIEZA UN DESMADRE */
    .social {
    position: fixed; /* Hacemos que la posición en pantalla sea fija para que siempre se muestre en pantalla*/
    right: 0; /* Establecemos la barra en la izquierda */
    top: 200px; /* Bajamos la barra 200px de arriba a abajo */
    z-index: 2000; /* Utilizamos la propiedad z-index para que no se superponga algún otro elemento como sliders, galerías, etc */
}
 
    .social ul {
        list-style: none;
    }
 
    .social ul li a {
        display: inline-block;
        color:#fff;
        background: #000;
        padding: 10px 15px;
        text-decoration: none;
        -webkit-transition:all 500ms ease;
        -o-transition:all 500ms ease;
        transition:all 500ms ease; /* Establecemos una transición a todas las propiedades */
    }
 
    .social ul li .icon-facebook {background:#3b5998;} /* Establecemos los colores de cada red social, aprovechando su class */
    .social ul li .icon-twitter {background: #00abf0;}
    .social ul li .icon-googleplus {background: #d95232;}
    .social ul li .icon-pinterest {background: #ae181f;}
    .social ul li .icon-mail {background: #666666;}
 
    .social ul li a:hover {
        background: #000; /* Cambiamos el fondo cuando el usuario pase el mouse */
        padding: 30px 15px; /* Hacemos mas grande el espacio cuando el usuario pase el mouse */
    }
    /*AQUI TERMINA EL DESMADRE*/
    </style>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>



<script src="js/jquery.js"></script>
<script src="js/jquery.dataTables.min.js"></script>



    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
    <![endif]-->

</head>

<body id="page-top" class="Index" background="fondo.jpg">
    <!-- Navigation --><nav class="navbar">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    <a class="navbar-brand" role="button" href="galeria.php"> <font size ="6" color="Black">Galeria </font> </a>
      <a class="navbar-brand" href="#"> <font size ="6" color="Black">Logo </font> </a>
      <a class="navbar-brand" data-target="#clima" data-toggle="modal" href="#clima"> <font size ="6" color="Black">Clima </font></a>
    </div>
   
    
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><font size ="6" color="Black"> Catalogos </font> <span class="caret"></span></a>
          <ul class="dropdown-menu">

            <li><a data-target="#portfolioModal1" data-toggle="modal" href="#portfolioModal1"> <font size ="4" color="Black">Proteccion para la cabeza</font> </a></li>
            
            <li><a data-target="#portfolioModal2" data-toggle="modal" href="#portfolioModal2"> <font size ="4" color="Black">Proteccion para las manos</font></a></li>
            
            <li><a data-target="#portfolioModal3" data-toggle="modal" href="#portfolioModal3"> <font size ="4" color="Black">Proteccion respiratoria</font> </a></li>
            
            <li><a data-target="#portfolioModal4" data-toggle="modal" href="#portfolioModal4"> <font size ="4" color="Black">Proteccion lumbar</font> </a></li>
            
            <li><a data-target="#portfolioModal5" data-toggle="modal" href="#portfolioModal5"> <font size ="4" color="Black">Proteccion visual</font> </a></li>
            
            <li><a data-target="#portfolioModal6" data-toggle="modal" href="#portfolioModal6"> <font size ="4" color="Black">Proteccion facial</font> </a></li>
          </ul>
        </li>
      </ul>

    </div><!-- /.navbar-collapse -->

  </div><!-- /.container-fluid -->
</nav>
    <!-- Header -->
    <header>

        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">COBA </div>
                <h3>Suministros de Seguridad</h3>

            </div>
        </div>
    </header>

<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright"> <font color="white">Copyright &copy; Casa La Tamo 2017</font></span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-envelope"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#"> <font color="White" size="4"> Politica de privacidad</font></a>
                        </li>
                        <li><a href="#"> <font color="White" size="4"> Terminos de uso </font></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>



 <div class="portfolio-modal modal fade" id="clima" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="modal-body">

                    <h1 id= "clim" class="intro-text text-center" >El CLIMA</h1>

                        <form action="#buscador" method="get">
                        <input type="text" name="palabra">
                        <input type="submit" placeholder="Buscar..." name="buscador" value="Buscar">
                        </form>

                        <?php 
                        $temperatura = ['0'];
                        $presion = ['0'];
                        $humedad = ['0'];
                        if ($_GET['buscador'])
                        {

                        $buscar = $_GET['palabra'];

                        if (empty($buscar))
                        {
                        echo "No se ha ingresado ninguna palabra";
                        }
                        else
                        {
                            $xml = simplexml_load_file("http://api.openweathermap.org/data/2.5/find?q=$buscar,&units=mexico&type=accurate&mode=xml&APPID=1604e5ecb495faebb678edacb59ffb16");
                            $temperatura = $xml->list->item->temperature["value"];
                            $presion = $xml->list->item->pressure["value"];
                            $humedad = $xml->list->item->humidity["value"];
                            $Coordenadas = $xml->list->item->city->coord["lon"];
                            $Nombre = $xml->list->item->city["name"];
                            $precipitacion = $xml->list->item->precipitation["mode"];
                            }

                        }
                            ?>
                            <ul>
                            <li>Temperatura :
                            <?php echo($temperatura); ?> &deg;F
                            </li>
                            <li>Presion:
                            <?php echo($presion); ?> hPa
                            </li>
                            <li>Humedad :
                            <?php echo($humedad); ?>%
                            </li>
                            <li>Coordenadas :
                            <?php echo($Coordenadas); ?>
                            </li>
                            <li>Precipitacion :
                            <?php echo($precipitacion); ?>
                            </li>
                            </ul>

<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




 <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Proteccion para la cabeza</h2>
                                        <section id="portfolio" class="bg-light-gray">
                                            <div class="container">

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <a href="#" class="portfolio-link" data-toggle="modal">

                                                            <img src="img/portfolio/Proteccion para la cabeza/1.png" height="200" width="150"  alt="">
                                                        </a>
                                                        <div class="portfolio-caption">
                                                            <h4>Casco Model XJ9</h4>
                                                            <h5>$200</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href="#" class="portfolio-link" data-toggle="modal">

                                                            <img src="img/portfolio/Proteccion para la cabeza/2.png" height="200" width="150"  alt="">
                                                        </a>
                                                        <div class="portfolio-caption">
                                                            <h4>Casco Negro 2B</h4>
                                                            <h5>$200</h5>
                                                        </div>
                                                  </div>
                                                    <div class="col-md-4">
                                                        <a href="#" class="portfolio-link" data-toggle="modal">

                                                            <img src="img/portfolio/Proteccion para la cabeza/3.png" height="200" width="150" alt="">
                                                        </a>
                                                        <div class="portfolio-caption">
                                                            <h4>Casco Amarillo</h4>
                                                            <h5>$200</h5>

                                                        </div>
                                                    
                                                    </div>
                                                </div>
                                                </div>
                                         
                                        </section>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="modal-body">
                                <h2>Proteccion para las manos</h2>
                                        <section id="portfolio" class="bg-light-gray">
                                            <div class="container">

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <a href="#" class="portfolio-link" data-toggle="modal">

                                                            <img src="img/portfolio/Proteccion para las manos/1.png" height="200" width="150"  alt="">
                                                        </a>
                                                        <div class="portfolio-caption">
                                                            <h4>Gloves Model X911</h4>
                                                            <h5>$200</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href="#" class="portfolio-link" data-toggle="modal">

                                                            <img src="img/portfolio/Proteccion para las manos/2.png" height="200" width="150"  alt="">
                                                        </a>
                                                        <div class="portfolio-caption">
                                                            <h4>Gloves Pro 612</h4>
                                                            <h5>$200</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href="#" class="portfolio-link" data-toggle="modal">

                                                            <img src="img/portfolio/Proteccion para las manos/3.png" height="200" width="150" alt="">
                                                        </a>
                                                        <div class="portfolio-caption">
                                                            <h4>Gloves 612</h4>
                                                            <h5>$200</h5>

                                                        </div>
                                                    
                                                    </div>
                                                </div>
                                                </div>
                                         
                                        </section>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Proteccion respiratoria</h2>
                                        <section id="portfolio" class="bg-light-gray">
                                            <div class="container">

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <a href="#" class="portfolio-link" data-toggle="modal">

                                                            <img src="img/portfolio/Proteccion respiratoria/1.png" height="200" width="150"  alt="">
                                                        </a>
                                                        <div class="portfolio-caption">
                                                            <h4>Mask KJ293</h4>
                                                            <h5>$200</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href="#" class="portfolio-link" data-toggle="modal">

                                                            <img src="img/portfolio/Proteccion respiratoria/2.png" height="200" width="150"  alt="">
                                                        </a>
                                                        <div class="portfolio-caption">
                                                            <h4>Mask WS23</h4>
                                                            <h5>$200</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href="#" class="portfolio-link" data-toggle="modal">

                                                            <img src="img/portfolio/Proteccion respiratoria/3.png" height="200" width="150" alt="">
                                                        </a>
                                                        <div class="portfolio-caption">
                                                            <h4>Mask AS123</h4>
                                                            <h5>$200</h5>

                                                        </div>
                                                    
                                                    </div>
                                                </div>
                                                </div>
                                         
                                        </section>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Proteccion lumbar</h2>
                                        <section id="portfolio" class="bg-light-gray">
                                            <div class="container">

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <a href="#" class="portfolio-link" data-toggle="modal">

                                                            <img src="img/portfolio/Proteccion lumbar/1.png" height="200" width="150"  alt="">
                                                        </a>
                                                        <div class="portfolio-caption">
                                                            <h4>Faja X21J9</h4>
                                                            <h5>$200</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href="#" class="portfolio-link" data-toggle="modal">

                                                            <img src="img/portfolio/Proteccion lumbar/2.png" height="200" width="150"  alt="">
                                                        </a>
                                                        <div class="portfolio-caption">
                                                            <h4>Faja 0420LM</h4>
                                                            <h5>$200</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href="#" class="portfolio-link" data-toggle="modal">

                                                            <img src="img/portfolio/Proteccion lumbar/3.png" height="200" width="150" alt="">
                                                        </a>
                                                        <div class="portfolio-caption">
                                                            <h4>Faja KJK41</h4>
                                                            <h5>$200</h5>

                                                        </div>
                                                    
                                                    </div>
                                                </div>
                                                </div>
                                         
                                        </section>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Proteccion visual</h2>
                                        <section id="portfolio" class="bg-light-gray">
                                            <div class="container">

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <a href="#" class="portfolio-link" data-toggle="modal">

                                                            <img src="img/portfolio/Proteccion visual/1.png" height="200" width="150"  alt="">
                                                        </a>
                                                        <div class="portfolio-caption">
                                                            <h4>Visor 6KJ2</h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href="#" class="portfolio-link" data-toggle="modal">

                                                            <img src="img/portfolio/Proteccion visual/2.png" height="200" width="150"  alt="">
                                                        </a>
                                                        <div class="portfolio-caption">
                                                            <h4>Lentes Secure Pro</h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href="#" class="portfolio-link" data-toggle="modal">

                                                            <img src="img/portfolio/Proteccion visual/3.png" height="200" width="150" alt="">
                                                        </a>
                                                        <div class="portfolio-caption">
                                                            <h4>Lentes LKM420</h4>

                                                        </div>
                                                    
                                                    </div>
                                                </div>
                                                </div>
                                         
                                        </section>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Proteccion facial</h2>
                                        <section id="portfolio" class="bg-light-gray">
                                            <div class="container">

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <a href="#" class="portfolio-link" data-toggle="modal">

                                                            <img src="img/portfolio/Proteccion facial/1.png" height="200" width="150"  alt="">
                                                        </a>
                                                        <div class="portfolio-caption">
                                                            <h4>Mascarilla Yellow KL4</h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href="#" class="portfolio-link" data-toggle="modal">

                                                            <img src="img/portfolio/Proteccion facial/2.png" height="200" width="150"  alt="">
                                                        </a>
                                                        <div class="portfolio-caption">
                                                            <h4>Mascarilla Pro KLMN</h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href="#" class="portfolio-link" data-toggle="modal">

                                                            <img src="img/portfolio/Proteccion facial/3.png" height="200" width="150" alt="">
                                                        </a>
                                                        <div class="portfolio-caption">
                                                            <h4>Mascarilla Auto-M8</h4>

                                                        </div>
                                                    
                                                    </div>
                                                </div>
                                                </div>
                                         
                                        </section>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    <script src="js/buscador.js"></script>
    <script src="js/autocompletado.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>

</body>

</html>
