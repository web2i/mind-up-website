@extends('layouts.master')

@section('content')

<section id="contact-form">
	<h3 class="contact_form_title">{{ $h['contact-us'] }}</h3>
	<div class="contact_form_buttons">
		<input type="button" class="contact_form_button" value="{{ $input['infos'] }}" onclick="formInfos()"> 
		<input type="button" class="contact_form_button" value="{{ $input['quotation'] }}" onclick="formDevis()"> 
		<input type="button" class="contact_form_button" value="{{ $input['appointment'] }}" onclick="formRendezVous()">
		<input type="button" class="contact_form_button" value="{{ $input['other'] }}" onclick="formAutre()">
	</div>
	<div id="contact_form_area">
		<table id="formInfos">
		<caption class="formsCaption">{{ $h['1'] }}</caption>
		<form action="" method="POST">
			<tr>
				<td class="contact_form_td"><label class="contact_form_label2">Nom: </label></td>
				<td  class="contact_form_td"><input class="contact_form_input" name="nameInfos" value="" /> </td>
			</tr>
			<tr>
				<td  class="contact_form_td"><label class="contact_form_label2">Prenom: </label></td>
				<td  class="contact_form_td"><input class="contact_form_input" name="firstnameInfos" value="" /> </td>
			</tr>
			<tr>
				<td  class="contact_form_td"><label class="contact_form_label2">Nom entreprise: </label></td>
				<td  class="contact_form_td"><input class="contact_form_input" name="companyInfos" value="" /></td>
			</tr>
			<tr>
				<td  class="contact_form_td"><label class="contact_form_label2">Adresse mail: </label></td>
				<td  class="contact_form_td"><input class="contact_form_input" name="emailInfos" value="" /> </td>
			</tr>
			<tr>
				<td  class="contact_form_td"><label class="contact_form_label2">Numero de Téléphone:</label></td>
				<td  class="contact_form_td"><input class="contact_form_input" name="phoneInfos" value="" /> </td>
			</tr>
			<tr>
				<td  class="contact_form_td"><label class="contact_form_label2">Message:</label></td>
				<td  class="contact_form_td"><textarea class="contact_form_textArea" name="textContactInfos" ></textarea></td>
			</tr>
			<tr>
				<td  class="contact_form_td"></td>
				<td  class="contact_form_td"><input type="submit" value="{{ $input[1]}}"/></td>
			</tr>
		</form>
		</table>

		
		<table id="formDevis">
		<caption class="formsCaption">{{ $h['2'] }}</caption>
		<form action="" method="POST">
			<tr>
				<td class="contact_form_td"><label class="contact_form_label2">Nom: </label></td>
				<td  class="contact_form_td"><input class="contact_form_input" name="nameDevis" value="" /> </td>
			</tr>
			<tr>
				<td  class="contact_form_td"><label class="contact_form_label2">Prenom: </label></td>
				<td  class="contact_form_td"><input class="contact_form_input" name="firstnameDevis" value="" /> </td>
			</tr>
			<tr>
				<td  class="contact_form_td"><label class="contact_form_label2">Nom entreprise: </label></td>
				<td  class="contact_form_td"><input class="contact_form_input" name="companyDevis" value="" /></td>
			</tr>
			<tr>
				<td  class="contact_form_td"><label class="contact_form_label2">Adresse mail: </label></td>
				<td  class="contact_form_td"><input class="contact_form_input" name="emailDevis" value="" /> </td>
			</tr>
			<tr>
				<td  class="contact_form_td"><label class="contact_form_label2">Numero de Téléphone:</label></td>
				<td  class="contact_form_td"><input class="contact_form_input" name="phoneDevis" value="" /> </td>
			</tr>
			<tr>
				<td  class="contact_form_td"><label class="contact_form_label2">Budget aloué:</label></td>
				<td  class="contact_form_td"><textarea class="contact_form_textArea" name="BudgetDevis" ></textarea></td>
			</tr>
			<tr>
				<td  class="contact_form_td"><label class="contact_form_label2">Durée de développement:</label></td>
				<td  class="contact_form_td"><textarea class="contact_form_textArea" name="DureeDeveloppementDevis" ></textarea></td>
			</tr>
			<tr>
				<td  class="contact_form_td"><label class="contact_form_label2">Date limite devis:</label></td>
				<td  class="contact_form_td"><textarea class="contact_form_textArea" name="DateLimiteDevis" ></textarea></td>
			</tr>
			<tr>
				<td  class="contact_form_td"><label class="contact_form_label2">Nom du projet:</label></td>
				<td  class="contact_form_td"><textarea class="contact_form_textArea" name="ProjectNameDevis" ></textarea></td>
			</tr>
			<tr>
				<td  class="contact_form_td"><label class="contact_form_label2">Description:</label></td>
				<td  class="contact_form_td"><textarea class="contact_form_textArea" name="textContactDevis" ></textarea></td>
			</tr>
			<tr>
				<td  class="contact_form_td"></td>
				<td  class="contact_form_td"><input type="submit" value="{{ $input[1]}}"/></td>
			</tr>
		</form>
		</table>

		<table id="formRdv">
		<caption class="formsCaption">{{ $h['3'] }}</caption>
		<form action="" method="POST">
			<tr>
				<td class="contact_form_td"><label class="contact_form_label2">Nom: </label></td>
				<td  class="contact_form_td"><input class="contact_form_input" name="nameRdv" value="" /> </td>
			</tr>
			<tr>
				<td  class="contact_form_td"><label class="contact_form_label2">Prenom: </label></td>
				<td  class="contact_form_td"><input class="contact_form_input" name="firstnameRdv" value="" /> </td>
			</tr>
			<tr>
				<td  class="contact_form_td"><label class="contact_form_label2">Nom entreprise: </label></td>
				<td  class="contact_form_td"><input class="contact_form_input" name="companyRdv" value="" /></td>
			</tr>
			<tr>
				<td  class="contact_form_td"><label class="contact_form_label2">Adresse mail: </label></td>
				<td  class="contact_form_td"><input class="contact_form_input" name="emailRdv" value="" /> </td>
			</tr>
			<tr>
				<td  class="contact_form_td"><label class="contact_form_label2">Numero de Téléphone:</label></td>
				<td  class="contact_form_td"><input class="contact_form_input" name="phoneRdv" value="" /> </td>
			</tr>
			<tr>
				<td  class="contact_form_td"><label class="contact_form_label2">Message:</label></td>
				<td  class="contact_form_td"><textarea class="contact_form_textArea" name="textContactRdv" ></textarea></td>
			</tr>
			<tr>
				<td  class="contact_form_td"><label class="contact_form_label2">Dates de rendez-vous:</label></td>
				<td  class="contact_form_td"><!-- calendrier--></td>
			</tr>
			<tr>
				<td  class="contact_form_td"></td>
				<td  class="contact_form_td"><input type="submit" value="{{ $input[1]}}"/></td>
			</tr>
		</form>
		</table>

		<table id="formAutre">
		<caption class="formsCaption">{{ $h['4'] }}</caption>
		<form action="" method="POST">
			<tr>
				<td class="contact_form_td"><label class="contact_form_label2">Nom: </label></td>
				<td  class="contact_form_td"><input class="contact_form_input" name="nameAutre" value="" /> </td>
			</tr>
			<tr>
				<td  class="contact_form_td"><label class="contact_form_label2">Prenom: </label></td>
				<td  class="contact_form_td"><input class="contact_form_input" name="firstnameAutre" value="" /> </td>
			</tr>
			<tr>
				<td  class="contact_form_td"><label class="contact_form_label2">Nom entreprise: </label></td>
				<td  class="contact_form_td"><input class="contact_form_input" name="companyAutre" value="" /></td>
			</tr>
			<tr>
				<td  class="contact_form_td"><label class="contact_form_label2">Adresse mail: </label></td>
				<td  class="contact_form_td"><input class="contact_form_input" name="emailAutre" value="" /> </td>
			</tr>
			<tr>
				<td  class="contact_form_td"><label class="contact_form_label2">Numero de Téléphone:</label></td>
				<td  class="contact_form_td"><input class="contact_form_input" name="phoneAutre" value="" /> </td>
			</tr>
			<tr>
				<td  class="contact_form_td"><label class="contact_form_label2">Message:</label></td>
				<td  class="contact_form_td"><textarea class="contact_form_textArea" name="textContactAutre" ></textarea></td>
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

