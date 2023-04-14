<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <?php
  include('sections/initialize.php');
  ?>
  <link href="css/figures.css" rel="stylesheet">
  <title>Skyset - Branding</title>
</head>

<body>
  <div id="wrapper">
    <?php
    include 'sections/header.php';
    ?>
    <main class="margin_3">
      <div id="about" class="hero">
        <h2>Portfolio</h2>
        <h3>Branding</h3>
        <img src="images/divider.svg" alt="divider" id="divider">
      </div>

      <p class="rowdies medium padded_2 w_40 margin_3 border">
        Creating <span class="highlight">recognizable, striking brands</span> for our clients
        is a challenge we are always prepared for.
      </p>

      <div class="gallery">
        <?php
        ##  List of image filenames and alt text.
        $BRANDING_IMAGE_LIST = array(
          "branding_annulus" => "Annulus",
          "branding_political" => "Political Party",
          "branding_unsion" => "Unsion"
        );

        generate_portfolio_figures("./images/branding", $BRANDING_IMAGE_LIST);
        ?>
      </div>
    </main>
    <?php
    include 'sections/footer.php';
    ?>
  </div>
</body>

</html>