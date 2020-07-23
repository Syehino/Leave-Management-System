<?php
$conn = mysqli_connect("localhost","user","");
if(!$conn){
    die("Database connection failed".mysqli_error($conn));
}

$sel_db = mysqli_select_db($conn,'lms');
if(!$sel_db){
    die("Database Selection failed".mysqli_error($conn));
}
?>