<?php
 include "../tools/DBconnect.php";
 $_PNAME ="Registrate";


include "../layout/header.php";


 if(isset($_POST["register"])){
        $query = "INSERT INTO `users` (`id`, `nombre`, `apellido`, `user`, `password`, `direccion`, `telefono`) VALUES (NULL, '".$_POST["name"]."', '".$_POST["lname"]."', '".$_POST["email"]."', '".$_POST["user"]."', '".$_POST["password"]."' , '999999')";
        $res = $mysqli->query($query);
        if($res){
            echo "<h1 class='text-center'> Gracias por registrarte </h1>
                      <p class='text-center'>Ya puedes acceder con tus credenciales</p>  ";
        }
        else{
            $query = 'SELECT * FROM users WHERE user LIKE "'.$_POST["email"].'"';
            if($query){

                echo "<div class=\"alert alert-danger\">
                         <strong>Error!</strong> El email indicado ya esta registrado.
                    </div>";
                include "loginForm.php";

            }
            else{
                echo "<div class=\"alert alert-danger\">
                         Error interno. Intentelo más tarde.
                    </div>";
                include "loginForm.php";
            }
        }
 }
 else{
     include  "loginForm.php";
 }
include "../layout/footer.php";
?>