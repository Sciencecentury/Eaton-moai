<?php

namespace App\Models;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
// use App\Models\Auth; 

class AddSchedule extends Model
{
    public function addStore(Request $request)
    {
        \DB::table('tasks')->insert([
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

        // $test_alert = "<script type='text/javascript'>alert('追加しました。OKボタンで前の画面に戻ります。');</script>";
        // echo $test_alert;
    }
}
