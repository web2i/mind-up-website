﻿@extends('layouts.master')

@section('content')

<section id="members">
	<h3 class="members_title">{{ $h[3][1] }}</h3>
	<p class="members_text">{{ $p[1] }}</p>

	<h3 class="members-category">{{ $h[3][3] }}</h3>


	<ul class="members_list">
	<?php
		
		foreach($members as $member)
		{
			if($member['jobId'] == 'project-manager')
			{
				echo "<li class='member'>";
				echo '<img src="'.'img'.'">';
				echo'<div>';
				echo'<h3>'.$member['name'].'</h3>';
				echo '<span>'.$member['jobText'].'</span>';
				echo '</div>';
				echo '</li>';
			}
			
		}

	?>
	</ul>

	<ul class="members_list">
	<?php
		
		foreach($members as $member)
		{
			if($member['jobId'] == 'project-manager')
			{
				echo "<li class='member'>";
				echo '<img src="'.'img'.'">';
				echo'<div>';
				echo'<h3>'.$member['name'].'</h3>';
				echo '<span>'.$member['jobText'].'</span>';
				echo '</div>';
				echo '</li>';
			}
			
		}

	?>
	</ul>

	<!--<h3 class="members-category">{{ $h[3][3] }}</h3>
	<ul class="members_list">
		<li class="member">
			<img src="{{ $img['profil']['src'] }}">
			<div>
				<h3>{{ $h[3][2] }}</h3>
				<span>{{ $span[1] }}</span>
			</div>
		</li>
	</ul>
	<h3 class="members-category">{{ $h[3][3] }}</h3>
	<ul class="members_list">
		<li class="member">
			<img src="{{ $img['profil']['src'] }}">
			<div>
				<h3>{{ $h[3][2] }}</h3>
				<span>{{ $span[1] }}</span>
			</div>
		</li>
		<li class="member">
			<img src="{{ $img['profil']['src'] }}">
			<div>
				<h3>{{ $h[3][2] }}</h3>
				<span>{{ $span[1] }}</span>
			</div>
		</li>
		<li class="member">
			<img src="{{ $img['profil']['src'] }}">
			<div>
				<h3>{{ $h[3][2] }}</h3>
				<span>{{ $span[1] }}</span>
			</div>
		</li>
	</ul>
	<h3 class="members-category">{{ $h[3][3] }}</h3>
	<ul class="members_list">
		<li class="member">
			<img src="{{ $img['profil']['src'] }}">
			<div>
				<h3>{{ $h[3][2] }}</h3>
				<span>{{ $span[1] }}</span>
			</div>
		</li>
		<li class="member">
			<img src="{{ $img['profil']['src'] }}">
			<div>
				<h3>{{ $h[3][2] }}</h3>
				<span>{{ $span[1] }}</span>
			</div>
		</li>
		<li class="member">
			<img src="{{ $img['profil']['src'] }}">
			<div>
				<h3>{{ $h[3][2] }}</h3>
				<span>{{ $span[1] }}</span>
			</div>
		</li>
		<li class="member">
			<img src="{{ $img['profil']['src'] }}">
			<div>
				<h3>{{ $h[3][2] }}</h3>
				<span>{{ $span[1] }}</span>
			</div>
		</li>
		<li class="member">
			<img src="{{ $img['profil']['src'] }}">
			<div>
				<h3>{{ $h[3][2] }}</h3>
				<span>{{ $span[1] }}</span>
			</div>
		</li>
	</ul>
	<h3 class="members-category">{{ $h[3][3] }}</h3>
	<ul class="members_list">
		<li class="member">
			<img src="{{ $img['profil']['src'] }}">
			<div>
				<h3>{{ $h[3][2] }}</h3>
				<span>{{ $span[1] }}</span>
			</div>
		</li>
		<li class="member">
			<img src="{{ $img['profil']['src'] }}">
			<div>
				<h3>{{ $h[3][2] }}</h3>
				<span>{{ $span[1] }}</span>
			</div>
		</li>
		<li class="member">
			<img src="{{ $img['profil']['src'] }}">
			<div>
				<h3>{{ $h[3][2] }}</h3>
				<span>{{ $span[1] }}</span>
			</div>
		</li>
	</ul>
	<h3 class="members-category">{{ $h[3][3] }}</h3>
	<ul class="members_list">
		<li class="member">
			<img src="{{ $img['profil']['src'] }}">
			<div>
				<h3>{{ $h[3][2] }}</h3>
				<span>{{ $span[1] }}</span>
			</div>
		</li>
		<li class="member">
			<img src="{{ $img['profil']['src'] }}">
			<div>
				<h3>{{ $h[3][2] }}</h3>
				<span>{{ $span[1] }}</span>
			</div>
		</li>
		<li class="member">
			<img src="{{ $img['profil']['src'] }}">
			<div>
				<h3>{{ $h[3][2] }}</h3>
				<span>{{ $span[1] }}</span>
			</div>
		</li>
	</ul> -->
</section>

@stop
