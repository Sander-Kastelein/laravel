<select class="form-control" name="project">
	@foreach(Project::all() as $project)
		<option value="{{$project->id}}">{{$project->name}}</option>
	@endforeach
</select>