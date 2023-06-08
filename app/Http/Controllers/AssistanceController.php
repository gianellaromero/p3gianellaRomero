<?php

namespace App\Http\Controllers;

use App\Models\Assistance;
use Illuminate\Http\Request;
use App\Models\Student;
use Carbon\Carbon;

class AssistanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       // return view ('assistance');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('assistance.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $estudiante = Student::where("dni",$request->dni)->first();

         if ($estudiante == null){
           // return redirect()->route('assistances.create');
           return view ('assistance.store');
         }
         else {
     
        $materias = $estudiante->subjects;
        //$now = Carbon::now()->setTimezone('America/Argentina/Buenos_Aires');

        $time = Carbon::now()->format('H:i:s'); //hora actual
        $day = date('w'); //dia actual
        //dd(now());
        //dd($estudiante->id);
        foreach ($materias as $key =>$materia){
           
           $config = $materias[$key]->settingSubjects; //meto en una variable la config de la primer materia recorrida
           //dd($config);
           $dia = $config[0]->day; 
           $start_time = $config[0]->start_time;
           $limit_time = $config[0]->limit_time;
         
           if (($day == $dia) && ($time >= $start_time && $time <= $limit_time)){
                echo($dia);
                $asistencia = New Assistance();
                $asistencia->student_id = $estudiante->id;
                $asistencia->subject_id = $materia->id;
                $asistencia->save();
              }

        }
    }
        /*foreach ($is as $i){
            echo($i);
        }*/
        
        /*$now = date('w');
        dd($now);
       $config = $materias[0]->settingSubjects;
       dd($config[0]->start_time);*/
       
        //settingSubjects


    }

    /**
     * Display the specified resource.
     */
    public function show(Assistance $assistance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Assistance $assistance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Assistance $assistance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Assistance $assistance)
    {
        //
    }
}
