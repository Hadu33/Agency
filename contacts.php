<!DOCTYPE html>

<html>

<head>
  <?php
		$titre = "Agence STYLE Contacts";
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

    <section id="slideshow">
      <div class="container">
        <div class="c_slider"></div>
        <div class="slider">
          <figure>
            <img src="imgSlide1/bordeaux3.jpeg" alt="" width="1000" height="500" />
            <figcaption>Des appartements à louer à Bordeaux</figcaption>
          </figure>
          <figure>
            <img src="imgSlide1/bordeaux1.jpg" alt="" width="1000" height="500" />
            <figcaption>Découvrir Bordeaux, pourquoi pas ?</figcaption>
          </figure>
          <figure>
            <img src="imgSlide1/bordeaux2.jpg" alt="" width="1000" height="500" />
            <figcaption>Ventes de maisons au coeur de Bordeaux</figcaption>
          </figure>
        </div>
      </div>
      <span id="timeline"></span>
    </section>

    <section id="formcontact">
      <div id="contactPart">
        <h1>NOUS CONTACTER</h1>
        <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
        <h3 class="darkred"> Agence Style By Arezki Développeur Web</h3>
        <b>Adresse :</b><br />
        <b class="blue">Agence de Bordeaux</b><br />
        12 Rue des Lilas 33000 Bordeaux<br />
        Tél : 0607080910<br />
        <strong class="darkred">Email : arezkidevweb@gmail.com</strong><br /><br /><br />
      </div>

      <?php 
		include("nouscontacter.php");
		?>
      <div id="formPart"><br />
        <?php 
				include("nouscontacterform.php");
				?>
      </div>
    </section>

    <footer>
      <?php include("pied_de_page.php"); ?>
    </footer>
  </div>
</body>

</html>