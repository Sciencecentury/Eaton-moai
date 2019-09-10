<?php

namespace App\Models;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illminate\Support\Facades\DB;

class ChangeSchedule extends Model
{
    public static function changeStore(Request $request)
    {

        //確認用
        // $tasks = \DB::table('tasks')->get();
        // foreach ($request as $task\) {
        // }
        // echo "Confirm<br>";
        // echo $request->id;
        // echo $request->userName;
            // $request->id;
                    
        $getId = $request -> id;
        $intId = intval($getId);
        // dd($intId);

        \DB::table('tasks')
            ->where('id',$request->id)            
            ->update([
                'userName' => $request->userName,
                'title' => $request->title,
                'class' => $request->class,
                'place' => $request->place,
                'start_date' => $request->start_date,
                'start_time' => $request->start_time,
                'end_date' => $request->end_date,
                'end_time' => $request->end_time,
                'remarks' => $request->remarks,
                ]);

            }
}
