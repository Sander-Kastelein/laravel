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

<h2>Project bestanden</h2>
<a href="{{action('TeacherController@getUploadProjectFile',['id'=>$project->id])}}">Upload nieuw Project Bestand</a>
<table class="table table-hover">
	<thead>
		<tr>
			<th></th>
			<th>Bestandnaam</th>
			<th>Groote</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		@foreach($project->files as $file)
			<tr>
				<td><input type="checkbox" name="files[]"></td>
				<td>{{$file->name}}</td>
				<td>{{$file->size}}</td>
				<td><a href="{{action('TeacherController@getProjectFileDownload',['id'=>$file->id])}}"><i class="fa fa-download"></i></a></td>
			</tr>
		@endforeach
	</tbody>
</table>

