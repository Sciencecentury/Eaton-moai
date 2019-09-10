<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Models\AddSchedule;


/*--------------------------------------------------------------------------
addEvent.php(カレンダーの画面)にアクセスがあったときに動くコントローラー
--------------------------------------------------------------------------*/
    // namespace：ファイルの居場所を表す
    // namespace App\Http\Controllers;

    // use：中で使うクラスを宣言する
    //  ・名前空間などのエイリアス（別名）を作成
    //  ・名前空間の全て、または一部をインポート
    //  ・クラスをインポート
    //  ・関数をインポート
    //  ・定数をインポート
    // などができる
    // use Illuminate\Http\Request;

/*--------------------------------------------------------------------------
「controllerクラス」を継承するaddEventControllerクラス
--------------------------------------------------------------------------*/
    // class addEventController extends Controller{
        // web.phpの「Route::get('/', 'AddEventController@addEvent')->name('addEvent');」によりこのindexメソッドに飛んでくる
        // public function addEvent(){
          //↓でaddEvent.blade.php(つまりMVCのV)にアクセスする
        //   return view('addEvent/addEvent');
        // }
    // }

class AddEventController extends Controller
{
    // 予定追加画面への遷移
    public function addEvent(){
        return view('addEvent');
        // return view('');
    }
    
    public function addStore(Request $request){
       //インスタンスを生成
       $task = new AddSchedule;
       $task -> addStore($request);
       return redirect('');
    }
}
