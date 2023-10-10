<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){
    // $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    // $cpass = md5($_POST['cpass']);
    // $user_type = ($_POST['user_type']);

    $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result);

        if($row['user_type'] == 'admin'){

            $_SESSION['admin_name'] = $row['name'];
            header('location: admin_page.php');

        }elseif($row['user_type'] == 'customer'){

            $_SESSION['cust_name'] = $row['name'];
            header('location: index.php');

        };
    }else{
        $error = 'Incorrect Email or Password!';
    };

};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="CSS/login.css">
</head>
<body>
    <div class="loginWindow">
        <div class="loginHead">
            <img src="images/user.png" alt="user icon">
            <h2> User Login</h2>
        </div>
        <div class="loginDetails">
            <form action="" method="post">

            <?php
                if($error){
                    // foreach($error as $error){
                        echo "<script>alert('$error')</script>";
                        // echo '<span class="error-msg">'.$error.'</span>';
                    // };
                };
                ?>

            <input type="email" name="email" required placeholder="Enter Your Email">
            <input type="password" name="password" required placeholder="Enter Password">
            <span class="btnLink">
                <!-- <button type="submit">Login</button> -->
                <input type="submit" name="submit" value="Login">
                <p>
                  Don't have an account?<a href="register_form.php">Register Here</a>
                </p>
              </span>
            </form>
        </div>
    </div>
    
</body>
</html>