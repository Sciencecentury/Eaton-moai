<html>
<head>
    <meta charset="UTF-8">
    <link href = "{{ asset('css/all_parts.css') }}" rel = "stylesheet">
</head>
<script src = "//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>

<body>
	<div class="all_temp_block">
		<div class="temp_select_box_frame">
			<h1 class="temp_maintitle">テンプレートの削除</h1>
			<select class="temp_select_box">
			   <option value="temp_select">削除したい要素の種類を選択してください</option>
			   <option value="event">イベントタイトル</option>
			   <option value="class">組</option>
			   <option value="place">場所</option>
			</select>
		</div>
	
    	<section id="event"class="eve_del_title">
        <form target="_blank" class="temp_block" action="eventDelete" method="post">
            @csrf
            <h2 class="temp_title">タイトルの削除</h2>
            @php
                $titles = \DB::table('titles')->get();
            @endphp
   			<div class="temp_content">
	            @foreach ($titles as $title)
	                <input type="checkbox"  value='{{$title->id}}' name='checked[]'>{{$title->title}}<br/>
	            @endforeach
            </div>
            <input type="submit" class="delete_button" value="削除">
        </form>
        </section>
        		
        <section id="class"　class="eve_del_class">
        <form target="_blank" class="temp_block" action="classDelete" method="post">
            @csrf
            <h2 class="temp_class">組の削除</h2>
            @php
                $classes = \DB::table('classes')->get();
            @endphp
	            <div class="temp_content">
	            @foreach ($classes as $class)
	                <input type="checkbox"  value='{{$class->id}}' name='checked[]'>{{$class->class}}<br/>
	            @endforeach
	            </div>
            <input type="submit" class="delete_button" value="削除">
        </form>
        </section>
         		
        <section id="place"　class="eve_del_place">
        <form target="_blank" class="temp_block" action="placeDelete" method="post">
            @csrf
            <h2 class="temp_place">場所の削除</h2>
            @php
                $places = \DB::table('places')->get();
            @endphp
	            <div class="temp_content">
	            @foreach ($places as $place)
	                <input type="checkbox"  value='{{$place->id}}' name='checked[]'>{{$place->place}}<br/>
	            @endforeach
	            </div>
            <input type="submit" class="delete_button" value="削除">
        </form>
        </section>
        			
    </div>
    
<script>
	$(document).ready(function(){
       $('section').hide();
    });
	
   $('select').change(function () {
   var val = $('select option:selected').val();
   if (val == 'temp_select'){
       $('section').hide();
        return;
   }
   $('section').fadeOut();
   $('section#' + val ).fadeIn();
   });
       
</script>
</body>
</html>