<!doctype html>
<html lang="en">
<head>
    <title>Mi primer formulario sin warnings</title>
    <meta charset=”utf-8”/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <form action="" method="post">
    password <input type="text" name="pass">
    <input type="submit" value="enviar">
</body>
</html>

<?php
$pasw="madrid";

if(isset($_POST["pass"])){
    if ($pasw=$_POST["pass"]==$pasw)
        header("Location : index.php");
    die();
}
    
?>