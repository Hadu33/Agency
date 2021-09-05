	<div id ="footer-nav">
		<a href="index.php" >Accueil</a> - <a href="savoir-faire.php" >Présentation</a>  - <a href="membre.php" >Membre</a> - 
		<a href="contacts.php" >Nous Contacter</a> - <a href="mentionslegales.php">Mentions légales</a>  
		</div>
		<div id = "signature">
		<span>Copyright &copy;2021. Tous droits réservés Design by Arezki DJIBRI
		<?php 
		if(isset($_SESSION['views']))
		$_SESSION['views']=$_SESSION['views']+1;
		else
		$_SESSION['views']=1;
		echo "Nombre de pages vues : ". $_SESSION['views'];
		?>
		</span>
		<a href="#top" title="Retour haut de page"><div id="btntop"></div></a>
	</div>
	
		<?php
		/* session_start();
		if(isset($_SESSION['views']))
		unset($_SESSION['views']); */
		?>
		
		<?php
		/* session_destroy(); */
		?>