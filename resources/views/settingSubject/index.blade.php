<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<form action="{{route ('settingSubjects.store')}}" method="post">
    @csrf
    <input type="hidden" name="subject_id" value="{{$id_materia}}">
    <h1>Configuración de la materia</h1>
    
   
           Lunes: <input type="checkbox" name="day[]" value="1" > <p></p>
           Fecha inicio: <input type="time" name="start_time[]" > <p></p>
           Fecha fin: <input type="time" name="end_time[]" > <p></p>
           Fecha limite: <input type="time" name="limit_time[]" > <p></p>
      
   
           Martes: <input type="checkbox" name="day[]" value="2" > <p></p>
           Fecha inicio: <input type="time" name="start_time[]" > <p></p>
           Fecha fin: <input type="time" name="end_time[]" > <p></p>
           Fecha limite: <input type="time" name="limit_time[]" > <p></p>
     
           Miercoles <input type="checkbox" name="day[]" value="3" > <p></p>
           Fecha inicio: <input type="time" name="start_time[]" > <p></p>
           Fecha fin: <input type="time" name="end_time[]" > <p></p>
           Fecha limite: <input type="time" name="limit_time[]" > <p></p>
    
       <input type="submit" value="Enviar">
       

  
<div class="container text-center">
  <div class="row">
    <div class="col">
      Column
    </div>
    <div class="col">
      <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>
    <div class="col">
      Column
    </div>
  </div>
</div>
  
</form>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

<!-- Seleccionar dia: <select name="day" id="1">
        <option name="Seleccionar" > Seleccionar dia</option>
        <option name="day" value="1"> Lunes</option>
        <option name="day" value="2"> Martes</option>
        <option name="day" value="3"> Miercoles</option>
        <option name="day" value="4"> Jueves</option>
        <option name="day" value="5"> Viernes</option>
    </select> <p></p>-!>