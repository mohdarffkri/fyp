<?php
session_start();

$link=mysqli_connect("localhost","root","opom2317") or die ("Unable to connect".

mysqli_error($link));

$q=mysqli_select_db($link,"permohonan");

$sv = $_SESSION['id_user'];
$query="SELECT * FROM supervisor WHERE sv_username='$sv'";
$result = mysqli_query($link,$query) or die('Query failed. ' . mysqli_error($link));
$q=mysqli_query($link,$query);
while( $row = mysqli_fetch_assoc($result) )
{

?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>OFFICCE MANAGEMENT SYSTEM</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" media="screen"
     href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

  <div id="wrapper">

      <!-- Navigation -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="svhome.php">Supervisor Page</a>
          </div>
          <!-- Top Menu Items -->
          <ul class="nav navbar-right top-nav">

              </li>
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                  <ul class="dropdown-menu alert-dropdown">
                      <li>
                          <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                      </li>
                      <li>
                          <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                      </li>
                      <li>
                          <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                      </li>
                      <li>
                          <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                      </li>
                      <li>
                          <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                      </li>
                      <li>
                          <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                      </li>
                      <li class="divider"></li>
                      <li>
                          <a href="#">View All</a>
                      </li>
                  </ul>
              </li>
              <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-user"></i> <?php echo $row['name']; ?> <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                      <li>
                          <a href="displaybiodatasv.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                      </li>

                      <li>
                          <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                      </li>
                      <li class="divider"></li>
                      <li>
                          <a href="logout.php"><i class=fa fa-sign-out fa-fw"></i> Log Out</a>
                      </li>
                  </ul>
              </li>
          </ul>
          <?php
        }
        ?>
          <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
          <div class="collapse navbar-collapse navbar-ex1-collapse">
              <ul class="nav navbar-nav side-nav">
                  <li class="active">
                      <a href="svhome.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                  </li>

                   <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-edit"></i> Office Leave <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="svleaveoffice.php">Office Leave Form</a>
                            </li>
                            <li>
                                <a href="svstatusofficeleave.php">Status </a>
                            </li>
							<li>
								<a href="svofficeleaverecords.php">View Records</a>
						</ul>
					</li>
					<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-edit"></i> Leave <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo1" class="collapse">
                            <li>
                                <a href="svleaveforms.php">Leave</a>
                            </li>
                            <li>
                                <a href="svstatusleave.php">Status </a>
                            </li>
							<li>
								<a href="svleaverecords.php">View Records</a>
						</ul>
					</li>
					<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo2"><i class="fa fa-fw fa-edit"></i> Application <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo2" class="collapse">
                            <li>
                                <a href="svappofficeleave.php">Validate Office Leave Form</a>
                            </li>
                            <li>
                                <a href="svappleave.php">Validate Leave Form </a>
                            </li>
						</ul>
					</li>
                          <li>
                                <a href="calendarsv.php"><i class="fa fa-fw fa-calendar"></i> Calendar</a>
                            </li>

                    </li>

      </nav>
      <?php
         $link=mysqli_connect("localhost","root","opom2317") or die ("Unable to connect".
         mysqli_error($link));
         $q=mysqli_select_db($link,"permohonan");
         $no=$_GET['no'];
         $name = $_SESSION['id_user'];
         $query="SELECT * FROM leavereq WHERE no='$no'";
         $result = mysqli_query($link,$query) or die('Query failed. ' . mysqli_error($link));
         $q=mysqli_query($link,$query);
         while( $row = mysqli_fetch_assoc($result) )
         {
       ?>
             <div id="page-wrapper">
                 <div class="container-fluid">
                     <!-- Page Heading -->
                     <div class="row">
                         <div class="col-lg-12">
                             <h1 class="page-header">
                                 Office Leave
                             </h1>
                             <ol class="breadcrumb">
                                 <li>
                                     <i class="fa fa-dashboard"></i>  <a href="staffhome.php">Dashboard</a>
                                 </li>
                                 <li class="active">
                                     <i class="fa fa-edit"></i> Office Leave Form
                                 </li>
                             </ol>
                         </div>
                     </div>
                     <!-- /.row -->
                     <div class="row">
                         <div class="col-lg-6">
                             <form role="form" method="post" action="svvalidateform(leave).php">
                               <input class="input-lg" type="hidden" id="no" name="no" maxlength="100" value="<?php echo $row['no']; ?>" required>
                             <div class="form-group">
                                 <label>Name</label>
                                 <input class="form-control" name="name" value="<?php echo $row['name']; ?>" readonly>
                                 <p class="help-block">.</p>
                             </div>
                             <div class="form-group">
                                 <label>Department</label>
                                   <input class="form-control" name="department" value="<?php echo $row['department']; ?> " readonly>
                             </div>
                             <div class="form-group">
                                 <label>Type of Leave</label>
                                 <div class="checkbox" name="leavetype">
                                 <input class="form-control" name="chkbox[]" value="<?php echo $row['leavetype'];?>"  readonly>
                                 </div>
                             </div>
                           <div class="form-group">
                         <label>Leave Requested to Commence On</label>
                             <div id="datetimepicker" class="input-append date">
                                        <input class="form-group" name="start_date" type="date" value="<?php echo $row['start_date'];?>" style="text-align:center;" readonly></input>&nbsp;Until&nbsp;<input class="form-group" name="end_date" type="date" value="<?php echo $row['end_date']; ?>" style="text-align:center;" readonly></input>
                             </div>
                           </div>
                     <div class="form-group">
                     <label> Will Resume Duty On:</label>
                     </div>
                             <div class="form-group">
                                 <label>Reasons</label>
                                 <textarea class="form-control" rows="3" name="reason" readonly><?php echo $row['reason']; ?> </textarea>
                               </div>
                               <?php
                             }
                             ?>
                                 <hr>
                                 <?php
                                 $link=mysqli_connect("localhost","root","opom2317") or die ("Unable to connect".
                                 mysqli_error($link));
                                 $q=mysqli_select_db($link,"permohonan");
                                 $no=$_GET['no'];
                                 $name = $_SESSION['id_user'];
                                 $query="SELECT * FROM supervisor WHERE sv_username='$name'";
                                 $result = mysqli_query($link,$query) or die('Query failed. ' . mysqli_error($link));
                                 $q=mysqli_query($link,$query);
                                 while( $row = mysqli_fetch_assoc($result) )
                                 {
                               ?>
                                  <div class="form-group">
                                     <label>Status</label>
                                     <select class="form-control" id="status" name="status" required>
                                         <option></option>
                                         <option value="1">Approve</option>
                                         <option value="0">Not Approve</option>
                                     </select>
                                 </div>
                                 <div class="form-group">
                                   <label> Supported By</label>
                                   <input class="form-control" name="supported_by" value="<?php echo $row['name']; ?> " readonly>
                                 </div>
                                 <div class="form-group">
                                   <label> Validated By</label>
                                   <input class="form-control" name="validated_by" readonly>
                                 </div>
                             <button type="submit" class="btn btn-default"> Validate </button>
                             </form>
                                 </ul>
                         </div>
                     </div>
                     <?php
                             }
                             ?>
                         </div>
                     </div>
                     <!-- /.row -->
                 </div>
                 <!-- /.container-fluid -->
             </div>
             <!-- /#page-wrapper -->
         </div>
         <!-- /#wrapper -->
         <!-- jQuery -->
         <script src="js/jquery.js"></script>
         <!-- Bootstrap Core JavaScript -->
         <script src="js/bootstrap.min.js"></script>
     </body>
     </html>
