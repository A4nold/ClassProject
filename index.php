<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Welcome to CarRENT</title>
</head>
<body>
    <div class="backdrop"></div>

    <header>
        <div></div>
        <a href="login.php">I AM A RENTER</a>
    </header>

    <div class="greeting">
        <h1>Welcome to SupeRent Cars</h1>
        <p>Search the car you want and make your payments</p>
        <div class="searchCar">
            <form action="php/search.php" method="GET">
                <input type="search" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search']; }?>" placeholder="Search by Name or Location" />
            <button type="submit" value="Search">Search</button>
            </form>
        </div>
    </div>

    <div class="content">
        <h2>Select your Car</h2>

        <div class="searchResults">
            <div class="car">
                <img src="images/car1.jpg" alt="" srcset="">
                <div>
                    <h3>Car Name - Model</h3>
                    <p>
                        Car description - Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus fugiat qui obcaecati maiores,
                        facilis ab,
                </div>
                <div class="rent selected">SELECTED</div>
            </div>

            <div class="car">
                <img src="images/car2.jpg" alt="" srcset="">
                <div>
                    <h3>Car Name - Model</h3>
                    <p>
                        Car description - Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus fugiat qui obcaecati maiores, facilis
                        ab,
                </div>
                <div class="rent">SELECT</div>
            </div>

            <div class="car">
                <img src="images/car3.jpg" alt="" srcset="">
                <div>
                    <h3>Car Name - Model</h3>
                    <p>
                        Car description - Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus fugiat qui obcaecati maiores, facilis
                        ab,
                </div>
                <div class="rent">SELECT</div>
            </div>

        </div>
    </div>

    <div class="purchase">
        <h2>Car Name -Model</h2>
        <form action="process.php" method="post">
            <input type="text" name="fullname" id="" placeholder="Full Name" required/>
            <input type="text" name="address" placeholder="Address" required/>
            <div>How many days do you want to rent the car</div>
            <span>
                <input type="text" name="days" placeholder="Number of days" required/><br>
                <p>Price per day is 1000 naira if not returned on specific day fine would be inccured</p>
            </span>
            <input type="submit" value="Send Request" />
        </form>
    </div>
    <div class="content" style="padding:20px; text-align:center;">
        <div>CS 300L Group A Project</div>
    </div>
</body>
</html>