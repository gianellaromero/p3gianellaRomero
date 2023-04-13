diseñar app web para controlar las asistencias de los alumnos utilizando un codigo qr, en su defecto ingresandolo por teclado 
la asistencia tendrá: 
fecha y hora
dni
CRUD
El administrador va a poder dar de alta alumnos, materias y carreras
va apoder dar de alta asistencias con la condicion de que el sistema identifique si esa asistencia se dio manual(por el administrador) no por el qr de la puerta
los nombres de la tablas en ingles
BUSCAR como hacer crud en laravel, carbon(fechas)
para cada tabla en bd hay q crear un modelo.
se puede usar boostrap en vistas para estilo(css) 

Route::get('/', function () {
    return view('welcome');
});
Route::get('welcomee', function () {
    return view('index');