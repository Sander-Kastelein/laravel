<h2>Persoonlijk verslag</h2>
Gemaakt op: {{$pe->created_at}}<br>
<a href="{{action('StudentController@getGroup',['id'=>$pe->group_id])}}">Ga naar project groep</a><br>
<a href="{{action('StudentController@getPersonalEvaluations')}}">Ga naar overicht persoonlijke verslagen</a>

<div style="border: 1px rgba(0,0,0,0.6) solid;padding:0px 8px 8px 8px;margin-top:10px;">
	<h3>{{$pe->title}}</h3>
	{{ $pe->content }}
</div>
