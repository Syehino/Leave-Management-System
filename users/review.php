<!DOCTYPE html>

<?php

    session_start();

    require('../db_conn.php');
    ?>

   <?php
    
        $leave_id = $_GET["leave_id"];
         
        //$qry = mysqli_query($conn,"SELECT * FROM leave_info p INNER JOIN user_info c ON p.userid = c.userid WHERE c.userid ='$currid'"); 

        $result = mysqli_query($conn,"SELECT p.leave_id,p.userid,p.status,p.leave_type,p.leave_dur,DATE_FORMAT(p.start_date,'%d-%m-%Y') AS start_date,DATE_FORMAT(p.end_date,'%d-%m-%Y') AS end_date,c.userid, c.user_name, c.user_dept, c.user_email, c.user_pos, c.sick_taken, c.sick_bal, c.annual_bal, c.annual_taken, c.unpaid_bal, c.unpaid_taken FROM leave_info p INNER JOIN user_info c ON p.userid = c.userid WHERE leave_id = '$leave_id'") or die(mysqli_error($conn)); 
      
        $res = mysqli_fetch_array($result);
      ?>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Request Leave</title>
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
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="../themes/AdminLTE/dist/css/skins/_all-skins.min.css">
        <!-- Morris chart -->
        <link rel="stylesheet" href="../themes/AdminLTE/bower_components/morris.js/morris.css">
        <!-- jvectormap -->
        <link rel="stylesheet" href="../themes/AdminLTE/bower_components/jvectormap/jquery-jvectormap.css">
        <!-- bootstrap wysihtml5 - text editor -->
        <link rel="stylesheet" href="../themes/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
      
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
      
        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
      </head>
      <body class="hold-transition skin-blue sidebar-mini">
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
              <!-- Menu Footer-->
              <li class="user-footer">
              </li>
            </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      
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
                    <h3 class="box-title">Leave Details</h3>
      
                  <!-- form start -->
                  <form class="form-horizontal" method="post" action="upd.php">
                    <div class="box-body">

                      <div class="form-group">
                        <label for="staffName" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" id="inputName" value="<?php echo $res['user_name'];?>" readonly>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="staffDepartment" class="col-sm-2 control-label">Department</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" id="inputDepartment" value="<?php echo $res['user_dept'];?>" readonly>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="staffPosition" class="col-sm-2 control-label">Position</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" id="inputPos" value="<?php echo $res['user_pos'];?>" readonly>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="staffEmail" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" id="inputEmail"  value="<?php echo $res['user_email'];?>" readonly>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="inputReason" class="col-sm-2 control-label">Leave Reason</label>
                        <div class="col-sm-6" style="padding-top: 9px">
                            <select id="leave_reason" name="leave_reason" disabled="true">
                                <?php
                                $stat = array("Annual Leave", "Sick Leave", "Unpaid Leave"); 
                                foreach($stat as $value){
                                    echo '<option value="'.$value.'" '.(($value== $res['leave_type'])?'selected="selected"':"").'>'.$value.'</option>';}
                                ?>
                            </select>
                        </div>
                      </div>
                      
                        
                      <div class="form-group">
                        <label for="inputDate" class="col-sm-2 control-label">Date</label>
                        <div class="col-sm-3" >
                            <div class="input-group">
                              <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                              </div>
                              <input type="text" class="form-control pull-right" name="start_date" id= "startdate" value="<?php echo $res['start_date'];?>">              
                            </div>
                          </div>
                          <div class="col-sm-3" >
                              <div class="input-group">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="enddate" name="end_date" placeholder="End" value="<?php echo $res['end_date'];?>">
                              </div>
                            </div>
                      </div>
                    
                        
                      <div class="form-group">
                        <label for="inputStatus" class="col-sm-2 control-label">Update Status</label>
                        <div class="col-sm-6" style="padding-top: 9px">
                            <select id="leave_status" name="leave_stat">
                                <?php
                                $stat = array("Pending", "Approved", "Denied"); 
                                foreach($stat as $value){
                                    echo '<option value="'.$value.'" '.(($value== $res['status'])?'selected="selected"':"").'>'.$value.'</option>';}
                                ?>
                            </select>
                        </div>
                      </div>
                      
                        <input type="hidden" name="leave_id" value="<?php echo $res['leave_id'];?>">
                        <input type="hidden" name="leave_reason" value="<?php echo $res['leave_type'];?>">
                        <input type="hidden" name="u_id" value="<?php echo $res['userid'];?>">
                        <input type="hidden" name="leavdur" value="<?php echo $res['leave_dur'];?>">
                        
                      <div class="box-footer clearfix no-border">
                        <button type="submit" class="btn btn-primary pull-right" id="Submit"  > Submit</button>
                      </div>
                        
                        
                        

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
<!-- Bootstrap WYSIHTML5 -->
<script src="../themes/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../themes/AdminLTE/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- AdminLTE App -->
<script src="../themes/AdminLTE/dist/js/adminlte.min.js"></script>

    
    <script>
        
        function disableSubmit()
        {
            var a = document.getElementById("leave_status");
            var selected = a.options[a.selectedIndex].text;
            
            if(selected == "Approved" || selected == "Denied")
                {
                    document.getElementById("Submit").disabled = true;
                }
        }
        
        window.onload = disableSubmit;
        
        

    </script>
  
</body>
</html>
