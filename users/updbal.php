<?php

session_start();
require('../db_conn.php');

if (isset($_POST['sickbal']) and isset($_POST['annbal'])and isset($_POST['unpaidbal'])and isset($_POST['userid'])){
    
    $newsickbal = $_POST['sickbal'];
    $newannbal = $_POST['annbal'];
    $newunpaidbal = $_POST['unpaidbal'];
    $userid = $_POST['userid'];
    
    
    $qry = "SELECT * FROM user_info WHERE userid = '$userid'";
    $result = mysqli_query($conn,$qry);
    $row = mysqli_fetch_assoc($result);
    
    $upd = "UPDATE user_info SET sick_bal = '$newsickbal', annual_bal = '$newannbal', unpaid_bal = '$newunpaidbal' WHERE userid='$userid'";
    
    $result = mysqli_query($conn,$upd);
    
    if($result)
    {
      (header("location:../users/report.php"));

    }
}

else{
    echo "Query failed nigga";
}

?>