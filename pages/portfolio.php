<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <?php include('sections/initialize.php');?>
  <title>Skyset - Portfolio</title>
</head>

<body>
  <div id="wrapper">
  <?php
      include 'sections/header.php';
    ?>
    <main>
      
      <div id="about" class="hero">
        <h2>Portfolio</h2>
        <img src="images/divider.svg" alt="divider" id="divider">
      </div>
      
      <p class="padded_3 border margin_3 medium w_40">
        Select from the following categories to view relevant portfolio items.
      </p>

      <div class="options w_60 margin_3 ">
        <a href="branding" title="Branding Portfolio">
          <span>Branding</span>
        </a>

        <a href="illustration" title="Illustration Portfolio">
          <span>Illustration</span>
        </a>
      </div>
    </main>
    <?php
      include 'sections/footer.php';
    ?>
  </div>
</body>

</html>
