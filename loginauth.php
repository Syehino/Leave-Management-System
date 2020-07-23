<?php  
session_start();

require('db_conn.php');

if (isset($_POST['user_id']) and isset($_POST['user_pass'])){
	
// Assigning POST values to variables.
$username = $_POST['user_id'];
$password = $_POST['user_pass'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `user_login` WHERE user_login='$username' and user_pass='$password'";

$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$row = mysqli_fetch_assoc($result);
$count = mysqli_num_rows($result);

if ($count == 1){
    
    $tempid = $row['user_id'];
    
    $test =mysqli_query($conn,"SELECT * FROM user_login p INNER JOIN user_info c WHERE p.user_id = c.userid AND c.userid = '$tempid'"); 
    
    $qry = mysqli_fetch_assoc($test);
    
    $_SESSION["role"] = $qry['user_pos']; 
    $_SESSION["id"] = $tempid;
        
    if($_SESSION['role'] == "Admin")
    {
        (header("location:users/admin.php"));
    }
    
    else if($_SESSION['role'] <> "Admin")
    {
        (header("location:users/user.php"));
    }
    
}

else{
    (header("location:index.php?error=true"));
}
}
?>