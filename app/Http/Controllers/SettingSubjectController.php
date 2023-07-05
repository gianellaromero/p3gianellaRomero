<?php

namespace App\Http\Controllers;

use App\Models\SettingSubject;
use Illuminate\Http\Request;

class SettingSubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
   
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
       dd($request);
       // $config = new SettingSubject();
       $n = 0;
       for ($i = 1; $i <= 5; $i++){

            if (($request->day) and ($request[$n]->day == $i)){
                $config = new SettingSubject(); 
                $config->subject_id = $request->subject_id;
                $config->day = $dia;
                $config->start_time = $request->start_time[$n];
                $config->end_time = $request->end_time[$n];
                $config->limit_time = $request->limit_time[$n];
                $config->save();
                $n = $n+1;
            }
            else{

            dd('error');
        }
    } 
    }
    
    /**
     * Display the specified resource.
     */
    public function show(SettingSubject $settingSubject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SettingSubject $settingSubject)
    {
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SettingSubject $settingSubject)
    {
        dd('llegò');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SettingSubject $settingSubject)
    {
        //
    }
}
