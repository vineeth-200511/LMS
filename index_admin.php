<?php
  session_start();
  if(!isset($_SESSION['admin_user'])){
    header("location:login.php");
  }
  $username = $_SESSION['admin_user'];
  $name = $_SESSION['admin_name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Library Management System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    body{
      font-family: "Serif";
    }

    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    .row.content {height: 450px}

    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><p style="margin-top:-3px;color:white;"><img src="assets/image/logo-book.png" alt="" width="40" height="35">&nbsp;LMS</p></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="">Home</a></li>
        <li><a href="admin_book.php">Books</a></li>
        <li><a href="admin_stud.php">Students</a></li>
        <li><a href="admin_issue.php">Issue Book</a></li>
        <li><a href="admin_return.php">Return Book</a></li>
        <li><a href="admin_issued.php">Issued Book</a></li>
        <li><a href="admin_appr.php">Approvals</a></li>
        <li><a href="admin_fine.php">Fines</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="chnge_psswd.php"><span class="glyphicon glyphicon-lock"></span> Change Password</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid text-center">
  <div class="row content">
    <div class="col-sm-8 text-left">
      <h1>Hi <?php echo $name; ?></h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <hr>
      <h3>Test</h3>
      <p>Lorem ipsum...</p>
    </div>
  </div>
</div>

</body>
</html>
