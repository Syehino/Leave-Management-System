<?php

session_start();
require('../db_conn.php');

if (isset($_POST['leave_stat']) and isset($_POST['leave_id'])and isset($_POST['leave_reason'])and isset($_POST['u_id'])){
    
    $new_stat = $_POST['leave_stat'];
    $leaveid =  $_POST['leave_id'];
    $learea =  $_POST['leave_reason'];
    $userid =  $_POST['u_id'];
    
    
    $qry1 = "SELECT * FROM user_info WHERE userid = '$userid'";
    $qry2 = "SELECT * FROM leave_info WHERE leave_id = '$leaveid'";
    
    $result1 = mysqli_query($conn,$qry1);
    $result2 = mysqli_query($conn,$qry2);
    
    $row1 = mysqli_fetch_assoc($result1);
    $row2 = mysqli_fetch_assoc($result2);
    
    $sicktake = $row1['sick_taken'];
    $annualtake = $row1['annual_taken'];
    $unpaidtake = $row1['unpaid_taken'];
    $sickbal = $row1['sick_bal'];
    $annualbal = $row1['annual_bal'];
    $unpaidbal = $row1['unpaid_bal'];
    $leavedur = $row2['leave_dur'];

    if($new_stat == "Approved"){
    if ($learea == "Sick Leave")
    {
        $newsicktake = $sicktake + $leavedur;
        $newsickbal = $sickbal - $leavedur;
        
        $upd = "UPDATE user_info SET sick_taken = '$newsicktake', sick_bal = '$newsickbal' WHERE userid='$userid'";
        $upd2 = "UPDATE leave_info SET status ='$new_stat' WHERE leave_id='$leaveid'";
        $result = mysqli_query($conn,$upd);
        $result2 = mysqli_query($conn,$upd2);
        
    if($result1 && $result2)
    {
        (header("location:/report.php"));
    }
        
    }
    else if ($learea == "Annual Leave"){
        
        $newanntake = $annualtake + $leavedur;
        $newannualbal = $annualbal - $leavedur;
        
        $upd = "UPDATE user_info SET annual_taken = '$newanntake', annual_bal = '$newannualbal' WHERE userid='$userid'";
        $upd2 = "UPDATE leave_info SET status ='$new_stat' WHERE leave_id='$leaveid'";
        $result = mysqli_query($conn,$upd);
        $result2 = mysqli_query($conn,$upd2);
        
    if($result1 && $result2)
    {
        (header("location:../users/request.php"));
    }
    }
    else if ($learea == "Unpaid Leave"){
        
        $newunpaidtake = $unpaidtakle + $leavedur;
        $newunpaidbal = $unpaidbal - $leavedur;
        
        $upd = "UPDATE user_info SET unpaid_taken = '$unpaidtake', unpaid_bal = '$newunpaidbal' WHERE userid='$userid'";
        $upd2 = "UPDATE leave_info SET status ='$new_stat' WHERE leave_id='$leaveid'";
        $result = mysqli_query($conn,$upd);
        $result2 = mysqli_query($conn,$upd2);
        
        if($result1 && $result2)
    {
        (header("location:../users/request.php"));
    }
    }
    }
    
    else if($new_stat == "Denied")
    {
        $upd2 = "UPDATE leave_info SET status ='$new_stat' WHERE leave_id='$leaveid'";
        $result2 = mysqli_query($conn,$upd2);
        
        (header("location:../users/request.php"));
    }   
}

else{
    echo "Query failed nigga";
}

?>