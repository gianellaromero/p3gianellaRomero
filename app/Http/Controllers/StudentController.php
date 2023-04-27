<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Audit;
use App\Traits;

class StudentController extends Controller
{
    use auditTraits;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
       $students = Student::All();
        //dd($students[0]->name);
       return view ('student.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //dd('llegó');
        return view ('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->status);
        //dd($request->name,$request->lastname,$request->dni,$request->birthdate);
        $student = new Student();
        $student->name = $request->name;
        $student->lastname = $request->lastname;
        $student->dni = $request->dni;
        $student->birthdate = $request->birthdate;
        $student->status = $request->status;
        $student->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //d($id);
        $student = Student::where('id',$id)->get();
        //dd($student);
        return view ('student.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //dd($request->all());
        $student = Student::find($id);
        //dd($student);
        $student->name = $request->name;
        $student->save();
        return redirect()->route('students.index');
        
       
        }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        //dd($id);
        Student::destroy($id);
        return view ('student.delete');
        //return redirect()->route('students.index');

    }
}
