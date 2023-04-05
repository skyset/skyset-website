<!-- constants -->

$accepted_pagenames = array(
        "index",
        "about",
        "contact,
        "services",
        "branding",
        "illustration"
        );
<head>
    <!-- Basic setup information for every page -->

    <link href="css/main.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="description" content="Samuel Tyler is a Virginia-based design agency specializing in digital media.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

/** checks that current page is in the list of accepted pages,
*   and redirects to the 404 if not.
*
*/

function init_pagecheck($pagename) {
    
    if (!in_array($pagename, $accepted_pagenames);) {
        header("HTTP/1.1 404 Not Found");
        include('404.php');
        die();
    }
}

<!-- close header -->
</head>
