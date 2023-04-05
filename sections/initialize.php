<?php

// constants

$ACCEPTED_PAGENAMES = array(
        "index",
        "about",
        "contact",
        "services",
        "branding",
        "illustration"
        );

function init_pagecheck($pagename) {
    /**
     * Checks the given pagename against the list of accepted pages
     * If invalid, issues a 404 redirect and kills this script
     */
    
    if (!in_array($pagename, $accepted_pagenames)) {
        header("HTTP/1.1 404 Not Found");
        include('404.php');
        die();
    }
}


?>
<head>
    <!-- Basic setup information for every page -->

    <link href="css/main.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="description" content="Samuel Tyler is a Virginia-based design agency specializing in digital media.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- close header -->
</head>
