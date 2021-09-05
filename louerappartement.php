<!DOCTYPE html>

<html>
	<head>
		<?php
$titre = "Style Location Appartement";
include "head.php";
?>
	</head>

	<body>
	<div class="cent">
		<header>
			 <?php include "entete.php";?>

			<nav>
				<?php include "menus.php";?>
			</nav>
		</header>

	<section class=center3>
		<div class=center><br/>
		<strong><h1>Appartement situé à Bordeaux</h1></strong>
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
			<li><img src="imgSlide3/appartements1.jpg" alt="image appartement 1" width="512" height="288" /></li>
			<li><img src="imgSlide3/appartements2.jpg" alt="Image appartement 2" width="512" height="288"/></li>
			<li><img src="imgSlide3/appartements3.jpg" alt="Image appartement 3" width="512" height="288"/></li>
			<li><img src="imgSlide3/appartements4.jpg" alt="Image appartement 4" width="512" height="288"/></li>
		</aside>
		<?php
$panErr = "";
if (isset($_SESSION['id']) and isset($_SESSION['email'])) {
    // on se connecte à MySQL
    $connex = mysqli_connect('localhost', 'root', '');

    // on sélectionne la base
    mysqli_select_db($connex, 'siteinternet');

    $sql = 'SELECT * FROM membres WHERE id = "' . $_SESSION['id'] . '"';
    $req = mysqli_query($connex, $sql) or die('Erreur SQL !<br>' . $sql2 . '<br>' . mysqli_error($connex));
    $resultat = mysqli_fetch_array($req);
    if (isset($_POST['ajout'])) {
        $idpersonne = $resultat['id'];
        $titre = 'location appartement situé à Bordeaux';
        // on crée la requête SQL
        $sql11 = "INSERT INTO panier(titre,idpersonne) VALUES('$titre', $idpersonne)";

        // on envoie la requête
        $req11 = mysqli_query($connex, $sql11) or die('Erreur SQL !<br>' . $sql11 . '<br>' . mysqli_error($connex));
        $panErr = "Cet article a été bien ajouté à votre panier";
        // on ferme la connexion à mysql
        mysqli_close($connex);
    }
} else {
    $panErr = "Vous devez être membre pour ajouter à votre panier. Veuillez vous inscrire au préalable";
}
?>
		<article class="descBien">
		<h2>LOCATION APPARTEMENT</h2>
		<b class="darkorange">7000 € / MOIS</b><br />
		<p>BORDEAUX PLACE DE LA BOURSE - EPOUSTOUFLANT APPARTEMENT - 2 TERRASSES PANORAMIQUES ROOFTOP - 3 CHAMBRES À 50m de la Place de la Bourse, au dernier étage d'un magnifique immeuble en pierre datant du XVIII°, très bel appartement en duplex d'environ 125 m². Ce magnifique immeuble porte le nom de « Maison des Aigles » pour son incroyable vue panoramique à 360° sur l'ensemble des monuments de Bordeaux. Il est notamment connu pour avoir abrité au XX ème siècle, l'atelier du peintre Pierre Molinier. L'Appartement à l'atmosphère un brin Ferret-Capienne est traversant et très lumineux. Il dispose au 1er niveau : d'une belle entrée, 3 chambres, 2 salle d'eau, et d'un bureau avec cheminée. À l'étage, coup de coeur assuré pour la lumineuse et vaste pièce de vie ouvrant sur une première terrasse bois de 20 m² offrant une vue superbe sur la cathédrale Pey Berland dans toute la pièce grace à ses larges baies vitrées; cuisine américaine. Un escalier en acier galvanisé permet d'accéder à la seconde terrasse de 13 m² en Rooftop à 360° avec une vue directe et sans vis-à-vis sur l'ensemble des monuments de Bordeaux et ponts de la Garonne. Juste sublime ! Cave. Parking de la Bourse à 100m. À voir vite, une opportunité rare sur le marché! - On aime: L'emplacement, la rareté du bien et son côté UNIQUE, les terrasses en rooftop, juste exceptionnelles ! son potentiel locatif.</p>
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
include "nouscontacter.php";
?>
			<div id="formPart"><br/>
				<?php
include "nouscontacterform.php";
?>
			</div>
		</div>

		</div>
	</section>

		<footer>
			 <?php include "pied_de_page.php";?>
		</footer>
	</div>
	</body>
</html>
