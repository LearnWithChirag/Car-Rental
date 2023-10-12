<!-- Hosted link:-  http://rentride.free.nf/ -->

<?php
session_start();
@include 'config.php';
@include 'my_function.php';

// if(!isset($_SESSION['cust_name'])){
//     header('location:login_form.php');
// }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Mania</title>
    <link rel="stylesheet" href="style.css">
    <script src="./script.js"></script>
    
</head>
<body>
    <!-- Home Page  -->
    <div class="home">
        <div class="navbar">
            <h1 class="head"><span>Rent-a-Ride</span>| <?php 
            if(($_SESSION['cust_name'] = null)){
                echo " ";
            }else{
                echo $_SESSION['cust_name'];
                // echo $_SESSION['cust_name']; 
            }
                 ?></h1>
            
            <ul class="list">
                <li class="home-link">Home</li>
                <li class="facts-link">Facts</li>
                <li class="cars-link">Cars</li>
                <li class="about-link">About</li>
            </ul>
            <span class="login-btn">
                <!-- <input type="button" value="Login"> -->
                <?php if(isset($_SESSION['role'])){
                    // $logout = header('location: index.php');
                    session_destroy();
                    // session_start();
 ?>
                <a href="index.php">LogOut</a>
                <?php                   
                }else{ ?>
                    <a href="login_form.php">Login</a>
                
                <?php }; ?>
            </span>
        </div>


        <div class="title">
            <h1>"Preserving the Past, Sharing the Experience."</h1>
            
            <!-- <input type="button" value="Expolre Cars"> -->
        </div>
    </div>

    <!-- Template -->

    <div class="facts-container">
        <div class="facts-head">
            Why you should <span>rent a car</span> with us?
        </div>
        <div class="facts">
            <span>
                <p>200</p>
                <h2>rental companies</h2>
            </span>
            <span>
                <p>200</p>
                <h2>rental car registered</h2>
            </span>
            <span>
                <p>20k</p>
                <h2>satisfied client</h2>
            </span>
            <span>
                <p>60s</p>
                <h2>average booking time</h2>
            </span>
        </div>
    </div>


    <!-- Best Seller Banner -->
    <div class="best-seller">
        <!-- <span class="title-best-seller">
            Best Seller
        </span> -->
        <div class="banner-best-seller">
            <div class="offer">

                <h4>Limited Offer</h4>
                <h2>Chevrolet Camaro</h2>
                <div><span>30%</span><p> Off For First Time Rent a Car</p></div>
            </div>
        </div>
    </div>

    <!-- Our Cars -->
    <div class="our-cars">
        <div class="title-our-cars">
            Explore Our Exclusive Cars
        </div>
        <div class="all-cars">
            <!-- <div class="card"> -->
                <?php
                    $categories = getActiveCars("categories");
                    // $categories = getAll("categories");

                    if(mysqli_num_rows($categories) > 0){

                        foreach($categories as $items){
                            ?>
                            <div class="card">

                                <img src="uploads/<?= $items['image']; ?>" alt="<?= $items['vehicle_model']; ?>">
                            
                                <h2><?= $items['vehicle_model']; ?></h2>
                                <ul>
                                    <li><?= $items['capacity']; ?></li>
                                    <li><?= $items['fuel_type']; ?></li>
                                    <li><?= $items['gear_type']; ?></li>
                                </ul>
                                <input type="button" value="$<?= $items['rate']; ?>">
                            </div>

                            <?php
                        }
                    }else{
                        echo "No Cars Available :(";
                    }
                ?>
            
        </div>
    </div>

    <!-- About -->

    <div class="about-container">
        <div class="about-title">
            <h1>About Us</h1>
        </div>
        <div class="about-body">
            <div class="about-content">
                <p>
                    - Welcome to Rent-a-Ride, where your journey becomes a timeless adventure. Established in 2023 by vintage car enthusiast Chirag Paliwal, Rent-a-Ride was born out of a deep passion for classic automobiles and a desire to share their beauty with the world.
                </p>
                <p>
                    - At Rent-a-Ride, our mission is to transport you back in time to experience the elegance, craftsmanship, and nostalgia of a bygone era. We are dedicated to offering not just a car rental but a unique journey through history.
                </p>
                <p>
                    - At Rent-a-Ride, we offer a range of services, from hourly rentals for special occasions to day-long vintage road trips. You can even choose our chauffeur-driven option for the ultimate luxury experience. Let our cars be the stars of your events, whether it's a wedding, anniversary, or a cinematic photoshoot.
                </p>
            </div>
            <div class="about-img">
                <img src="Images/cover.jpg" alt="preview img" >
            </div>

        </div>
    </div>



    <!-- Footer -->
    <div class="footer">
        <div class="content">
            <p>Developed by Chirag Paliwal</p>
            <span>
                <a href="https://www.linkedin.com/in/chirag-paliwal-aa5232257/" target="_blank">
                    <img src="Images/lkd1.png" alt="linkdin icon">
                </a>
                <a href="mailto:chiragpaliwal147@gmail.com">
                    <img src="Images/gmail.png" alt="gmail icon">
                </a>
                <a href="https://github.com/LearnWithChirag" target="_blank">
                    <img src="Images/github.png" alt="github icon">
                </a>
                <!-- <a href="http://">
                    <img src="Images/ig.png" alt="linkdin icon">
                </a> -->
            </span>
        </div>
    </div>



</body>
</html>