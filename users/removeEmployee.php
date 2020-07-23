<?php
    include_once("../db_conn.php");
    
    if (isset($_GET['empid'])){
           $empid = $_GET['empid'];
        
            $qry = "DELETE FROM user_login WHERE user_id = '$empid'";
            $qry1 = "DELETE FROM user_info WHERE userid = '$empid'";
            $qry2 = "DELETE FROM leave_info WHERE userid = '$empid'";
        
            $res = mysqli_query($conn,$qry);
            $res1 = mysqli_query($conn,$qry1);
            $res2 = mysqli_query($conn,$qry2);
        
            if($res&&$res2&&res3)
            {
                (header("location:../users/employee.php"));
            }

       }
    else{
        echo "Error occured";
        (header("location:../users/employee.php"));
    }

    
?>