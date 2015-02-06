<h2>Nieuw Project</h2>
<form action="{{action('TeacherController@postNewProject')}}" method="POST">
	Project naam:
	<input name="name" type="text"><br>

	Beschrijving:
	<textarea name="description"></textarea>
	<br>

	{{Form::token()}}
	<input type="submit" value="Maak nieuwe groep aan">
</form>