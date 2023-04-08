<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <?php include('sections/initialize.php');?>
  <title>Skyset - Services</title>
</head>

<body>
  <div id="wrapper">
  <?php
      include 'sections/header.php';
    ?>
    <main>
      
      <div id="about" class="hero">
        <h2>Services</h2>
        <img src="images/divider.svg" alt="divider" id="divider">
      </div>
      
      <p>These are services we provide as of present.<br>Select one to see a <i>portfolio</i> of that type of work.</p>

      <div class="options">
        <a href="branding.php" title="Branding Portfolio">
          <h4 id="branding">Branding</h4>
        </a>

        <a href="illustration.php" title="Illustration Portfolio">
          <h4 id="illustration">Illustration</h4>
        </a>
      </div>
    </main>
    <?php
      include 'sections/footer.php';
    ?>
  </div>
</body>

</html>
