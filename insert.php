 <?php 
        $dbconnect = mysqli_connect("localhost", "root", "", "car_rental");
        if (mysqli_connect_error($dbconnect)) {
            # code...
            echo "Failed to connect";
        }
        
            
            $name = $_POST['name'];
            $category = $_POST['category'];
            $description = $_POST['description'];
            $keyword = $_POST['keyword'];
            $imageName = $_FILES['photo']['name'];
                $path = 'images/';
                $tmp = $_FILES['photo']['tmp_name'];
                $location = $path.$imageName;
                move_uploaded_file($tmp, $location);

            $add_post = "insert into car_products (Name, Categories, Description, Keywords, images) values 
                        ('$name','$category','$description', '$keyword', '$imageName')";

        $query = mysqli_query($dbconnect,$add_post);

        if($query){

            echo "<h1>Your request has been sent</h1>";
            echo "<a href='index.php'>Go back to homepage</a>";

        }

     ?>