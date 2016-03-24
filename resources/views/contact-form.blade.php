@extends('layouts.master')

@section('content')

<section id="contact-form">
	<h3 class="contact_form_title">{{ $h[3][1] }}</h3>
	<div>
		<input type="button" value="{{ $input[1] }}" onclick="formInfos()"> 
		<input type="button" value="{{ $input[2] }}" onclick="formDevis()"> 
		<input type="button" value="{{ $input[3] }}" onclick="formRendezVous()">
		<input type="button" value="{{ $input[4] }}" onclick="formAutre()">
	</div>
	
</section>

<script type="text/javascript" src="{{ $js['contact'] }}"></script>

@stop
