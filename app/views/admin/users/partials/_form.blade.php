{{ Form::Open(['action' => ['UserController@update'], 'method' => 'PATCH','class'=>'form-horizontal' ]) }}

			<div class="row form-group">

			{{Form::label('name', 'Name:')}}

			{{ Form::text('name',null, ['class'=>'form-control']) }}

			{{Form::label('password', 'Password:')}}

			{{ Form::password('password',null, ['class'=>'form-control']) }}

			<br>

  			{{Form::submit('Login',['class'=>'btn btn-primary btn-sm'] )}}

  			</div>

{{ Form::close() }}