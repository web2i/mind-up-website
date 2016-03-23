@extends('layouts.master')

@section('content')

<section id="members">
	<h3 class="members_title">{{ $h[3][1] }}</h3>
	<p class="members_text">{{ $p[1] }}</p>
	<?php
	foreach($jobs as $job)
	{
		echo '<h3 class="members-category">'.$job['text'].'</h3>';
		echo '<ul class="members_list">';
	
		foreach($members as $member)
		{
			if($member['jobId'] == $job['textId'])
			{
				echo '<a class="members_link" href="'.$member['src'].'">';
				echo '<li class="member">';
				echo '<img src="'.$member['picture']['src'].'">';
				echo'<div>';
				echo'<h3>'.$member['firstname'].' '.$member['name'].'</h3>';
				echo '<span>'.$member['jobText'].'</span>';
				echo '</div>';
				echo '</li>';
				echo '</a>';
			}
			
		}
		echo '</ul>';
	}
	?>
	

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
