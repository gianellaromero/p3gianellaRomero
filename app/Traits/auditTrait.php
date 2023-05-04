<?php

namespace App\Traits;
use App\Models\Audit;
use Illuminate\Support\Facades\Auth;
/**
 * 
 */
trait AuditTrait
{
    public function logChanges($log,$action){
    $audit = new Audit;
    $user = Auth::id();
    //dd($user);
    $audit = Audit::create([
      'log' => $log,
      'action' => $action,
      'user_id' => $user->id
    ]) ;

}
}
