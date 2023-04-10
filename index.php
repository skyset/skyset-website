<!DOCTYPE html>
<html lang="en" dir="ltr">


<head>
<?php include('sections/initialize.php');?>
  <title>Skyset</title>
</head>

<body>
  <div id="wrapper">
  <?php
      include 'sections/header.php';
    ?>
    <main>
      <div id="index" class="hero">
        
        <video id="spinning_logo" poster="images/index/skyset-still.webp" autoplay loop>
          <source type="video/webm" src="images/index/skyset-animated.webm" />
          <source type="video/mp4" src="images/index/skyset-animated.mp4" />
        </video>

        <picture>
          <source type="image/webp" src="images\index\skyset-logotype.webp" />
          <img src="images\index\skyset-logotype.webp" alt="Skyset logotype" />
        </picture>
        
        <span class="subtitle">MULTIMEDIA</span>

        <span>Freelance graphic design and illustration with <br>
          one key principle &#8212;
          <i>
            simplicity is key.
          </i>
        </span>

      </div>
    </main>
    <?php
      include 'sections/footer.php';
    ?>
  </div>
</body>

</html>
