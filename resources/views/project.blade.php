<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>maquette1 - Projet Mind-Up</title>
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css" media="all"/>
	<script type="text/javascript" src="js/jquery-1.11.3.js"></script>
	<script type="text/javascript" src="js/functions.js"></script>
</head>

<header id="header">
	<div class="header_block">
		<nav>
			<ul>
				<li><img id="header_logo" src="ressources/logo.png"/></li>
				<li><a href="index.php">Accueil</a></li>
				<li><a href="#">Projets</a></li>
				<li><a href="membres.php">Notre Equipe</a></li>
			</ul>
		</nav>
	</div>
	<div class="share_boxes">
		<a class="box" id="twitter" href="#"><img src="ressources/twitter.png"/></a>
		<a class="box" id="facebook" href="#"><img src="ressources/facebook.png"/></a>
		<a class="box" id="google" href="#"><img src="ressources/google.png"/></a>
	</div>
</header>

<body>

<section id="content">
	<h2 class="content_title">L'ensemble de nos projets.</h2>

	<!-- Partie provisoire pour générer une galerie "test" -->

	<?php for($i=0;$i<10;$i++): ?>
		<a class="element" style="<?php if($i%3 == 1){ echo 'width=60%;'; }else if($i%3 == 0){ echo 'width: 40%;';} else{ echo 'width=50%;'; }?>" href="#">
			<span class="title">Titre</span>
			<span class="desc">Ici une petite description <p>A posuere donec senectus suspendisse bibendum magna ridiculus a justo orci parturient suspendisse ad rhoncus cursus ut parturient viverra elit aliquam ultrices est sem. Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.</p>
			<p>A posuere donec senectus suspendisse bibendum magna ridiculus a justo orci parturient suspendisse ad rhoncus cursus ut parturient viverra elit aliquam ultrices est sem. Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.</p>	
			<p>Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.</p>
		<</span>
			<span class="bg"></span>
			<img  src="ressources/galerie_projets/projet<?php echo $i%3; ?>.jpg" alt="" />
		</a>
	<?php endfor; ?>
	
</section>

<footer id="footer">
	<div id="footer_container">
	  	<a href="login.php" id="footer_input">Connexion<a/>
		<h5>Copyright© 2015-2016 Web2i. All Rights Reserved.</h5>
	</div>
</footer>
</body>
</html>
