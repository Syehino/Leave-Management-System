<?php
session_start();
require('../db_conn.php');

if(isset($_POST['leave_reason']) and isset($_POST['start_date'])and isset($_POST['end_date'])and isset($_POST['leavedur'])){
    
    $date1 = ($_POST['start_date']);
    $start_date = date('Y-m-d',strtotime($date1));
    $date2 = ($_POST['end_date']);
    $end_date = date('Y-m-d',strtotime($date2));
    
    $userid = $_SESSION['id'];
    $leaveid = mt_rand(1000,9999);
    $leaverea = $_POST['leave_reason'];
  //  $startdate = $_POST['startdate'];
   // $enddate = $_POST['enddate'];
    $leavedur = $_POST['leavedur'];
    $status = "Pending";
    
    $upd = "INSERT INTO leave_info (leave_id, userid, start_date, end_date, leave_dur, leave_type,status) VALUES ('$leaveid', '$userid', '$start_date', '$end_date', '$leavedur', '$leaverea','$status')";
    
    //('$leaveid', '$userid', '$startdate', '$enddate', '$leavedur', '$leaverea','$status')";
    
    $result = mysqli_query($conn,$upd);
    
    if($result)
    {
        (header("location:../users/history.php"));
    }
    else
    {
        (header("location:../leave.php"));
    }
}

else{
    echo "Query failed nigga";
}

?>