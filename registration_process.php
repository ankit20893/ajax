<?php
 session_start();
 require_once 'dbconfig.php';

 if(isset($_POST['btn-registration']))
 {
  extract($_POST);
  
 // $password = md5($user_password);
  
  try
  { 
//  $sql="INSERT INTO tbl_users VALUES('','$first_name','$last_name','$user_name','$user_email','$password')";
  $sql=mysqli_query($conn,"INSERT INTO tbl_users VALUES('','$first_name','$last_name','$user_name','$user_email',md5($password),'$joining_date')");
      //$row=mysqli_fetch_assoc($result);

   /*
   $stmt = $db_con->prepare("SELECT * FROM tbl_users WHERE user_email=:email");
   $stmt->execute(array(":email"=>$user_email));
   $row = $stmt->fetch(PDO::FETCH_ASSOC);
   $count = $stmt->rowCount();
*/   
   if($sql){
    
    echo "ok"; // log in
   // $_SESSION['user_session'] = $row['user_id'];
   }
   else{
    
    echo "registration process could not complete."; // wrong details 
   }
    
  }
  catch(Exception $e){
   echo $e->getMessage();
  }
 }

