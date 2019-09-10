@extends('layout.default')

@section('title', '予定変更 ')

@section('body')
<div class = "addEventBackColor">
<h1 class = "addEventMainTitle">予定の編集</h1>

<div class="changeEvent_p">
    <p>編集する予定のタイトル</p>
</div>

<form action = "{{route('eventChange')}}" method = "post">
@csrf
<div class="Event_labels"> 
<!-- タイトル設定部分 -->
    タイトル<input type = "text" name="title" required class="Event_label_title" value = "{{$changeTask[0] -> title}}"><br>

    <!-- 組設定部分 -->
    @php
        $classes = \DB::table('classes')->get();

    @endphp
    組<select name="class" class="Event_label_class" value = "{{$changeTask[0] -> class}}">
        @foreach ($classes as $class)
            <option value='{{$class->class}}'>{{$class->class}}</option>
        @endforeach
    </select><br>

    <!-- 場所設定部分 -->
    @php
        $places = \DB::table('places')->get();

    @endphp
    場所<select name="place" class="Event_label_place" value = "{{$changeTask[0] -> place}}">
        @foreach ($places as $place)
            <option value='{{$place->place}}'>{{$place->place}}</option>
        @endforeach
    </select><br>

    <!-- 時間設定部分 -->
    <div>
        <div>
            <label>日時</label><br>
            <span>開始日時：</span>
            <input type = "date" name = "start_date" id = "startDay" class="Event_startDay"  value = "{{$changeTask[0] -> start_date}}" required>
            <input type = "time" name = "start_time" id = "starTime" class="Event_startTime" value = "{{$changeTask[0] -> start_time}}">
        </div>

        <div class="Event_end_div">
            <span>終了日時：</span>
            <input type = "date" name = "end_date" id = "endDay" class="Event_endDay" value = "{{$changeTask[0] -> end_date}}" required>
            <input type = "time" name = "end_time" id = "endTime" class="Event_endTime" value = "{{$changeTask[0] -> end_time}}">
        </div>
    </div>

    <!-- 備考記述部分 -->
    備考<br>
    <!--<input type = "text" name="remarks"><br>
	--><textarea name="remarks" cols="30" rows="10" maxlength="200" class="Event_remarks">{{$changeTask[0] -> remarks}}</textarea><br>
	</div>
	
    <input type = "hidden" name = "userName" value = "{{$changeTask[0] -> userName}}">
    <input type = "hidden" name = "id" value = "{{$changeTask[0] -> id}}">

    <div class="Event_buttons">
	    <!-- 追加・キャンセルボタン -->
	    <input type = "submit" value = "変更" class="add_ok_button">
    </div>
</form>

    <form  method = "post" action = {{route ('index') }}>
        @csrf
        <input type = "submit" class = "Event_cancel" value = "キャンセル">
    </form>
</div>
{{$changeTask[0] -> id}}