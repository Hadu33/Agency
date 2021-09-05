<!DOCTYPE html>

<html>
	<head>
		<?php
		$titre = " Style Achat Maison";
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
		<strong><h1>Villa Caudéran-Barrière Judaïque, Bordeaux</h1></strong>
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
			<li><img src="imgSlide3/maisonstt2.jpg" alt="Image 1" width="512" height="288" /></li>
			<li><img src="imgSlide3/maisonstt3.jpg" alt="Image 2" width="512" height="288"/></li>
			<li><img src="imgSlide3/maisonstt4.jpg" alt="Image 3" width="512" height="288"/></li>
			<li><img src="imgSlide3/maisonstt5.jpg" alt="Image 4" width="512" height="288"/></li>
			<li><img src="imgSlide3/maisons4.jpg" alt="Image 5" width="512" height="288"/></li>
		</aside>
		<?php
		$panErr = "";
		if(isset($_SESSION['id']) AND isset($_SESSION['email']))
		{
			// on se connecte à MySQL 
			$connex = mysqli_connect('localhost', 'root', ''); 

			// on sélectionne la base 
			mysqli_select_db($connex,'siteinternet');
	
			$sql = 'SELECT * FROM membres WHERE id = "' .$_SESSION['id']. '"';
			$req = mysqli_query($connex,$sql) or die('Erreur SQL !<br>'.$sql2.'<br>'.mysqli_error($connex)); 
			$resultat = mysqli_fetch_array($req);
			if (isset($_POST['ajout']))
			{	 
			$idpersonne = $resultat['id'];
			$titre = 'Maison située à Bordeaux';
			// on crée la requête SQL  
			$sql11 = "INSERT INTO panier(titre,idpersonne) VALUES('$titre', $idpersonne)";

			// on envoie la requête 
			$req11 = mysqli_query($connex,$sql11) or die('Erreur SQL !<br>'.$sql11.'<br>'.mysqli_error($connex)); 
			$panErr = "Cet article a été bien ajouté à votre panier";
			// on ferme la connexion à mysql 
			mysqli_close($connex);  
			}
		}
		else 
		{
		$panErr = "Vous devez être membre pour ajouter à votre panier. Veuillez vous inscrire au préalable";
		}
		?>
		<article class="descBien">
		<h2>VENTE MAISON</h2>
		<b>Bordeaux</b><br /><br />
		<b class="darkorange">1.000.000 €</b><br />
		<p>Magnifique rénovation par un architecte de renom pour cette maison traitée de façon contemporaine avec de très jolies matériaux. La maison qui se compose de plain-pieds d'une entrée donnant sur une grande pièce de réception avec cheminée à l'éthanol ouvrant sur le jardin avec piscine chauffée de 10 m de long, d'une cuisine et d'une chambre parentale avec ses dressings, salle de douche et sauna. Au premier étage, 4 chambres avec une salle de bain et une salle de douche. Au deuxième étage, un grand espace salon télé. Une place de parking complète ce bien rare..</p>
		<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
		<input type="submit" name="ajout" value="Ajouter au panier" class="button_green" />&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="submit" name="contacter" value="Nous Contacter" class="button_green" onclick="document.location.href='#contactPart'" /></form>
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
				<h3 class="darkred">Agence Style By Arezki Développeur Web full Stack</h3>
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
