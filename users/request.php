<!DOCTYPE html>


<?php
    session_start();
    require('../db_conn.php');
?>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Leave Request</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="../themes/AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../themes/AdminLTE/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../themes/AdminLTE/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../themes/AdminLTE/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../themes/AdminLTE/dist/css/skins/_all-skins.min.css">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head><body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="admin.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>ELMS</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>ELMS</b> | Admin</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>Admin</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="request.php"><i class="fa fa-circle-o"></i> Leave Request</a></li>
            <li class="treeview">
                <a href="#">
                  <i class="fa fa-circle-o"></i> <span>Employees</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="newEmployee.php"><i class="fa fa-circle-o"></i>Add New</a></li>
                  <li><a href="employee.php"><i class="fa fa-circle-o"></i> List</a></li>
                </ul>
              </li>
            <li><a href="report.php"><i class="fa fa-circle-o"></i> Report</a></li>
          </ul>
        </li>
        <li><a href="../users/exit.php"><i class="fa fa-power-off"></i> <span>Sign Out</span></a></li>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Leave Request
        <small></small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <!-- /.row -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Employee Details</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Leave ID</th>
                  <th>Employee ID</th>
                  <th>Leave Start Date</th>
                  <th>Leave End Date</th>
                  <th>Leave Duration</th>
                  <th>Leave Reason</th>
                  <th>Status</th>
                  <th>Action</th>
                  </tr>
                  
                 <?php
                  
        $result = mysqli_query($conn,"SELECT p.leave_id,p.userid,p.status,p.leave_type,p.leave_dur,DATE_FORMAT(p.start_date,'%d-%m-%Y') AS start_date,DATE_FORMAT(p.end_date,'%d-%m-%Y') AS end_date FROM leave_info p INNER JOIN user_info c ON p.userid = c.userid") or die(mysqli_error($conn));
                  
        
        $stat = array("Pending", "Approved", "Denied");  
        $t = 0;
                  
        while($res = mysqli_fetch_array($result)){
            echo"<tr>";
            echo "<td>".$res['leave_id']."</td>";
            echo "<td>".$res['userid']."</td>";
            echo "<td>".$res['start_date']."</td>";
            echo "<td>".$res['end_date']."</td>";
            echo "<td>".$res['leave_dur']."</td>";
            echo "<td>".$res['leave_type']."</td>";
            echo "<td>".$res['status']."</td>";
            echo "<td><a href='review.php?leave_id=".$res['leave_id']."'>Review</a></td>";}
        ?> 
            
            
            
            
            <!--echo "<form method='post' action='upd.php'>";
            echo "<select id='test".$t."' onchange=\"this.form.submit();reply_click()\">";
            foreach($stat as $value){
                    echo '<option value="'.$value.'" '.(($value== $res['status'])?'selected="selected"':"").'>'.$value.'</option>';
            }
            echo "<input type=
            'hidden' name='test' value=".$res['leave_id'].">";
            echo "<input type=
            'hidden' id='te' name='test1' value=\"\">";
            echo "</select>";
            echo "</form>";
            echo "</td>";
            
            $t++;*/-->
            
          
                  
                               
  <!--              <tr>
                </tr>-->
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
    </section>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../themes/AdminLTE/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../themes/AdminLTE/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="../themes/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Sparkline -->
<script src="../themes/AdminLTE/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../themes/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../themes/AdminLTE/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- AdminLTE App -->
<script src="../themes/AdminLTE/dist/js/adminlte.min.js"></script>

<input type="hidden" id="stats" name="test" value="">
 
<script>
/*function reply_click()
{
        var e = event.srcElement.id;
        alert(e);
    
        var a = document.getElementById(e);
        var strUser = a.options[a.selectedIndex].value;
        
        alert(strUser);
        document.getElementById("te").value = strUser;
    
        
}*/
    

 
</script>

</body>
</html>
