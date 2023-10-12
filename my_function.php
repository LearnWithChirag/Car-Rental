<?php

@include 'config.php';

function getAll($table){
    global $conn;
    $query = "SELECT * FROM $table";
    return $query_run = mysqli_query($conn, $query);
}

function getActiveCars($table){
    global $conn;
    $query = "SELECT * FROM $table WHERE status='0' ";
    return $query_run = mysqli_query($conn, $query);
}
?>