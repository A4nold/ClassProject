<?php

	$db = mysqli_connect("localhost","root","","car_rental");

	if (!$db) {
		# code...
		echo "SQL connection failed:".mysqli_error($db);
		exit;
	}

?>