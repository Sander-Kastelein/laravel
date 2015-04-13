<h1>Welkom terug {{$user->name}}</h1>
<hr>
<h3>Huidig project:</h3>
<ul class="list-group">
	  <a href="{{action('StudentController@getGroup',['id'=>$user->currentGroup()->id])}}">
	  <li class="list-group-item">
		{{$user->currentGroup()->name}}
	  	<span class="label label-default pull-right">{{ft($user->currentGroup()->created_at)}}</span>
	  	<span style="margin-right: 15px;" class="label label-primary pull-right">{{$user->currentGroup()->project->name}}</span>
	  </li>
	</a>
</ul>