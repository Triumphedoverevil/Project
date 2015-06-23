<script type="text/javascript">
$(document).ready(function() 
	{$('.date').datepicker(); });
</script>

<div class="container-fluid">

{{ Form::model($task, ['action' => ['TasksController@update', $task->id], 'method' => 'PATCH','class'=>'form-horizontal' ]) }}
	
	<div class="row">
		<div class="form-group">

		{{Form::label('category', 'Category:')}}
		{{ Form::select('category',['Home','Work','Automotive','Projects'],$task->category, ['class'=>'']) }}
		&nbsp;
		{{Form::label('priority', 'Priority:')}}		
		{{Form::select('priority',['Low','Medium','High'],$task->priority,['class'=>'']) }}

		</div>	
	</div>	

	<div class="row">
		<div class="form-group col-lg-5">

		{{Form::label('title', 'Title:')}}

		{{ Form::text('title',null, ['class'=>'form-control']) }}

		</div>
	</div>

	<div class="row form-group">

		{{Form::label('body', 'Description:')}}
		{{ Form::textarea('body',null, ['class'=>'form-control'])}}

	</div>


	<div class="row">

		<div class="form-group col-lg-3">

		{{Form::label('assignedBy', 'Assigned By:')}}

		{{ Form::text('assignedBy',null,['class'=>'input-small','disabled' => 'disabled']) }}

		</div>
	</div>
	
	<div class="row">

		<div class="form-group col-lg-3">	

        {{Form::label('dueDate', 'Due Date:')}}

		{{ Form::text('dueDate',$task->dueDate,['class'=>'date datepicker', 'id' => 'dueDate' . $task->id]) }} 

		</div>
	</div>

	<div class="btn-group pull-right">
	
		{{Form::submit('Edit Task',['class'=>'btn btn-warning btn-xs'] )}}
		{{ Form::close() }}
	</div>
	<div class="btn-group pull-right">
		{{ Form::open(['action' => ['TasksController@destroy', $task->id], 'method' => 'DELETE']) }}
	 	{{ Form::submit('Delete', ['name'=>'delete', 'class'=>'btn btn-danger btn-xs']) }}
		{{ Form::close() }}	

	
	</div>
	


</div>
