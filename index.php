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
            <div id="index" class="hero full_width">
                <div id="logo_capsule">
                    <video id="spinning_logo" poster="images/index/webp/skyset-still.webp" autoplay loop>
                        <source type="video/webm" src="images/index/skyset-animated.webm" />
                        <source type="video/mp4" src="images/index/skyset-animated.mp4" />
                    </video>

                    <picture id="logotype">
                        <source type="image/webp" src="images\index\skyset-logotype.webp" />
                        <img src="images\index\webp\skyset-logotype.webp" alt="Skyset logotype" />
                    </picture>

                    <span class="subtitle rowdies">MULTIMEDIA</span>
                </div>
                <p class="padded_15 flex_col flex_center w_40 margin_3">
                    Graphic design, frontend development, and illustration, all with one key principle:</br>
                <span class="rowdies highlight fit-width medium light_weight">
                    Simplicity is key.
                </span>
                </p>

            </div>
        </main>
        <?php
        include 'sections/footer.php';
        ?>
    </div>
</body>

</html>