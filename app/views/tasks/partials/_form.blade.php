<script type="text/javascript">
$(document).ready(function() 
	{
	$('#dueDate').datepicker({})
	;} 
);
</script>

<div class="container-fluid">

{{ Form::model($task, ['url'=>'/tasks','class'=>'form-horizontal' ]) }}

	<div class="row">
		<div class="form-group">
		{{Form::label('category', 'Category:')}}
		{{ Form::select('category',['Home','Work','Automotive','Projects'],'0', ['class'=>'']) }}
		&nbsp;
		{{Form::label('priority', 'Priority:')}}
		{{Form::select('priority',['Low','Medium','High'],'0',['class'=>'']) }}

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
		<div class="form-group">		

		{{Form::label('user_id', 'Assign To:')}}
		{{ Form::select('user_id', $users, ['class'=>'form-control']) }}
		&nbsp;
		{{Form::label('emailbotify', 'Send Email:')}}                
        {{ Form::checkbox('emailnotify','1', false) }}

    	</div>
    </div>
    	
    <div class="row">
    	<div class="form-group col-lg-2">  

        {{Form::label('dueDate', 'Due Date:')}}    
		{{ Form::text('dueDate',null,['class'=>'form-control datepicker', 'id' => 'dueDate']) }} 
       
		</div>
	</div>

	<div class="row form-group pull-right">
	
		{{Form::submit('Create Task',['class'=>'btn btn-primary btn-sm'] )}}

	</div>

{{ Form::close() }}

</div>
