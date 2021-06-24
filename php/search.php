
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/jquery-3.1.0.min.js"></script>
    <title>Welcome to CarRENT</title>
</head>
<body>
<!--  -->
			

<h1>Details</h1>

<?php 

	if(isset($_GET['search'])){
        $db = mysqli_connect("localhost" , "root" , "" , "car_rental" );

if($_GET['search'] != ""){
	$search = $_GET['search'];
	$i = 0;
	$keyword = $search;
	$temp = explode (" " , $search);
	$query = "SELECT * FROM `car_products` WHERE";
	
	foreach($temp as $each){
	 $i++;
	  if($i == 1){
		  $query.= " `Keywords` LIKE '%$each%' ";
		  }else{
			   $query.= " AND `Keywords` LIKE '%$each%' ";
			  }
		}
			  $get = mysqli_query($db , $query);
			  $getrow = mysqli_num_rows($get);
			  //echo $getrow;
			  
			  while($fetchdata = mysqli_fetch_array($get)){
				  	$mname = $fetchdata['Name'];
					$mcat = $fetchdata['Categories'];
					$mdes = $fetchdata['Description'];
					$mkey = $fetchdata['Keywords'];
					$mimage = $fetchdata['images'];
                    $imglocation = "<img style='width:400px; height:200px;' src='../images/".$mimage."'>";

                    echo "<p>$mname</p>";
                    echo "<p>$mcat</p>";
                    echo "<p>$mdes</p>";
                    echo "<p>$imglocation</p>";

                            //          echo "<table class='table'>
                            //     <tr>
                            //         <th>Name</th>
                            //         <th>Category</th>
                            //         <th>Image</th>
                            //         <th>Description</th>
                            //     </tr>
                                
                            //     <tr>
                            //         <td>mname</td>
                            //         <td>$mcat</td>
                            //         <td><img src='../images/car1.jpg' height='200' width='300'></td>
                            //         <td>Her</td>
                            //     </tr>
                            // </table>";

                    }		  
	}else{
		echo "<h1><strong>input keyword</strong><h1>";
		}
}

?>
</body>

</html>
