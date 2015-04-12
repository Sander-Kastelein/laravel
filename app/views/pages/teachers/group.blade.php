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
				<td><a href="{{action('TeacherController@getUser',['id'=>$student->id])}}">{{$student->name}}</a></td>
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

