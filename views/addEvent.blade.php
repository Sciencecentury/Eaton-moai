@extends('layout.default')

@section('title', 'カレンダー')

@section('body')
<div class = "addEventBackColor">
<h1 class = "addEventMainTitle">予定の追加</h1>

<div class="changeEvent_p">
    <p>編集する予定のタイトル</p>
</div>

<form action = "{{route('eventAdd')}}" method = "post">
@csrf
	<div class = "Event_labels"> 
    <!-- タイトル設定部分 -->
    タイトル<input type = "text" name="title" required class="Event_label_title"><br>

    <!-- 組設定部分 --> 
    @php
        $classes = \DB::table('classes')->get();

    @endphp
    組<select name="class" class="Event_label_class">
        @foreach ($classes as $class)
            <option value='{{$class->class}}'>{{$class->class}}</option>
        @endforeach
    </select><br>

    <!-- 場所設定部分 -->
    @php
        $places = \DB::table('places')->get();
    @endphp
    場所<select name="place" class="Event_label_place">
        @foreach ($places as $place)
            <option value='{{$place->place}}'>{{$place->place}}</option>
        @endforeach
    </select><br>

	    <!-- 時間設定部分 -->
	    <div>
	        <div>
	            <label>日時</label><br>
	            <span>開始日時：</span>
	            <input type = "date" name = "start_date" id = "startDay" class="Event_startDay" required>
	            <input type = "time" name = "start_time" id = "starTime" class="Event_startTime">
	        </div>

	        <div class="Event_end_div">
	            <span>終了日時：</span>
	            <input type = "date" name = "end_date" id = "endDay" class="Event_endDay" required>
	            <input type = "time" name = "end_time" id = "endTime" class="Event_endTime">
	        </div>
	    </div>

    <!-- 備考記述部分 -->
    備考<br>
    <!--<input type = "text" name="remarks" class="addEvent_remarks"><br>
    --><textarea name="remarks" cols="30" rows="10" maxlength="200"class="Event_remarks"></textarea><br>
	</div>

	<div class="Event_buttons">
	    <!-- 追加・キャンセルボタン -->
	    <input type = "submit" value = "追加" class = "add_ok_button">
    </div>
        @php
            $user = Auth::user() -> name;
        @endphp
        <input type = "hidden" name = "userName" value = "{{$user}}">
    </form>
                <form  method = "post" action = {{route ('index') }}>
                    @csrf
                    <input type = "submit" class = "Event_cancel" value = "キャンセル">
                </form>
</div>
