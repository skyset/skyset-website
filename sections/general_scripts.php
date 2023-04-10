<?php

function generate_picture_element($base_images_directory, $image_basename) {
    /**
     * Takes an image basename and a base image directory,
     * and creates a set of <source> elements for all available
     * alternate formats.
     */

    $PREFERRED_FORMAT = (string) "webp";

    $ALT_FORMATS_DIRECTORIES = [
        "webp" => "/webp/",
        "png" => "/"
    ];

    $picture_element_header = (string) "<picture>";
    $picture_element_footer = (string) "</picture>";

    $source_elements = array ();
    $img_element = (string) "";

    foreach ($ALT_FORMATS_DIRECTORIES as $format => $directory) {
        $source_url = $base_images_directory.$directory.$image_basename.".".$format;
        $source_element = "<source srcset='$source_url' />";
        array_push($source_elements, $source_element);

        if ($format == $PREFERRED_FORMAT) {
            $img_element = "<img src='$source_url' alt='$image_basename' />";
        }
    }

    $source_elements_str = join("", $source_elements);
    $full_picture_element = $picture_element_header.$source_elements_str.$img_element.$picture_element_footer;

    return $full_picture_element;
}

function generate_portfolio_figures($directory, $image_list)
{
    /**
     * Echoes a list of figure elements based on defined $image_list.
     * @directory   String path to directory   The directory to base the generated portfolio on.
     *              Does not contain ending / or .
     * Portfolios default to webp images assigned in a /webp/ folder within the source directory
     */

    $DIR_WEBP_URL = "/webp/";

    $image_src = (string) "";

    $DIR = new DirectoryIterator(dirname($directory."/."));
    $DIR_HAS_WEBP_FOLDER = (bool) file_exists($DIR_WEBP_URL);

    // For each file in given directory, establishes variables and generates figure
    foreach ($DIR as $fileinfo) {

        if ($fileinfo->isDot() || $fileinfo->isDir()) {
            continue;
        }

        $image_filename = (string) $fileinfo->getFilename();
        $image_extension = (string) $fileinfo->getExtension();
        $image_basename = (string) trim($fileinfo->getBasename('.'.$image_extension));

        $image_url = (string) "$directory/$image_filename";
        $image_all_urls = (array) array($image_url => $image_extension);

        $image_sources_formatted = generate_picture_element($directory, $image_basename);
        
        // Alt Text
        $image_desc = $image_list[$image_basename];

        // Generate Figure HTML
        $figure_template = ("<figure>
                                <div>
                                    <a href=$image_url>
                                    $image_sources_formatted
                                    </a>
                                </div>
                                <figcaption>$image_desc</figcaption>
                            </figure>");

        echo $figure_template;
    }
}

function generate_socials($comments="") {

    $SOCIALS_LIST = [
        'dribbble' => 'https://dribbble.com/skyset',
        'behance' => "https://www.behance.net/skyset",
        'linkedin' => "https://www.linkedin.com/in/samuel-t-b72b55113/",
        'twitter' => "https://www.twitter.com/samskyset/",
        'github' => "httpS://github.com/skyset"
    ];

    $all_socials = array();

    foreach ($SOCIALS_LIST as $name => $url) {
        $picture = generate_picture_element('./images/socials', $name);
        $a = "<a href='$url'>$picture<span>$name<span></a>";
        $li = "<li>$a</li>";
        array_push($all_socials, $li);
    }

    $all_socials_formatted = join("", $all_socials);
    $socials_element = "<ul class='socials $comments'>$all_socials_formatted</ul>";

    echo $socials_element;

}

?>