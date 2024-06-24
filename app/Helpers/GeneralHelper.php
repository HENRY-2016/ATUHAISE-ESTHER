<?php
namespace App\Helpers;


use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class GeneralHelper 
{

    // public static function getMemberName ($id)
    // {
    //     $data = MembersModel ::where('id',$id)->get(['Name']);
    //     $length = count ($data);
    //     if ($length == 0){return '';}
    //     else 
    //     {
    //         $name =  $data[0]["Name"];
    //         return $name;
    //     }
    // }

    // public static function getMemberContact1 ($id)
    // {
    //     $data = MembersModel ::where('id',$id)->get(['Contact1']);
    //     $length = count ($data);
    //     if ($length == 0){return '';}
    //     else 
    //     {
    //         $name =  $data[0]["Contact1"];
    //         return $name;
    //     }
    // }
    // public static function getMemberContact2 ($id)
    // {
    //     $data = MembersModel ::where('id',$id)->get(['Contact2']);
    //     $length = count ($data);
    //     if ($length == 0){return '';}
    //     else 
    //     {
    //         $name =  $data[0]["Contact2"];
    //         return $name;
    //     }
    // }


    // public static function getMonth($option,$id)
    // {

    //     if ($option == 'Rosary')
    //         {$data = RosaryModel::where('id',$id)->get(['created_at']);}

    //     $length = count ($data);
    //     if ($length == 0){return '';}
    //     else 
    //     {
    //         $timestemp =  $data[0]["created_at"];
    //         $year = Carbon::createFromFormat('Y-m-d H:i:s', $timestemp)->month; 
    //         return   $year;
    //     }
    // }
    // public static function getYear($option,$id)
    // {
    //     if ($option == 'Family')
    //         {$data = FamiliesModel::where('id',$id)->get(['created_at']);}

    //     elseif ($option == 'Rosary')
    //         {$data = RosaryModel::where('id',$id)->get(['created_at']);}

    //     elseif ($option == 'Endobolo')
    //         {$data = EdoboloModel::where('id',$id)->get(['created_at']);}

    //     elseif ($option == 'Expense')
    //         {$data = ExpensesModel::where('id',$id)->get(['created_at']);}

    //     elseif ($option == 'MassCollection')
    //         {$data = MassCollectionsModel::where('id',$id)->get(['created_at']);}


    //     $length = count ($data);
    //     if ($length == 0){return '';}
    //     else 
    //     {
    //         $timestemp =  $data[0]["created_at"];
    //         $year = Carbon::createFromFormat('Y-m-d H:i:s', $timestemp)->year; 
    //         return   $year;
    //     }
    // }

    // public static function getMassYear($id)
    // {
    //     // $timestemp = "2020-01-01 01:02:03";
    //     // $year = Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $timestemp)->year;

    //     $data = MassModel::where('id',$id)->get(['created_at']);
    //     $length = count ($data);
    //     if ($length == 0){return '';}
    //     else 
    //     {
    //         $timestemp =  $data[0]["created_at"];
    //         $year = Carbon::createFromFormat('Y-m-d H:i:s', $timestemp)->year; // ->month; or ->day;
    //         return   $year;
    //     }
    // }



}

?>