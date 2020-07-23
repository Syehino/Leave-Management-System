<?php

session_start();
require('../db_conn.php');

if (isset($_POST['empName']) and isset($_POST['empDept'])and isset($_POST['empPos'])and isset($_POST['empMail'])and isset($_POST['empDate'])){
    
    $name = $_POST['empName'];
    $dept =  $_POST['empDept'];
    $pos =  $_POST['empPos'];
    $email =  $_POST['empMail'];
    $date =  $_POST['empDate'];
    $id = mt_rand(1000,9999);
    $a = substr($name,0,3);
    $b = substr($id,0,4);
    $username = "{$a}{$b}";
    $pass = "{$a}{$b}"; 
    
    $upd = "INSERT INTO user_info (userid, user_name, user_dept, user_email, user_pos, user_joined) VALUES ('$id', '$name', '$dept', '$email', '$pos', '$date')";
    
    $upd1 = "INSERT INTO user_login (user_id,user_login,user_pass) VALUES ('$id','$username','$pass')";
    
    $result1 = mysqli_query($conn,$upd);
    $result2 = mysqli_query($conn,$upd1);
    
    if($result1 && $result2)
    {
        (header("location:../users/employee.php"));
    }
    else
    {
        (header("location:../users/newEmployee.php"));
    }
}

else{
    echo "Query failed nigga";
}

?>