@if(Session::has('alerts'))
	@foreach(Session::get('alerts',[]) as $alert)
		{{$alert}}
	@endforeach
@endif