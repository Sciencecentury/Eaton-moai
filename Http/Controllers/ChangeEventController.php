<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ChangeSchedule;
use Illminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

/*--------------------------------------------------------------------------
予定の編集に関するコントローラ
--------------------------------------------------------------------------*/
class ChangeEventController extends Controller
{
    // 予定変更の画面を表示するメソッド
    public function changeWindow (Request $request) {
        // 持ってきたタスクのidを変数に保存
        $taskId = $request->taskId;
        // ここでtaskのid取れてる
        // dd(14);
        // dd($taskId);
        $intId = intval($taskId);
        // dbからidに関連する情報を持ってくる
        $changeTask = \DB::table('tasks') -> select('*') -> where('id', '=', $intId) -> get();      
        // dd($changeTask);
        // dd($changeTask[0]);

        return view('changeEvent',['changeTask' => $changeTask]);
    }

    // 編集ボタンを押下した後の処理
    public function changeStore(Request $request){
        //インスタンスを生成
        // $task = new ChangeSchedule();
        // $task -> changeStore($request);
        // dd($request);
        // $getId = $request -> id;
        // $intId = intval($getId);
        // dd($intId);
        ChangeSchedule::changeStore($request);
     
        //確認用
        // $tasks = \DB::table('tasks')->get();
        // foreach ($tasks as $task) {
        //     echo $task->title;
        // }
        

    //メソッド呼び出し
    // $this->alertMet();

    //topへ遷移
    return redirect('');

    }

    public function alertMet(){
        $test_alert = "<script type='text/javascript'>alert('編集しました。top画面に戻ります。');</script>";
        echo $test_alert;
    }

}