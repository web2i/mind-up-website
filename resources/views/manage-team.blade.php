<?php echo '<pre>'; print_r($members); echo '</pre>'; ?>

@extends('layouts.master')

@section('content')

<section id="manage-team">
	<h3 class="manage_team_title">{{ $h[3][1] }}</h3>
	<ul class="manage_team_list">
		<?php
			foreach($members as $member)
			{			
				echo '<a class="members_link" href="'.$member['src'].'">';
				echo '<li class="member">';
				echo '<img src="'.$member['picture']['src'].'">';
				echo'<div>';
				echo'<h3>'.$member['firstname'].' '.$member['name'].'</h3>';
				
				echo '</div>';
				echo '</li>';
				echo '</a>';
				echo '</br>';
			}
		?>
	</ul>
</section>

@stop
