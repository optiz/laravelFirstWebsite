<h1>Shoutout to: {{$text}}</h1>

@if($text=="gwapo")
<h1>Gwapo</h1>
@elseif($text=="gwapa")
<h1>Gwapa</h1>
@endif



@foreach($colors as $color =>$description)
{{$color }} - {{$description}}
<br/>
@endforeach