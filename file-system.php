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



    echo '<hr>';
    ######### Reading an Entire File ###########
    $content = file_get_contents("authors.csv");
    echo($content);
        
    
    echo '<hr>';
    ######### Reading and Outputting an Entire File ###########
    echo '<b>Reading and Outputting an Entire File</b><br><br> ';

    $rfile = readfile("authors.csv");
    print_r($rfile);


    ############# Reading Entire File into Array ##############
    echo '<hr>';
    echo '<b>Reading Entire File into Array</b><br><br> ';
    $lines = file("authors.csv");
    print_r($lines);
    
    foreach($lines as $line) {
        echo($line);
    }








    