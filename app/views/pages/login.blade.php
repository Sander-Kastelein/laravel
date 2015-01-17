<form action="{{action('AuthController@postLogin')}}" method="POST">
	{{Form::token()}}
	<input type="text" name="email">
	<input type="password" name="password">
	<input type="checkbox" name="remember">
	<input type="submit" value="{{trans('actions.login')}}">
</form>