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
        
    @php
    $n = 0
    @endphp
    
    @for ($i = 1; $i <= 5; $i++) 
     @if(isset($settingSubjects[$n]->day) and ($settingSubjects[$n]->day == $i))

{{ env($settingSubjects[$n]->day)}}<input type="checkbox" checked name="day[]" value="{{$settingSubjects[$n]->day}}">
 <p></p>
 Fecha inicio: <input type="time" name="start_time[]" value="{{$settingSubjects[$n]->start_time}}">
 <p></p>
 Fecha fin: <input type="time" name="end_time[]" value="{{$settingSubjects[$n]->end_time}}">
 <p></p>
 Fecha limite: <input type="time" name="limit_time[]"  value="{{$settingSubjects[$n]->limit_time}}">
 <p></p>
 @php $n = $n + 1
 @endphp

@else 
{{ env($i)}} <input type="checkbox" name="day[]" value="{{$i}}">
 <p></p>
 Fecha inicio: <input type="time" name="start_time[]" >
 <p></p>
 Fecha fin: <input type="time" name="end_time[]" >
 <p></p>
 Fecha limite: <input type="time" name="limit_time[]"  > <p></p>
 
 @endif
          @endfor    
            </form>
    </div>
</form> 
</body>
</html>
