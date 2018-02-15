<?php

	$project_name = 'What is my IP'; // case sensitive for <title> and <h1> tag
	$project_dir = 'projects/myip/';

	$project_subdomain = 'whatismyip';
	$project_subdomain = $domain['protocol'] . $project_subdomain . '.' . $domain['url'];

	$project_id = 1; // same for all languages
	$project_lang =  'en';

	$project_desc_title = 'Check or get your public IP address like a charm'; // will be inserted in <h2> element
	$project_desc = '<p>The \'My IP\' service displays your public IP address by just visiting this page. In addition the service checks the local addressing if available. The Internet Protocol address (<a href=\'https://en.wikipedia.org/wiki/IP_address\' target=\'_blank\'>IP address</a>) is the numerical reference of your device in the network. The IP address serves two principal functions, host or network interface identification and location addressing.</p>'; // goes into a <p> element

	// related scru-services
	$project_referrals = array(
		// array(
		// 	'title' => 'Example',
		// 	'url' => $domain['protocol'] . 'example.' . $domain['url']
		// ),
		// array(
		// 	'title' => 'What is my IP',
		// 	'url' => $domain['protocol'] . 'whatismyip.' . $domain['url']
		// ),
	);

	// keywords for this project
	$project_keywords = array(
		'ip',
		'ip-address',
		'internet',
		'protocol',
		'address',
		array(
			'key' => 'geoplugin',
			'url' => 'http://www.geoplugin.net'
		),
		'geolocation'
	);

	// scripts for this project, the order matters
	$project_scripts = array(
		'js/vendors/jquery.min.js',			// jquery root dir
		'js/magic.min.js', 							// javascript project dir
	);

?>
