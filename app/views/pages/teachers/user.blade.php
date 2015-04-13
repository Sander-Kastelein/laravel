<h2>{{$user->name}}</h2>

Huidige project: 
@if($user->currentProject()->name != 'Geen')
<a href="{{action('TeacherController@getProject',['id'=>$user->currentProject()->id])}}">{{$user->currentProject()->name}}</a><br>
@else
{{$user->currentProject()->name}}<br>
@endif

Huidige groep: 
@if($user->currentGroup()->name != 'Geen')
<a href="{{action('TeacherController@getGroup',['id'=>$user->currentGroup()->id])}}">{{$user->currentGroup()->name}}</a><br>
@else
{{$user->currentGroup()->name}}<br>
@endif

<h3>Persoonlijke verslagen <span class="badge">{{count($user->personalEvaluations)}}</span></h3>

<ul class="list-group">
	@foreach($user->personalEvaluations as $pe)
	  <a href="{{action('TeacherController@getPersonalEvaluation',['id'=>$pe->id])}}">
	  <li class="list-group-item">
		{{$pe->title}}
		<span style="margin-left: 15px;" class="badge pull-right">{{count($pe->comments)}} comments</span>
	  	<span class="label label-default pull-right">{{ft($pe->created_at)}}</span>
	  	<span style="margin-right: 15px;" class="label label-info pull-right">{{$pe->group->name}}</span>
	  	<span style="margin-right: 15px;" class="label label-primary pull-right">{{$pe->group->project->name}}</span>
	  </li>
	</a>
  @endforeach
</ul>

@if(count($user->personalEvaluations) == 0)
Nog geen persoonlijke verslagen
@endif


@include('components.skills')

