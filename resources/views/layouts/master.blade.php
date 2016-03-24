<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>	
	    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	    <title>{{ $website }} - {{ $title }}</title>
	    <link rel="stylesheet" type="text/css" href="{{ $css[0] }}" media="all"/>
	    <link rel="stylesheet" type="text/css" href="{{ $css[1] }}" media="all"/>
	    <script type="text/javascript" src="{{ $js['jquery'] }}"></script>
	    <script type="text/javascript" src="{{ $js['function'] }}"></script>
    </head>

    <header id="header">
	    <div class="header_block">
		    <nav>
			    <ul>
				    <li><img id="header_logo" src="{{ $img['logo']['src'] }}"/></li>
				    <li><a href="{{ $a['home']['url']}}">{{ $a['home']['text'] }}</a></li>
				    <li><a href="{{ $a['projects']['url']}}">{{ $a['projects']['text'] }}</a></li>
				    <li><a href="{{ $a['team']['url']}}">{{ $a['team']['text'] }}</a></li>
				    <li><a href="{{ $a['contact']['url']}}">{{ $a['contact']['text'] }}</a></li>
				    
				    <?php
				        if($user['logged'])
				        {
				            echo '<li><a href="'.$a['private-home']['url'].'">'.$a['private-home']['text'].'</a></li>';
				            echo '<li><a href="'.$user['url'].'">'.$user['text'].'</a></li>';
				            echo '<li><a href="'.$a['logout']['url'].'">'.$a['logout']['text'].'</a></li>';
				        }
				    ?>
				    
				    <!--To Remove -->
				    </br>
				    <li><a href="{{ $a['team']['url']}}">{{ $a['team']['text'] }}</a></li>
				    <li><a href="{{ $a['project']['url']}}">{{ $a['project']['text'] }}</a></li>
				    <li><a href="{{ $a['profil']['url']}}">{{ $a['profil']['text'] }}</a></li>
				    <li><a href="{{ $a['manage-team']['url']}}">{{ $a['manage-team']['text'] }}</a></li>
				    <li><a href="{{ $a['login']['url']}}">{{ $a['login']['text'] }}</a></li>
				    <li><a href="{{ $a['logout']['url']}}">{{ $a['logout']['text'] }}</a></li>
				    <li><a href="{{ $a['inscription']['url']}}">{{ $a['inscription']['text'] }}</a></li>
				    <li><a href="{{ $a['manage-jobs']['url']}}">{{ $a['manage-jobs']['text'] }}</a></li>
				    <li><a href="{{ $a['edit-profil']['url']}}">{{ $a['edit-profil']['text'] }}</a></li>
				    <li><a href="{{ $a['edit-texts']['url']}}">{{ $a['edit-texts']['text'] }}</a></li>
				    <li><a href="{{ $a['edit-figures']['url']}}">{{ $a['edit-figures']['text'] }}</a></li>
				    <li><a href="{{ $a['edit-projects']['url']}}">{{ $a['edit-projects']['text'] }}</a></li>
				    <!-- -->
				    
				    
			    </ul>
		    </nav>
	    </div>
	    <div class="share_boxes">
		    <a class="box" id="twitter" href="#"><img src="{{ $img['twitter']['src']}}"/></a>
		    <a class="box" id="facebook" href="#"><img src="{{ $img['facebook']['src']}}"/></a>
		    <a class="box" id="google" href="#"><img src="{{ $img['google']['src']}}"/></a>
	    </div>
    </header>
    
    
    <body>
    
        @yield('content')
        <!--
        <footer id="footer">
	        <div id="footer_container">
	                <a href="{{ $a['login']['url']}}" id="footer_input">{{ $a['login']['text'] }}</a>
		        <h5>{{ $copyright }}</h5>
	        </div>
        </footer>-->
        
        
        
        
        
        <footer id="footer">
	<div id="apropos_popup">
	<img id="apropos_img" src="ressources/logo_web2i.png" />
	<h3>A propos de ce site:</h3>
	<p>Ce site a été développée par l'équipe Web2i, dans le cadre d'un projet informatique de 2e année à l'IG2i.<br/> Période de développment :  Septembre 2015 - Mars 2016.<br/><br/>L'équipe en charge du projet :</p>
	<table id="apropos_equipe">
		<tr>
			<th>Pôle front-end</th>
			<th>Pôle back-end</th>
		</tr>
		<tr>
			<td>Sébastien SEPTIER</td>
			<td>Loïc BOURGOIS</td>
		</tr>
		<tr>
			<td>François VIDOGUE</td>
			<td>Maxime DESMARCHELIER</td>
		</tr>
		<tr>
			<td>Nouaman OUMALLANI</td>
			<td>Adam DEMORY</td>
		</tr>
	</table>
	<a id="apropos_input">Ok</a>
	</div>
	<div id="footer_container">
	  	<h5>Copyright© 2015-2016 Web2i. All Rights Reserved.</h5>
	  	<a href="{{ $a['login']['url']}}" class="footer_input">{{ $a['login']['text'] }}</a>
	  	<a id="apropos_btn" class="footer_input">A propos</a>
		
	</div>
</footer>
        
        
        
    </body>
</html>

