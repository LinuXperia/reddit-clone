<?php

	// configuration
    require_once("../includes/config.php");
	
	$log = get_admin_log();

	render_mult([	
					"admin_common.php",
					"admin_log.php"
				],
				[
					"title"=> $title." - Admin Log",
					"log"=> $log
			    ]
		   );
	
?>