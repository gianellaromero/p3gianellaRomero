<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
        @php
        $n = 0
        @endphp <br>
        <h2 style="text-align: center">Editar la configuración de la materia </h2>
              <br> <br> 
              <input type="hidden" name="subject_id" value="{{$subject_id}}">
            <div class="container text-center" style="background-color: pink;">
            <div class="row">
                
        @for ($i = 1; $i <= 5; $i++) @if(isset($settingSubjects[$n]->day) and ($settingSubjects[$n]->day == $i))
        <div class="col">
            
                        {{ env($settingSubjects[$n]->day)}}<input type="checkbox" checked name="day[]"
                            value="{{$settingSubjects[$n]->day}}">
                        <p></p>
                        Fecha inicio: <input type="time" name="start_time[]"
                            value="{{$settingSubjects[$n]->start_time}}">
                        <p></p>
                        Fecha fin: <input type="time" name="end_time[]" value="{{$settingSubjects[$n]->end_time}}">
                        <p></p>
                        Fecha limite: <input type="time" name="limit_time[]"
                            value="{{$settingSubjects[$n]->limit_time}}">
                        <p></p>
                        @php $n = $n + 1
                        @endphp
                    </div>

                    @else
                    <div class="col">
                        {{ env($i)}} <input type="checkbox" name="day[]" value="{{$i}}">
                        <p></p>
                        Fecha inicio: <input type="time" name="start_time[]">
                        <p></p>
                        Fecha fin: <input type="time" name="end_time[]">
                        <p></p>
                        Fecha limite: <input type="time" name="limit_time[]">
                        <p></p>
                    </div>
                
            @endif
            @endfor
        </div>
    </div>
    <form action="{{route ('settingSubjects.update',$subject_id)}}" method="post">
        @CSRF
        @method('put')
        
            
        <input type="hidden" name="start_time[]">
     
            <input type="submit" value="Enviar" style="margin-top:7px; width: 13.33%;margin-left: 50%;transform: translateX(-50%); border: 1px solid ;
              padding: 3px;">
             
        </form>
    
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>