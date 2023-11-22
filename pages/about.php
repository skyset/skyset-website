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
            <div class="border padded_3 w_60 flex flex_col flex_center flex_align_center">
                <div class="bg_gradient_flip full_width padded_3">
                    <p class="large rowdies margin_15">
                        Hi, I'm <span class="highlight">Samuel Tyler.</span>
                    </p>
                    <p class="inline_block medium rowdies w_40">
                        I've been a digital artist and developer since 2014.
                    </p>
                </div>
                <i class="w_60 padded_15 heavy_weight">
                    (Though I've come a long way since
                    <a href="https://scratch.mit.edu/users/skyset/">
                        Scratch
                    </a>...)
                </i>
                <p class="w_60 margin_15 double_space">Today, I have experience with animation, 3D modeling, information
                    science, biochemistry, and pharmacy. Ask me anything.</p>
                <p class="margin_15">
                    <b><span class="material-icons">auto_awesome</span></b>
                </p>
            </div>

        </main>
        <?php
        include 'sections/footer.php';
        ?>
    </div>
</body>

</html>