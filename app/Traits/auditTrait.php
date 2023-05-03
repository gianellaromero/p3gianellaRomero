<?php

namespace App\Traits;
use App\Models\Audit;
/**
 * 
 */
trait AuditTrait
{
    public function logChanges($log,$action,$user_id){
    $audit = new Audit;
    $audit = Audit::create([
      'log' => $log,
      'action' => $action,
      'user_id' => $user_id
    ]) ;

}
}
