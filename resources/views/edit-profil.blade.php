

﻿@extends('layouts.master')

@section('content')

<!--<section class="edit-profil">-->
<section class="profil_content">
	<img class="profil_image" src="{{ $user['picture']['src'] }}" alt="" />
	<ul>
		<li>
		    <label>Prénom : </label><input value="{{ $user['firstname'] }}"></input>
		    <label>Nom : </label><input value="{{ $user['name'] }}"></input>
		</li>
		<li><label>Poste : </label><input value="{{ $user['job'] }}"></input></li>
		<li><label>Email : </label><input value="{{ $user['email'] }}"></input></li>
		<li><label>Téléphone : </label><input value="{{ $user['mobile'] }}"></input></li>
		<span class="ui-icon ui-icon-key"></span>
	</ul>
	
	<h1>Description</h1>
	<textarea class="edit-profil-description">{{ $user['description'] }}</textarea>
	<button>Go</button>
	
	</br>

</section>
@stop
