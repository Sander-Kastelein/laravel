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
				<td>
					@if($student->currentProject()->name != 'Geen')
					<a href="{{action('TeacherController@getProject',['id'=>$student->currentProject()->id])}}">{{$student->currentProject()->name}}</a><br>
					@else
					{{$student->currentProject()->name}}<br>
					@endif
				</td>
				<td>
					@if($student->currentGroup()->name != 'Geen')
					<a href="{{action('TeacherController@getGroup',['id'=>$student->currentGroup()->id])}}">{{$student->currentGroup()->name}}</a><br>
					@else
					{{$student->currentGroup()->name}}<br>
					@endif
				</td>
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

