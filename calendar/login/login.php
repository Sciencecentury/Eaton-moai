<!--------------------------------------------------------------------------------------------------------->
<!-- 未完成
    TODO：
        ・セッションなど -->
        <!-- ・ログイン完了ポップアップ -->
<!--------------------------------------------------------------------------------------------------------->


<!--------------------------------------------------------------------------------------------------------->
<!-- システムにログインする画面 -->
<!--------------------------------------------------------------------------------------------------------->
<html lang = "ja" dir = "ltr">
<head>
    <meta charset = "utf-8">
    <title>ログイン</title>
    <link href = "../css/loginImport.css" rel = "stylesheet" type = "text/css">
</head>
<body>
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
    <span> <!--spanはインライン要素らしい-->
            <input type = "submit" class = "sendButton sendData"  value = "ログイン">
            <input type = "hidden" value = "in" name = "in">
        </form>
        <!-- カレンダー画面へ -->
        <a href = "../calendar/calendar.php" class = "sendButton sendData">キャンセル</a>
        <!-- アカウント新規登録画面へ -->
        <a href = "../signUp/signUp.php" class = "sendData" style = "font-size : 17px">新規登録</a>
    </span>
    </div>
</body>
</html>
