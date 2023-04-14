<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <?php
  include('sections/initialize.php');
  ?>
    <title>Skyset - About</title>
    <link href="css/figures.css" rel="stylesheet">
</head>

<body>
    <div id="wrapper">
        <?php include 'sections/header.php'; ?>
        <main class="margin_3">
            <div id="about" class="hero">
                <h2>About</h2>
                <img src="images/divider.svg" alt="divider" id="divider">
            </div>

            <picture id="portrait">
                <source srcset="images/about/portrait.webp" type="image/webp" />
                <source srcset="images/about/portrait/png" type="image/png" />
                <img src="images/about/portrait.webp" alt="Skyset portrait" />
            </picture>
            <div class="border padded_2 w_40 flex flex_col flex_center flex_align_center">
                <p class="large rowdies margin_15">Hi, I'm <span class="highlight">Samuel Tyler</span>.</p>
                <p class="inline_block medium rowdies w_60 single_space margin_15">I've been a digital artist and developer since 2014.</p>
                <p class="w_60 padded_15 ">
                    (I've come a long way since
                    <a href="https://scratch.mit.edu/users/skyset/">
                        Scratch
                        <span class="material-icons">
                            auto_awesome
                        </span>
                    </a>
                    , though...)
                </p>
                <p class="w_60 margin_3">Today, I have experience with animation, 3D modeling, information science, biochem, and pharmacy.</p>
                <p>
                    <b><span class="material-icons">auto_fix_high</span></b>
                </p>
            </div>

        </main>
        <?php
    include 'sections/footer.php';
    ?>
    </div>
</body>

</html>