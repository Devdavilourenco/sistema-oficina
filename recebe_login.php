<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <meta charset="UTF-8"> <!-- comment -->
        <title>Exibir Clientes</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    
     <script><!-- comment -->
        function ok() {
            setTimeout("window.location='index.php'", 2000);                
        }

                function erro() {
               setTimeout("window.location='login.php'", 2000);
               }

    </script>  

    
    
    
    </head>
    <body>






<?php

include './conexao.php';
$email = $_POST['email'];
$senha = $_POST['senha'];

$resultado = $conn->query("SELECT * FROM usuario WHERE
 email='$email' and senha='$senha'");

if (mysqli_num_rows($resultado) > 0) {
    session_start();
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['senha'] = $_POST['senha'];
    echo "Você foi logado!!";
    echo "<script>ok() </script>";
    echo "<img src='gif/carregando.gif'>";

    
} else {
    echo "Logine  senha incorretos!!";
    echo "<script> erro()</script>";
    echo "<center><img src='gif/carregando.gif'></center>";

}

?>
        




     </body>
    </html>


