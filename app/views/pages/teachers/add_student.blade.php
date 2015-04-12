<form method="POST" action="{{action('TeacherController@postAddStudent')}}">
Emailadres:
<input type="email" name="email" class="form-control">
<br>
Naam:
<input name="name" class="form-control" type="text" />
<br>
Klas:
<input name="class" class="form-control" type="text" />
<br>
{{Form::token()}}
<input class="btn btn-success pull-right" value="Voeg leerling toe" type="submit">
</form>