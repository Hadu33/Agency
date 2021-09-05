<!DOCTYPE html>

<html>
	<head>
		<?php
		$titre = "Découverte Parc Jardin Public";
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
		<strong><h1>LE PARC DU JARDIN PUBLIC</h1></strong>
				<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<br/>
                <br/>
		<aside>
		<iframe width="500" height="315" src="//www.youtube.com/embed/Xl7QiePr3wA" frameborder="0" allowfullscreen></iframe>
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
			$titre = 'visite parc jardin public';
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
		<h2>VISITE</h2>
		<b></b><br /><br />
		<b class="darkorange"></b>Jardin Public<br />
		<p>Le jardin public de Bordeaux est un parc urbain situé dans le centre de Bordeaux. Par extension, les environs du parc se nomment le « quartier Jardin Public ». Officiellement, le parc (et donc le quartier) fait partie de la subdivision Chartrons - Grand Parc - Jardin Public2.

La création du jardin public de Bordeaux est décidée en 1746 à l'initiative de l'intendant Tourny, sur un terrain occupé par « de mauvaises vignes [...] et quelques jardinages » en limite de la ville. Il est inscrit Monument historique le 8 octobre 1935
		</p>
		<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
		<input type="submit" name="contacter" value=" Nous Contacter" class="button_green" onclick="document.location.href='#contactPart'" /></form></br>
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
				<h3 class="darkred">Arezki DJIBRI Développeur Web Full Stack</h3>
				<b>Adresse :</b><br/>
				<b class="blue">Agence STYLE</b><br/>
				12 Rue des Lilas 33000 BORDEAUX<br/>
				Tél : 0607080910<br/>
				<strong class="darkred">Email : arezkidevweb@gmail.com</strong><br/>
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
