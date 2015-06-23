<script type="text/javascript">

$(document).ready(function() 
{
    $('#Date').datepicker({});
    $('#subCat').hide();
    $('#Category').change(function(){
        $('#subCat').show();
    });
});

</script>

<div class="container-fluid">

{{ Form::model(['url'=>'/budget','class'=>'form-inline' ]) }}

    <div class="form-group input-sm col-lg-2">         
        {{ Form::text('Date',null,['class'=>'form-control datepicker', 'id' => 'Date','placeholder'=>'Date']) }} 
     </div>
   
     <div class="form-group input-sm col-lg-1">
        {{ Form::select('Type',['+','-'],'1', ['class'=>'form-control']) }}
    </div>

    <div class="form-group input-sm col-lg-2"> 
        {{ Form::text('amount',null, ['class'=>'form-control','placeholder'=>'Amount']) }}
    </div>

    <div class="form-group input-sm col-lg-3"> 
        {{ Form::text('description',null, ['class'=>'form-control','placeholder'=>'Description']) }}
    </div>

     <div class="form-group input-sm col-lg-2">
        {{ Form::select('category',['Select Category','Transportation','Fun','Bills','Medical','Income','Household','Personal','Insurance'],'1', ['id' => 'Category','class'=>'form-control']) }}
    </div>

    <div class="form-group input-sm col-lg-2">
        {{ Form::select('subCategory',$subCategory,'0', ['id' => 'subCat','class'=>'form-control']) }}
    </div>

    

    <div class="form-group pull-right">
        {{Form::submit('Add',['class'=>'btn btn-primary btn-sm'] )}}
    </div>   

{{ Form::close() }}

</div>
