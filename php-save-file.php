<?php

	$ch = curl_init();

	$source = "https://www.valuecoders.com/blog/wp-content/uploads/2018/05/laravel.jpg";

	curl_setopt($ch, CURLOPT_URL, $source);

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

	$data = curl_exec ($ch);

	curl_close ($ch);

	$destination =  __DIR__ . DIRECTORY_SEPARATOR ."laravel.jpg";

	$file = fopen($destination, "w+");

	fputs($file, $data);

	fclose($file);


/*-------This is another way to do it-------*/



$url = 'https://images.clickittech.com/wp-content/uploads/2016/03/Laravel-vs-Codeigniter-.png';

$img =  __DIR__ . DIRECTORY_SEPARATOR .'Laravel-vs-Codeigniter.jpg';

file_put_contents($img, file_get_contents($url));