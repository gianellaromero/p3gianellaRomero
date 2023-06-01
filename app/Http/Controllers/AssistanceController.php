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


        //dd($estudiante[0]->subjects);
        $materias = $estudiante->subjects;
        //dd(date('w'));
        //dd(now());
        $now = Carbon::now()->format('H:i:s');
        //dd($materias);
        foreach ($materias as $key =>$materia){
           echo($materia);
           $now = date('w');
           $config = $materias[$key]->settingSubjects;

           //dd($config);
           $dia = $config[0]->day;
           
           if ($now == $dia){
                
                $key = 1;
                dd($key);
                //$k= $k+1;
                

           }
           //dd('no llegó', $i);

        }
        foreach ($key as $k){
            echo($k);
        }
        
        $now = date('w');
        dd($now);
       $config = $materias[0]->settingSubjects;
       dd($config[0]->start_time);
       
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
