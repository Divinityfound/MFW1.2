@extends('superAdmin.master')

@section('content')
	<h2>Create Workflow Chain</h2>

	{!! Form::open(['url'=>'admin/super/workflows']) !!}
		@include('superAdmin.workflows.form')
	{!! Form::close() !!}
@stop