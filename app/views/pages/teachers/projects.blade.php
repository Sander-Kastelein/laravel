<h1>Projecten</h1>
<a class="btn btn-info" href="{{action('TeacherController@getNewProject')}}">Nieuwe Project</a>

<table id="projects" class="table table-hover">
	<thead>
		<tr>
			<th>Naam</th>
			<th>Aantal groepen</th>
			<th>Beheerder</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		@foreach($projects as $project)
			<tr>
			<td><a href="{{action('TeacherController@getProject',['id'=>$project->id])}}">{{$project->name}}</a></td>
			<td>{{count($project->groups)}}</td>
			<td>{{User::find($project->owner_id)->name}}</td>
			<td><a onclick="return confirm('Weet u zeker dat u dit project wilt verwijderen?');" href="{{action('TeacherController@getDeleteProject',[$project->id])}}"><i class="fa fa-trash"></i></a></td>
			</tr>
		@endforeach
	</tbody>
</table>
<script>
	$(function(){
		$(document).ready( function () {
		    $('#projects').DataTable();
		} );
	});
</script>