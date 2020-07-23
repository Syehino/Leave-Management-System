<?php
session_start();

require('../db_conn.php');
    
if (isset($_POST['start_date']) and isset ($_POST['end_date']) and isset ($_POST['id'])){
    
    $start_date = $_POST['start_date'];
    $end_date= $_POST['end_date'];
    $id=$_POST['id'];
    
    $qry = "INSERT INTO leave_details (user_id,start_date,end_date) VALUES ('$id','$start_date','$end_date')";
    
    if(mysqli_query($conn,$qry))
    {
        echo "Request Successful";   
    }
    else{
        echo "Error" .mysqli_error($conn);
    }
}

$test = "SELECT start_date,end_date FROM leave_details";
echo $test;