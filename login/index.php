<?php
session_start();
$_PNAME ="Accede";
$_ACTIVE ="/login";

include "../tools/DBconnect.php";

function verificar_login($user,$password,&$result , &$mysqli) {
    $query = 'SELECT * FROM users WHERE user LIKE "'.$user.'"and password ="'.$password.'"';
    $Qresult=$mysqli->query($query);
    $rows = $Qresult->num_rows;
    if($rows == 1)
    {
        $result = $Qresult->fetch_assoc();

        return 1;
    }
    else
    {
        return 0;
    }
}


if(!isset($_SESSION['userid'])) {
    if (isset($_POST['login'])) {
        if (verificar_login($_POST['user'], $_POST['password'], $result,  $mysqli) == 1) {
            $_SESSION['userid'] = $result["id"];
            header("location: / ");

        } else {
            include "../layout/header.php";

            echo "<div class=\"alert alert-danger\">
                         Usuario o contraseña no validos
                    </div>";
            include "loginerror.php";
            include "../layout/footer.php";

        }
    }
    else{
        include "../layout/header.php";
        include "loginerror.php";
        include "../layout/footer.php";

    }
}
else{
    if(isset($_POST["logout"])){
        session_destroy();
    }
    header("location: /");

}

?>



