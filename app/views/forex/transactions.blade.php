@extends('layouts.master')
@extends('layouts.toolbar')
@section('content')

<div class="page-header">
  <h1>Transactions<small>&nbsp;&nbsp;TEST</small></h1>
</div>


<!-- account drop down from accounts DB -->
{{ Form::model(['url'=>'/budget','class'=>'form-horizontal' ]) }}
{{Form::label('account_label', 'Account:')}}
{{ Form::select('id', $accounts, ['class'=>'form-control']) }}
{{ Form::close() }}	




@stop