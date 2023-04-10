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
          <span>Hi, I'm <i>Samuel Tyler</i>.
          <br/> I've been a digital artist and developer since 2014.</span>
          <p>I've come a long way since <a href="https://scratch.mit.edu/users/skyset/">Scratch<span class="material-icons">auto_awesome</span></a>, however.</p>
          <p class="borderless">I also have experience with animation, 3D modeling, information science, and pharmacy.</p>
        </figcaption>
      </figure>
    </main>
    <?php
  include 'sections/footer.php';
?>
  </div>
</body>

</html>
