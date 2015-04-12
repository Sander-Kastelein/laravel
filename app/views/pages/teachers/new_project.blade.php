<h2>Nieuw Project</h2>
<form action="{{action('TeacherController@postNewProject')}}" method="POST">
	Project naam:
	<input class="form-control" name="name" type="text"><br>

	Beschrijving:
	<textarea name="description"></textarea>
	<br>

	{{Form::token()}}
	<input class="btn btn-success pull-right" type="submit" value="Maak nieuwe groep aan">
</form>