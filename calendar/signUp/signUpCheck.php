<!--------------------------------------------------------------------------------------------------------->
<!-- 未完成
    TODO：
        ・入力されたユーザ名がすでに登録されていないかdbに問い合わせる
        ・作成したアカウントの情報をdbに書き込む
        ・作成完了ポップアップ
        ・セッションなど -->
<!--------------------------------------------------------------------------------------------------------->


<?php
// -----------------------------------------------------------------------------------------------------
// 処理分岐
// -----------------------------------------------------------------------------------------------------
    $value = isset($_POST["signUp"]) ? $_POST["signUp"] : "retryForm";
    // 結果によってswitch文で分岐する
    switch($value){
        case "retryForm" :
        // 再度フォームを表示する
            // echo "1";
            form("");
            break;
        case "signUp" :
            // 値チェック
            // echo "2";
            valueCheck();
            break;
        default :
            // echo "3";
            form("");
    }
// -----------------------------------------------------------------------------------------------------
// 受け取った値が正しい値かどうか検証する
// -----------------------------------------------------------------------------------------------------
    function valueCheck(){
        // 受け取った値を変数に代入する
        $userName = $_POST["userName"];
        $password = $_POST["password"];
        $checkPassword = $_POST["checkPassword"];
        // 受け取った全ての値が不正でないか検証
        // 不正と見なす値：英数字とアンダーバー以外
        if(!preg_match("/^[a-zA-Z0-9]+$/", $userName) || !preg_match("/^[a-zA-Z0-9]+$/", $password) || !preg_match("/^[a-zA-Z0-9]+$/", $checkPassword)){
            // 正しくなかった場合
            $sendMesseage = "入力値が正しくありません。使用できる文字は英数字と_(アンダーバー)のみです。";
            form($sendMesseage);
            exit;
        }

        // $userNameに重複がないか検証
        if(2 == 2){
            // 重複があった場合
            $sendMesseage = "このユーザ名は既に登録されています。";
            form($sendMesseage);
            exit;
        }

        //パスワードが確認用と同じ値であるか検証
        if(strcmp($password, $checkPassword) != 0){
            // 同じでなかった場合
            $sendMesseage = "パスワードと確認用パスワードが一致しません。";
            form($sendMesseage);
            exit;
        }else{
            // 検証クリア、アカウント作成
            successForm();
            exit;
        }
    }
// -----------------------------------------------------------------------------------------------------
// 新規登録成功の処理
// -----------------------------------------------------------------------------------------------------
    function successForm(){
        echo "できたで";
        // header('Location : login.php');
        // exit();
    }
// -----------------------------------------------------------------------------------------------------
// フォーム
// -----------------------------------------------------------------------------------------------------
    function form($sendMessage){
        // このファイルの場所を取得する
        $self = $_SERVER["SCRIPT_NAME"];
        // フォーム再出力
        ?>
        <html lang = "ja" dir = "ltr">
        <head>
            <meta charset="utf-8">
            <title>新規登録</title>
            <link type = "text/css" rel = "stylesheet" href = "../css/signUpImport.css">
        </head>
        <body>
            <div class = "advice"><?php echo "$sendMessage"; ?></div>
            <div class = "signUpBackColor">
            <h1 class = "mainTitle">新規登録</h1>
        	   <form action = "<?php $self ?>" method = "post" style = "display:inline">
                    <table class = "textBox" align = "center" >
                        <tr>
                            <td>ユーザ名</td>
                            <td><input type = "text" name = "userName"></td>
                        </tr>
                        <tr>
                            <td>パスワード</td>
                            <td><input type = "password" name = "password"></td>
                        </tr>
                        <tr>
                            <td>パスワード(確認用)</td>
                            <td><input type = "password" name = "checkPassword"></td>
                        </tr>
                    </table>
                    <input type = "hidden" value = "signUp" name = "signUp">
                    <span>
                        <input type = "submit" class = "sendButton sendData"  value = "登録">
                    </span>
                    <a href = "../calendar/calendar.php"  class = "sendButton sendData">キャンセル</a>
        	    </form>
            </div>
        </body>
        </html>
<?php
        }
// -----------------------------------------------------------------------------------------------------
?>
