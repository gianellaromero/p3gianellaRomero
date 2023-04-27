<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Audit;

class AuditController extends Controller
{
    //
    public function index()
    {
        
      //dd('llegó');
      //$audits = Audit::all();
      return view('audit.index');
     
        
     
    }
}
