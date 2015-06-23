@extends('layouts.master')
@extends('layouts.toolbar')
@section('content')

<div class="page-header">
  <h1>Transactions<small>&nbsp;&nbsp;</small></h1>
</div>

<!-- account drop down from accounts DB -->
{{ Form::model(['url'=>'/budget']) }}

{{ Form::select('id',$accounts) }}
&nbsp;&nbsp;
{{ Form::selectMonth('month', Carbon::now()->month) }}

{{ Form::close() }}	

<hr>             			
@include('budget/partials/_transactionAdd')
<hr>

<br>
<br>

This is Where I will loop transactions and use pagination

@stop