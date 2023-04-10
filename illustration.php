<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <?php
    include 'sections/initialize.php';
  ?>
  <link href="css/figures.css" rel="stylesheet">
  <title>Skyset - Illustration</title>
</head>

<body>
  <div id="wrapper">
  <?php
      include 'sections/header.php';
    ?>
    <main>
      <div id="about" class="hero">
        <h2>Portfolio</h2>
        <h3>Illustration</h3>
        <img src="images/divider.svg" alt="divider" id="divider">
      </div>

      <p>
        We bring <i>rich, magnificent worlds</i> to life through
        stylish and bold digital illustrations.
      </p>

      <div class="gallery">
      <?php
        $ILLUST_IMAGE_LIST = array(
            "illustration_coffee" => "Coffee Pop Art",
            "illustration_flu" => "Flu Shot",
            "illustration_melon" => "Melon Ruins",
            "illustration_oddity" => "Oddity",
            "illustration_petscop" => "Petscop",
            "illustration_sunset" => "Vivid Sunset",
            "illustration_star" => "Toothpaste Star",
            "illustration_lollipop" => "Watermelon Lollipop"
          );

          generate_portfolio_figures("./images/illustration", $ILLUST_IMAGE_LIST);
      ?>
      </div>
    </main>
    <?php
      include 'sections/footer.php';
    ?>
  </div>
</body>

</html>
