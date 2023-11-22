<?php

$dir = new DirectoryIterator(dirname('pages'));
foreach ($dir as $fileinfo) {
    if (!$fileinfo->isDot() && !$fileinfo->isDir() && $fileinfo->getType() == 'php') {
        $staticfile = fopen('/home/runner/work/skyset-website/skyset-website/public' . $fileinfo->getBasename('.php') . '.html', 'w');

        ob_start();
        $staticcontents = include ($fileinfo->getFilename());
        echo $staticcontents;
        $content = ob_get_contents();
        ob_end_clean();

        fwrite($staticfile, $content);
        fclose($staticfile);
    }
}

?>