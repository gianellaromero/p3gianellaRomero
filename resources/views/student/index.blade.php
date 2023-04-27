
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        

    </table>
</body>
</html>
<table border="2">
    <thead>
        <tr>
            <th> Nombre </th>
            <th> Apellido</th>
            <th> Dni </th>
            <th>Fecha</th>
            <th> Acciones</th>
        </tr>
    </thead>

    @foreach ($students as $student)
    <tr>
        <td> {{ $student->name }}</td>
        <td> {{ $student->lastname }}</td>
        <td> {{ $student->dni }}</td>
        <td> {{ $student->birthdate }}</td>
        <td> <a href=" students/{{$student->id}}/edit"> <input type="button" value="editar"></a></td>
    </tr>
      
    @endforeach
</table>