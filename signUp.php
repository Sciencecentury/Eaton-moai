<!--------------------------------------------------------------------------------------------------------->
<!-- 未完成
    TODO：
        ・セッションなど
        ・登録完了ポップアップ
<!--------------------------------------------------------------------------------------------------------->


<!--------------------------------------------------------------------------------------------------------->
<!-- アカウントを新規登録する画面 -->
<!--------------------------------------------------------------------------------------------------------->
<html lang = "ja" dir = "ltr">
<head>
    <meta charset="utf-8">
    <title>新規登録</title>
    <link type = "text/css" rel = "stylesheet" href = "../css/signUpImport.css">
</head>
<body>
    <div class = "signUpBackColor">
    <h1 class = "mainTitle">新規登録</h1>
	   <form action = "signUpCheck.php" method = "post" style = "display:inline">
            <table class = "textBox" align = "center">
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
	    </form>
        <!-- カレンダー画面へ -->
        <a href = "../calendar/calendar.php" class = "sendButton sendData">キャンセル</a>
    </span>
    </div>
</body>
</html>
