<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../resources/temp.css" rel="stylesheet">
</head>

<body>
    <div class="row">
        <div class="col-3" style="background-color:#022140;color:white; border:1px solid white;">Quick Link
        </div>
        <div class="col-9" style="background-color:#022140;border:1px solid white;"><button class="btn"><i class="fa fa-bars"></i></button>
        </div>           
    </div>
        <div class="row">
        <div class="col-3" style="background-color:#022140;color:white;">
            <div class="flex-container">
              <div>Request New Leave</div>
              <div>History</div>
              <div>My Account</div>  
            </div>
        </div>
        <div class="col-9" style="background-color:rgba(255, 255, 255, 0.3);height:240px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.9);">
            <?php
    include_once("../db_conn.php");
    $result = mysqli_query($conn,"SELECT p.userid,p.sick_leave,p.annual_leave,c.user_name,c.user_dept FROM leave_count p INNER JOIN user_info c ON p.userid = c.userid WHERE p.userid = '2'") or die(mysqli_error($conn));
?>
    
    <table>
        <tr>
            <td>Name</td>
            <td>Department</td>
            <td>Sick Leave Balance</td>
            <td>Annual Leave Balance</td>
        </tr>
        <?php
        while($res = mysqli_fetch_array($result)){
            echo"<tr>";
            echo "<td>".$res['user_name']."</td>";
            echo "<td>".$res['user_dept']."</td>";
            echo "<td>".$res['sick_leave']."</td>";
            echo "<td>".$res['annual_leave']."</td>";
            echo"</tr>";
        }
        ?>
    </table>
</div>
        </div>           
    </div>

</div>
</bod