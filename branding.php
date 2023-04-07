<!DOCTYPE html>
<html lang="en" dir="ltr">

<?php include('sections/initialize.php');?>

<head>
  <link href="css/figures.css" rel="stylesheet">
  <title>Skyset - Branding</title>
</head>

<body>
  <div id="wrapper">
  <?php
      include 'sections/header.php';
    ?>
    <main>
      <div id="about" class="hero">
        <h2>Portfolio</h2>
        <h3>Branding</h3>
        <img src="images/divider.svg" alt="divider" id="divider">
      </div>

      <p>
        Creating <i>recognizable, striking brands</i> for our clients
        is a challenge we are always prepared for.
      </p>

      <div class="gallery">
        <figure>
          <div>
            <a href="images/branding_annulus.png"><img src="images/branding_annulus.png" alt="Annulus Branding"></a>
          </div>
          <figcaption>Exploration of branding for a friend. Includes design process details.</figcaption>
        </figure>

        <figure>
          <div>
            <a href="images/branding_political.png"><img src="images/branding_political.png" alt="Political Party Branding"></a>
          </div>
          <figcaption>Sample branding and additional assets for a political party.</figcaption>
        </figure>

        <figure>
          <div>
            <a href="images/branding_unsion.png"><img src="images/branding_unsion.png" alt="Unsion Branding"></a>
          </div>
          <figcaption>Logo and sections of a website design for a graphic design team.</figcaption>
        </figure>
      </div>
    </main>
    <?php
      include 'sections/footer.php';
    ?>
  </div>
</body>

</html>
