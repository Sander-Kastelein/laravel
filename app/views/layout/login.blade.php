<!DOCTYPE html>
<html>
	
<head>
	<title>Technasium Online - Login</title>
	<meta charset="utf-8">
	<link href="/css/login.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" type="text/css" href="/css/hover.min.css">
	<link rel="stylesheet" type="text/css" href="/css/animate.min.css">
	<link rel="stylesheet" type="text/css" href="/css/alertify.min.css">
	<link rel="stylesheet" type="text/css" href="/css/alertify-bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--webfonts-->
	<link href='//fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
	<!--//webfonts-->
	<style type="text/css">
		html,body{
			overflow: hidden;
				height: 100%;
		}
		.main{
			min-height: 100%;
		}
		.submit{
			margin-top: 30px;
		}
		label{
			color: #777;
			font-style: italic;
			float: right;
			padding-right: 5px;
		}
		input[type='checkbox']{
			margin-top: 6px;
		}
	</style>
</head>
<body>
	 <!---start-main-->
	 <div class="main">
		<div class="login-form hidden">
			<h1>Login</h1>
					<div class="head">
						<img src="/img/user.png" alt="Hoofd"/>
					</div>

					@if(Session::has('alerts'))
						@foreach(Session::get('alerts',[]) as $alert)
							<div style="color:red; text-align:center; width:100%;">{{$alert->content}}</div>
						@endforeach
					@endif


					<form action="{{action('AuthController@postLogin')}}" method="POST">
						<input type="text" name="email" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" >
						<input type="password" name="password" value="Wachtwoord" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Wachtwoord';}">

						
						<input type="checkbox" style="float:right;" id="remember" name="remember">
						<label for="remember">Onthoud mij (Alleen op priv&eacute; computers!)</label>
						{{ Form::token() }}
						<div class="submit">
							<input type="submit" onclick="login()" value="LOGIN" >
					</div>	
						<p><a href="#" onclick="alertify.alert('Neem contact op met de administrator van de school.');">Wachtwoord vergeten ?</a></p>
				</form>
			</div>
			<!--//End-login-form-->

		</div>
			 <!--//end-main-->
		<script src="/js/jquery.min.js"></script>
		<script src="/js/alertify.min.js"></script>
		<script type="text/javascript">
			function login(){
				$('form').submit();
			}

			alertify.defaults = {
		        // dialogs defaults
		        modal:true,
		        movable:false,
		        resizable:false,
		        closable:true,
		        maximizable:false,
		        pinnable:true,
		        pinned:true,
		        padding: true,
		        overflow:true,
		        maintainFocus:true,
		        transition:'pulse',

		        // notifier defaults
		        notifier:{
		            // auto-dismiss wait time (in seconds)  
		            delay:5,
		            // default position
		            position:'bottom-right'
		        },

		        // language resources 
		        glossary:{
		            // dialogs default title
		            title:'Wachtwoord vergeten',
		            // ok button text
		            ok: 'OK'        
		        },

		        // theme settings
		        theme:{
		            // class name attached to prompt dialog input textbox.
		            input:'ajs-input',
		            // class name attached to ok button
		            ok:'ajs-ok',
		            // class name attached to cancel button 
		            cancel:'ajs-cancel'
		        }
		    };
			$(function(){
				$('.login-form').addClass('animated');
				$('.login-form').addClass('fadeInUp');
			});
		</script>		
</body>
</html>