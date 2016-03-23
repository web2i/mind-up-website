@extends('layouts.master')

@section('content')

<section id="members">
	<h3 class="members_title">{{ $h[3][1] }}</h3>
	<p class="members_text">{{ $p[1] }}</p>
	<?php
	foreach($departments as $job)
	{
		$empty=1;
		foreach($members as $member)
		{
			if($member['department'] == $job['department'])
			{
				$empty=0;
			}
		}
		
		if($empty == 0)
		{
			echo '<h3 class="members-category">'.$job['text'].'</h3>';
			echo '<ul class="members_list">';
		}
	
		foreach($members as $member)
		{
			if($member['department'] == $job['department'])
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
		if($empty == 0)
		{
			echo '</ul>';
		}
	}
	?>
</section>

@stop
