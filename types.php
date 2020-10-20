<?php
	include ('public/php/header.php');
?>
		
	<section class="bg3" id="firstSection">
		<article class="flex flex--col">
			<h1 class="heading-resp--full">Types de bière</h1>
			<h1 class="heading-resp">Types</h1>
			<div class="grid grid__double text-center">
				<div class="grid__btn bg12" id="gridBtn1">
					<h3>Selon la couleur</h3>
				</div>
				<div class="grid__btn bg13" id="gridBtn2">
					<h3>Selon la fermentation</h3>
				</div>
				<div class="grid__btn bg14" id="gridBtn3">
					<h3>Selon le style</h3>
				</div>
				<div class="grid__btn bg15" id="gridBtn4">
					<h3>Selon le continent</h3>
				</div>
			</div>
		</article>
		<a href="#secondSection" class="scroll-arrow scroll-arrow--corner">
				<img src="public/img/arrow.svg" alt="Défiler">
			</a>
	</section>

<!-- 
	POPUPS
 -->

		<section class="popup__container" id="popupFirst">
			<section class="popup flex--col">
					<div class="popup__heading bg12">
						<button class="close-button" id="popupFirstClose"></button>
						<h2>
							Selon la couleur
						</h2>
					</div>
					<div class="popup__body">
						<p>Pour le consommateur occasionnel, la couleur a été longtemps le critère de classification. La couleur de la bière vient avant tout du malt, plus ou moins grillé selon la recette utilisée.</p>
						<p>Selon la durée et la température du touraillage de malt on obtiendra des bières de couleurs variées. Le touraillage correspond à l’étape finale de la malterie : après la germination de l’orge, le malt vert est séché. L’humidité du grain va passer de 44% à 4% en 24 heures à 48 heures, sous l’effet d’un courant d’air chaud. En fonction de la durée et de la température, le malt va se colorer.</p>
						<p>Les <b>bières blanches</b> sont brassées avec des malts pâles et des malts de froment. Le malt de blé ne comporte pas d’enveloppes comme le malt d’orge, aussi les matières colorantes sont moindres.</p>
						<p>Les <b>bières blondes</b> sont brassées avec des malts d’orge pâles.</p>
						<p>Les <b>bières ambrées</b> ou rousses sont brassées avec des malts dits « caramel » plus grillés et torréfiés que les bières blondes.</p>
						<p>Les <b>bières brunes</b> sont brassées avec des malts bruns, appelés malts « chocolat » fortement torréfiés qui leur confèrent un fort potentiel aromatique et des couleurs allant du marron au noir.</p>
					</div>
			</section>
		</section>	

		<section class="popup__container" id="popupSecond">
			<section class="popup flex--col">
					<div class="popup__heading bg13">
						<button class="close-button" id="popupSecondClose"></button>
						<h2>
							Selon la fermentation
						</h2>
					</div>
					<div class="popup__body">
						<p><b>La fermentation basse :</b> elle utilise des souches de levures qui travaillent à basse température, moins de 10°C. Quand le milieu nutritif est épuisé en fin de fermentation, elle se dépose en bas de la cuve et on la récupère par raclage. Les bières produites seront de type pils, on parlera aussi de lager. Les pils correspondent à 80 ou 90 % de la production mondiale.</p>
						<p><b>La fermentation haute :</b> pratiquée depuis la nuit des temps, elle résulte de l’utilisation de levure comparable à celle utilisée en boulangerie. Elle se déroule à 20°C et se récolte à l’issue de la fermentation par écumage. Elle donnera des ale ou des stouts.</p>
						<p><b>La fermentation spontanée :</b> les micro-organismes sont omniprésents dans la terre, l’eau, l’air. Les levures sont véhiculées par l’air et certaines souches se développent plus particulièrement à la saison des fruits. Dans une petite région proche de Bruxelles, la vallée de la Senne et le Pajottenland, un moût de bière est laissé à refroidir à l’air libre, des microbes bienveillants vont ensemencer ce milieu nutritif. Ils donneront des produits de caractère, de grande qualité, les lambics, gueuzes et autres faros.</p>
						<p><b>La refermentation en bouteille :</b> au niveau artisanal, la filtration n’est pas courante et moins encore, la pasteurisation. Aussi la bière contient de la levure susceptible de fermenter les sucres résiduels en bouteille et de se déposer. Il est recommandé de laisser ces bouteilles debout et de verser la bière avec délicatesse. L’étiquette évoquera la présence de levures sous le vocable, bière vivante ou bière sur lie.</p>
						<p><b>La fermentation mixte :</b>  elle allie en générale une fermentation basse et une fermentation haute sur une même bière.</p>
					</div>
			</section>
		</section>

		<section class="popup__container" id="popupThird">
			<section class="popup flex--col">
					<div class="popup__heading bg14">
						<button class="close-button" id="popupThirdClose"></button>
						<h2>
							Selon le style
						</h2>
					</div>
					<div class="popup__body">
						<p>Avec la grande diversité de bières qu’offrent aujourd’hui les brasseurs français aux consommateurs, la notion de style est de plus en plus utilisée pour caractériser les bières. Le style définit une recette, une origine historique ou géographique, des ingrédients particuliers, que chaque brasseur combine pour donner naissance à des bières goûteuses et originales.</p>
						<p>Ces styles sont le plus souvent mentionnés désormais sur l’étiquette des produits comme par exemples :</p>
						<p><b>Bière de garde :</b> ce style typique du Nord de la France indique que la bière a été « gardée », autrefois en fûts, aujourd’hui en cuves avant d’être embouteillée, ce qui permet de parfaire ses arômes et son goût. Ces bières de garde peuvent être consommées plusieurs mois, voire années après la mise en bouteille.  La plupart sont assez douces, avec des notes céréalières et de caramel pour les plus foncées. Elles peuvent être de fermentation haute ou basse.</p>
						<p><b>Bière d’abbaye :</b> le plus souvent blonde ou ambrée, sa recette doit s’appuyer sur une production historique de bière dans une abbaye, les moines étant autrefois des brasseurs notoires. La bière d’abbaye est ronde en bouche, peu amère et riche en malt.</p>
						<p><b>Lager :</b> c’est la bière blonde classique, de fermentation basse, légère, titrant de 4 à 5%vol. Elle développe le plus souvent des notes florales et une amertume légère. Sa déclinaison la plus éminente est la Pils* aux saveurs fines de malt et de houblon. Elle représente 90% de la production mondiale.</p>
						<p><b>Pale Ale :</b>  signifie en anglais « bière pâle ». Blonde également, elle est obtenue par fermentation haute, et est élaborée à base de malts spéciaux, d’où ses notes de biscuit.</p>
						<p><b>India Pale Ale :</b> dans son utilisation actuelle, cette ale se distingue par une forte amertume et des arômes intenses d’agrumes. Redécouverte par les brasseurs artisanaux américains dans les années 80, la recette initiale a été mise au point par les Britanniques au XIXème siècle pour permettre à leurs bières de mieux voyager par bateau jusqu’aux Indes, en augmentant la quantité de houblon dans leur brassage afin d’améliorer la conservation de la bière jusqu’à destination.</p>
						<p><b>Triple :</b> Bière plus aromatique et ronde en bouche, de fermentation haute, elle est produite avec des levures particulières qui lui confèrent des saveurs de fruits mûrs, ainsi que des notes épicées de clou de girofle.</p>
						<p><b>Stout :</b> cette ale de tradition anglaise se distingue des autres bières brunes par un goût de grillé persistant, grâce à des malts très torréfiés au goût de café, voire de cacao. Sa couleur foncée n’a pas d’incidence sur le degré alcoolique, puisque la plupart titre entre 4 et 6%vol.</p>
						<p><b>Blanche :</b> une forte proportion de blé apporte acidité et fraîcheur à ces bières très effervescentes, qui ne sont pas forcément blanches, mais souvent troubles car non filtrées. Les styles allemands comme la Wiezenbier présentent un léger parfum de banane. Les Witbier, de tradition belge, plus courantes en France, sont agrémentées de graines de coriandre et d’écorces d’agrumes.</p>
						<p><b>Saison :</b> encore confidentielle, la Saison est une bière originaire des fermes brassicoles du nord de la France et de Belgique. Fraîche et fruitée, elle est brassée avec une levure particulière et des houblons belges ou anglais qui lui confèrent des saveurs herbacées.</p>
						<p><b>Sour :</b> acide en anglais, sont des bières de tradition belge dont l’acidité est due à l’action des lactobacilles dont la maîtrise relève d’un vrai savoir-faire. Le moût souvent laissé à l’air libre est ensemencé par les organismes présents dans l’air et se prête ensuite à différentes recettes : rajout de fruits, vieillissement en tonneaux pour donner naissance à la lambic ou la gueuze. On trouve de plus en plus de bières sour produites par des brasseurs français.</p></b>
						<p><b>Vieillie en fût :</b> certaines bières se prêtent à des vieillissements en fûts de chêne ayant contenu des vins ou des liqueurs. Pendant une durée de 3 à 18 mois, la bière s’approprie les arômes du bois mais aussi ceux laissées par les boissons vieillies auparavant. Ces bières de dégustation sont prisées par la restauration pour la richesse de leurs saveurs.</p>
					</div>
			</section>
		</section>

		<section class="popup__container" id="popupFourth">
			<section class="popup flex--col">
					<div class="popup__heading bg15">
						<button class="close-button" id="popupFourthClose"></button>
						<h2>
							Selon le continent
						</h2>
					</div>
					<div class="popup__body">
						<p>Boisson la plus consommée dans le monde après l’eau et le thé, riche de sa diversité de goûts, de couleurs, d’odeurs, la bière est un produit universel ! Chaque pays a sa bière, il y en a des milliers brassées aux quatre coins de la planète. La bière vous invite au voyage !</p>

						<h3 class="text-left">Afrique</h3>
						<p>Deux visions de la bière en Afrique sont à évoquer. La première concerne les brasseries implantées dans la quasi-totalité des pays, qui produisent des bières blondes à fermentation basse. La seconde tient à l’existence de nombreuses préparations autochtones, rurales ou urbaines, familiales ou artisanales, de boissons amylacées et fermentées, que l’on peut désigner sous le vocable générique de dolos. Ces dolos donnent une grande vitalité sociale et une réalité économique indiscutable à ce que les économistes nomment le secteur informel.</p>
						<p><b>Les bières autochtones :</b> les bières africaines, tirées de céréales et autres amylacées locaux, sont tout autant nourritures que boissons. Largement plurimillénaires, les bières d’éleusine et de sorgho sauvage en Afrique centrale et orientale ont été brassées avant les bières de froment et d’orge. Le point commun de ces bières est d’être préparées par des femmes, ces bières à base de céréales sont des boissons festives et collectives qui accompagnent aussi bien les rites d’initiation que les mariages ou les cérémonies mortuaires. Pour de nombreuses ethnies africaines, les bières traditionnelles jouent un rôle culturel et social essentiel dans la cohésion sociale.</p>
						<p><b>Les bières blondes à fermentation basse :</b> presque tous les états africains ont leur brasserie. Les Africains ont pris l’habitude de consommer les mêmes bières qu’en Occident. Brassées sur place dans des usines, à partir de matières premières importées, elles constituent un marché florissant.</p>
						<p>Elles n’ont pas encore remplacé totalement les multiples bières traditionnelles locales, préparées à base de mil ou de sorgho, comme la dolo du Burkina Faso.</p>
						<p>Des préparations à base de maïs ou de manioc comme le munkoyo dans les régions du Shaba (République Démocratique du Congo) ou du nord de la Zambie sont également appréciées.</p>
						<p>Parfois les bananes participent au brassage, comme en Ouganda, au Burundi ou au Rwanda. Elles produisent une bière épaisse, assez trouble, un peu acide, très nutritive, vitaminée et peu alcoolisée. Elle se boit au chalumeau, à partir d’une calebasse. Au Zaïre, on préfère le parfum des patates douces, alors qu’au Niger la bière de mil aurait même des pouvoirs divinatoires !</p>

						<h3 class="text-left">Amérique du Nord</h3>
						<p>L’Amérique du Nord produit des bières légères. Depuis 1985, des microbrasseries apparaissent. La tendance est aux bières hypocaloriques et aux micro-brasseries, où de nombreux brasseurs amateurs  dynamisent ce secteur et se livrent à toutes sortes d’expériences : bières aux fruits, aux fleurs, aux épices…</p>

						<h3 class="text-left">Amérique du Sud</h3>
						<p>En Amérique du Sud, les bières blondes à fermentation basse se sont imposées. On trouve aussi des fabrications de bières locales au goût plus typé, telle que la Tecate au Mexique, qui se boit avec du sel et du citron comme la Tequila, la Cuzco au Pérou, la Brahma et l’Antartica au Brésil. Il existe aussi de nombreuses boissons fermentées traditionnelles préparées à partir des céréales, comme les chichas (bières de maïs des Incas) ou le Cachiri (bière de manioc des Amérindiens). Au Pérou on y glisse des graines de quinoa mâchées par les femmes, en Argentine du caroubier, au Paraguay de l’igname. Au sud du Chili, les graines d’araucaria servent à la fabrication de bière, le Cachiri guyanais se fait quant à lui, à partir de manioc.</p>

						<h3 class="text-left">Asie</h3>
						<p><b>Au Japon</b>, les bières sont des lagers très légères, inspirées de l’Occident. Un « must » sur le poisson cru.</p>
						<p><b>En Chine</b>, le développement économique a permis l’essor de la consommation de la bière. Depuis 2005, la Chine est le 1er pays producteur et consommateur de bière dans le monde. La Tsin Tao est la bière chinoise la plus connue à l’étranger. Elle est brassée pour 70% avec de l’orge, et à 30% avec du riz.</p>
						<p><b>En Inde</b>, la bière est à base de riz décortiqué, blanchi et cuit à la vapeur. Des herbes sont parfois rajoutées pour la parfumer.</p>

						<h3 class="text-left">Europe</h3>
						<p><b>Les pays du pourtour méditerranéen</b> sont amateurs de bières typiques, de saveurs cachées et de festivités. Précurseurs en termes d’associations « bière et mets », les Espagnols apprécient tout particulièrement les blondes dorées et légères pour accompagner tapas et jambon de Serrano.</p>
						<p><b>Les pays du Nord de l’Europe</b> produisent des bières d’une grande diversité. Parmi les plus gros consommateurs et producteurs, on trouve l’Allemagne, la Belgique, la Grande-Bretagne
						En Grande-Bretagne, vous la consommerez à température ambiance et peu gazeuse. Ce sont les bières de fermentation haute, les ales, qui sont les plus consommées. Ce sont des bières assez douces, des brunes foncées aux rousses. Depuis une trentaine d’années, la consommation de bière blonde (appelée lager) a dépassé celle des bières traditionnelles anglaises (appelées bitter). Avec le mouvement des real ales (bières authentiques), lancé dans les années 1960, la plupart des pubs anglais proposent des real ales à la pompe. Celles-ci sont non pasteurisées, sans CO² ajoutés, et brassées selon des méthodes traditionnelles.
						</p>
						<p>La bière,<b> en Allemagne</b>, est le produit phare et historique du secteur agroalimentaire. Les Allemands l’aiment blonde et fortement houblonnée. C’est le territoire des lagers et des pils, bières blondes fortement houblonnées de fermentation basse, plutôt acides. Elles sont les plus consommées et représentent les deux-tiers des ventes. On y trouve également des altbier, bières de fermentation haute, troubles et ambrées ; des bockbier, bières blondes ou ambrées, fortes, et de fermentation basse et de nombreuses autres bières de spécialité.</p>
						<p><b>En Europe centrale</b>, la plupart des bières sont de fermentation basse. Les pils produites en République tchèque sont riches en houblon, blondes et claires.</p>
						<p><b>En Europe de l’Est</b>, la bière y est aussi très répandue. Elle tend peu à peu à se substituer au kwas ou kwass traditionnel. Cette boisson fermentée, pétillante et légèrement alcoolisée est encore très populaire en Russie, en Ukraine, en Biélorussie et dans d’autres pays d’Europe de l’Est.</p>
					</div>
			</section>
	</section>
		
<!-- 
	SLIDER
-->

	<section class="bg-black" id="secondSection">

		<article class="flex flex--col">

			<h2>Quelques marques</h2>
		
			<div class="swiper-container">
			<!-- Additional required wrapper -->
				<div class="swiper-wrapper">
					<!-- Slides -->
					<?php 

						for ($i = 1; $i <= 10; $i++){
							echo '
								<div class="swiper-slide"><img src="public/img/logo'.$i.'.png"></div>
							';
						}

					?>
					
				</div>

				<!-- If we need navigation buttons -->
				<div class="swiper-button-prev"></div>
				<div class="swiper-button-next"></div>

			</div>

			<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
			<script>
				var mySwiper = new Swiper('.swiper-container', {
	
					navigation: {
						nextEl: '.swiper-button-next',
						prevEl: '.swiper-button-prev',
					},

					loop: true

				});

			</script>

		</article>

	</section>

	<script type="text/javascript" src="public/js/popups.js"></script>
		
<?php
	include('public/php/footer.php');
?>

