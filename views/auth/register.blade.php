@extends('layout.default')

@section('title', '新規登録')

@section('body')
<div class = "loginBackColor">
        <h1 class = "mainTitle">新規登録</h1>

        <!-- Authによっていい感じになるらしい -->
        <form action = "{{ route('register') }}"　name = "registerform" method = "post">
            <!-- 入力値チェックええ感じに検査してくれるらしい -->
            @csrf
            <!-- $errors -> first（'【フィールド名】'）：　入力した後に入力値をチェックする仕組み（＝バリデーション） -->
            <div class = "login_labels">
            <label for = "name">ユーザ名</label>
            <input type  = "text" name = "name" class = "register_label_name"><span>{{$errors -> first('name')}}</span><br>       

            <!-- <label for = "email">めあど</label> -->
            <!-- <input type  = "email" name = "email"><span>{{$errors -> first('email')}}</span><br>        -->

            <label for = "password">パスワード</label>
            <input type = "password" name = "password" class = "register_label_password"><span>{{$errors -> first('password')}}</span><br>

            <label for = "password">パスワード(確認用)</label>
            <input type = "password" name = "password_confirmation" class = "register_label_password_confirmation"><span>{{$errors -> first('password_confirmation')}}</span><br>

    <span> <!--spanはインライン要素らしい-->
            <input type = "submit" name = "action" class = "Registration_button" value = "登録">
        </form>

        <!-- カレンダー画面へ -->
        <form  method = "post" action = {{route ('index') }}>
            @csrf
            <input type = "submit" class = "register_cancel_button" value = "キャンセル">
        </form>
    </span>
</div>