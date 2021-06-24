<?php 


	require("php/dbconnct.php");

	if (isset($_POST['submitdelete'])) {
		# code...
		$requestid = $_POST['id'];
		$query = "DELETE FROM `dashboard` WHERE id = '$requestid'";

		mysqli_query($db,$query);
	}

 ?>