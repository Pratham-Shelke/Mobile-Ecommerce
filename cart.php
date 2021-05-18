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
      $user_id=$_SESSION['id'];
      $select_query="SELECT user_items.id, items.name, items.price FROM user_items INNER JOIN items ON items.id=user_items.item_id WHERE user_items.user_id=$user_id and status='Added to cart'";
      $select_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con));
   ?>
      <?php 
	  if(mysqli_num_rows($select_query_result)==0)
	  {?>
		 <div style="padding-top:100px; display:block; text-align:center; color:red;">
			<h3>Add items to cart first!</h3>
		 </div>
   <?php 
	  }
	  else
	  {?>
		 <div class="container padding-top">
         <table class="table table-striped">
            <tr>
               <th>Item Number</th>
               <th>Item Name</th>
               <th>Price</th> 
               <th></th>
            </tr>
            <tr>
               
            </tr>
            <?php 
            $num=1;
            $sum=0;
            $id="";
            while($row=mysqli_fetch_array($select_query_result)) 
            {  $tmp=$row['id'];
                $id=$id.",".$tmp;
               ?>
               <!-- echo "<a href='product-detail.php?product_id=$nt[product_id]'>Product Details</a>"; -->
               <tr>
                  <td><?php echo $num ?></td>
                  <td><?php echo $row['name'] ?></td>
                  <td><?php echo $row['price'] ?></td>
                  <td><?php echo "<a href='cart-remove.php?id=$tmp' class='btn btn-warning'>Remove</a>"?></td>
               </tr>
            <?php
            $num+=1;
            $price=str_replace(',','',substr($row['price'],3,strlen($row['price'])));
            
            $price_num=(int) $price;
            $sum=$sum+$price_num;
            }?>
               <tr>
                  <td></td>
                  <td>Total</td>
                  <td><?php echo "Rs ".$sum ?></td>
                  <td><?php echo "<a href='./success.php?id=$id' class='btn btn-primary'>Confirm Order</a>" ?></td>
               </tr>
         </table>
   </div>   
      <?php } ?>

      <?php 
   include './include/abs-footer.php';
   ?>
</body>
</html>