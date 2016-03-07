<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>maquette1 - Projet Mind-Up</title>
	<link rel="stylesheet" type="text/css" href="js/jquery-ui-1.11.4/jquery-ui.css" rel="stylesheet" media="all"/>
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css" media="all"/>
	<script src="js/jquery-1.11.3.js"></script>
	<script src="js/jquery-ui-1.11.4/jquery-ui.js"></script>
	<script src="js/functions.js"></script>
</head>

<header id="header">
	<a href="index.php" id="header_input">Deconnexion</a>
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

<section id="data">
	<h2 class="data_title">Modification des données du site.</h2>
	<div id="accordion">
		<h3>First</h3>
		<ul>
			<li><h2>Paragraphe I.1</h2><textarea>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</textarea></li>
			<li><h2>Paragraphe I.2</h2><textarea>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</textarea></li>
		</ul>
		<h3>Second</h3>
		<ul>
			<li><h2>Paragraphe I.1</h2><textarea>Phasellus mattis tincidunt nibh.</textarea></li>
			<li><h2>Paragraphe I.2</h2><textarea>Phasellus mattis tincidunt nibh. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</textarea></li>
		</ul>
		<h3>Third</h3>
		<ul>
			<li><h2>Paragraphe I.1</h2><textarea>Nam dui erat, auctor a, dignissim quis.</textarea></li>
			<li><h2>Paragraphe I.2</h2><textarea>Nam dui erat, auctor a, dignissim quis. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</textarea></li>
		</ul>
	</div>
	
</section>

<footer id="footer">
	<div id="footer_container">
	  	<a href="login.php" id="footer_input">Connexion<a/>
		<h5>Copyright© 2015-2016 Web2i. All Rights Reserved.</h5>
	</div>
</footer>
<script type="text/javascript">
	/* Génération de l'interface "accordion" de jquery-ui*/
	$( "#accordion" ).accordion();
</script>
</body>
</html>