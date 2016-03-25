@extends('layouts.master')

@section('content')

<!--To Remove  -->
<link rel="stylesheet" type="text/css" href="js/jquery-ui-1.11.4/jquery-ui.css" media="all">				   
				    <!-- -->

<section id="private_navig">
<nav id="menu-2">
				    <li><a href="{{ $a['profil']['url']}}">{{ $a['profil']['text'] }}</a></li>
				    <li><a href="{{ $a['project']['url']}}">{{ $a['project']['text'] }}</a></li>
				    <li><a href="{{ $a['manage-team']['url']}}">{{ $a['manage-team']['text'] }}</a></li>
				    <li><a href="{{ $a['manage-jobs']['url']}}">{{ $a['manage-jobs']['text'] }}</a></li>
				    <li><a href="{{ $a['inscription']['url']}}">{{ $a['inscription']['text'] }}</a></li>
				    <li><a href="{{ $a['edit-profil']['url']}}">{{ $a['edit-profil']['text'] }}</a></li>
				    <li><a href="{{ $a['edit-texts']['url']}}">{{ $a['edit-texts']['text'] }}</a></li>
				    <li><a href="{{ $a['login']['url']}}">{{ $a['login']['text'] }}</a></li>
				    <li><a href="{{ $a['logout']['url']}}">{{ $a['logout']['text'] }}</a></li>
			</nav>

	<div id="private_picture"></div>
	<div id="tabs">
		<ul>
			<li><a href="#tabs-1">First</a></li>
			<li><a href="#tabs-2">Second</a></li>
			<li><a href="#tabs-3">Third</a></li>
		</ul>
		<div id="tabs-1">
			<h3>Mes droits</h3>
			<p>A posuere donec senectus suspendisse bibendum magna ridiculus a justo orci parturient suspendisse ad rhoncus cursus ut parturient viverra elit aliquam ultrices est sem. Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.</p>
			<p>A posuere donec senectus suspendisse bibendum magna ridiculus a justo orci parturient suspendisse ad rhoncus cursus ut parturient viverra elit aliquam ultrices est sem. Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.</p>	
			<p>Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.</p>
			<div id="buttons_group_gestion">
				<a href="index.php?view=data" type="button" class="button_gestion" >Gestion du contenu</a>
				<a href="index.php?view=admin_space" type="button" class="button_gestion" >Gestion des droits/membres</a>
				<a href="index.php?view=inscription" type="button" class="button_gestion" >Ajouter un collaborateur</a>
			</div>
		</div>
		<div id="tabs-2">
			<h3>Mes droits</h3>
			<p>Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.</p>
			<p>A posuere donec senectus suspendisse bibendum magna ridiculus a justo orci parturient suspendisse ad rhoncus cursus ut parturient viverra elit aliquam ultrices est sem. A posuere donec senectus suspendisse bibendum magna ridiculus a justo orci parturient suspendisse ad rhoncus cursus ut parturient viverra elit aliquam ultrices est sem. Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.</p>	
			<p>Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.</p>
			<div id="buttons_group_gestion">
				<a href="index.php?view=inscription" type="button" class="button_gestion" >Ajouter un collaborateur</a>
			</div>
		</div>
		<div id="tabs-3">
			<h3>Mes droits</h3>
			<p>A posuere donec Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.senectus suspendisse bibendum magna ridiculus a justo orci parturient suspendisse ad rhoncus cursus ut parturient viverra elit aliquam ultrices est sem. Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.</p>
			<p>A posuere donec senectus suspendisse bibendum magna ridiculus a justo orci parturient suspendisse ad rhoncus cursus ut parturient viverra elit aliquam ultrices est sem. Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.</p>	
			<p>A posuere donec Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.senectus suspendisse bibendum magna ridiculus a justo orci parturient suspendisse ad rhoncus cursus ut parturient viverra elit aliquam ultrices est sem. Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.</p>
			<div id="buttons_group_gestion">
				<a href="index.php?view=admin_space" type="button" class="button_gestion" >Gestion des droits/membres</a>
				<a href="index.php?view=inscription" type="button" class="button_gestion" >Ajouter un collaborateur</a>
			</div>
		</div>
	</div>
	<script>
		/* Génération de la barre de navigation privée */
		$("#tabs").tabs();
	</script>
</section>

@stop
