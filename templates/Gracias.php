<?php
ini_set("display errors", "on");
error_reporting(E_ALL, E_STRICT);



$error = false;

$name = $_REQUEST["name"];
    $name = filter_var($name,FILTER_SANITIZE_STRING);
$email = $_REQUEST["email"];
    $email = filter_var($email,FILTER_SANITIZE_EMAIL);
$query = $_REQUEST["query"];
    $query = filter_var($query,FILTER_SANITIZE_STRING);
$title = $_REQUEST["title"];
    $title = filter_var($title,FILTER_SANITIZE_STRING);
$content = $_REQUEST["content"];
    $content = filter_var($content,FILTER_SANITIZE_STRING);
$file ="foto";
$addr = "/tmp/upload/";



if(!empty($name)&&!empty($email)&&!empty($query)&&!empty($title)&&!empty($content)){

        $header = "From: " . $name . "<". $email .">";
        mail("agomezmo16@outlook.es", $title, $content, $header);
        $message = "todo ok, enviado por: " .$email;
        echo "<script type='text/javascript'>alert('$message');</script>";

}
else {
    $error = true;
    echo "<script type='text/javascript'>alert('content error');</script>";

}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dr. Computer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/css_main.css">
    <link rel="stylesheet" href="css/css_colors.css">
    <meta http-equiv="refresh" content="3;url=http://www.doctorcomputer.ga/" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/js-control.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header class=" hidden-xs">
    <div class="jumbotron" id="jumbotron">
        <div class="container text-center">
            <h1>Dr. Computer</h1>
            <p>El mejor servicio al alcance de tu mano (y de tu bolsillo)</p>
        </div>
    </div>
</header>
<!--Navegador-->

<div id="nav">
    <nav class="navbar navbar-default" id="nb">
        <div class="container-fluid">
            <div class="navbar-header col-sm-2">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand"><span>Dr.Computer</span></a>
            </div>

            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="#">Home</a></li>
                    <li><a href="">Servicio</a></li>
                    <li><a href="">Tienda</a></li>
                    <li><a href="">About</a></li>
                    <li class="active"><a href="/contacto/">Contacto</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user "></span><span class="hidden-sm"> Entra o registrate</span></a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-shopping-cart "></span> <span class="hidden-sm">Mi carrito</span></a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<section>

    <h1 class="text-center">GRACIAS POR CONTACTAR</h1>
    <p class="text-center">en breves momentos volvera a la pagina principal, de no se así, haga click <a href="">aquí</a> </p>


</section>



<footer class="hidden-sm">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <h4>Contacta</h4>
                <p><span class="blod">Tel: </span> +34 722503575</p>
                <p><span class="blod">Email: </span> a.gomezm@alumnos.upm.es</p>
                <p><span class="blod">Skype: </span> prueba123</p>
            </div>
            <div class="col-md-4">
                <h4>Siguenos!</h4>
                <p><span class="fa fa-facebook" style="font-size:48px;">      </span><span class="fa fa-instagram" style="font-size:48px;">  </span> <span class="fa fa-youtube" style="font-size:48px;"></span> </p>
            </div>
            <div class="col-md-4">
                <h4>Cosas aburridas</h4>
                <p>Copyrigth 2017, esta es mi pagina, mis contenidos, mis reglas!</p>
            </div>
        </div>
    </div>
</footer>
</body>
</html>