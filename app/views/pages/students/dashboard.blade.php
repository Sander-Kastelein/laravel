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

<div class="row">
	<div class="col-md-6 col-s-12 col-xs-12 col-lg-6">
		<h4>Nieuwste comment:</h4>
			@if($comment)
			<div class="panel panel-default">
			  <div class="panel-heading">
			  <h3 class="panel-title">{{ $comment->owner->name }}<span class="label label-default pull-right">{{ft($comment->created_at)}}</span></h3>
			  </div>
			  <div class="panel-body">
			  	{{ $comment->body }}
			  </div>
			</div>

			<a href="{{action('StudentController@getPersonalEvaluation',['id'=>$comment->personalEvaluation->id])}}">Ga naar het persoonlijk verslag</a>	
			@else
				Nog geen comments
			@endif
	</div>
	<div class="col-md-6 col-s-12 col-xs-12 col-lg-6">
		<h4>Statistieken</h4>
		<ul class="list-group">
			<li class="list-group-item">
				<span class="badge">{{ count($user->personalEvaluations) }}</span>
				Persoonlijke verslagen
			</li>

			<li class="list-group-item">
				<span class="badge">{{ count($user->groups) }}</span>
				Groepen
			</li>

			<li class="list-group-item">
				<span class="badge">{{ $amountOfComments }}</span>
				Comments
			</li>

			<li class="list-group-item">
				<span class="badge">{{ $amountOfFiles }}</span>
				Ge&uuml;ploade files
			</li>

		</ul>
	</div>
</div>