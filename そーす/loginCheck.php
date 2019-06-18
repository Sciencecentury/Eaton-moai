<?php
// -----------------------------------------------------------------------------------------------------
// メイン関数的な(適当)
// -----------------------------------------------------------------------------------------------------
    if(isset($_POST["in"])){
        loginCheck();
    }else{
        form();
    }
// -----------------------------------------------------------------------------------------------------
// dbにアクセスしてログインできるかの参照を行う処理
// -----------------------------------------------------------------------------------------------------
    function loginCheck(){
        // データが正しいかの検証
        if($_POST["uname"] == "" || $_POST["password"] == ""){
            form();
            exit;
        }
    successForm();
    }

// -----------------------------------------------------------------------------------------------------
// ログインに成功した場合の処理
// -----------------------------------------------------------------------------------------------------
    function successForm(){
        echo <<< _FORM
        <div id = "popup">
            <div = "loginSuccess">ログイン完了</div>
            <input type = "button" id = "close" value = "close popup">
        </div>
_FORM;
    }
// -----------------------------------------------------------------------------------------------------
// フォーム
// -----------------------------------------------------------------------------------------------------
    function form(){
        // このファイルの場所を取得する
        $self = $_SERVER["SCRIPT_NAME"];
        // フォーム再出力
        echo <<< _FORM
            <html lang = "ja" dir = "ltr">
            <head>
                <meta charset="utf-8">
                <title>login</title>
                <style>
                body{
                    text-align : center;
                    margin : 0;
                    font-family : "UD デジタル 教科書体 NP-R";
                }

                #title{
                    font-family : "UD デジタル 教科書体 NP-R";
                    background: #b4c7e7;
                    letter-spacing : 0.2em;
                    font-size : 40px;

                    padding : 10px 0px;
                    margin : 0px 0px;

                    padding : 0.31em 0em;
                }

                #back{
                    background : #ececec;
                    padding : 0px 0px 30px 0px;
                    margin : 100px 450px 150px 450px;
                }

                table {
                    font-size : 20px;
                    padding : 0px 0px 20px 0px;
                    /* margin : 100px 500px 200px 500px; */
                }

                #sendButton{
                    display : inline-block;
                    padding : 0.5em 1em;
                    background : #b4c7ef;
                    text-decoration : none;
                    color : #000000;
                    border-radius : 3px;
                    margin : 10;
                    margin-right : 30px;
                }
                </style>
            </head>
            <body>
            <p style = "position : relative; top : 70; color : red;">ユーザ名またはパスワードが違います</p>
                <div id = "back">
                <h1 id = "title">ログイン</h1>
                <form action = "$self" method = "post"  style = "display:inline">
                    <table align = "center">
                        <tr>
                        <th>社員番号</th>
                        <th><input type = "text" name = "uname"></th>
                        </tr>
                        <br>
                        <tr>
                        <th>パスワード</th>
                        <th><input type = "password" name = "password"></th>
                        </tr>
                        <br>
                    </table>
                    <input type = "hidden" name = "in" value = "in">
                    <a href = "loginCheck.php" id = "sendButton">キャンセル</a>
                    <a href = "" id = "sendButton">ログイン</a>
                </form>
                <a href = "signUp.html" id = "newButton">新規登録</a>
            </div>
            </body>
            </html>
_FORM;
        }
        // <input type = "submit" id = "sendButton" value = "ログイン">
// -----------------------------------------------------------------------------------------------------
 ?>
