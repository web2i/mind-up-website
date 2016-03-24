	<?php 
	//if(isset($projects)) { echo '<pre>'; print_r($projects); echo '</pre>';}
	?>

	@extends('layouts.master')

	@section('content')


	<section id="content">
		<h2 class="content_title">L'ensemble de nos projets.</h2>

		<!-- Affiche les infos de chaque projet -->


		<!-- Partie provisoire pour générer une galerie "test" -->
		<?php 
		for($i=0;$i<count($projects);$i++) {
			echo '<a class="element" style="';
			if($i%3 == 1)
			{ 
				echo 'width=60%;'; 
			} else if ($i%3 == 0)
			{ 
				echo 'width: 40%;';
			} else{ 
				echo 'width=50%;'; 
			}
			echo '"href="project/'.($i+1).'">';
			echo '<span class="title">'.$projects[$i]['title'].'</span>';
			echo '<span class="desc">'.$projects[$i]['description'].'</span>';
			echo '<span class="bg"></span>';
			echo '<img  src='.$projects[$i]['thumbnail']['src'].' alt="" />';
			echo '</a>';
		}
		?>
</section>

@stop
