@extends('layouts.master')
@extends('layouts.toolbar')

@section('content')

{{$task=null;}}

<div class="page-header">
  <h1>Tasks<small>&nbsp;&nbsp;{{  $strcompleted }}</small></h1><br>
  @if ($strcompleted == 'all')  
		<div id="showgraph">	           			
		  @columnchart('tasks', 'showgraph')
		</div> 
		<br/> 
  @endif 
    @if ($strcompleted == 'work')  
		<div id="showgraph">	           			
		  @columnchart('tasksWork', 'showgraph')
		</div> 
		<br/> 
  @endif 
   <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#addtask">Add New Task</a> 			
		<div id="addtask" class="panel-collapse collapse">
			<div class="panel-body">               			
					@include('tasks/partials/_form')
			</div>
		</div>
</div>

	<ul class="list-group">
		<!--{{$i=0 }} -->
		@if ($tasks->count())
			@foreach($tasks as $task)								
				
				<li class="list-group-item">
				<img src="{{ $task->user->photo }}" width="60" height="60" alt="{{ $task->user->name }}"/>&nbsp;&nbsp; 	
				<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#task{{$i}}">
				{{ $task->title }}
				
				</a>
				<div class="btn-group pull-right" role="group" aria-label="..." > 

						{{ Form::open(['action' => ['TasksController@complete', $task->id], 'method' => 'POST']) }}
	 					{{ Form::submit('Complete', ['class'=>'btn btn-success btn-xs']) }}
						{{ Form::close() }}

				</div>									
				</li>	
				<div id="task{{$i}}" class="panel-collapse collapse">
				<div class="panel-body">   		    
				@include('tasks/partials/_editform')
				</div>
				</div>

				<br>		
				<!--{{$i++}}-->
			@endforeach	
		@else
			<p> There are no tasks to display.. you must be a new user or amazing
		@endif

	</ul>


@stop



