<!DOCTYPE html>
<html lang="en" dir="ltr">

<?php include('sections/initialize.php');?>

<head>
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

      <ul id="socials">
        <li><a href="https://dribbble.com/skyset"><img src="images/dribbble.png" alt="Dribbble"><div>Dribbble</div></a></li>
        <li><a href="https://www.behance.net/skyset"><img src="images/behance.png" alt="Behance"><div>Behance</div></a></li>
        <li><a href="https://www.linkedin.com/in/samuel-t-b72b55113/"><img src="images/linkedin.png" alt="LinkedIn"><div>LinkedIn</div></a></li>
      </ul>

      <h3>Mail</h3>

      <p>
        Interested in working together?<br>
        <i>Drop us a message below</i>.<br><br>
        Required fields are marked with <b>*</b>.
      </p>

      <form action="mailto:sam@skyset.page" method="post" enctype="text/plain">
        <label for="name"><b>*</b> Name: </label>
        <input type="text" name="name" placeholder="Name" id="name" required>

        <label for="email"><b>*</b> Email: </label>
        <input type="email" name="email" placeholder="Email" id="email" required>

        <span>Reason for contact:</span>
        <div id="reason">
          <input type="radio" name="reason" value="Commission" id="commission">
          <label for="commission">Commission</label>
          <input type="radio" name="reason" value="Business" id="business">
          <label for="business">Business enquiries</label>
        </div>

          <label for="details"><b>*</b> Details:</label>
          <textarea name="details" rows="8" placeholder="Details" id="details" required></textarea>

        <div id="buttons">
          <input type="submit" value="Submit">
          <input type="reset" value="Reset">
        </div>
      </form>

    </main>
    <?php
      include 'sections/footer.php';
    ?>
  </div>
</body>

</html>
