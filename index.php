<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>
		login page
	</title>
      <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script language="JavaScript" src="js/jquery-1.12.3.min.js"></script>
    <script language="JavaScript" src="js/jquery.validate.min.js"></script>
    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
    <!--<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>-->
    <script src="js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script language="JavaScript" src="js/script1.js"></script>    
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">WebSiteName</a>
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
    <?php 
     if($_SESSION['user_session']=="") {
    ?>
      <li><a href="index.php?info=registration"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="index.php?info=login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      <?php } 
else {
  include_once 'dbconfig.php';
$id=$_SESSION['user_session'];
$sql="SELECT * FROM tbl_users WHERE user_id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
  echo "<li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' href='#'>".$row['user_name']."<span class='caret'></span></a>";
  echo "<ul class='dropdown-menu'>
          <li><a href='logout.php'><span class='glyphicon glyphicon-off'></span> logout</a></li></ul>";
  //echo "<li><a href='index.php?info=login'><span class='glyphicon glyphicon-off'></span> logout</a></li>";
}
      ?>
    </ul>
  </div>
</nav>



 <div class="container">
     <?php 
     $info=$_GET['info'];

     if($info=="") {
      echo "<h1>welcome to the world!</h1>";
     }
         else if($info=='registration'){
          include('registration.php');
         }
         else if($info=='login') {
          include('login.php');
         }
         else if($info=='home') {
          include('home.php');
         }
     ?>
       
    
</div>
</body>
</html>