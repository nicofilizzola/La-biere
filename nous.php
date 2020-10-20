<?php
	include ('public/php/header.php');
?>
		
		<section class="bg-black members-section" id="firstSection">
			<article class="flex flex--col">
				<h1 class="heading-resp--full">Nous, l'équipe</h1>
				<h1 class="heading-resp">Nous</h1>
				<div class="grid grid__triple text-center">
					<div class="members-section__card">
						<img class="members-section__img" src="public/img/membre1.jpg" alt="Émeric Charpentier">
						<h3>Émeric Charpentier</h3>
						<p>Recherche et rédaction</p>
						<p><i>Bière préférée : </i><span class="text-important">Desperados</span></p>
						<div class="grid subgrid">
							<a href="https://www.instagram.com/emr_chrp/" target="blank">
								<img src="public/img/contact1.png" alt="">
							</a>
							<a href="https://www.linkedin.com/in/emeric-charpentier-765902197/" target="blank">
								<img src="public/img/contact2.png" alt="">
							</a>
						</div>
					</div>
					<div class="members-section__card">
						<img class="members-section__img" src="public/img/membre2.0.jpg" alt="Nicolás Filizzola">
						<h3>Nicolás Filizzola</h3>
						<p>Conception et développement web</p>
						<p><i>Bière préférée : </i><span class="text-important">Polar Light</span></p>
						<div class="grid subgrid">
							<a href="https://www.instagram.com/nicofilizzola/" target="blank">
								<img src="public/img/contact1.png" alt="">
							</a>
							<a href="https://www.linkedin.com/in/nicofilizzolaprod/" target="blank">
								<img src="public/img/contact2.png" alt="">
							</a>
						</div>
					</div>
					<div class="members-section__card">
						<img class="members-section__img" src="public/img/membre3.jpg" alt="Maël Gianni">
						<h3>Maël Gianni</h3>
						<p>Design graphique</p>
						<p><i>Bière préférée : </i><span class="text-important">Leffe</span></p>
						<div class="grid subgrid">
							<a href="https://www.instagram.com/mael.yoshi/" target="blank">
								<img src="public/img/contact1.png" alt="">
							</a>
							<a href="https://www.linkedin.com/in/mael-gianni-304a78196/" target="blank">
								<img src="public/img/contact2.png" alt="">
							</a>
						</div>
					</div>
				</div>
			</article>
			<a href="#secondSection" class="scroll-arrow scroll-arrow--corner hidden--medium">
				<img src="public/img/arrow.svg" alt="Défiler vers le bas vers le bas">
			</a>
		</section>

		<section class="bg-black members-section" id="secondSection">
			<figure class="hidden--medium flex">
				<img src="public/img/site-logo.svg" alt="La bière">
			</figure>
			<article class="text-aside">
				<h2>À propos</h2>
				<p>Ce site est un projet académique réalisé par 3 étudiants en DUT Métiers du Multimédia et de l’Internet, à l’IUT de Tarbes. Cette réalisation a eu pour but de nous faire travailler sur nos compétences dans le domaine de l’intégration web et de la gestion de projet, tout en fabricant un site de toutes pièces. Le contenu est principalement tiré d’autres sites montés par des experts du sujet <a href="mentions_legales.php#references" id="references_link">(Voir les références)</a>.</p>
				<p>Cette plateforme a été visuellement conçue avec le logiciel Adobe XD. Ensuite, nous avons mobilisé des technologies telles que le HTML5 pour la structure, le SCSS pour le style (directement exporté en format CSS3), le JavaScript pour les interactions (les transitions de page et les popups, par exemple), et le PHP pour simplifier le travail de codage ainsi que pour la mise en place de la fonctionnalité du formulaire de contact. D'autres logiciels tels que Adobe Illustrator et Adobe Photoshop ont été également utilisés pour le traitement des images.</p>
				<p>Avec ce site, nous ne cherchons pas à promouvoir la consommation d'alcool. Ce portail a été crée avec des fins strictement éducationnelles.</p>
			</article>
			<figure class="appear--medium flex">
				<img src="public/img/beer.png" alt="La bière">
			</figure>
			<a href="#thirdSection" class="scroll-arrow scroll-arrow--corner hidden--medium">
				<img src="public/img/arrow.svg" alt="Défiler vers le bas vers le bas">
			</a>
		</section>
		
		<section class="bg5 members-section" id="thirdSection">
			<article class="flex flex--col">
				<h2>Contactez nous</h2>
				<form id="contact-form" class="flex flex--col" method="post" action="public/php/contact.inc.php">

				<?php 

				include ('public/php/contactErrorMsg.php');
				?>

					<input type="text" name="first-name" placeholder="Votre prénom..."
						<?php
							if (isset($_GET['first-name'])){
								echo 'value="'.$_GET['first-name'].'"';
							}
						?>
					>
					<input type="text" name="last-name" placeholder="Votre nom..."
						<?php
							if (isset($_GET['last-name'])){
								echo 'value="'.$_GET['last-name'].'"';
							}
						?>
					>
					<input type="text" name="email" placeholder="Votre email..."
						<?php
							if (isset($_GET['email'])){
								echo 'value="'.$_GET['email'].'"';
							}
						?>
					>
					<input type="text" name="title" placeholder="Objet de votre message..."
						<?php
							if (isset($_GET['title'])){
								echo 'value="'.$_GET['title'].'"';
							}
						?>
					>
					<textarea name="message" placeholder="Votre message..."
						<?php
							if (isset($_GET['message'])){
								echo 'value="'.$_GET['message'].'"';
							}
						?>
					></textarea>
					<button type="submit" name="contact-submit" value="submit">Envoyer</button>
				</form>
			</article>
		</section>

		<script type="text/javascript" src="public/js/referencesLink.js"></script>
		
		<?php
			include('public/php/footer.php');
		?>

	
	