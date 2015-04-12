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
			<td><div class="cusotm-tooltip" data-toggle="tooltip" title="{{$skill->description_level_1}}"><input type="checkbox" {{ ($skill->level($user) >= 1)?"checked":"" }}></div></td>
			<td><div class="custom-tooltip" data-toggle="tooltip" title="{{$skill->description_level_2}}"><input type="checkbox" {{ ($skill->level($user) >= 2)?"checked":"" }}></div></td>
			<td><div class="custom-tooltip" data-toggle="tooltip" title="{{$skill->description_level_3}}"><input type="checkbox" {{ ($skill->level($user) >= 3)?"checked":"" }}></div></td>
		</tr>	
		@endforeach
	</tbody>
</table>