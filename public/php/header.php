<?php

	$filename = basename($_SERVER['PHP_SELF']);
	$filenames = array(
		'first'=>'index.php',
		'second'=>'consommation.php', 
		'third'=>'types.php',
		'fourth'=>'faire_sa_biere.php', 
		'fifth'=>'nous.php'
	);


	echo '
		<!DOCTYPE HTML>
		<html>
			<head>
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<link rel="icon" type="image/png" href="public/img/site-logo.png">
				<title>La Bière</title>';
				
	if($filename == $filenames['third']){
		echo '<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">';
	}	
	
	if($filename == $filenames['first']){
		echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
	}
				
	echo
				'<link rel="stylesheet" type="text/css" href="public/css/style.css">
			</head>

			<body>
				<header>
					<navbar class="flex">
		';
	


	if($filename == $filenames['first']){
		echo'
						<button class="active" id="nav-1">Accueil</button>
						<button id="nav-2">Consommation</button>
						<button id="nav-3">Types</button>
						<button id="nav-4">Faire sa bière</button>
						<button id="nav-5">Nous</button>
						<button id="burgerMenu"></button>
					</navbar>
				</header>

				<section class="flex--col responsive-nav menu--hidden">
					<button class="active" id="nav-1-resp">Accueil</button>
					<button id="nav-2-resp">Consommation</button>
					<button id="nav-3-resp">Types</button>
					<button id="nav-4-resp">Faire sa bière</button>
					<button id="nav-5-resp">Nous</button>
					<button id="closeNav" class="close-button"><button>
				</section>
	';

	} else if($filename == $filenames['second']){
		echo'
						<button id="nav-1">Accueil</button>
						<button class="active" id="nav-2">Consommation</button>
						<button id="nav-3">Types</button>
						<button id="nav-4">Faire sa bière</button>
						<button id="nav-5">Nous</button>
						<button id="burgerMenu"></button>
					</navbar>
				</header>

				<section class="flex--col responsive-nav menu--hidden">
					<button id="nav-1-resp">Accueil</button>
					<button class="active" id="nav-2-resp">Consommation</button>
					<button id="nav-3-resp">Types</button>
					<button id="nav-4-resp">Faire sa bière</button>
					<button id="nav-5-resp">Nous</button>
					<button id="closeNav" class="close-button"><button>
				</section>
		';

	} else if($filename == $filenames['third']){
		echo'
						<button id="nav-1">Accueil</button>
						<button id="nav-2">Consommation</button>
						<button class="active" id="nav-3">Types</button>
						<button id="nav-4">Faire sa bière</button>
						<button id="nav-5">Nous</button>
						<button id="burgerMenu"></button>
					</navbar>
				</header>

				<section class="flex--col responsive-nav menu--hidden">
					<button id="nav-1-resp">Accueil</button>
					<button id="nav-2-resp">Consommation</button>
					<button class="active"  id="nav-3-resp">Types</button>
					<button id="nav-4-resp">Faire sa bière</button>
					<button id="nav-5-resp">Nous</button>
					<button id="closeNav" class="close-button"><button>
				</section>
		';
	} else if($filename == $filenames['fourth']){
		echo'
						<button id="nav-1">Accueil</button>
						<button id="nav-2">Consommation</button>
						<button id="nav-3">Types</button>
						<button class="active" id="nav-4">Faire sa bière</button>
						<button id="nav-5">Nous</button>
						<button id="burgerMenu"></button>
					</navbar>
				</header>

				<section class="flex--col responsive-nav menu--hidden">
					<button id="nav-1-resp">Accueil</button>
					<button id="nav-2-resp">Consommation</button>
					<button id="nav-3-resp">Types</button>
					<button class="active" id="nav-4-resp">Faire sa bière</button>
					<button id="nav-5-resp">Nous</button>
					<button id="closeNav" class="close-button"><button>
				</section>
		';

	} else if($filename == $filenames['fifth']){
		echo'
						<button id="nav-1">Accueil</button>
						<button id="nav-2">Consommation</button>
						<button id="nav-3">Types</button>
						<button id="nav-4">Faire sa bière</button>
						<button class="active" id="nav-5">Nous</button>
						<button id="burgerMenu"></button>
					</navbar>
				</header>

				<section class="flex--col responsive-nav menu--hidden">
					<button id="nav-1-resp">Accueil</button>
					<button id="nav-2-resp">Consommation</button>
					<button id="nav-3-resp">Types</button>
					<button id="nav-4-resp">Faire sa bière</button>
					<button class="active" id="nav-5-resp">Nous</button>
					<button id="closeNav" class="close-button"><button>
				</section>
		';
	}

	echo '
		<img src="public/img/notice.jpg" class="notice">
	';
					

					