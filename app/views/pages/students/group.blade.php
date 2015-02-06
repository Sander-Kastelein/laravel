<h1>{{$group->name}}</h1>


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
				<td>{{$student->name}}</td>
				<td>{{$student->class}}</td>
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

<h2>Project bestanden</h2>
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
		@foreach($group->project->files as $file)
			<tr>
				<td><input type="checkbox" name="files[]"></td>
				<td>{{$file->name}}</td>
				<td>{{$file->size}}</td>
				<td>
					<a href="{{action('StudentController@getProjectFileDownload',['id'=>$file->id])}}">
						<i class="fa fa-download"></i>
					</a>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>