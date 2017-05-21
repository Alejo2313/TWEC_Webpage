<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php
            if($_GET["page"] == ""){
                echo "Dr. Computer";
            }
            else{
                echo $_GET["page"];
            }
        ?></title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/css_main.css">
    <link rel="stylesheet" href="css/css_colors.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/js-control.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- Header --> <!--finished 20/05/17 -->
   <header>
       <div class="container">
           <div class="row">
             <div class="brand-title col-md-4 col-sm-12 col-xs-12 "><a href="./" ><span class="doctor">Dr.</span> Computer </a> </div>
             <div class="left-text col-md-4 col-md-offset-4 col-sm-12 hidden-xs"> Porque la calidad no se improvisa</div>
           </div>
       </div>
   </header>

    <!--Navigator-->
   <div id="nav">
        <nav class="navbar navbar-default" id="nb">
            <div class="container-fluid" id="navContainer">
                <div class="navbar-header col-sm-2 hidden-md">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="./?page=Inicio">Home</a></li>
                        <li><a href="./?page=Servicios">Servicio</a></li>
                        <li><a href="./?page=Tienda">Tienda</a></li>
                        <li><a href="./?page=About">About</a></li>
                        <li ><a href="./?page=Contacto">Contacto</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <!-- menu login "https://bootsnipp.com/snippets/featured/fancy-navbar-login-sign-in-form" --> <!-- last update 20/05/17 -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="login"><span class="glyphicon glyphicon-user "></span><span class="hidden-sm"> Entra o registrate</span></a>
                            <ul id="login-menu" class="dropdown-menu hidden-xs">
                                <li>
                                    <div class="row">
                                        <div class="col-md-12">
                                            INICIA SESIÓN
                                            <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-form">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" id="InputEmail" placeholder="Correo electrónico" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" class="form-control" id="InputPassword" placeholder="Password" required>
                                                    <div class="text-right"><a href="">¿Contaceña olvidada?</a></div>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary btn-block">INICIA SESIÓN</button>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox"> recordarme
                                                    </label>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="bottom text-center">
                                            ¿Eres nuevo ? <a href="#"><b> ¡Registrate!</b></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart "></span> <span class="hidden-sm">Mi carrito</span></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>



   <!-- Seccion principal -->
    <section>
        <?php
        $req = "templates/{$_GET["page"]}.php";
        if($req == "templates/.php"){
            $req = "templates/Inicio.php";
        }
        include $req ?>
    </section>

    <!-- Pie de página -->
    <footer class="hidden-xs">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4">
                    <h4>Contacta</h4>
                    <p><span class="blod">Tel: </span> +34 722503575</p>
                    <p><span class="blod">Email: </span> a.gomezm@alumnos.upm.es</p>
                    <p><span class="blod">Skype: </span> prueba123</p>
                </div>
                <div class="col-sm-4">
                    <h4>Siguenos!</h4>
                    <p><span class="fa fa-facebook" style="font-size:48px;">      </span><span class="fa fa-instagram" style="font-size:48px;">  </span> <span class="fa fa-youtube" style="font-size:48px;"></span> </p>
                </div>
                <div class="col-sm-4">
                    <h4>Cosas aburridas</h4>
                    <p>Copyrigth 2017, esta es mi pagina, mis contenidos, mis reglas!</p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>