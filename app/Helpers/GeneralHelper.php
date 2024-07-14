<?php
namespace App\Helpers;


use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class GeneralHelper 
{

    public static function getUserName ()
    {
        $user = Auth::user()->name;
        return $user;
        
    }
    public static function getUserRole ()
    {
        $role = Auth::user()->role;
        return $role;
        
    }


}

?>