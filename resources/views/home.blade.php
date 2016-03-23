@extends('layouts.master')

@section('content')

<section id="heading">
	<ul>
		<li><img class="heading_pic" src="{{ $img['home-slider-1']['src'] }}" /></li> 
		<li><img class="heading_pic" src="{{ $img['home-slider-2']['src'] }}" /></li>
		<li><img class="heading_pic" src="{{ $img['home-slider-3']['src'] }}" /></li>
	</ul>
</section>

<section id="about">
	<h2 class="about_title">{{ $h[2][1] }}</h2>
	<p class="text_1">{{ $p[1] }}</p>
	<p class="text_2">{{ $p[2] }}</p>	
	<p class="text_3" >{{ $p[3] }}</p>	
</section>

<section id="cascading">
	<h1>{{ $h[1][1] }}</h1>
</section>

<section id="about">
	<h2 class="about_title">{{ $h[2][2] }}</h2>
	<p class="text_1">{{ $p[4] }}</p>
	<p class="text_2">{{ $p[5] }}</p>	
	<p class="text_3" >{{ $p[6] }}</p>	
</section>

<section id="team">
	<h3 class="team_title">{{ $h[3][1] }}</h3>
	<p class="team_text">{{ $p[7] }}</p>
	<ul class="team_list">
	    <?php
	        foreach($members as $member)
		{
			
				echo '<a class="members_link" href="'.$member['src'].'">';
				echo '<li class="team_member">';
				echo '<img src="'.$member['picture']['src'].'">';
				echo'<div>';
				echo'<h3>'.$member['firstname'].' '.$member['name'].'</h3>';
				echo '<span>'.$member['jobText'].'</span>';
				echo '</div>';
				echo '</li>';
				echo '</a>';
			
			
		}
	    ?>
	</ul>
</section>

@stop

