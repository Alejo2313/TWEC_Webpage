<?php
session_start();
include "tools/DBconnect.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php
            echo $_PNAME;
        ?></title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/css_form.css">
    <link rel="stylesheet" href="/css/css_main.css">
    <link rel="stylesheet" href="/css/css_colors.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="/js/js-control.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
         <?php  echo  '$("li:has(a[href=\''.$_ACTIVE.'\'])").addClass("active");' ;

            ?>
        });
    </script>

</head>
<body>
<!-- Header --> <!--finished 20/05/17 -->
<header>
    <div class="container">
        <div class="row">
            <div class="brand-title col-md-4 col-sm-12 col-xs-12 "><a href="/" ><span class="doctor">Dr.</span> Computer </a> </div>
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
                    <li><a href="/">Home</a></li>
                    <li><a href="/services">Servicio</a></li>
                    <li><a href="/shop">Tienda</a></li>
                    <li><a href="/about">About</a></li>
                    <li ><a href="/contact">Contacto</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <!-- menu login "https://bootsnipp.com/snippets/featured/fancy-navbar-login-sign-in-form" --> <!-- last update 20/05/17 -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="login"><span class="glyphicon glyphicon-user "></span><span class="hidden-sm"> Entra o registrate</span></a>
                        <ul id="login-menu" class="dropdown-menu hidden-xs">
                            <li>
                                <div class="row">
                                    <div class="col-md-12">
                                        <form class="form" role="form" method="POST" action="/login/index.php" accept-charset="UTF-8" id="login-form">
                                            <?php if(!isset($_SESSION['userid'])){ ?>
                                                INICIA SESIÓN
                                                <div class="form-group">
                                                    <input name="user" type="email" class="form-control" id="InputEmail" placeholder="Correo electrónico" required>
                                                </div>
                                                <div class="form-group">
                                                    <input name="password" type="password" class="form-control" id="InputPassword" placeholder="Password" required>
                                                    <div class="text-right"><a href="/comming">¿Contaseña olvidada?</a></div>
                                                </div>
                                                <div class="form-group">
                                                    <input name="login" type="submit" tabindex="4" class="form-control btn btn-login" value="login">
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input name="remember" type="checkbox"> recordarme
                                                    </label
                                                </div>
                                            <?php }
                                            else{ ?>
                                                <p>bienvenido</p>
                                                <div><input name="logout" type="submit" value="logout"></div>
                                            <?php } ?>
                                        </form>
                                    </div>
                                    <div class="bottom text-center">
                                        ¿Eres nuevo ? <a href="/login/register.php"><b> ¡Registrate!</b></a>
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