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
                        
    
                        if(mysqli_num_rows($categories) > 0){
    
                            foreach($categories as $items){
                                ?>
                                <div>
                                    <p>
                                        <img src="uploads/<?= $item['image']; ?>" alt="<?= $item['vehicle_model']; ?>">
                                    </p>
                                    <span>                        
                                        <!-- <b>ID:<?= $item['id']; ?></b> -->
                                        <b>Name: <?= $item['vehicle_model']; ?></b>
                                        <b>Car No.: <?= $item['vehicle_number']; ?></b>
                                        <b>Capacity: <?= $item['capacity']; ?></b>
                                        <b>Fuel Type: <?= $item['fuel_type']; ?></b>
                                        <b>Gear Type: <?= $item['gear_type']; ?></b>
                                        <b>Rate: $<?= $item['rate']; ?></b>
                                        <b>Status: <?= $item['status'] = '0'?></b>
                                        // ?"Available":"Unavailable" ?></b>
                                        <b><a href="edit_car.php?id=<?= $item['id']; ?>">Edit</a></b>
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