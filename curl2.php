<?php

// The distant site url.
$url = "https://www.gutenberg.org/files/46852/46852-h/46852-h.htm";
// The file on our server.
$file = __DIR__ . DIRECTORY_SEPARATOR . "the_divine_comedy.html";
$handle = curl_init();
 
// Open the file on our server for writing.
$fileHandle = fopen($file, "w");
 
curl_setopt_array($handle,
  array(
		CURLOPT_URL  => $url,
		CURLOPT_FILE => $fileHandle,
  )
);
 
$data = curl_exec($handle);
 
curl_close($handle);
 
fclose($fileHandle);



