<?php

session_start();
@include 'config.php';
@include 'my_function.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Cars</title>
    <link rel="stylesheet" href="CSS/view_car.css">
</head>
<body>
    <div class="all-car-container">
        <div class="title">
            <h1>All Cars</h1>
        </div>



        <!-- <div class="card"> -->
            <div class="car-details">
                <div class="table-data">
                <?php
                    $categories = getActiveCars("categories");
                    // $categories = getAll("categories");

                    if(mysqli_num_rows($categories) > 0){

                        foreach($categories as $items){
                            ?>
                           
                            <div>
                                <p>
                                    <img src="uploads/<?= $items['image']; ?>" alt="<?= $items['vehicle_model']; ?>">

                                </p>
                            <span>
                            <b>Name: <?= $items['vehicle_model']; ?></b>
                                        <b>Car No.: <?= $items['vehicle_number']; ?></b>
                                        <b>Capacity: <?= $items['capacity']; ?></b>
                                        <b>Fuel Type: <?= $items['fuel_type']; ?></b>
                                        <b>Gear Type: <?= $items['gear_type']; ?></b>
                                        <b>Rate: $<?= $items['rate']; ?></b>
                                        <b>Status: <?= $items['status'] == '0'?"Available":"Unavailable" ?></b>
                                        <b><a href="index.php">Book</a></b>
                            </span>
                            </div>
                            

                            

                            <?php
                        }
                    }else{
                        echo "No Cars Available :(";
                    }
                ?>
                </div>
               
            </div>
        <!-- </div> -->
    </div>
</body>
</html>