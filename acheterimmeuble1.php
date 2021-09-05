<!DOCTYPE html>

<html>
	<head>
		<?php
		$titre = " Style Achat Immeuble";
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
		<strong><h1>Immeuble situé à Bordeaux</h1></strong>
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
			<li><img src="imgSlide3/immeubletwenty.jpg" alt="Image 1" width="512" height="288" /></li>
			<li><img src="imgSlide3/immeubletwotwo.jpg" alt="Image 2" width="512" height="288"/></li>
			<li><img src="imgSlide3/immeubletwo3.jpg" alt="Image 3" width="512" height="288"/></li>
			<li><img src="imgSlide3/immeubletwo4.jpg" alt="Image 4" width="512" height="288"/></li>
			<li><img src="imgSlide3/immeubleten0.png" alt="Image 5" width="512" height="288"/></li>
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
			$titre = 'Immeuble situé à Bordeaux';
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
		<h2>VENTE IMMEUBLE</h2>
		<b>Bordeaux</b><br /><br />
		<b class="darkorange">2.500.000 €</b><br />
		<p>Le territoire de Bordeaux Euratlantique sort de l’ombre pour séduire de nouveaux investisseurs français ou étrangers. La capitale de la Nouvelle Aquitaine et sa région sont devenues modernes et attractives, et leur élégance et leur plaisir de vivre devraient vous convaincre de venir y acheter un bien immobilier de luxe..</p>
		<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
		<input type="submit" name="ajout" value=" Ajouter au panier" class="button_green" />&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="submit" name="contacter" value="Nous Contacter" class="button_green" onclick="document.location.href='#contactPart'" /></form></br>
		<b class="error"><?php echo $panErr; ?></b>
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
				<h3 class="darkred">agence Style By Arezki Développeur Web Full Stack</h3>
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
