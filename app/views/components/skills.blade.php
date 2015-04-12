<h2>Competenties</h2>

<table class="table">
	<thead>
		<tr>
			<th>Competentie</th>
			<th>Niveau 1</th>
			<th>Niveau 2</th>
			<th>Niveau 3</th>
		</tr>
	</thead>
	<tbody>
		@foreach(Skills::all() as $skill)
		<tr>
			<td>{{$skill->name}}</td>
			<td><input type="checkbox" {{ ($skill->level($user) >= 1)?"checked":"" }} class="tooltip" data-toggle="tooltip" title="{{$skill->description_level_1}}"></td>
			<td><input type="checkbox" {{ ($skill->level($user) >= 2)?"checked":"" }} class="tooltip" data-toggle="tooltip" title="{{$skill->description_level_2}}"></td>
			<td><input type="checkbox" {{ ($skill->level($user) >= 3)?"checked":"" }} class="tooltip" data-toggle="tooltip" title="{{$skill->description_level_3}}"></td>
		</tr>	
		@endforeach
	</tbody>
</table>