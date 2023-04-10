<?php

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

        // WEBP Support
        $image_webp_url = (string) "$directory/$image_basename.webp";

        if ($DIR_HAS_WEBP_FOLDER) {
            $image_all_urls[$image_webp_url] = 'webp';
        }

        // Picture Element Sources
        $image_sources = array();

        foreach ($image_all_urls as $url => $type) {
            $source_template = "<source srcset='$url' type='image/$type'>";
            array_push($image_sources, $source_template);
        }

        $image_sources_formatted = join("", $image_sources);
        
        // Alt Text
        $image_desc = $image_list[$image_basename];

        // Generate Figure HTML
        $figure_template = ("<figure>
                                <div>
                                    <a href=$image_url>
                                    <picture>
                                        $image_sources_formatted
                                        <img src=$image_webp_url alt='$image_basename' />
                                    </picture></a>
                                </div>
                                <figcaption>$image_desc</figcaption>
                            </figure>");

        echo $figure_template;
    }
}
