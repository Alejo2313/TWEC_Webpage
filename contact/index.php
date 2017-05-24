
<?php
$_PNAME ="Contacto";
$_ACTIVE = "/contact";

include "../layout/header.php";

if(isset($_REQUEST["send"])) {
    ini_set("display errors", "on");
    error_reporting(E_ALL, E_STRICT);


    $error = false;

    $name = $_REQUEST["name"];
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $email = $_REQUEST["email"];
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $query = $_REQUEST["query"];
    $query = filter_var($query, FILTER_SANITIZE_STRING);
    $title = $_REQUEST["title"];
    $title = filter_var($title, FILTER_SANITIZE_STRING);
    $content = $_REQUEST["content"];
    $content = filter_var($content, FILTER_SANITIZE_STRING);
    $file = "foto";
    $addr = "/tmp/upload/";


    if (!empty($name) && !empty($email) && !empty($query) && !empty($title) && !empty($content)) {

        $header = "From: " . $name . "<" . $email . ">";
        mail("agomezmo16@outlook.es", $title, $content, $header);

        include "Gracias.php";
    } else {
        echo "<div class=\"alert alert-danger\">
                         Error al procesar la petición. Inténtelo más tarde.
                    </div>";
        include "contacForm.php";

    }
}
else{
    include "contacForm.php";
}
include "../layout/footer.php";

?>