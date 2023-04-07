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
        <a href="branding.html" title="Branding Portfolio">
          <h4 id="branding">Branding</h4>
        </a>

        <a href="illustration.html" title="Illustration Portfolio">
          <h4 id="illustration">Illustration</h4>
        </a>
      </div>
    </main>

    <h3>Pricing</h3>

    <p>Pricing is decided on a <i>case-by-case</i> basis. <br><br> We require upfront payment of at least half of the agreed upon cost. <br><br> We reserve the right to refuse commissions at any point throughout the commission process.</p>
    <?php
      include 'sections/footer.php';
    ?>
  </div>
</body>

</html>
