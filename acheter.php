﻿<!DOCTYPE html>
<?php header("Content-type: text/html; charset=utf-8"); ?>
<html>
	<head>
		<?php
		$titre = "Style Achat";
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
		
			<section class="pagesventes"><br />
			<span class="darkred"><b>Affiner votre recherche</b></span><br /><br />
			<div class="research">
			<form method="POST" name="rechercheform" autocomplete="on" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
					<SELECT name="transaction" placeholder="Type de transaction" class="input">
						<OPTION>Type de transaction</OPTION>
						<OPTION VALUE="location">Location</OPTION>
						<OPTION VALUE="vente" selected="selected">Vente</OPTION>
					</SELECT>
					<SELECT name="bien" placeholder="Type de bien" class="input">
						<OPTION VALUE="Appartement">Appartement</OPTION>
						<OPTION VALUE="Immeuble">Immeuble</OPTION>
						<OPTION VALUE="Maison">Maison</OPTION>
						<OPTION VALUE="Voiture">Voiture</OPTION>
					</SELECT>
					
					<SELECT name="localite" placeholder="Localité" class="input">
						<OPTION VALUE="Bordeaux">Bordeaux</OPTION>
						
					</SELECT>
					<input type="text" name="budgetmin" value="" placeholder="Budget minimum" class="input3" required/>
					<input type="text" name="budgetmax" value="" placeholder="Budget maximum" class="input3" required/>
					<input type="submit" name="submit" value="Rechercher" class="button_green"><br /><br /><br />
			</form>
			</div>
			
		<?php
		
			// on se connecte à MySQL 
			//$connex = mysqli_connect('localhost', 'root', ''); 

			// on sélectionne la base 
			//mysqli_select_db($connex,'siteinternet'); 

			
			if (isset($_POST['submit']))
			{
			$transaction = $_POST["transaction"];
			$type = $_POST["bien"];
			$localite = $_POST["localite"];
			$budgetmin = $_POST["budgetmin"];
			$budgetmax = $_POST["budgetmax"];
			
						// Connexion à la base de données
			try
			{
				$bdd = new PDO('mysql:host=localhost;dbname=siteinternet', 'root', '');
			}
			catch(Exception $e)
			{
				die('Erreur : '.$e->getMessage());
			}
			
			// On récupère tout le contenu de la table achat
			$reponse2 = $bdd->query('SELECT * FROM '.$transaction.' WHERE type = "'.$type.'"  AND lieu = "'.$localite.'" AND budget BETWEEN '.$budgetmin.' AND '.$budgetmax.'');

			// On affiche chaque entrée une à une
			while ($donnees2 = $reponse2->fetch())
			{
		?>
	
			<aside>
			<div class="blocDeBien">
				<a  href="<?php echo $donnees2['lien'] ?>" ><img src="<?php echo $donnees2['photoprofil'] ?>" alt="imgFixe/erreur.jpg" width="250" height="155"></a>
				<div class="descriptionBien"><strong>Vente <?php echo $donnees2['type'] ?></strong> <br /> <br />
				<strong><?php echo $donnees2['lieu'] ?></strong><br /><br />
				<?php echo utf8_encode($donnees2['descript']) ?>
				</div>
				<a href="<?php echo $donnees2['lien'] ?>"><div class="enterBien"><span class="darkred"><h2><?php echo $donnees2['budget']  ?> €</h2><br/> + de détails</span>
				</div></a>
			</div>
			
		<?php
			// on ferme la connexion à mysql 
			//mysqli_close($connex);  // Termine le traitement de la requête
			$reponse2->closeCursor();
			}
			}
			
			else
			{
		?>
		
		<?php

			// Connexion à la base de données
			try
			{
				$bdd = new PDO('mysql:host=localhost;dbname=siteinternet', 'root', '');
			}
			catch(Exception $e)
			{
				die('Erreur : '.$e->getMessage());
			}
			
			// On récupère tout le contenu de la table achat
			$reponse = $bdd->query('SELECT * FROM vente');

			// On affiche chaque entrée une à une
			while ($donnees = $reponse->fetch())
			{
		?>
			<aside>
			<div class="blocDeBien">
				<a  href="<?php echo $donnees['lien'] ?>" ><img src="<?php echo $donnees['photoprofil'] ?>" alt="Indisponible" width="250" height="155"></a>
				<div class="descriptionBien"><strong>Vente <?php echo $donnees['type'] ?></strong> <br /> <br />
				<strong><?php echo $donnees['lieu']?></strong><br /><br />
				<?php echo utf8_encode($donnees['descript']) ?>
				</div>
				<a href="<?php echo $donnees['lien'] ?>"><div class="enterBien"><span class="darkred"><h2><?php echo $donnees['budget'] ?> €</h2><br/> + de détails</span>
				</div></a>
			</div>
			
		<?php
			}
			$reponse->closeCursor(); // Termine le traitement de la requête
			}
		?>
		
		</aside>
		</section>
		
		
		<footer>
			 <?php include("pied_de_page.php"); ?>
		</footer>
	</div>
	</body>
</html> 
