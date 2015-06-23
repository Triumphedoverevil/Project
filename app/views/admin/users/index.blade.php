@extends('layouts.master')
@extends('layouts.toolbar')

@section('content')

<div class="page-header">
  <h1>Users<small>&nbsp;&nbsp;all users</small></h1><br>

 <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#addtask">Add New User</a> 			
		<div id="addtask" class="panel-collapse collapse">
			<div class="panel-body">               			
					@include('admin/users/partials/_form')
			</div>
		</div>  
</div>

	<ul class="list-group">
		<!--{{$i=0 }} -->
		@foreach($users as $user)								
			<li class="list-group-item">
			<img src="{{ $user->photo }}" width="60" height="60" alt="{{ $user->name }}">&nbsp;&nbsp; 	
			{{ $user->name }}
		
			<div class="row btn-group pull-right" > 

					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#user{{$i}}">
					{{ Form::open(['action' => ['UserController@edit', $user->id], 'method' => 'PUT']) }}
 					{{ Form::submit('Edit', ['class'=>'btn btn-primary btn-xs']) }}
					{{ Form::close() }}
					</a>					

			</div>									
			</li>	
			<div id="user{{$i}}" class="panel-collapse collapse">
			<div class="panel-body">   		    
			@include('admin/users/partials/_form')
			</div>
			</div>

			<br>		
			<!--{{$i++}}-->
		@endforeach	
		
	</ul>


@stop