<form action="{{action('TeacherController@postUploadProjectFile')}}" method="POST" enctype="multipart/form-data">
	<input type="hidden" name="project_id" value="{{$projectId}}" />
	<input type="file" name="file"/><br>
	Verborgen <input type="checkbox" name="hidden" />
{{Form::token()}}
	<input type="submit" value="Uploaden">
</form>