<?php
session_start();
ob_start();
if(!isset($_SESSION['user_session']))
{
 header("Location: index.php");
}

include_once 'dbconfig.php';
$id=$_SESSION['user_session'];
$sql="SELECT * FROM tbl_users WHERE user_id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Form using jQuery Ajax and PHP MySQL</title>
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen"> 
<link href="css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<link href="style.css" rel="stylesheet" media="screen">
</head>

<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-off"></span> logout</a></li>
    </ul>
  </div>
</nav>



<div class="container">

<div class="row">
    <div class='alert alert-success'>
  <button class='close' data-dismiss='alert'>&times;</button>
   <strong>Hello '<?php echo $row['first_name']." ".$row['last_name']; ?></strong>  Welcome to the members page.
   <strong><a href="logout.php">logout</a></strong>
    </div>
</div>
</div>
</div>
<script src="js/bootstrap.min.js"></script>
</body>
</html>