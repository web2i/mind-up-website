@extends('layouts.master')

@section('content')

<section id="contact-form">
	<h3 class="contact_form_title">{{ $h['contact-us'] }}</h3>
	<div>
		<input type="button" class="" value="{{ $input['infos'] }}" onclick="formInfos()"> 
		<input type="button" class="" value="{{ $input['quotation'] }}" onclick="formDevis()"> 
		<input type="button" class="" value="{{ $input['appointment'] }}" onclick="formRendezVous()">
		<input type="button" class="" value="{{ $input['other'] }}" onclick="formAutre()">
	</div>
	<div id="contact_form_area">
		<table>
		<form action="" method="POST">
			<tr>
				<td class="contact_form_td"><label class="contact_form_label2">Nom: </label></td>
				<td  class="contact_form_td"><input class="contact_form_input" name="name" value="" /> </td>
			</tr>
			<tr>
				<td  class="contact_form_td"><label class="contact_form_label2">Prenom: </label></td>
				<td  class="contact_form_td"><input class="contact_form_input" name="firstname" value="" /> </td>
			</tr>
			<tr>
				<td  class="contact_form_td"><label class="contact_form_label2">Nom entreprise: </label></td>
				<td  class="contact_form_td"><input class="contact_form_input" name="company" value="" /></td>
			</tr>
			<tr>
				<td  class="contact_form_td"><label class="contact_form_label2">Adresse mail: </label></td>
				<td  class="contact_form_td"><input class="contact_form_input" name="email" value="" /> </td>
			</tr>
			<tr>
				<td  class="contact_form_td"><label class="contact_form_label2">Numero de Téléphone:</label></td>
				<td  class="contact_form_td"><input class="contact_form_input" name="phone" value="" /> </td>
			</tr>
			<tr>
				<td  class="contact_form_td"><label class="contact_form_label2">Message:</label></td>
				<td  class="contact_form_td"><textarea class="contact_form_textArea" name="textContact" ></textarea></td>
			</tr>
			<tr>
				<td  class="contact_form_td"></td>
				<td  class="contact_form_td"><input type="submit" value="{{ $input[1]}}"/></td>
			</tr>
		</form>
		</table>
	</div>
	
</section>

<script type="text/javascript" src="{{ $js['contact'] }}"></script>

@stop

