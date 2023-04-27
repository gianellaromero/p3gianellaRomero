<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{route ('students.store')}}" method="post">
    @CSRF
    <input type="text" name="name" placeholder="Nombre"> <br>
    <input type="text" name="lastname" placeholder="Apellido"> <br>
    <input type="text" name="dni"placeholder="DNI" > <br>
    <input type="date" name="birthdate"placeholder="Fecha Nacimiento"> <br>
   Estado: 
    0<input type="radio" name="status" value="0"> 
    1<input type="radio" name="status" value="1"> <br>
    <input type="submit" value="Enviar">
    </form>
    
</body>
</html>