<?php
@session_start();
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


<div class="container">

<div class="row">

    <div class='alert alert-success'>
  <button class='close' data-dismiss='alert'>&times;</button>
   <strong>Hello '<?php echo $row['first_name']." ".$row['last_name']; ?></strong>  Welcome to the members page.
   <strong><a href="logout.php">logout</a></strong>
    </div>
</div>
</div>
<div class="col-md-4">
<table class="table">
  <tr>
      <td><strong>UserName</strong></td>
      <td><?echo $row['user_name']; ?></td>
  </tr>
  <tr>
      <td><strong>Name</strong></strong></td>
      <td><?php echo $row['first_name']."  ".$row['last_name']; ?></td>
   </tr>
   <tr>
       <td><strong>Email</strong></td>
       <td><?php echo $row['user_email']; ?></td>
   </tr>  
   <tr>
       <td><strong>Joining Date</strong></td>
       <td><?echo $row['joining_date']?></td>
   </tr> 
</table>
</div>