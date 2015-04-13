<h1>Welkom terug {{$user->name}}</h1>
<hr>

<h3>Nieuwe persoonlijke verslagen</h3>
	<ul class="list-group">
	@foreach(PersonalEvaluation::orderBy('created_at','DESC')->get()->take(5) as $pe)
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

<h3>Nieuwe comments</h3>
<div class="row">
	@foreach(PersonalEvaluationComment::orderBy('created_at','DESC')->get()->take(4) as $comment)
		<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
			<div class="panel panel-default">
			  <div class="panel-heading">
			  <h3 class="panel-title">{{ $comment->owner->name }}<span class="label label-default pull-right">{{ft($comment->created_at)}}</span></h3>
			  </div>
			  <div class="panel-body">
			  	{{ $comment->body }}
			  </div>
			</div>
			<a href="{{action('TeacherController@getPersonalEvaluation',['id'=>$comment->personalEvaluation->id])}}">Ga naar het persoonlijk verslag</a>	
		</div>
	@endforeach
</div>