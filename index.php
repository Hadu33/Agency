<!DOCTYPE html>
<html>

<head>
  <?php
		$titre = "Agence Style";
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


    <section id="slideshow">
      <div class="container">
        <div class="c_slider"></div>
        <div class="slider">
          <figure>
            <img src="imgSlide1/bordeaux1.jpg" alt="" width="1000" height="500" />
            <figcaption>Des appartements à louer à Bordeaux</figcaption>
          </figure>
          <figure>
            <img src="imgSlide1/bordeaux3.jpeg" alt="" width="1000" height="500" />
            <figcaption>Découvrir Bordeaux, pourquoi pas ?</figcaption>
          </figure>
          <figure>
            <img src="imgSlide1/bordeaux2.jpg" alt="" width="1000" height="500" />
            <figcaption> Acheter un bien au coeur de Bordeaux</figcaption>
          </figure>
          <figure>
        </div>
      </div>
      <span id="timeline"></span>
    </section>

    <section>
      <aside id="rubriqueImg">
        <div class="descriptImg">
          <span class="magenta"> NOUVEAUTE APPARTEMENT</span>
          <a href="louerappartement.php"><img src="imgMini/appart1.jpg" alt="Appart" width="250" height="155">
            <div class="desc">LOCATIONS APPARTEMENTS<br /> BORDEAUX <br /> <span class="magenta">1200€ /
                mois</span><br /> + de détails
            </div>
          </a>
        </div>

        <div class="descriptImg">
          <span class="magenta">NOUVEAUTE MAISON</span>
          <a href="achetermaison2.php"><img src="imgMini/maison5.jpg" alt="img maison" width="250" height="155">
            <div class="desc">VENTES MAISONS<br /> BORDEAUX <br /> <span class="magenta">2.700.000 €</span><br /> + de
              détails
            </div>
          </a>
        </div>

        <div class="descriptImg">
          <span class="magenta">VISITE DE BORDEAUX</span>
          <a href="safariwaza.php"><img src="imgMini/jardin.jpg" alt="Saf" width="250" height="155">
            <div class="desc">PARC JARDIN PUBLIC<br /> <br /> <span class="magenta"></span> + de détails
            </div>
          </a>
        </div>
      </aside>
    </section>
    <footer>
      <?php include("pied_de_page.php"); ?>
    </footer>
  </div>
</body>

</html>