@extends('layouts.master')

@section('content')

<?php print_r($project) ?>

<section class="profil_content">
	<img class="profil_image" src="{{ $user['picture']['src'] }}" alt="" />
	<ul>
		<li><h2>{{ $user['firstname'] }} {{ $user['name'] }}</h2></li>
		<li><h3>{{ $user['job'] }}</h3></li>
		<li><h3>{{ $user['email'] }}</h3></li>
		<li><h3>{{ $user['mobile'] }}</h3></li>
		<span class="ui-icon ui-icon-key"></span>
	</ul>
	
	<h3 class="profil_title">{{ $h[1][1] }}</h3>
	<p>{{ $p[1] }}</p>
	<p>{{ $p[2] }}</p>
	<p>{{ $p[3] }}</p>

	<br/><br/><br/>
	<div class="profil_projects">
		<img class="tech_image" src="{{ $img['project-image-1']['src'] }}" alt="" />
		<img class="tech_image" src="{{ $img['project-image-2']['src'] }}" alt="" />
		<img class="tech_image" src="{{ $img['project-image-3']['src'] }}" alt="" />
	
	</div>

</section>
@stop
