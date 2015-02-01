<h1>{{$project->name}}</h1>
Beheerder:<strong>{{User::find($project->owner_id)->name}}</strong>
<br>
Beschrijving:
<div class="well well-sm">
	{{$project->description}}
</div>


<h2>Groepen</h2>
<table class="table table-hover">
	<thead>
		<tr>
			<th>Naam</th>
			<th>Leerlingen</th>
		</tr>
	</thead>
	<tbody>
		@foreach($project->groups as $group)
			<tr>
				<td><a href="{{action('TeacherController@getGroup',['id'=>$group->id])}}">{{$group->name}}</a></td>
				<td>{{count($group->students)}}</td>
			</tr>
		@endforeach
	</tbody>
</table>

