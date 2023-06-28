<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{route ('settingSubjects.update',$settingSubjects[0]->id)}}" method="post">
    @CSRF
    @method('put')
    <div style="text-align: center">
        <input type="text" name="day" value="{{$settingSubjects[0]->day}}" /> <br />
        <input type="text" name="lastname" value="{{$settingSubjects[0]->start_time}}" /> <br />
        <input type="number" name="dni" value="{{$settingSubjects[0]->end_time}}" /> <br />
        <input type="date" name="birthdate" value="{{$settingSubjects[0]->limit_time}}" /><br />
        <input type="submit" value="Guardar" />
    </div>
</form>

</body>
</html>
