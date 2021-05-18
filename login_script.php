<?php 
   require './include/common.php';
   $email=mysqli_real_escape_string($con,$_POST['email']);
   $password=md5(mysqli_real_escape_string($con,$_POST['password']));
   $select_query="SELECT id,email from users where email='$email' and password='$password'";
   $select_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con));
   if(mysqli_num_rows($select_query_result)==0)
   {  
      $_SESSION['login_visit']=1;
      header('location: index.php?log_error=Cannot find the user! OR Password entered is incorrect please try again');
   }
   else
   {
      $row=mysqli_fetch_array($select_query_result);
      $_SESSION['email']=$row['email'];
      $_SESSION['id']=$row['id'];
      header('location: index.php');
   }

?>
