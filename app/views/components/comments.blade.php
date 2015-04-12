<h3>Comments <span class="badge">{{count($pe->comments)}}</span></h3>

@foreach($pe->comments as $comment)
	<div class="panel panel-default">
	  <div class="panel-heading">
	  <h3 class="panel-title">{{$comment->owner->name}}<span class="label label-default pull-right">{{ft($comment->created_at)}}</span></h3>
	  </div>
	  <div class="panel-body">
	    {{$comment->body}}
	  </div>
	</div>
@endforeach

<h3>Voeg een comment toe</h3>
<form action="{{$pe->id}}/addcomment" method="POST">
	<textarea rows="10" id="html" name="html"></textarea>
	<input style="margin-top: 5px;" class="btn btn-success pull-right" type="submit" value="Voeg comment toe">
</form>
