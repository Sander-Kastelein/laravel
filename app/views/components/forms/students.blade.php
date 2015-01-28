<table class="table table-hover">
		<thead>
			<th></th>
			<th>Naam</th>
			<th>Klas</th>
		</thead>
		<tbody>
			@foreach(User::getStudents() as $student)
				<tr>
					<td><input name="students[]" value="{{$student->id}}" type="checkbox"></td>
					<td>{{$student->name}}</td>
					<td>{{$student->class}}</td>
				</tr>
			@endforeach
		</tbody>

</table>