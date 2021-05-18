<?php 
   include './include/common.php';
   
   $name=mysqli_real_escape_string($con,$_POST['name']);
   $email=mysqli_real_escape_string($con,$_POST['email']);
   $password=md5(mysqli_real_escape_string($con,$_POST['password']));
   $phone=mysqli_real_escape_string($con,$_POST['contact']);
   $city=mysqli_real_escape_string($con,$_POST['city']);
   $address=mysqli_real_escape_string($con,$_POST['address']);
   
   $regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$/";

   if(!preg_match($regex_email,$email))
   {
      header('location: signup.php?error=Please enter a valid email ID');
      $_SESSION['error']=1;
      die();
   }
   if(strlen($password<8))
   {
      header('location: signup.php?error=Password length should be atlest 8 chartacters.');
      $_SESSION['error']=1;
      die();
   }

   $select_query="SELECT id from users where email='$email'";
   $select_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con));
   if(mysqli_num_rows($select_query_result)>0)
   {
      header('location: signup.php?error=User already registered.');
      $_SESSION['error']=1;
      die();
   }

   $insert_query="INSERT INTO users values(NULL,'$name','$email','$password',$phone,'$city','$address')";
   $insert_query_result=mysqli_query($con,$insert_query) or die(mysqli_error($con));
   $id=mysqli_insert_id($con);
   $_SESSION['id']=$id;
   $_SESSION['email']=$email;
   header('location: index.php')

?>