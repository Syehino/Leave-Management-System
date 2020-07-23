<!DOCTYPE html>

<?php
        session_start();

        require('../db_conn.php');
?>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Add Employee</title>
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
        New Employee
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
                      
                  <!-- form start -->
                  <form class="form-horizontal" method="post" action="newemp.php">
                    <div class="box-body">

                      <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" name="empName" placeholder="Name">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="inputDepartment" class="col-sm-2 control-label">Department</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" name="empDept" placeholder="Department">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="inputPosition" class="col-sm-2 control-label">Position</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" name="empPos" placeholder="Position">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-6">
                          <input type="email" class="form-control" name="empMail" placeholder="Email">
                        </div>
                      </div>
                        
                        <div class="form-group">
                        <label for="inputJoin" class="col-sm-2 control-label">Date Employed</label>
                        <div class="col-sm-6">
                          <input type="date" class="form-control" name="empDate" placeholder="Date">
                        </div>
                      </div>

                      <div class="box-footer clearfix no-border">
                        <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Add New</button>
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
<!-- AdminLTE App -->
<script src="../themes/AdminLTE/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../themes/AdminLTE/dist/js/demo.js"></script>
    
</body>
</html>
