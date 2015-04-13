<a href="{{action('StudentController@getNewPersonalEvaluation',['id'=>$group->id])}}" class="btn btn-success pull-right">Nieuw persoonlijk verslag</a>
<h1>{{$group->name}}</h1>
<h4>{{$group->project->name}}</h4>
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
				<td>{{formatBytes($file->size)}}</td>
				<td>
					<a href="{{action('StudentController@getProjectFileDownload',['id'=>$file->id])}}">
						<i class="fa fa-download"></i>
					</a>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>


<h2>Groep bestanden</h2>
<a href="{{action('StudentController@getUploadFile',['id'=>$group->id])}}">Upload een bestand</a>
<table class="table table-hover">
	<thead>
		<tr>
			<th>Bestandnaam</th>
			<th>Groote</th>
			<th>Ge&uuml;pload op</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		@foreach($group->files as $file)
			<tr>
				<td>{{$file->name}}</td>
				<td>{{formatBytes($file->size)}}</td>
				<td>{{ft($file->created_at)}}</td>
				<td>
					<a href="{{action('StudentController@getFileDownload',['id'=>$group->id,'groupFileId'=>$file->id])}}">
						<i class="fa fa-download"></i>
					</a>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>

<h2>Persoonlijke verslagen</h2>
<a href="{{action('StudentController@getNewPersonalEvaluation',['id'=>$group->id])}}" class="btn btn-success pull-right">Nieuw persoonlijk verslag</a>
<table class="table table-hover">
	<thead>
		<tr>
			<th>Titel</th>
			<th>Datum</th>
		</tr>
	</thead>
	<tbody>
		@foreach($group->getMyPersonalEvaluations() as $pe)
			<tr>
				<td><a href="{{action('StudentController@getPersonalEvaluation',['id'=>$pe->id])}}">{{$pe->title}}</a></td>
				<td>{{ft($pe->created_at)}}</td>
			</tr>
		@endforeach
	</tbody>
</table>


