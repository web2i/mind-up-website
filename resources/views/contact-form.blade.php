@extends('layouts.master')

@section('content')

<section id="contact-form">
	<h3 class="contact_form_title">{{ $h[3][1] }}</h3>
	<div>
		<input type="button" class="" value="{{ $input[1] }}" onclick="formInfos()"> 
		<input type="button" class="" value="{{ $input[2] }}" onclick="formDevis()"> 
		<input type="button" class="" value="{{ $input[3] }}" onclick="formRendezVous()">
		<input type="button" class="" value="{{ $input[4] }}" onclick="formAutre()">
	</div>
	<div id="contact_form_area">
		<form action="" method="POST">
			<label class="contact_form_label2">Nom: </label><input class="contact_form_input" name="name" value="" /> <br/>
			<label class="contact_form_label2">Prenom: </label><input class="contact_form_input" name="firstname" value="" /> <br/>
			<label class="contact_form_label2">Nom entreprise: </label><input class="contact_form_input" name="company" value="" /> <br/>
			<label class="contact_form_label2">Adresse mail: </label><input class="contact_form_input" name="email" value="" /> <br/>
			<label class="contact_form_label2">Numero de Téléphone:</label><input class="contact_form_input" name="phone" value="" /> <br/>
		</form>
	</div>
	
</section>

<script type="text/javascript" src="{{ $js['contact'] }}"></script>

@stop
