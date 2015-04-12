<h2>Competenties</h2>

<table class="table">
	<thead>
		<tr>
			<th>Competentie</th>
			<th>Geen niveau</th>
			<th>Niveau 1</th>
			<th>Niveau 2</th>
			<th>Niveau 3</th>
		</tr>
	</thead>
	<tbody>
		@foreach(Skill::all() as $skill)
		<tr>
			<td>{{$skill->name}}</td>
			<td>
				<input type="radio" name="skill_{{$skill->id}}" class="skill custom-tooltip" value="0" data-toggle="tooltip" title="Deze leerling heeft deze competentie nog op geen enkel niveau behaald." {{ ($skill->level($user) < 1)?"checked":"" }}>
			</td>
			<td><input type="radio" name="skill_{{$skill->id}}" data-userid="{{$user->id}}" class="skill custom-tooltip" value="1" data-toggle="tooltip" title="{{$skill->description_level_1}}" {{ ($skill->level($user) >= 1)?"checked":"" }}></td>
			<td><input type="radio" name="skill_{{$skill->id}}" data-userid="{{$user->id}}" class="skill custom-tooltip" value="2" data-toggle="tooltip" title="{{$skill->description_level_2}}" {{ ($skill->level($user) >= 2)?"checked":"" }}></td>
			<td><input type="radio" name="skill_{{$skill->id}}" data-userid="{{$user->id}}" class="skill custom-tooltip" value="3" data-toggle="tooltip" title="{{$skill->description_level_3}}" {{ ($skill->level($user) >= 3)?"checked":"" }}></td>
		</tr>	
		@endforeach
	</tbody>
</table>