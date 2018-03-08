<?php

	$project_id = 1; // same for all languages
	$project_lang =  'en';

	$project_name = $projects[$project_id][$project_lang]['title']; // case sensitive for <title> and <h1> tag
	$project_dir = 'projects/'.$projects[$project_id][$project_lang]['slug'].'/';

	$project_subdomain = get_subdomain($projects[$project_id][$project_lang]['slug']);

	$project_desc_title = 'Check or get your public IP address like a charm'; // will be inserted in <h2> element
	$project_desc = 'The What is my IP service displays your public IP address by just visiting this page. In addition the service checks the local addressing if available. The Internet Protocol Address is the numerical reference of your device in the network.'; // goes into a <p> element, no html

	// related scru-services
	$project_referrals = [2,3];

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
		// 'js/vendors/jquery.min.js',			// jquery root dir
		// 'js/magic.min.js', 							// javascript project dir
	);

?>
