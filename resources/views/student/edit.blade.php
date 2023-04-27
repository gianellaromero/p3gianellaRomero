<form action="{{route ('students.update',$student[0]->id)}}" method="post">
    @CSRF
    @method('put');
    <div style="text-align: center">
        <input type="text" name="name" value="{{$student[0]->name}}" /> <br />
        <input type="text" name="lastname" value="{{$student[0]->lastname}}" /> <br />
        <input type="number" name="dni" value="{{$student[0]->dni}}" /> <br />
        <input type="date" name="birthdate" value="{{$student[0]->birthdate}}" /><br />
        <input type="submit" value="Guardar" />
    </div>
</form>
