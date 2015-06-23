@extends('layouts.master')

<div align="center" class="container" >			
		<h1>Please Login To Continue</h1>
		<br/>

		{{HTML::link('/login', 'Login with Facebook')}}
		
<!-- 		
		{{ Form::open() }}

			<div class="row form-group">

			{{Form::label('username', 'Username:')}}

			{{ Form::text('username', Input::old('username'), ['class'=>'form-control']) }}

			{{Form::label('password', 'Password:')}}

			{{ Form::password('password', $value = null, ['class'=>'form-control']) }}

			<br>

  			{{Form::submit('Login',['class'=>'btn btn-primary btn-sm'] )}}

  			</div>

  		{{ Form::close() }}
  			
			
	
			<br><br>
	<text style="font-size: 15px;"><a href=/chris/tasks> Sign-up for a free account!</a></text>	

	</div>	

 -->

