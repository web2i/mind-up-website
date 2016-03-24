@extends('layouts.master')

@section('content')

<section id="manage-team">
	<h3 class="manage_team_title">{{ $h[3][1] }}</h3>
	
	<form action="" method="post"> <!-- Action a definir -->
	<ul class="manage_team_list">
		<?php
			echo '<table>';	
			echo '<tr>';
			echo "<th class='manage_team_th'>Membre</th><th class='manage_team_th_checkbox'>Affichage page d'accueil</th><th class='manage_team_th_checkbox'>Clés Bureau</th>";
			echo '</tr>';
			foreach($members as $member)
			{	
				echo '<tr>';
				echo '<td class="manage_team_td">';	
				echo '<a class="members_link" href="'.$member['src'].'">';
				echo '<li class="member">';
				echo '<img src="'.$member['picture']['src'].'">';
				echo'<div>';
				echo'<h3>'.$member['firstname'].' '.$member['name'].'</h3>';
				echo '</div>';
				echo '</li>';
				echo '</a>';
				echo '</td>';

				echo '<td class="manage_team_td">';
				if($member['important']==0)
				{
					echo '<input id="important'.$member['id'].'" type="checkbox">';
				}
				else
				{
					echo '<input id="important'.$member['id'].'" type="checkbox" checked>'; 
				}
				echo '</td>';


				echo '<td class="manage_team_td">';
				if($member['key']==0)
				{
					echo '<input id="cles'.$member['id'].'" type="checkbox">';
				}
				else
				{
					echo '<input type="checkbox" checked>';
				}
				echo '</td>';
				echo '</tr>';
			}
			echo '</table>';	
		?>
	<input type="button" id="manageTeamButton" type="submit" value="{{ $input[1]}}">
	</ul>
	</form>
</section>

@stop
