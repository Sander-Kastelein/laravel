<h1>{{$group->name}}</h1>

<a href="{{action('TeacherController@getProject',['id'=>$group->project->id])}}">Ga naar het project {{$group->project->name}}</a>

<h2>Leerlingen</h2>
<table class="table table-hover">
	<thead>
		<tr>
			<th>Naam</th>
			<th>Klas</th>
		</tr>
	</thead>
	<tbody>
		@foreach($group->students as $student)
			<tr>
				<td><a href="{{action('TeacherController@getUser',['id'=>$student->id])}}">{{$student->name}}</a></td>
				<td>{{$student->class}}</td>
			</tr>
		@endforeach
	</tbody>
</table>

<h2>Groep bestanden</h2>
<table class="table table-hover">
	<thead>
		<tr>
			<th>Bestandnaam</th>
			<th>Groote</th>
			<th>Ge&uuml;pload op</th>
			<th>Ge&uuml;pload door</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		@foreach($group->files as $file)
			<tr>
				<td>{{$file->name}}</td>
				<td>{{formatBytes($file->size)}}</td>
				<td>{{ft($file->created_at)}}</td>
				<td>{{$file->owner->name}}</td>
				<td>
					<a href="{{action('TeacherController@getFileDownload',['id'=>$group->id,'groupFileId'=>$file->id])}}">
						<i class="fa fa-download"></i>
					</a>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>


<h2>Docenten</h2>
<table class="table table-hover">
	<thead>
		<tr>
			<td>Naam</td>
		</tr>
	</thead>
	<tbody>
		@foreach($group->teachers as $teacher)
			<tr>
				<td>{{$teacher->name}}</td>
			</tr>
		@endforeach
	</tbody>
</table>

