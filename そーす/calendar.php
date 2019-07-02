<?php
    // 今日の日付を取得
    $today = date("Y.m.d", time());
?>
    <html lang = "ja" dir = "ltr">
    <head>
        <meta charset = "utf-8">
        <title>calender</title>
        <link href = "calendar.css" rel = "stylesheet" type = "text/css">
    </head>
    <body>
        <span>
            <a class = "btn"></a>
            <div class = "drawr">
            <ul id = "menu">
                <li><a href = "#">メニュー5</a></li>
                <li><a href = "#">ログイン</a></li>
                <li><a href = "#">ログアウト</a></li>
                <li><a href = "#">新規登録</a></li>
                <li><a href = "">予定追加</a></li>
            </ul>
            </div>
        </span>
        <span id = "today"><?php echo $today; ?></span>

        <!-- <div id = "week0"> -->
        <p id = "week">
            <!-- <a id = "sun"><span>日</a>月火水木金<a id = "sat"></span>土</a> -->
            <span id = "spacing">日月火水木金</span>土
        </p>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="menu.js"></script>
        <script src="modal.js"></script>
    </body>
    </html>
