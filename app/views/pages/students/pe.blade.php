<h2>Persoonlijk verslag</h2>
Gemaakt op: {{$pe->created_at}}<br>
<a href="{{action('StudentController@getGroup',['id'=>$pe->group_id])}}">Ga naar project groep</a><br>
<a href="{{action('StudentController@getPersonalEvaluations')}}">Ga naar overicht persoonlijke verslagen</a>

<h3>{{$pe->title}}</h3>

<pre>
	{{$pe->content}}
</pre>