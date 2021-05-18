<?php 
   include './include/common.php';
   if(!isset($_SESSION['email']))
   {
      header('location: index.php');
   }
   $id=$_GET['id'];
   
   $len=strlen($id);
   if($len==0)
   {
      header('location: index.php');
      die();
   }
   $i=$len-1;   
   while($i>0)
   {  $d=0;
      $tmp=0;
       while($id[$i]!=",")
       {
         $tmp=$tmp+($id[$i]*pow(10,$d));
         $i-=1;
         $d+=1;
       }
      $update_query="UPDATE user_items set status='Purchased' WHERE id=$tmp";
      echo "confirmed<br>".$i;
      $update_query_result=mysqli_query($con,$update_query) or die(mysqli_error($con));
      $i-=1; 
   }
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >


        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./css/style.css">
   <title>Success</title>
</head>
<body>
   <?php 
      include './header.php'
   ?>

  <div class="container padding-top col-md-offset-3 col-md-6 col-xs-offset-1 col-xs-10">
     <div style="margin: auto;">
      <img src="./img/Green_tick.png" style="display: block; width: 20vh; height: 17vh; margin: auto;">
     </div>
      <h3>Your order is confirmed. Thank you for shopping
         with us. <br> <a href="./index.php">Click here</a> to purchase any other item.</h3>
  </div>
   
</body>
</html>