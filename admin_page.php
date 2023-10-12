<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
    header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="CSS/admin_page.css">

</head>
<body>
    <div class="greets">
        <p>Hello&nbsp;<span class="admin-name"> <?php echo $_SESSION['admin_name'] ?></span></p>
        <span>Welcome to Rent-a-Ride</span>
    </div>

    <div class="btn-container">
        <span class="car-add-btn">
            <a href="add_car.php">Add New Car</a>
        </span>
        <span class="view-all-car-btn">
            <a href="view_car.php">View All Cars</a>
        </span>
        <!-- <span class="available-car-btn">
            <a href="view_car.php">View Available Cars</a>
        </span> -->
    </div>

    <div class="logout-btn">
        <span>
            <a href="login_form.php">LogOut</a>
        </span>
    </div>



    
</body>
</html>