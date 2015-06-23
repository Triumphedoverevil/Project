@extends('layouts.master')
@extends('layouts.toolbar')
@section('content')

<div class="page-header">
  <h1>Calendar<small>&nbsp;&nbsp;weekly view</small></h1>
</div>

{{ $cal->generate() }}

@stop