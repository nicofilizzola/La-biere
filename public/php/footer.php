<?php

	echo '
	<footer class="footer flex flex--col">
			<div class="footer__container">
				<div class="flex flex--col">
					<p><b>Consommation</b></p>
					<p><a href="consommation.php#secondSection">À quelle age ?</a></p>
					<p><a href="consommation.php#thirdSection">Où on boit le plus ?</a></p>
					<p><a href="consommation.php#fourthSection">La bière en France</a></p>
					<p><a href="consommation.php#fifthSection">Autres statistiques en France</a></p>
				</div>
				<div class="flex flex--col">
					<p><b>Types</b></p>
					<p><a href="types.php#firstSection">Les différents types de bière</a></p>
					<p><a href="types.php#secondSection">Quelques marques de bière</a></p>
				</div>
				<div class="flex flex--col">
					<p><b>Faire sa bière</b></p>
					<p><a href="faire_sa_biere.php#firstSection">Prérequis</a></p>
					<p><a href="faire_sa_biere.php#secondSection">Premiers pas</a></p>
					<p><a href="faire_sa_biere.php#thirdSection">Empâtage</a></p>
					<p><a href="faire_sa_biere.php#fourthSection">Houblonnage</a></p>
				</div>
				<div class="flex flex--col">
					<p><b>Nous</b></p>
					<p><a href="nous.php#firstSection">L\'équipe</a></p>
					<p><a href="nous.php#secondSection">À propos du projet</a></p>
					<p><a href="nous.php#thirdSection">Formulaire de contact</a></p>
				</div>
			</div>
			<div class="footer__container">
				<div class="flex flex--col grid-duo">
					<img src="public/img/site-logo.svg" alt="Logo">
				</div>
				<div class="flex flex--col grid-duo--var">
					<p><a href="mentions_legales.php">Mentions légales</a></p>
					<p>La consommation d\'alcool peut être dangeureuse pour la santé. Ne consommez pas d\'alcool si vous avez moins de 18 ans.</p>
					<p>Fait avec amour</p>
				</div>
			</div>
			<p><i>© 2020 Nicolas Filizzola - Web & Multimédia. Tous droits réservés</i></p>
		</footer>

	<section class="transition transition--in">
		<img src="public/img/loadscreen.gif" alt="Écran de chargement...">
	</section>
	<section class="transition transition--out">
		<img src="public/img/loadscreen.gif" alt="Écran de chargement...">
	</section>
	
	<script type="text/javascript" src="public/js/transition.js"></script>';

	if (basename($_SERVER['PHP_SELF']) !== 'mentions_legales.php'){
		echo '<script type="text/javascript" src="public/js/nav.js"></script>';
	}
	
	echo'
	</body>
	</html>
	';