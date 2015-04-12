<h2>Dashboard</h2>

<h3>Nieuwe persoonlijke verslagen</h3>
<ul>
	@foreach(PersonalEvaluation::orderBy('created_at','DESC')->get()->take(5) as $pe)
	<li>{{ft($pe->created_at)}} <a href="{{action('TeacherController@getUser',['id'=>$pe->user->id])}}">{{$pe->user->name}}</a> - <a href="{{action('TeacherController@getPersonalEvaluation',['id'=>$pe->id])}}">{{$pe->title}}</a></li>
	@endforeach
</ul>