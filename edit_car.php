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
    <div class="add-car-title">Edit Car</div>
    
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