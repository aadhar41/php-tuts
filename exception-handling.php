<?php

// try {
//     $error = "This is an exception message!<br>";
//     throw new Exception($error);
// } catch (Exception $e) {
//     echo("Message: " . $e->getMessage());
//     echo '<br>';
//     echo("File: " . $e->getFile());
//     echo '<br>';
//     echo("Line: " . $e->getLine());
//     echo '<br>';
//     echo("Code: " . $e->getCode());
//     echo '<br>';
//     echo("Trace: " . $e->getTraceAsString());
// }


class NotEvenNumberException extends Exception {
    public function error_message() {
        return "Povided number must be an even number!";
    }
}

$even_number = 5;

try {
    if ($even_number % 2 != 0) {
        throw new NotEvenNumberException();
    }
} catch (NotEvenNumberException $nene) {
    echo("Error Message: " . $nene->error_message());
}

