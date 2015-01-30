<table class="table table-hover">
		<thead>
			<th></th>
			<th>Naam</th>
			<th>Klas</th>
		</thead>
		<tbody>
			@foreach(User::getStudents() as $student)
				<tr class="clickable" onclick="$(this).find('input[type=checkbox]').prop('checked',!$(this).find('input[type=checkbox]').prop('checked'));">
					<td><input onclick="$(this).prop('checked',!$(this).prop('checked'))" name="students[]" value="{{$student->id}}" type="checkbox"></td>
					<td>{{$student->name}}</td>
					<td>{{$student->class}}</td>
				</tr>
			@endforeach
		</tbody>

</table>