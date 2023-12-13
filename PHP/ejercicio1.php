<!doctype html>
<html lang="en">
<head>
    <title>Mi primer formulario</title>
    <meta charset=”utf-8”/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <form action="" method="post">
    Nombre <input type="text" name="nombre">
    Edad <input type="text" name="edad">
    <input type="submit" value="enviar">
</body>
</html>

<?php
//Crear un formulario con post que pinte en el html la siguiente frase: -Mi nombre es XXX y tengo XXX años
if(count($_POST)!=0)   
    echo "Mi nombre es " . $_POST["nombre"] . " y tengo " . $_POST["edad"] . " años";
    
?>