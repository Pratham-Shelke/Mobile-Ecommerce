<?php 
   include './include/common.php';
   if(!isset($_SESSION['email']))
   {
      header('location: index.php');
   }
   $old=md5(mysqli_real_escape_string($con,$_POST['old-password']));
   $new=md5(mysqli_real_escape_string($con,$_POST['new-password']));
   $renew=md5(mysqli_real_escape_string($con,$_POST['re-new-password']));
   $id=$_SESSION['id'];
   if(strlen($new)!=strlen($renew))
   {
      $_SESSION['error']=1;
      header('location: settings.php?error=Re-entered Password does not match');
      die();
   }
   if($new!=$renew)
   {
      $_SESSION['error']=1;
      header('location: settings.php?error=Re-entered Password does not match');
      die();
   }
   
   $select_query="SELECT password from users where id=$id";
   $select_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con));
   $row=mysqli_fetch_array($select_query_result);
   if($old!=$row['password'])
   {
      $_SESSION['error']=1;
      header('location: settings.php?error=Old password incorrect !');
      die();
   }

   $update_query="UPDATE users set password='$new' where id=$id";
   $update_query_result=mysqli_query($con,$update_query) or die(mysqli_error($con));
   $_SESSION['success']=1;
   header('location: settings.php?success=Password Updated Successfully !');
?>