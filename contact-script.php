<?php 
   include './include/common.php';
   $name=$_POST['name'];
   $email=$_POST['email'];
   $message=$_POST['message'];
   $insert_query="INSERT INTO inquiry values('$name','$email','$message')";
   $insert_query_result=mysqli_query($con,$insert_query) or die(mysqli_error($con));
   $_SESSION['success']=1;
   header('location: contact.php?message=Thank You for your valuable time Our associate will contact you soon');
?>