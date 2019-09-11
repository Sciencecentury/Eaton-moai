<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('【アクセスする際に指定されるドメイン・ファイル】', function () {
    return view('ファイル名', ["【変数名】" => "【入れたい文字列】"] );
});

ブラウザで定義したルートのURLを入力することでアクセスできるやつが定義されているお

 -> name（）で当該ルートに任意の名まえをつけることができる。
 ・URLを一括で変更することができる
 ・存在しないURLの時にエラーになる
*/

/*--------------------------------------------------------------------------
それでは以下から行ってみよう
--------------------------------------------------------------------------*/

// 認証系に必要なルーティングをええ感じに通してくれる（ログインとかそんなん）
Auth::routes();

/*トップ画面(calendar.php)*/
Route::get('/', 'IndexController@index')->name('index');

// トップ画面から週移動の要求があった時
Route::post('/index', 'IndexController@weekMove')->name('indexWeekMove');

/*ログアウト画面*/
Route::get('/auth/logout', 'Auth\LoginController@logout')->name('logout');

/*予定追加画面*/
Route::get('addEvent', 'AddEventController@addEvent')->name('addEvent');

// 予定追加後遷移
Route::post('eventAdd','AddEventController@addStore')->name('eventAdd');


// 予定編集画面
Route::post('changeEvent','ChangeEventController@changeWindow')->name('changeEvent');

// 予定編集後遷移
Route::post('eventChange','ChangeEventController@changeStore') -> name('eventChange');

//予定のテンプレートを削除
Route::get('templateDelete', function () {
    return view('templateDelete');
})->name('templateDelete');

// 予定のテンプレート削除(タイトル)
Route::post('eventDelate','EventDeleteController@deleteEvent') -> name('eventDelete');

// 予定のテンプレート削除(クラス名)
Route::post('classDelete','ClassDeleteController@deleteClass') -> name('classDelete');

// 予定のテンプレート削除(場所名)
Route::post('placeDelete','PlaceDeleteController@deletePlace') -> name('placeDelete');

// 予定のテンプレート追加
Route::post('addTmp','AddTemplateController@addTemplate') -> name('addTmp');

// 予定編集画面
// Route::post('changeEvent', function () {
//     return view('changeEvent');
//  })->name('changeEvent');
/*新規登録画面*/
// 実際の所、RegisterControllerには＠以降の処理は記述されていないが、useで指定している他のクラスに記述されているので使用することができる。
// （javaでいう継承みたいなやつかもしれん
// Route::get('/auth/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('/auth/register', 'Auth\RegisterController@showRegistrationForm')->name('register');

/*ログイン画面*/
// getで呼ばれるかpostで呼ばれるかで分岐先が違う
// Route::get('/auth/login', 'Auth\LoginController@showLoginForm')->name('login');
// Route::post('/auth/login', 'Auth\LoginController@login')->name('login');
