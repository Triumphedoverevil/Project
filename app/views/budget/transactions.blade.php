@extends('layouts.master')
@extends('layouts.toolbar')
@section('content')

<div class="page-header">
  <h1>Transactions<small>&nbsp;&nbsp;</small></h1>
</div>

<!-- account drop down from accounts DB -->
{{ Form::model(['url'=>'/transactions','class'=>'form-inline' ]) }}

{{ Form::select('id',$accounts,['id' => 'bankAccount']) }}
&nbsp;&nbsp;
{{ Form::selectMonth('month', Carbon::now()->month) }}

<hr>             			
@include('budget/partials/_transactionAdd')
<hr>

<br>
<br>

@foreach($transactions as $transaction)								
				
				<li class="list-group-item">

				{{ $transaction-> transactionDate }}
				{{ $transaction-> amount }}
				{{ $transaction-> description }}
				{{ $transaction-> category }}

				<div class="btn-group pull-right" role="group" aria-label="..." > 

						{{ Form::open(['action' => ['TransactionController@destroy', $transaction->id], 'method' => 'DELETE']) }}
	 					{{ Form::submit('Delete', ['class'=>'btn btn-danger btn-xs']) }}
						{{ Form::close() }}

				</div>	
				</li>								
				&nbsp;

@endforeach	



@stop