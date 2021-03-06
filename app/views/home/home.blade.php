@extends('layouts.master')

@section('content')

<div class="row mainContent">
	<h1>Welcome {{ Auth::user()->name }}!</h1>
	<p class="lead">
		Cortex is ready for action.
	</p>
	<p>
		<br><hr>
		<h4>Quick Links</h4>
		Cerebral: <a href={{ URL::route('cerebral_about') }}>About</a> &middot <a href={{ URL::route('cerebral_instructions') }}>Instructions</a>
		<br>
		Temporal: <a href={{ URL::route('temporal_about') }}>About</a> &middot <a href={{ URL::route('temporal_instructions') }}>Instructions</a>
		<br>
		Medulla: About &middot Instructions
		<br>
		Limbic: About &middot Instructions
	</p>

</div>

@stop

