<?php
session_start();
session_destroy();
// $_SESSION['role'] = null;
// $_SESSION['admin_name'] = null;
$_SESSION['cust_name'] = null;
header('location : login_form.php');