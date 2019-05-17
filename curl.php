<?php

/**
	URL :
	https://phpenthusiast.com/blog/five-php-curl-examples

	Working on the server side does not necessarily imply that all the required information needs to be present on the database of the site on which we are working. As a matter of fact, growing parts of the information that is used on the server side comes from external sources, often via an API that allows some kind of service to provide information to the website without having access to the database on the remote site. To utilize this information, we can use the cURL built-in PHP extension.

	cURL is a PHP extension, that allows us to receive and send information via the URL syntax. By doing so, cURL makes it easy to communicate between different websites and domains. This tutorial includes 5 common cases for the use of cURL, and they include:
	
	1. Downloading the content of a website
	2. Downloading a file from a website
	3. Auto form submission
	4. Authentication
	5. Use of cookies
*/

	// Initialize
	$handle = curl_init();

	$url = "http://adgwebdev.000webhostapp.com/bootstrap/";

	// set the url
	curl_setopt($handle, CURLOPT_URL, $url);

	// Set the result output to be a string
	curl_setopt($handle, CURLOPT_RETURNTRANSFER, $url);

	// execute
	$output = curl_exec($handle);

	curl_close($handle);

	echo $output;

