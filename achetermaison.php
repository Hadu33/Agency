<!DOCTYPE html>

<html>
	<head>
		<?php 
		$titre = " StyleA chat Maison";
		include("head.php"); 
		?>
	</head>

	<body>
	<div class="cent">
		<header>
			 <?php include("entete.php"); ?>
			
			<nav>
				<?php include("menus.php"); ?>
			</nav>
		</header>
		
	<section class=center3>
		<div class=center><br/>
		<strong><h1>Maison située à Bordeaux sur 4000 m²</h1></strong>
				<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<br/>
                <br/>
		<aside>
		<ul class="diaporama">
			<li><img src="imgSlide3/maison21.jpg" alt="Image 1" width="512" height="288" /></li>
			<li><img src="imgSlide3/maison22.jpg" alt="Image 2" width="512" height="288"/></li>
			<li><img src="imgSlide3/maison23.jpg" alt="Image 3" width="512" height="288"/></li>
			<li><img src="imgSlide3/maison24.jpg" alt="Image 4" width="512" height="288"/></li>
			<li><img src="imgSlide3/maison25.jpg" alt="Image 5" width="512" height="288"/></li>
		</aside>
		
		<article class="descBien">
		<h2>VENTE MAISON</h2>
		<b>Bordeaux</b><br /><br />
		<b class="darkorange">1.000.000 €</b><br />
		<p>Aux Chartrons, à proximité des quais, cet insoupçonnable loft de 200m2 est composé de deux niveaux aux volumes parfaitement répartis, offrant divers espaces extérieurs. Tous les codes du loft ont été respectés dans cette habitation : baies vitrées, lignes épurées et minimalistes, grands volumes, béton banché au mur et béton ciré au sol. Une fois la porte et la vaste entrée privative franchies, on découvre une salle à manger avec sa cuisine ouverte, avec un accès sur une première terrasse. Deux couloirs serpentent le centre du loft, l'un avec ses rangements astucieusement dissimulés, l'autre aux murs en béton banché longeant la piscine intérieure, menant à l'espace de vie. Le salon est généreux en volumes, contemporain de par ses prestations, chaleureux grâce à sa cheminée et s'ouvre sur la seconde terrasse végétalisée. La piscine intérieure chauffée quant à elle fait la jonction entre les deux terrasses, traversante par ses baies vitrées de part et d'autre. L'espace nuit, à l'étage, se compose d'un coin bureau, de deux chambres avec salle d'eau, et d'une vaste suite parentale lumineuse avec dressing et salle de bain ouverte, le tout donnant sur l'érable majestueux. Une terrasse à l'étage, avec filet de détente, permet d'accéder au toit zingué offrant une vue apaisante à 360° sur le quartier. Un grand garage s'ajoute aux nombreuses qualités de ce bien sublime. Possibilité d'acquérir un appartement T3 attenant d'environ 60m2. Copropriété de 3 lots (Pas de procédure en cours). Charges annuelles : 1200 euros. Agence Style By Arezki Déverloppeur Web Full Stack Bordeaux</p>
		<input type="submit" name="ajout" value="&#9619;  Ajouter au panier" class="button_green" />&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="submit" name="contacter" value="&sect; Nous Contacter" class="button_green" onclick="document.location.href='#contactPart'" />
		</article> 
		<br/><br/>
		<div class="zonecontact"><br/><br/>
		<div id="contactPart">
				<h1>NOUS CONTACTER</h1>
				<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<h3 class="darkred"> Agence Style By Arezki Développeur Web full Stack</h3>
				<b>Adresse :</b><br/>
				<b class="blue">Agence Style</b><br/>
				12 Rue des Lilas 33000 Bordeaux<br/>
				Tél :0607080910<br/>
				<strong class="darkred">Email : arezkidevweb@gmail.com</strong><br/><br/><br/>
			</div>
			
			<?php 
			include("nouscontacter.php");
			?>
			<div id="formPart"><br/>
				<?php 
				include("nouscontacterform.php");
				?>
			</div>
		</div>
		
		</div>
	</section>
	
		<footer>
			 <?php include("pied_de_page.php"); ?>
		</footer>
	</div>
	</body>
</html> 
