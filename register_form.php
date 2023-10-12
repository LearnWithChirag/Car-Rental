<?php

@include 'config.php';

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpass']);
    $user_type = ($_POST['user_type']);

    $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){
        $error = "user already exist";
    }else{
        if($pass != $cpass){
            $error = "password not matched";
        }else{
            $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name', '$email', '$pass', '$user_type')";
            mysqli_query($conn, $insert);
            header('location:login_form.php');
        };
    };

};

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link rel="stylesheet" href="CSS/register.css">
</head>
<body>
    <div class="registerWindow">
        <div class="registerHead">
            <img src="images/register.png" alt="register icon" >
            <h2>Create Account</h2>
        </div>
        <div class="registerDetails">
            <form action="#" method="POST">
                <?php
                if(isset($error)){
                    // foreach($error as $error){
                        echo "<script>alert('$error')</script>";
                        // echo '<span class="error-msg">'.$error.'</span>';
                    // };
                };
                ?>
                <!-- <label for="name">Name:</label> -->
                <input type="text" name="name" required placeholder="Enter Your Name">
                <!-- <label for="email">Email:</label> -->
                <input type="email" name="email" required placeholder="Enter Your Email">
                <!-- <label for="password">Password:</label> -->
                <input type="password" name="password" required placeholder="Enter Password">
                <!-- <label for="cpass">Confirm Password:</label> -->
                <input type="password" name="cpass" required placeholder="Confirm Password">
                <!-- <label for="user">User Type:</label> -->
                <select name="user_type" >
                    <option value="customer">Customer</option>
                    <option value="admin">Admin</option>
                </select>
                <span class="btnLink">
                <!-- <button type="submit">Register</button> -->
                <input type="submit" name="submit"  value="Register Now" /> 
                <p>
                  Already have an account?<a href="login_form.php">Login Here</a>
                </p>
              </span>
            </form>
        </div>
    </div>
</body>
</html>