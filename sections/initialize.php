<!-- 

This is kind of the "head" for every page. It doesn't include the brackets
because i love myself. Any code in here should generate head-only HTML

-->

<!-- favicon -->

<link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
<link rel="manifest" href="images/favicon/site.webmanifest">

<!-- fonts -->

<link href="css/rowdies/latin.css" type="text/css" rel="stylesheet">
<link href="css/work-sans/variable.css" type="text/css" rel="stylesheet">
<link href="css/material-icons/iconfont/material-icons.css" type="text/css" rel="stylesheet">

<!-- site css -->

<link href="css/header.css" type="text/css" rel="stylesheet">
<link href="css/hamburger.css" type="text/css" rel="stylesheet">
<link href="css/footer.css" type="text/css" rel="stylesheet">
<link href="css/socials.css" type="text/css" rel="stylesheet">
<link href="css/header.css" type="text/css" rel="stylesheet">
<link href="css/main.css" type="text/css" rel="stylesheet">

<!-- php -->

<?php
    include 'sections/general_scripts.php';
?>

<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="description" content="Samuel Tyler is a Virginia-based designer specializing in digital media.">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function() {
        $('.toggler').click(function(){
            $(this).toggleClass('toggled');
            $('.dropdownbg').toggleClass('shown');
        });
    });
</script>

<!--wait until css loaded to show page 
    from https://stackoverflow.com/questions/4172281/force-browsers-to-load-css-before-showing-the-page-->

<div id="loadOverlay" style="background-color:#000; position:absolute; top:0px; left:0px; width:100%; height:100%; z-index:2000;"></div>