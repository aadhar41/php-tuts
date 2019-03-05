<?php

    /**
     * Reference :
     * https://sabe.io/classes/php/file-system
     * authors
     */

    $path = "authors.csv";
    $file = fopen($path, "r");

    $size = filesize($path);
    $contents = fread($file, $size);

    fclose($file);

    echo '<pre>';
    echo($contents);
    
    echo '<hr>';

    ############################# Reading a File Line by Line ##############

    $file = fopen("authors.csv", "r");

    while (!feof($file)) {
        $line = fgets($file);
        echo($line . "<br>");
    }

    fclose($file);