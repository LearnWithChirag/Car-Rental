<?php
@include 'config.php';

session_start();

if(isset($_POST['add'])){
    $vehicle_model = $_POST['name'];
    $vehicle_number = $_POST['number'];
    $capacity = $_POST['capacity'];
    $fuel_type = $_POST['fuel'];
    $gear_type = $_POST['gear'];
    // $rate = isset($_POST['rate']) ? '1':'0';
    $rate = $_POST['rate'];
    $status = isset($_POST['status']) ? '0' : '1';

    $image = $_FILES['image']['name'];
    $path = "uploads";

    $image_ext = pathinfo($image, PATHINFO_EXTENSION);
    $filename = time().'.'.$image_ext;

    $cate_query = "INSERT INTO categories (vehicle_model, vehicle_number, capacity, image, fuel_type, gear_type, rate, status)  VALUES ('$vehicle_model', '$vehicle_number', '$capacity','$filename', '$fuel_type', '$gear_type', '$rate', '$status')";

    $query_run = mysqli_query($conn, $cate_query);
    if($query_run){
        move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$filename);
        // $error = "Car Added Succesfully";
        echo "<script> alert('Car Added Succesfully')</script>";
        header('location:admin_page.php');
    }else{
        // $error = "Something went Wrong";
        echo "<script> alert('Something went Wrong')</script>";
        header('location:admin_page.php');
    }

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Car Form</title>
    <link rel="stylesheet" href="CSS/add_car.css">

</head>
<body>
<div class="add-car-container">
    <div class="add-car-title">Add New Car</div>
    
    <div class="form-container">
        <form action="#" method="POST" enctype="multipart/form-data">
            <span>

                <label for="name">Vehicle Model:</label>
                <input type="text" name="name" required placeholder="Enter Car Model">
            </span>
            <span>

                <label for="number">Vehicle Number:</label>
                <input type="text" name="number" required placeholder="Enter Vehicle Number">
            </span>
            <span>

                <label for="capacity">Capacity:</label>
                <input type="number" name="capacity" required placeholder="Enter No. of Seats">
            </span>
            <span>

                <label for="image">Upload Image:</label>
                <input type="file" name="image" required >
            </span>
            <span>

                <label for="fuel">Fuel Type:</label>
                <select name="fuel" id="">
                    <option value="petrol">Petrol</option>
                    <option value="diesel">Diesel</option>
                    <option value="electric">Electric</option>
                </select>
            </span>
            <span>

                <label for="gear">Gear Type:</label>
                <select name="gear" id="">
                    <option value="auto">Auto</option>
                    <option value="manual">Manual</option>
                </select>
            </span>
            <span>

                <label for="rate">Rate per day:</label>
                <input type="number" name="rate" required placeholder="Enter Rate">
            </span>
            <span>
                <label for="status">Status:</label>
                <input type="checkbox" name="status" >
            </span>

            <span>
                <input type="submit" name="add" value="ADD">
            </span>


        </form>

    </div>
    </div>
</body>
</html>