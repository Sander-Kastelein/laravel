<h1>Leerlingen <a class="btn btn-info pull-right" href="{{action('TeacherController@getAddStudent')}}">Voeg een leerling toe</a></h1>
<br>
<table id="students" class="table">
	<thead>
		<tr>
			<th>Naam</th>
			<th>Klas</th>
			<th>Huidige project</th>
			<th>Huidige groep</th>
		</tr>
	</thead>
	<tbody>
		@foreach($students as $student)
			<tr>
				<td><a href="{{action('TeacherController@getUser',['id'=>$student->id])}}">{{$student->name}}</a></td>
				<td>{{$student->class}}</td>
				<td>{{$student->currentProject()->name}}</td>
				<td>{{$student->currentGroup()->name}}</td>
			</tr>
		@endforeach
	</tbody>
</table>

<script>
	$(function(){
		$(document).ready( function () {
		    $('#students').DataTable();
		} );
	});
</script>

