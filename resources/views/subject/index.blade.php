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
    <h1>Materia</h1>
    <input type="text" name="name"  placeholder="Ingresa la Materia">
    <input type="submit" value="Enviar">

</form>

</body>
</html>