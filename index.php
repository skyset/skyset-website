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
        
        <picture id="spinning_logo">
          <source type="image/webp" srcset="images/index/skyset-animated.webp" />
          <source type="image/webp" srcset="images/index/skyset-still.webp" />
          <source type="image/png" srcset="images/index/skyset-still.png" />
          <img src="images/index/skyset-animated.webp" onload="'#index span'.style.opacity='1'" />
        </picture>

        <!-- <video id="spinning_logo" poster="images/index/skyset-animated.webp" autoplay loop>
          <source type="video/webm" src="images/index/skyset-animated.webm" />
          <source type="video/mp4" src="images/index/skyset-animated.mp4" />
        </video> -->

        <picture id="logotype">
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

    <script>
        // Script to enable smooth onload opacity effect on logo
        document.getElementById("#index span").style.opacity="0";
    </script>
  </div>
</body>

</html>
