<h1>Groepen</h1>


<table class="table table-hover">
	<thead>
		<th>Naam</th>
		<th>Aantal leerlingen</th>
		<th>Docenten</th>
	</thead>
	<tbody>
		@foreach($groups as $group)
		<tr>
			<td><a href="{{action('StudentController@getGroup',['id'=>$group->id])}}">{{$group->name}}</a></td>
			<td>{{count($group->students)}}</td>
			<td>{{$group->getTeachersAsString()}}</td>
		</tr>
		@endforeach
	</tbody>
</table>