<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;
use App\Models\SettingSubject;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //dd('llegó');
        //$subjects = Subject::find(1);
        $subjects = Subject::All();
        //dd($subjects);
       return view ('subject.index',compact('subjects'));
      
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $materia_bdd = Subject::where('name',$request->name)->get();

       //dd($materia_bdd, $request->name);
       if(isset($materia_bdd[0]->name)) {
        $materia_existente = $materia_bdd[0]->name;
        
       } else {
        $materia_existente =  '';
        
       } 
     
      
        if ($request->name == $materia_existente ){

            echo 'error ya existe';}

                else{
                $materia = new Subject();
                $materia->name = $request->name;
                $guardado = $materia->save();
                $id_materia = $materia->id;
                if ($guardado == true){
                    return view ('settingSubject.index',compact('id_materia'));
                }
                else {
                    dd('error');
                }
            }

    }

    /**
     * Display the specified resource.
     */
    public function show(Subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subject $subject)
    {
       
        $subject = Subject::where('id',$subject->id)->get();
        //dd($subject);
        return view ('settingSubject.edit',compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subject $subject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject)
    {
        dd('llegó');
    }
}
