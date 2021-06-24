 <?php 
        $dbconnect = mysqli_connect("localhost", "root", "", "car_rental");
        if (mysqli_connect_error($dbconnect)) {
            # code...
            echo "Failed to connect";
        }
        
            
            $fullname = $_POST['fullname'];
            $address = $_POST['address'];
            $days = intval($_POST['days']);
            $price = 1000;
            $total = $days * $price;

            $add_post = "insert into dashboard (full_name, address, days, price) values 
                        ('$fullname','$address','$days', '$total')";

        $query = mysqli_query($dbconnect,$add_post);

        if($query){

            echo "<h1>Your request has been sent</h1>";
            echo "<a href='index.php'>Go back to homepage</a>";
            echo "<p>The price of renting the car is <span>$total</span></p>";

        }

     ?>