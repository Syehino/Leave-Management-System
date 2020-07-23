<!DOCTYPE html>

<?php
require('../db_conn.php');
session_start();

$id = $_SESSION['id'];
?>

<form action="../users/procreq.php" method="post">
    Start Date:<br>
  <input type="date" name="start_date"><br>
  End date:<br>
  <input type="date" name="end_date"><br>
  <input type="hidden" name="id" value=<?php echo $id?>>
  <button type="submit" value="Submit" >New Request</button>
</form> 

    

