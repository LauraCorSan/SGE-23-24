<!doctype html>
<html>
<head>
    <title>Mi primer formulario</title>
    <meta charset=”utf-8”/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form action="" method="post">
    Nombre <input type="text" name="nombre">
    <input type="submit" value="enviar">
</body>
</html>

<?php
    var_dump($_POST["nombre"]);
?>
//EJERCICIO1:
Crear un formulario con post que pinte en el html la siguiente frase: 
    -Mi nombre es XXX y tengo XXX años

//EJERCICIO2:
Caja fuerte:
    -5 intentos para abrirla
    -ir enseñando al usuario los intentos restantes
    -si acierta la combinacion ponerle "alohomora!"
