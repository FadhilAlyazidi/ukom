@extends('layout.home')

@section('content')
<div class="container">
	<div class="grid">
		<div class="row ">
			<div class="span5"></div>
			<div class="span4"><br>
				<img src="images/signin.jpg"/><br><br>
				{{Form::open(array('action' => 'UserController@authenticate')) }}
		
			<center>
			<h2>Login</h2>
			</center>

				<div class="input-control text" data-role="input-control">
					<input type="text" placeholder="type email" name="username">
					<button class="btn-clear" tabindex="-1"></button>
				</div>
				<div class="input-control password" data-role="input-control">
					<input type="password" placeholder="type password" name="password" autofocus>
					<button class="btn-reveal" tabindex="-1"></button>
				</div>
				<a =herf"{{URL::to("home") }}"><button><li>Masuk</li></button></a>
				@if(Session::has('pesan_error'))
					<p class="text-alert">{{ Session::get('pesan_error') }}</p>
				@endif
				{{Form::submit('Login', array('class' => 'large info size4')) }}
				{{Form::close() }}

				
			</div>
			<div class="span5"></div>
		</div>
	</div>


	</div>
	</div>
@stop