<!DOCTYPE html>
<html lang="en">

<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Document</title>

       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
              crossorigin="anonymous">
</head>

<body>

       <form action="{{route ('settingSubjects.store')}}" method="post">
              @csrf
              <br>
              <input type="hidden" name="subject_id" value="{{$id_materia}}">
              <h2 style="text-align: center">Configuración de la materia </h2>
              <br> <br>
              <div class="container text-center" style="background-color: pink;">
                     <div class="row">
                            @for ($i = 1; $i <= 5; $i++)
                            <div class="col">
                                   {{env($i)}} <input type="checkbox" name="day[]" value="{{$i}}">
                                   <p></p>
                                   Fecha inicio: <input type="time" name="start_time[]">
                                   <p></p>
                                   Fecha fin: <input type="time" name="end_time[]">
                                   <p></p>
                                   Fecha limite: <input type="time" name="limit_time[]">
                                   <p></p>
                                   
                            </div>
                            @endfor
                            
                            
                     </div>
              </div>
              <input type="submit" value="Enviar" style="margin-top:7px; width: 13.33%;margin-left: 50%;transform: translateX(-50%); border: 1px solid ;
              padding: 3px;">
       </form>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
       integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
       crossorigin="anonymous"></script>

