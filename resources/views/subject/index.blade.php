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
        <br> <br> <br>
        <h1>Materia</h1>
        <input type="text" name="name" placeholder="Agregar Materia">
        <input type="submit" value="Enviar">
    </form>
    <p></p>
    <table border="2">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>

        @foreach ($subjects as $subject)
        <tr>
            <td>{{ $subject->name }}</td>
            <td>
                <a href=" subjects/{{$subject->id}}/edit">
                    <input type="button" value="editar" /></a>
                <form action="{{route ('subjects.destroy',[$subject->id])}}" method="post">
                    @CSRF
                    @method('delete')
                    <input type="submit" value="borrar" /></a> </td>
        </tr>
        </form>
        </td>
        </tr>

        @endforeach
    </table>

</body>

</html>