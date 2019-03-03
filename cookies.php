<?php

$name = "city";
// $value = "Jaipur";
// $duration = 60 * 60 * 24 * 30; // 30 days

// setcookie($name, $value, time() + $duration);

// if(isset($_COOKIE['city'])){
//     // echo($_COOKIE['city']);
//     print_r($_COOKIE);
// } else {
//     // the cookie doesn't exist
// }


setcookie($name, "", time() - 60);