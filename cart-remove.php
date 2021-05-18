<?php 
   include './include/common.php';
   $id=$_GET['id'];
   $delete_query="DELETE from user_items WHERE id=$id";
   $delete_query_result=mysqli_query($con,$delete_query) or die(mysqli_error($con));
   header('location: cart.php');
?>