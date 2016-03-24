@extends('layouts.master')

@section('content')

<section class="project_content">
	<img class="project_image" src="{{ $picture[0]['src'] }}" alt=""/>
	<ul>
		<li><h2>{{ $h[1][1] }}</h2></li>
		<li><h3>{{ $h[1][2] }}</h3></li>
		<li><h3>{{ $h[1][3] }}</h3></li>
		<li><h3>{{ $h[1][4] }}</h3></li>
	</ul>
	
	<h3 class="project_title">{{ $h[2][1] }}</h3>
	<p>{{ $p[1] }}</p>
	<p>{{ $p[2] }}</p>
	<p>{{ $p[3] }}</p>
	<div class="project_technologies">
	<?php
			echo '<h3 >{{ $h[2][2] }}</h3>';
	foreach($techno as $techImage)
		echo '<img class="tech_image" src="'.$techImage['src'].'" alt="" />';
	?>
	</div>

	<h3 class="members_title">{{ $h[2][3] }}</h3>
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
