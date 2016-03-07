@extends('layouts.master')

@section('content')
<section id="heading">
	<ul>
		<li><img class="heading_pic" src="../ressources/slider_accueil/pic1.jpg" /></li>
		<li><img class="heading_pic" src="../ressources/slider_accueil/pic2.jpg" /></li>
		<li><img class="heading_pic" src="../ressources/slider_accueil/pic3.jpg" /></li>
	</ul>
</section>

<section id="about">
	<h2 class="about_title">Build your beautiful UI, the way you want it</h2>
	<p class="text_1">A posuere donec senectus suspendisse bibendum magna ridiculus a justo orci parturient suspendisse ad rhoncus cursus ut parturient viverra elit aliquam ultrices est sem. Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.</p>
	<p class="text_2">A posuere donec senectus suspendisse bibendum magna ridiculus a justo orci parturient suspendisse ad rhoncus cursus ut parturient viverra elit aliquam ultrices est sem. Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.</p>	
	<p class="text_3" >A posuere donec senectus suspendisse bibendum magna ridiculus a justo orci parturient suspendisse ad rhoncus cursus ut parturient viverra elit aliquam ultrices est sem. Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.</p>	

</section>
<section id="cascading">
	<h1>Tellus nam ad fermentum ac enim est duis facilisis.</h1>
</section>
<section id="about">
	<h2 class="about_title">lacus adipiscing consequat risus consectetur scelerisque</h2>
	<p class="text_1">A posuere donec senectus suspendisse bibendum magna ridiculus a justo orci parturient suspendisse ad rhoncus cursus ut parturient viverra elit aliquam ultrices est sem. Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.</p>
	<p class="text_2">A posuere donec senectus suspendisse bibendum magna ridiculus a justo orci parturient suspendisse ad rhoncus cursus ut parturient viverra elit aliquam ultrices est sem. Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.</p>	
	<p class="text_3" >A posuere donec senectus suspendisse bibendum magna ridiculus a justo orci parturient suspendisse ad rhoncus cursus ut parturient viverra elit aliquam ultrices est sem. Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.</p>	

</section>
<section id="team">
	<h3 class="team_title">Animated Grid Layout</h3>
	<p class="team_text">A posuere donec senectus suspendisse bibendum magna ridiculus a justo orci parturient suspendisse ad rhoncus cursus ut parturient viverra elit aliquam ultrices est sem. Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.</p>
	<ul class="team_list">
	    <?php
	        for($i = 0 ; $i < 9 ; $i++)
	        {
	            echo '
	                <li class="team_member">
			            <img src="'.$img['profil']['src'].'">
			            <div>
				            <h3>Parturient suspendisse</h3>
				            <span>fermentum ac enim est</span>
			            </div>
		            </li>
	            ';
	        }
	    ?>
	</ul>
</section>
@stop

