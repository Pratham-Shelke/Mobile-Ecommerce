<?php 
   require './include/common.php';
   if(!isset($_SESSION['email']))
   {
      header('location: index.php');
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
   <link rel="stylesheet" href="./css/style.css">
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <?php 
      include 'header.php';
      $id=$_SESSION['id'];
      $select_query="SELECT items.name, items.price FROM user_items inner join items on items.id=user_items.item_id  where user_id=$id and status='Purchased'";
      $select_query_result=mysqli_query($con,$select_query);
   ?>
         <div class="container padding-top">
            <table class="table table-striped">
               <tr>
                  <th>Item Number</th>
                  <th>Item Name</th>
                  <th>Price</th> 
                  <th></th> 
               </tr>
               <?php
               $i=1; 
               while($row=mysqli_fetch_array($select_query_result))
               {
               ?>
                  <tr>
                    <td> <?php echo $i; ?> </td> 
                    <td> <?php echo $row['name']; ?> </td> 
                    <td> <?php echo $row['price']; ?> </td> 
                  </tr>
               <?php 
               }
               ?>
            </table>
      </div>   

      <?php 
   include './include/abs-footer.php';
   ?>
</body>
</html>