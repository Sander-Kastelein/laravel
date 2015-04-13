<h2>Persoonlijke verslagen</h2>

<table class="table table-hover">
	<thead>
		<tr>
			<th>Titel</th>
			<th>Klas</th>
			<th>Datum</th>
		</tr>
	</thead>
	<tbody>
		@foreach($pes as $pe)
			<tr>
				<td><a href="{{action('TeacherController@getPersonalEvaluation',['id'=>$pe->id])}}">{{$pe->title}}</a></td>
				<td>{{$pe->class}}</td>
				<td>{{ft($pe->created_at)}}</td>
			</tr>
		@endforeach
	</tbody>
</table>

@if(count($pes) == 0)
Nog geen persoonlijke verslagen
@endif

