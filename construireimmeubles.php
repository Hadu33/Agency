<!DOCTYPE html>

<html>
	<head>
		<?php
		$titre = "Style Location Maison";
		include("head.php"); 
		?>
	</head>

	<body>
	<div class="cent">
		<header>
			 <?php include("entete.php"); 
			 ?>
			
			<nav>
				<?php include("menus.php"); ?>
			</nav>
		</header>
		
	<section class=center3>
		<div class=center><br/>
		<strong><h1>Construction Immeubles à Bordeaux</h1></strong>
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
			<li><img src="imgSlide3/immeubleone.jpg" alt="Image 1" width="512" height="288" /></li>
			<li><img src="imgSlide3/immeubletwo.jpg" alt="Image 2" width="512" height="288"/></li>
			<li><img src="imgSlide3/immeublethree.jpg" alt="Image 3" width="512" height="288"/></li>
			<li><img src="imgSlide3/immeublefor.jpg" alt="Image 4" width="512" height="288"/></li>
			<li><img src="imgSlide3/immeublefive.jpg" alt="Image 5" width="512" height="288"/></li>
		</aside>
		
		<article class="descBien">
		<h2>Proposition</h2>
		<b>Bordeaux</b><br /><br />
		<b class="darkorange">35.000.000 €</b><br />
		<p>Construire un immeuble sur Plan <br />
		Les images parlent plus que les mots. Nous saurons vous construire une maison de qualité !
		</p>
		<input type="submit" name="contacter" value="Nous Contacter" class="button_green" onclick="document.location.href='#contactPart'" />
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
				<h3 class="darkred"> Agence Style By Arezki Développeur Web Full Stack</h3>
				<b>Adresse :</b><br/>
				<b class="blue">Agence Style</b><br/>
				12 Rue des Lilas 33000 Bordeaux<br/>
				Tél : 0607080910<br/>
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
