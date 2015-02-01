<table class="table table-hover">
		<thead>
			<th></th>
			<th>Projectnaam</th>
			<th>Groepen</th>
		</thead>
		<tbody>
			@foreach(Project::all() as $project)
				<tr class="clickable" onclick="$(this).find('input[type=checkbox]').prop('checked',!$(this).find('input[type=checkbox]').prop('checked'));">
					<td><input onclick="$(this).prop('checked',!$(this).prop('checked'))" name="students[]" value="{{$project->id}}" type="checkbox"></td>
					<td>{{$project->name}}</td>
					<td>{{count($project->groups)}}</td>
				</tr>
			@endforeach
		</tbody>

</table>