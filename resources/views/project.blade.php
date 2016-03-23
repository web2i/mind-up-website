@extends('layouts.master')

@section('content')

<?php print_r($project) ?>

<section class="project_content">
	<img class="project_image" src="{{ $img['project-image-1']['src'] }}" alt="" />
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
		<h3 >{{ $h[2][2] }}</h3>
		<img class="tech_image" src="{{ $img['project-tech-1']['src'] }}" alt="" />
		<img class="tech_image" src="{{ $img['project-tech-2']['src'] }}" alt="" />
		<img class="tech_image" src="{{ $img['project-tech-3']['src'] }}" alt="" />
	</div>
	
	<h3 class="members_title">{{ $h[2][3] }}</h3>
	<section id="members">
	<ul class="members_list">
		<li class="member">
			<a href="profil.php">
				<img src="{{ $img['profil-image-1']['src'] }}">
				<div>
					<h3>{{ $h[3][1] }}</h3>
					<span>{{ $p[4] }}</span>
				</div>
			</a>
		</li>
		<li class="member">
			<a href="profil.php">
				<img src="{{ $img['profil-image-2']['src'] }}">
				<div>
					<h3>{{ $h[3][2] }}</h3>
					<span>{{ $p[5] }}</span>
				</div>
			</a>
		</li>
	</ul>
	</section>
	</br></br>
</section>
@stop
