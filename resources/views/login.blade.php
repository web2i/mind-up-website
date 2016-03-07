@extends('layouts.master')

@section('content')
    <div id="login_picture"><h2 class="about_title">Connection pour les membres de MindUp</h2></div>

    <section id="connection_field">
        <form action="private_index.php" method="POST">
	        <label for="txtLogin" class="info">Login: </label><input class="connection_input" type="text" name="login" value="" /> <br/><br/>
	        <label class="info">Mot de Passe: </label><input class="connection_input" type="password" name="mdp" value="" /> <br/><br/>
	        <label class="info"></label><input class="connection_btn" type="submit" name="valider" value="Se connecter" /> <br/><br/><br/>
        </form>
    </section>
@stop

