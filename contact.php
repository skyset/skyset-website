<!DOCTYPE html>
<html lang="en" dir="ltr">

<script src="https://www.google.com/recaptcha/api.js"></script>

<head>
  <?php include('sections/initialize.php');?>
  <title>Skyset - Contact</title>
</head>

<body>
  <div id="wrapper">
  <?php
    include 'sections/header.php';
  ?>
    <main>
      <div id="about" class="hero">
        <h2>Contact</h2>
        <img src="images/divider.svg" alt="divider" id="divider">
      </div>

      <h3>Social Media</h3>

      <?php
        generate_socials("large");
      ?>

      <h3>Mail</h3>

      <p>
        Interested in working together?<br>
        <i>Drop me a message below</i>.<br>
      </p>

      <form action="mailto:sam@skyset.page" method="post" enctype="text/plain">
        <div class="field">
          <label for="name"><b>*</b> Name</label>
          <input type="text" name="name" placeholder="Name" id="name" required>
        </div>

        <div class="field">
          <label for="email"><b>*</b>  Email</label>
          <input type="email" name="email" placeholder="email@email.com" id="email" required>
        </div>

        <div class="field">
          <label for="details"><b>*</b>  Details</label>
          <textarea name="details" rows="10" placeholder="Details" id="details" required></textarea>
        </div>  
        <div class="field">
          <span><b>*</b> denotes a required field.</span>
        </div>
        <div class="field">
          <div id="buttons">
            <input type="submit" value="Submit" class="g-recaptcha" data-sitekey="6LfIJF4lAAAAAIUqw_l4fZiHaJWlHEkI8azBJ2Av">
            <input type="reset" value="Reset">
          </div>
        </div>
      </form>

    </main>
    <?php
      include 'sections/footer.php';
    ?>
  </div>
</body>



</html>
