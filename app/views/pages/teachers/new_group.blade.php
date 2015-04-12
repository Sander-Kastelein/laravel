<form method="POST" action="{{action('TeacherController@postNewGroup')}}">
Naam:	
<input class="form-control" name="name" type="text" />
<br>
Leerlingen:
@include('components.forms.students')
<br>
Project:
@include('components.forms.projects')
<br>
{{Form::token()}}
<input class="btn btn-success pull-right" value="Maak nieuwe groep" type="submit">
</form>