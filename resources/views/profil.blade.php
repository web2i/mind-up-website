@extends('layouts.master')

@section('content')


<section class="profil_content">
	<img class="profil_image" src="{{ $user['picture']['src'] }}" alt="" />
	<ul>
		<li><h2>{{ $user['firstname'] }} {{ $user['name'] }}</h2></li>
		<li><h3>{{ $user['job'] }}</h3></li>
		<li><h3>{{ $user['email'] }}</h3></li>
		<li><h3>{{ $user['mobile'] }}</h3></li>
		<span class="ui-icon ui-icon-key"></span>
	</ul>
	
	<p>{{ $user['description'] }}</p>
	
	

	<br/><br/><br/>
	<div class="profil_projects">
		<img class="tech_image" src="{{ $projects[0]['img']['src'] }}" alt="" />
		<img class="tech_image" src="{{ $projects[1]['img']['src'] }}" alt="" />
	
	</div>

</section>
@stop
