<!--------------------------------------------------------------------------------------------------------->
<!-- 未完成
    TODO：
        ・テンプレート追加
        ・追加完了ポップアップ
        ・セッションなど -->
<!--------------------------------------------------------------------------------------------------------->



<!--------------------------------------------------------------------------------------------------------->
<!-- css、js読み込み -->
<!--------------------------------------------------------------------------------------------------------->
<html lang = "ja" dir = "ltr">
<head>
    <meta charset = "utf-8">
    <title>予定の追加</title>
    <link type = "text/css" rel = "stylesheet" href = "../css/addEventImport.css">
    <script src = "//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <script src = "addEvent.js"></script>
</head>
<!--------------------------------------------------------------------------------------------------------->
<!-- 予定追加する画面 -->
<!--------------------------------------------------------------------------------------------------------->
<body>
    <h1 class = "mainTitle">予定の追加</h1>
    <form action = "addEventCheck.php" metdod = "post"  style = "display : inline">
        <table align = "center">
<!--------------------------------------------------------------------------------------------------------->
<!-- タイトル設定部分 -->
<!--------------------------------------------------------------------------------------------------------->
            <div class = "eventTitle">
                <tr>
                    <th>タイトル</th>
                    <td><input type = "search" name = "eventTitle" autocomplete = "on" list = "optionEventTitle" placeholder = "予定のタイトル" ><!--required-->
                        <datalist id = "optionEventTitle">
                            <option value = "運動会">
                            <option value = "昼寝">
                            <option value = "散歩">
                        </datalist>
                    </td>
                    <td>
                        <a class = "addButton"  id = "titleShow" class = "show">+</a>
                        <div id = "titleLayer" class = "layer"></div>
                        <div id = "titlePopup" class = "popup">
                            <div class = "addEventPopupBackColor">
                                <div><h1  class = "mainTitle">タイトルのテンプレートを追加</h1></div>
                                <div class = "templateText">タイトル：<input type = "text" name = "eventName"></div><br>
                                <!-- ボタン -->
                                <input class = "sendButton sendData" value = "登録">
                                <input class = "sendButton sendData" id = "titleClose" value = "キャンセル">
                            </div>
                        </div>
                    </td>
                </tr>
            </div>
<!--------------------------------------------------------------------------------------------------------->
<!-- クラス設定部分 -->
<!--------------------------------------------------------------------------------------------------------->
            <div class = "className">
                <tr>
                    <th>組</th>
                    <td><input type = "search" name = "className" autocomplete = "on" list = "optionClassName" placeholder = "使用する組">
                        <datalist id = "optionClassName">
                            <option value = "さくら">
                            <option value = "ふじ">
                            <option value = "たんぽぽ">
                        </datalist>
                    </td>
                    <td>
                        <a class = "addButton"  id = "classNameShow" class = "show">+</a>
                        <div id = "classNameLayer" class = "layer"></div>
                        <div id = "classNamePopup" class = "popup">
                            <div class = "addEventPopupBackColor">
                                <div><h1  class = "mainTitle">組のテンプレートを追加</h1></div>
                                <div class = "templateText">組名：<input type = "text" name = "eventName"></div><br>
                                <!-- ボタン -->
                                <input class = "sendButton sendData" value = "登録">
                                <input class = "sendButton sendData" id = "classNameClose" value = "キャンセル">
                            </div>
                        </div>
                    </td>
                </tr>
            </div>
<!--------------------------------------------------------------------------------------------------------->
<!-- 場所設定部分 -->
<!--------------------------------------------------------------------------------------------------------->
            <div class = "place">
                <tr>
                    <th>場所</th>
                    <td><input type = "search" name = "place"  autocomplete = "on" list = "optionPlace" placeholder = "使用する場所">
                        <datalist id = "optionPlace">
                            <option value = "職員室">
                            <option value = "運動場">
                            <option value = "給食室">
                        </datalist>
                    </td>
                    <td>
                        <a class = "addButton"  id = "placeShow" class = "show">+</a>
                        <div id = "placeLayer" class = "layer"></div>
                        <div id = "placePopup" class = "popup">
                            <div class = "addEventPopupBackColor">
                                <div><h1  class = "mainTitle">場所のテンプレートを追加</h1></div>
                                <div class = "templateText">場所名：<input type = "text" name = "eventName"></div><br>
                                <!-- ボタン -->
                                <input class = "sendButton sendData" value = "登録">
                                <input class = "sendButton sendData" id = "placeClose" value = "キャンセル">
                            </div>
                        </div>
                    </td>
                </tr>
            </div>
        </table>
<!--------------------------------------------------------------------------------------------------------->
<!-- 時間設定部分 -->
<!--------------------------------------------------------------------------------------------------------->
        <div class = "setTime">
            <div class = "start">
            <label for = "note" style = "font-size : 22px;">日時</label><br>
                <span  style = "font-size : 20px;">開始日時：</span>
                <input type = "date" name = "date" id = "startDay">
                <input type = "time" name = "time" id = "starTime">
            </div>

            <div class = "end">
                <span  style = "font-size : 20px;">終了日時：</span>
                <input type = "date" name = "date" id = "endDay">
                <input type = "time" name = "time" id = "endTime">
            </div>
        </div>
<!--------------------------------------------------------------------------------------------------------->
<!-- 備考記述部分 -->
<!--------------------------------------------------------------------------------------------------------->
        <div class = "note">
            <label for = "note" style = "font-size : 22px;">備考</label><br>
            <textarea id = "note" name = "note" cols = "50" rows = "8"></textarea><br>
        </div>
<!--------------------------------------------------------------------------------------------------------->
<!-- 追加・キャンセルボタン -->
<!--------------------------------------------------------------------------------------------------------->
        <input type = "hidden" value = "add" name = "add">
        <input type = "submit" class = "sendButton sendData" value = "追加">
    </form>
    <!-- カレンダー画面へ -->
    <a href = "../calendar/calendar.php" class = "sendButton sendData">キャンセル</a>
</body>
</html>
