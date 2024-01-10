<!doctype html>
<html lang="en">
<head>
    <title>Mi caja fuerte</title>
    <meta charset=”utf-8”/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <form action="" method="post">
    Adivina <input type="text" name="intento">
    <input type="submit" value="probar">
</form>
</body>
</html>

<?php
/* Caja fuerte:
-5 intentos para abrirla
-ir enseñando al usuario los intentos restantes
-si acierta la combinacion ponerle "alohomora!" */

session_start();

if(count($_POST)==0)
$_SESSION["intentos"]=5;

$contraseña="hola";

if($_SESSION["intentos"]<=5 && $_SESSION["intentos"]>0){
    $_SESSION["intentos"]--;
    if($contraseña==$_POST["intento"]){
        echo "ALOHOMORA!";
    }else{
        echo "INCORRECTO: Te quedan " . $_SESSION["intentos"] . " intentos";
    } 
}else{
    echo "HAS PERDIDO :(";
}
?>