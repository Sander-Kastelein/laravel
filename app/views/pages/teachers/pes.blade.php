<h2>Persoonlijke verslagen</h2>

<table class="table table-hover">
	<thead>
		<tr>
			<th></th>
			<th>Titel</th>
			<th>Klas</th>
			<th>Datum</th>
		</tr>
	</thead>
	<tbody>
		@foreach($user->personalEvaluations as $pe)
			<tr>
				<td><input type="checkbox" name="files[]"></td>
				<td><a href="{{action('TeacherController@getPersonalEvaluation',['id'=>$pe->id])}}">{{$pe->title}}</a></td>
				<td>{{$pe->class}}</td>
				<td>{{ft($pe->created_at)}}</td>
			</tr>
		@endforeach
	</tbody>
</table>