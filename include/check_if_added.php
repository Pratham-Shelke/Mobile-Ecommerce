<?php 
   function check_if_added_to_cart($item_id)
   {
      $user_id=$_SESSION['id'];
      $con=mysqli_connect("localhost","root","","mobile_estore") or die(mysqli_error($con));
   
      //include 'common.php';
      $select_query="SELECT * from user_items where item_id=$item_id and user_id=$user_id and status='Added to cart'";
      $select_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con));
      if(mysqli_num_rows($select_query_result)>=1)
      {
         return 1;
      }
      else
      {
         return 0;
      }
   }

?>