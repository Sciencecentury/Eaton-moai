<!--------------------------------------------------------------------------------------------------------->
<!-- 未完成
    TODO：
        ・ユーザ情報をdbに問い合わせる
        ・作成完了ポップアップ
        ・セッションなど -->
<!--------------------------------------------------------------------------------------------------------->


<?php
// -----------------------------------------------------------------------------------------------------
// postされた値によって処理を分岐
// -----------------------------------------------------------------------------------------------------
    $value = isset($_POST["in"]) ? $_POST["in"] : "retryForm";
    // 結果によってswitch文で分岐する
    switch($value){
        case "retryForm" :
            // 再度フォームを表示
            form();
            break;
        case "in" :
            // 値チェック
            valueCheck();
            break;
        default :
            // 再度フォームを表示
            form();
    }
// -----------------------------------------------------------------------------------------------------
// 受け取った値の組み合わせがdbに存在するか検証する
// -----------------------------------------------------------------------------------------------------
    function valueCheck(){
        // 受け取った値を変数に代入する
        $userName = $_POST["userName"];
        $password = $_POST["password"];

        // sqlで検証させる
        if(2 == 1){
            // 一致した場合(ログイン完了のポップアップを出力)
            successForm();
        }else{
            // 一致しなかった場合(再度フォームを出力)
            form();
        }
    }
// ---------------------------------    --------------------------------------------------------------------
// ログインに成功(データが一致)した場合の処理
// -----------------------------------------------------------------------------------------------------
    function successForm(){
        echo "せいこう";
        // header('Location : login.php');
        // exit();
    }
// -----------------------------------------------------------------------------------------------------
// フォーム
// -----------------------------------------------------------------------------------------------------
    function form(){
        // このファイルの場所を取得する
        $self = $_SERVER["SCRIPT_NAME"];
        // フォーム再出力
        ?>
        <html lang = "ja" dir = "ltr">
        <head>
            <meta charset = "utf-8">
            <title>ログイン</title>
            <link href = "../css/loginImport.css" rel = "stylesheet" type = "text/css">
        </head>
        <body>
            <div class = "advice">ユーザ名またはパスワードが違います</div>
            <div class = "loginBackColor">
                <h1 class = "mainTitle">ログイン</h1>
                <form action = "loginCheck.php"　name = "loginForm" method = "post">
                    <table class = "textBox" align = "center">
                        <tr>
                            <td>社員番号</td>
                            <td><input type  = "text" name = "userName"></td>
                        </tr>
                        <tr>
                            <td>パスワード</td>
                            <td><input type = "password" name = "password"></td>
                        </tr>
                    </table>
                    <input type = "hidden" value = "<?php $loginWindow ?>">
                    <input type = "hidden" value = "in" name = "in">
            <span> <!--spanはインライン要素らしい-->
                    <input type = "submit" class = "sendButton sendData"  value = "ログイン">
                </form>
                <!-- カレンダー画面へ -->
                <a href = "../calendar/calendar.php" class = "sendButton sendData">キャンセル</a>
                <!-- アカウント新規登録画面へ -->
                <a href = "../signUp/signUp.php" class = "sendData" style = "font-size : 17px">新規登録</a>
            </span>
            </div>
        </body>
        </html>
<?php
        }
// -----------------------------------------------------------------------------------------------------
?>
