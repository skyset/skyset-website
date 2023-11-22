<?php

$dir = new DirectoryIterator(dirname('pages'));
foreach ($dir as $fileinfo) {
    if (!$fileinfo->isDot() && !$fileinfo->isDir()) {
        $staticfile = fopen('public/' . $fileinfo->getBasename('.php') . '.html', 'w');

        ob_start();
        include $fileinfo->getFilename();
        $content = ob_get_contents();
        ob_end_clean();

        fwrite($staticfile, $content);
        fclose($staticfile);
    }
}

?>