<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form action="" method="post">
    @CSRF
    @method('put')
        
   
     @foreach ($settingSubjects as $clave => $setting) 
    
    @if ($setting->day == $clave+1)
    {{ env($setting->day)}}<input type="checkbox" checked name="day[]" value="{{$setting->day}}">
     <p></p>
     Fecha inicio: <input type="time" name="start_time[]" value="{{$setting->start_time}}">
     <p></p>
     Fecha fin: <input type="time" name="end_time[]" value="{{$setting->end_time}}">
     <p></p>
     Fecha limite: <input type="time" name="limit_time[]"  value="{{$setting->limit_time}}">
     <p></p>
     @endif

          @endforeach      
            </form>
    </div>
</form> 
</body>
</html>
