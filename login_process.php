<?php
 session_start();
 require_once 'dbconfig.php';

 if(isset($_POST['btn-login']))
 {
  $user_email = trim($_POST['user_email']);
  $user_password = trim($_POST['password']);
  
 // $password = md5($user_password);
  
  try
  { 
  $sql="SELECT * FROM tbl_users WHERE user_email='$user_email'";
   $result=mysqli_query($conn,$sql);
   $row=mysqli_fetch_assoc($result);

   /*
   $stmt = $db_con->prepare("SELECT * FROM tbl_users WHERE user_email=:email");
   $stmt->execute(array(":email"=>$user_email));
   $row = $stmt->fetch(PDO::FETCH_ASSOC);
   $count = $stmt->rowCount();
*/   
   if($row['user_password']==md5($user_password)){
    
    echo "ok"; // log in
    $_SESSION['user_session'] = $row['user_id'];
   }
   else{
    
    echo "email or password does not exist."; // wrong details 
   }
    
  }
  catch(Exception $e){
   echo $e->getMessage();
  }
 }

