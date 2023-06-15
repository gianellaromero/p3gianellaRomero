<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{route ('subjects.store')}}" method="post">
    @csrf
    <h1>Configuración de la materia</h1>
   
    <select name="day" id="1">
        <option name="Seleccionar" > Seleccionar dia</option>
        <option name="day" value="1"> Lunes</option>
        <option name="day" value="2"> Martes</option>
        <option name="day" value="3"> Miercoles</option>
        <option name="day" value="4"> Jueves</option>
        <option name="day" value="5"> Viernes</option>
    </select>
    Fecha inicio: <input type="time" name="star_time" >
    <input type="submit" value="Enviar">

</form>

</body>
</html>