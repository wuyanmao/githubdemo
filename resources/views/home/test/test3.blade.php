 id&emsp;&emsp;&emsp;name&emsp;&emsp;&emsp;email&emsp;&emsp;&emsp;<br/>
 @foreach($data as  $value)
    {{$value -> id}}&emsp;&emsp;&emsp;&emsp;
    {{$value -> name}}&emsp;&emsp;&emsp;&emsp;
    {{$value -> email}}&emsp;&emsp;&emsp;&emsp;<br/>
 @endforeach
 <hr/>
 今天是星期
 @if($day == '0')
     7
 @elseif($day == '1')
     1
 @elseif($day == '2')
     2
 @elseif($day == '3')
     3
 @elseif($day == '4')
     4
 @elseif($day == '5')
     5
 @else($day == '6')
     6
 @endif

