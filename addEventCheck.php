<!--------------------------------------------------------------------------------------------------------->
<!-- 未完成
    TODO：
        ・入力されたユーザ名がすでに登録されていないかdbに問い合わせる
        ・作成したアカウントの情報をdbに書き込む
        ・作成完了ポップアップ
        ・不正とみなす値
        ・セッションなど -->
<!--------------------------------------------------------------------------------------------------------->


<?php
// -----------------------------------------------------------------------------------------------------
// 処理分岐
// -----------------------------------------------------------------------------------------------------
    $value = isset($_POST["add"]) ? $_POST["add"] : "retryForm";
    // 結果によってswitch文で分岐する
    switch($value){
        case "retryForm0" :
        // 再度フォームを表示する
            form("");
            break;
        case "add" :
            // 値チェック
            valueCheck();
            break;
        default :
            form("");
    }
// -----------------------------------------------------------------------------------------------------
// 受け取った値が正しい値かどうか検証する
// -----------------------------------------------------------------------------------------------------
    function valueCheck(){
        // 受け取った値を変数に代入する
        $optionEventTitle = $_POST["optionEventTitle"];// 予定の題名
        $optionClassName = $_POST["optionClassName"];// 組
        $optionPlace = $_POST["optionPlace"];// 場所
        $startDay = $_POST["startDay"];// 開始日
        $startTime = $_POST["startTime"];// 開始時刻
        $endDay = $_POST["endDay"];// 終了日
        $endTime = $_POST["endTime"];// 終了時刻
        $note = $_POST["note"];// 備考


        // 受け取った値の、開始日時より終了日時のほうが早ければ不正とみなす
        if()){
            // 不正だった場合
            $sendMesseage = "開始時間と終了時間の指定が不正です。";
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
                    <a href = "login.html"  class = "sendButton sendData">キャンセル</a>
        	    </form>
            </div>
        </body>
        </html>
<?php
        }
// -----------------------------------------------------------------------------------------------------
?>
