<script type="text/javascript">

$(document).ready(function() 
{
    $('#transactionDate').datepicker({});
    $('#subCategory').hide();
    $('#category').change(function(){
        $('#subCategory').show();
    });
});

</script>

<div class="container-fluid">



    <div class="form-group input-sm col-lg-2">         
        {{ Form::text('transactionDate',null,['class'=>'form-control datepicker', 'id' => 'transactionDate','placeholder'=>'Date']) }} 
     </div>
   
     <div class="form-group input-sm col-lg-1">
        {{ Form::select('isNegitive',['+','-'],null, ['class'=>'form-control', 'id' => 'isNegitive']) }}
    </div>

    <div class="form-group input-sm col-lg-2"> 
        {{ Form::text('amount',null, ['class'=>'form-control','placeholder'=>'Amount', 'id' => 'amount']) }}
    </div>

    <div class="form-group input-sm col-lg-3"> 
        {{ Form::text('description',null, ['class'=>'form-control','placeholder'=>'Description', 'id' => 'description']) }}
    </div>

     <div class="form-group input-sm col-lg-2">
        {{ Form::select('category',['Select Category','Transportation','Fun','Bills','Medical','Income','Household','Personal','Insurance'],'0', ['id' => 'category','class'=>'form-control']) }}
    </div>

    <div class="form-group input-sm col-lg-2">
        {{ Form::select('subCategory',$subCategory,'0', ['id' => 'subCategory','class'=>'form-control']) }}
    </div>

    

    <div class="form-group pull-right">
        {{Form::submit('Add',['class'=>'btn btn-primary btn-sm'] )}}
    </div>   

{{ Form::close() }}

</div>
