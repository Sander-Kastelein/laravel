<form action="{{action('StudentController@postUploadFile')}}" method="POST" enctype="multipart/form-data">
	<input type="hidden" name="group_id" value="{{$group->id}}" />
	<input type="file" name="file"/><br>
{{Form::token()}}
	<input type="submit" value="Uploaden">
</form>