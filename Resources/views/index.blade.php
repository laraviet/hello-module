@extends('hello::layouts.master')

@section('content')
	
	<h1>Xin Chào</h1>
	
	<p>
		View này được load từ module: {!! config('hello.name') !!}
	</p>

@stop