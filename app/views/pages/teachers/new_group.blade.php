<form method="POST" action="{{action('TeacherController@postNewGroup')}}">
Naam:	
<input name="name" type="text" />
<br>
Leerlingen:
@include('components.forms.students')
{{Form::token()}}
<input type="submit">
</form>