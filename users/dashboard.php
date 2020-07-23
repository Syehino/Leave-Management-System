<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../resources/lms.css" rel="stylesheet">
</head>

<body>
    
<?php
session_start();

$id = $_SESSION['id'];
$role = $_SESSION['role'];

?>
    

    
    
<div class="grid-container" style="box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);">
  <div id="quick-menu">
      <div class="menu-bar" style=""><p style="color:white;font-size:13.5px;font-family:Lato,sans serif">Quick Link</p></div>
  </div>
  <div style="  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);">
      <div class="menu-bar"><button onclick ="hidemenu()"class="btn"><img src="../resources/img/menu-icon.png" style="height:38px;"></button></div>
  	<div class="flex-container">
  		<div class="adminbox">Leave Request <img src="../test.png" style="max-width:21%;float:right"></src></div>
  		<div class="adminbox">Employee</div>
  		<div class="adminbox">Report</div>
        <div class="staffbox">Request Leave</div>
  		<div class="staffbox">History</div>
  		<div class="staffbox">Account</div>
	</div>
  </div>
</div>
<div>
    
    
</body>

<script type="text/javascript">
     var uid = "<?php echo $id;?>";
     var urole = "<?php echo $role;?>";
     var x = document.getElementsByClassName("adminbox"),i;
     var y = document.getElementsByClassName("staffbox"),i;
    
     if (urole === "admin"){
         
         for (var i = 0; i < x.length; i ++) {
             x[i].style.display = 'block';
         }
         
         
         //x.style.display ="block";
         //y.style.display = "none";
     }else if(urole === "staff"){
         
         for (var i = 0; i < y.length; i ++) {
            y[i].style.display = 'block';
         }
         
        // x.style.display ="none";
         //y.style.display = "block";
     }
     
</script>

<script>
function hidemenu(){
    var menu = document.getElementById("quick-menu");
    if(menu.style.display === "none"){
        menu.style.display = "block";
    }else{
        menu.style.display ="none"
    }
}
    
</script>