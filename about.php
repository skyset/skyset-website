<!DOCTYPE html>
<html lang="en" dir="ltr">


<head>
  <?php include('sections/initialize.php');?>
  <title>Skyset - About</title>
  <link href="css/figures.css" rel="stylesheet">
</head>

<body>
  <div id="wrapper">
    <?php include 'sections/header.php';?>
    <main>
      <div id="about" class="hero">
        <h2>About</h2>
        <img src="images/divider.svg" alt="divider" id="divider">
      </div>

      <p>
        Skyset Multimedia is a Virginia-based studio specializing
        in visual media design.
      </p>
      <h3>Founder</h3>

      <figure>
        <div id="portrait" class="img"></div>
        <figcaption>
          <i>Samuel Tyler</i> is a digital artist, frontend developer, and biochemist.<br><br>
          He values simplicity and bold diversity, like the bowl cut he had in grade school (but you didn't hear that from me).<br><br>
          Let's make something cool together!
        </figcaption>
      </figure>
    </main>
    <?php
  include 'sections/footer.php';
?>
  </div>
</body>

</html>
