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

      <figure class="large">
        <img src="/images/portrait.jpg" id="portrait"/>
        <figcaption>
          <i>Samuel Tyler</i> has been a digital artist and software developer since 2014.<br><br>
          <p>He's come a long way since <a href="https://scratch.mit.edu/users/skyset/">Scratch</a>.
             Samuel </p>
        </figcaption>
      </figure>
    </main>
    <?php
  include 'sections/footer.php';
?>
  </div>
</body>

</html>
