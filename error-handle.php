<?php

    function custom_error_handler($errno, $errstr) {
        echo("[Error $errno]: $errstr");
        // error_log($message, $message_type, $destination, $extra_headers);
        error_log("[Error $errno]: $errstr\n", 3, "errors.log");

    }
    
    set_error_handler("custom_error_handler", E_USER_WARNING);

    // echo($handle_this);


    if (file_exists("file.txt")) {
        $file = fopen("file.txt", "r");
    } else {

        trigger_error("Sorry, the file you are trying to access does not exist!\n",E_USER_WARNING);
        
        // die("Sorry, the file you are trying to access does not exist!");
    }
?>