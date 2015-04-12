<h2>Competenties</h2>

@foreach(Skills::all() as $skill)
<div class="row">
	<label>{{$skill->name}}</label>
	<input type="checkbox" {{ ($skill->level($user) >= 1)?"checked":"" }}>
	<input type="checkbox" {{ ($skill->level($user) >= 2)?"checked":"" }}>
	<input type="checkbox" {{ ($skill->level($user) >= 3)?"checked":"" }}>
</div>	
@endforeach