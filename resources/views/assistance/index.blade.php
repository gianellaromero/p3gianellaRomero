<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route ('assistances.store')}}" method="post">
        
    @CSRF

    <input type="text" name="dni" placeholder="Ingrese DNI">
    <input type="submit" value="Enviar">






    </form>
    hacer un formulario 
    apuntar una ruta en web.php
    capturar ruta y apuntar al controlador
</body>
</html>