<?php

		// include the domain information from the root dir
		require '../../inc/browscap.php';
		require '../../inc/domain.php';
		require '../../inc/projects.php';

		// include the project_data from the project dir
		// check this data if you setup a new project
		require 'inc/project_data.php';

		// include the header from the root dir
		require '../../inc/header.php';

?>


	<!-- scru-service start -->

	<?php

		// get visitory ip address
		$client  = @$_SERVER['HTTP_CLIENT_IP'];
		$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
		$remote  = @$_SERVER['REMOTE_ADDR'];

		if (filter_var($client, FILTER_VALIDATE_IP)){
			$ip = $client;
			} elseif (filter_var($forward, FILTER_VALIDATE_IP)){
			$ip = $forward;
			} elseif (filter_var($remote, FILTER_VALIDATE_IP)) {
			$ip = $remote;
			} else {
			$ip = false;
		}

		// create result array and try to get data with ip from geoplugin
		$result 	= array( 'ip' => $ip, 'ip_data' => false );
		$result['ip_data'] = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $result['ip']));

	?>

	<?php if ($result['ip']): ?>

		<div class="result-container success">
			<h4>IP address</h4>
			<div class="result" contenteditable="true" onclick="document.execCommand('selectAll',false,null)"><?php echo $result['ip']; ?></div>
		</div><!-- .result.ip -->

	<?php else: ?>

		<div class="result-container error">
			<h4>Error</h4>
			<div class="result" contenteditable="true" onclick="document.execCommand('selectAll',false,null)">No IP address available</div>
		</div><!-- .result.error -->

	<?php endif; ?>

	<?php if ($result['ip_data']->geoplugin_status == 200): ?>

		<?php if ($result['ip_data']->geoplugin_city): ?>
			<div class="result-container success">
				<h4>IP origin city</h4>
				<div class="result" contenteditable="true" onclick="document.execCommand('selectAll',false,null)"><?php echo $result['ip_data']->geoplugin_city; ?></div>
			</div><!-- .result.city -->
		<?php endif; ?>

		<?php if ($result['ip_data']->geoplugin_countryName): ?>
			<div class="result-container success">
				<h4>IP origin country</h4>
				<div class="result" contenteditable="true" onclick="document.execCommand('selectAll',false,null)"><?php echo $result['ip_data']->geoplugin_countryName; ?></div>
			</div><!-- .result.country -->
		<?php endif; ?>

	<?php endif; ?>


	<!-- scru-service end -->

<?php

	// include the domain information from the root dir
	require '../../inc/footer.php';

?>
