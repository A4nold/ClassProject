<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Dashboard</title>
</head>
<body>
    <header class="dHeader">
        <h3>User's Full Name</h3>
    </header>
    <div class="page">
        <label>Rental Requests</label>
        <div class="requests">
            <ul>
            <?php 
            $db = mysqli_connect("localhost","root","","car_rental");
            $query = "select * from `dashboard` where id LIMIT 10";
            $fetch = mysqli_query($db,$query);
            $row = mysqli_num_rows($fetch);

            if($row > 0){
                while ($fetchdata = mysqli_fetch_array($fetch)) {
                    # code...
                    $fullname = $fetchdata['full_name'];
                    $address = $fetchdata['address'];
                    $days = $fetchdata['days'];
                    $price = $fetchdata['price'];
                    $requestid = $fetchdata['id'];

                    echo "<li class='request'>
                    <img src='./images/car1.jpg' alt='' srcset=''>
                    <div>
                        <h3>$fullname</h3>
                        <p>$address</p>
                        <p>$price</p>
                    </div>
                    <div class='options'>
                        <input type='hidden' name='request_id' value='<?echo $requestid;?>'>
                        <div class='accept'>Accept</div>
                        <div class='reject'>Decline</div>
                    </div>
                </li>";
                }
            }

         ?>
                <!-- <li class="request">
                    <img src="./images/car1.jpg" alt="" srcset="">
                    <div>
                        <h3>Car Name</h3>
                        <p>Customer's Name</p>
                    </div>
                    <div class="options">
                        <div class="accept">Accept</div>
                        <div class="reject">Decline</div>
                    </div>
                </li>

                <li class="request">
                    <img src="./images/car1.jpg" alt="" srcset="">
                    <div>
                        <h3>Car Name - Model</h3>
                        <p>Customer's Name</p>
                    </div>
                    <div class="options">
                        <div class="accept">Accept</div>
                        <div class="reject">Decline</div>
                    </div>
                </li>

                <li class="request">
                    <img src="./images/car2.jpg">
                    <div>
                        <h3>Car Name - Model</h3>
                    </div>
                </li> -->

            </ul>

            <div class="purchase">
        <h2>Insert car for search</h2>
        <form action="insert.php" method="post" enctype="multipart/form-data">
            <input type="text" name="name" id="" placeholder="Car Name" required/>
            <input type="text" name="category" placeholder="Category" required/>
            <input type="text" name="description" placeholder="Description" required/>
            <input type="text" name="keyword" placeholder="keyword" required/>
            <input type="file" name="photo" placeholder="" required/>
            <input type="submit" value="Send Request" />
        </form>
    </div>

        </div>
    </div>
</body>
</html>