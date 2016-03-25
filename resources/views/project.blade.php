@extends('layouts.master')

@section('content')

<section class="project_content">
	<img class="project_image" src="{{ $picture[0]['src'] }}" alt=""/>
	<ul>
		<li><h2>{{ $client['compagnyName'] }}</h2></li>
		<li><h3>{{ $client['comment'] }}</h3></li>
	</ul>
	
	<h3 class="project_title">{{ $project['title'] }}</h3>
	<p>{{ $project['description'] }}</p>


	<div class="project_technologies">
	<?php
	foreach($techno as $techImage)
		echo '<img class="tech_image" src="'.$techImage['src'].'" alt="" />';
	?>
	</div>


	<section id="members">
	<ul class="members_list">
	<?php
	foreach($members as $member)
	{
		echo '<li class="member">';
		echo '<a href="profil.php">';
		echo '<img src="'.$member['imageName']['src'].'" alt="" />';
		echo '<div>
					<h3>'.$member['firstname'].' '.$member['name'].'</h3>
					<span>'.$member['jobId'].'</span>
			</div>';
		echo '</a>';
		echo '</li>';
	}
	?>
	</ul>
	</section>
	</br></br>
</section>
@stop
