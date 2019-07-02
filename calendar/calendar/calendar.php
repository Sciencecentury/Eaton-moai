<!-------------------------------------------------------------------------------------------------->
<!-- ファイル読み込みなど -->
<!-------------------------------------------------------------------------------------------------->
<html lang = "ja" dir = "ltr">
<head>
    <meta charset = "utf-8">
    <title>カレンダー</title>
    <!-- css、ajax、js読み込み -->
    <link href = "../css/calendarImport.css" rel = "stylesheet" type = "text/css">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <script src = "calendar.js"></script>
</head>
<body>
<!-------------------------------------------------------------------------------------------------->
<!--月のカレンダーを生成 -->
<!-------------------------------------------------------------------------------------------------->
<?php
    $yyyy = date('Y');
    $mm =   date('m');
    $dd = 1;

    //カレンダー関数
    function calendar($yyyy, $mm, $dd){
        //選択日のタイムスタンプ
        $iSctDayTimeStamp = mktime(0,0,0,$mm,$dd,$yyyy);
?>
        <table border = "0" bgcolor = "#cccccc" cellspacing = "1">
            <tr class = "monthWeekColor">
                <td>日</td>
                <td>月</td>
                <td>火</td>
                <td>水</td>
                <td>木</td>
                <td>金</td>
                <td>土</td>
            </tr>
<?php
            //曜日NO
            $iWNoMthFst = date('w',mktime(0,0,0,$mm,1,$yyyy));//0:日～6:土
            //日付が始まる前の空白
            for($iFstWeekBnk = 0 ;$iFstWeekBnk < $iWNoMthFst ;$iFstWeekBnk++){
?>
            <td align='center' bgcolor='#FFFFFF'> </td>
<?php
            }

            //日付記述 年月日の妥当性がtrueであればループ
            for($dd = 1 ;checkdate($mm, $dd, $yyyy); $dd++ ){
            //本日のタイムスタンプ
            $iTodayTimeStamp = mktime(0,0,0,date('m'),date('d'),date('Y'));
            //指定年月のループ日付のタイムスタンプ
            $iDisplayDaysTimeStamp = mktime(0,0,0,$mm,$dd,$yyyy);

            //1日が日曜日のとき　1　8　15　22　29が　== 1となる
            //日曜日
            if(($dd+$iWNoMthFst)%7 == 1){
                echo '<tr><td bgcolor="';
                //本日
                if($iTodayTimeStamp == $iDisplayDaysTimeStamp) echo '#95eabb';
                else echo '#ffd1d1';
?>
                "><?php echo $dd; ?></td>
<?php
            }
            //土曜日
            elseif(($dd+$iWNoMthFst)%7 == 0){
                echo '<td bgcolor="';
                //本日
                if($iTodayTimeStamp == $iDisplayDaysTimeStamp) echo '#95eabb';
                else echo '#d1d1ff';
?>
                "><?php echo $dd; ?></td></tr>
<?php
            }
            //平日
            else{
                echo '<td bgcolor="';
                //本日
                if($iTodayTimeStamp == $iDisplayDaysTimeStamp) echo '#95eabb';
                else echo '#ffffff';
?>
                "><?php echo $dd; ?></td>
<?php
            }
        }
    //指定月最終日の曜日$ddは32になっている
    $iWNoMthEnd = date('w',mktime(0,0,0,$mm,$dd,$yyyy));
    if($iWNoMthEnd != 0){
        //もし32が日曜日すなわち0ならそれで終了
        for($iWeekBlank = 0 ; $iWeekBlank < 7-$iWNoMthEnd; $iWeekBlank++){
            //0以外は が必要
            echo '<td align="center" bgcolor="#FFFFFF"> </td>';
        }
    }
?>
    </tr></table>
<?php
    }
?>
<!-------------------------------------------------------------------------------------------------->
<!-- にょきっとばー -->
<!-------------------------------------------------------------------------------------------------->
    <span>
	<a class = "drawrOpenBtn"></a>
        <div class = "drawrMenu">
            <ul id = "menu">
                <li><p class = "drawrItem">今月のカレンダー</p><?php calendar($yyyy, $mm, $dd); ?></li>
                    <hr class = "bar">
                <li><a href = "../login/login.php" class = "drawrItem">ログイン</a></li>
                    <hr class = "bar">
                <li><a href = "#" class = "drawrItem">ログアウト</a></li>
                    <hr class = "bar">
                <li><a href = "../signUp/signUp.php" class = "drawrItem">新規登録</a></li>
                    <hr class = "bar">
                <li><a href = "../addEvent/addEvent.php" class = "drawrItem">予定追加</a></li>
                    <hr class = "bar">
            </ul>
        </div>
    </span>
<!-------------------------------------------------------------------------------------------------->
<!-- 今日の日付を取得・表示 -->
<!-------------------------------------------------------------------------------------------------->
<?php
    $today = date("Y.m.d", time());
?>
    <span id = "today"><?php echo $today; ?></span>
<!-------------------------------------------------------------------------------------------------->
<!-- 一週間カレンダー・曜日表示 -->
<!-------------------------------------------------------------------------------------------------->
    <!-- 週移動の矢印 -->
    <p id = "leftArrow"><img src = "left.png"></p>
    <p id = "rightArrow"><img src = "right.png"></p>

    <!-- 曜日表示 -->
    <table class = "weekTable"  cellspacing = "0">
        <tr>
            <td style = "color : #ff3f3f">日</td>
            <td>月</td>
            <td>火</td>
            <td>水</td>
            <td>木</td>
            <td>金</td>
            <td style = "color : #2e75b6">土</td>
        </tr>
    </table>
<!-------------------------------------------------------------------------------------------------->
<!-- 一週間カレンダー・日付表示 -->
<!-------------------------------------------------------------------------------------------------->
    <table class = "taskTable" cell-spacing = "0" border = "1" bordercolor = "#b4c7e7" rules = "cols">
        <tr class = "dayCell">
            <td>20</td>
            <td>21</td>
            <td>22</td>
            <td>23</td>
            <td>24</td>
            <td>25</td>
            <td>26</td>
        </tr>
<!-------------------------------------------------------------------------------------------------->
<!-- 一週間カレンダー・予定表示 -->
<!-------------------------------------------------------------------------------------------------->
        <tr class = "taskCell">
            <td>
                <a id = "calendarShow"><img src = "label2.png"></a>
                    <div id = "calendarLayer" class = "layer"></div>
                    <div id = "calendarPopup" class = "popup">
                    <div class = "calendarBackColor">
                        <div><h1  class = "mainTitle">運動会</h1></div>
                        <table border = "0" cellspacing = "2.5" class = "detailsTable">
                            <tr>
                                <td>編集者</td>
                                <td>hoge</td>
                            </tr>
                            <tr>
            					<td>開始時間</td>
                                <td>12:00</td>
            				</tr>
                            <tr>
                                <td>終了時間</td>
                                <td>13:00</td>
                            </tr>
                            <tr>
                                <td>組</td>
                                <td>山口</td>
                            </tr>
                            <tr>
            					<td>場所</td>
                                <td>運動場</td>
                            </tr>
                        </table>
                        <div class = "translation">
                            備考<br>
                                あいうえを<br>
                                あいうえを<br>
                                あいうえを<br>
                        </div>
                        <div class = "operationButton">
                            <a href = "#" class = "sendButton sendData">削除</a>
                            <a href = "#" class = "sendButton sendData">編集</a>
                            <a href = "#" class = "sendButton sendData">キャンセル</a>
                        </div>
                    </div>
                    </div>
            </td>
            <td></td>
            <td><img src = "label.png"></td>
            <td></td>
            <td></td>
            <td><img src = "label2.png"></td>
            <td></td>
        </tr>
        <tr class = "taskCell">
            <td><img src = "label2.png"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><img src = "label.png"></td>
            <td></td>
        </tr>
        <tr class = "taskCell">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr class = "taskCell">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr class = "taskCell">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr class = "taskCell">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
</body>
</html>
