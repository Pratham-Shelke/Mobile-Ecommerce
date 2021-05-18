<?php 
   require './include/common.php';
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
      include './include/check_if_added.php';
   ?>
   <div class="container-fluid padding-top">
     
         <div class="navigator">
            <h2 class="hidden-xs"><strong>Shop By Brand</h2>
            <h3 class="visible-xs"><strong>Shop By Brand</h3>
            <ul class="category">
               <div class="horizontal-rule"></div>
               <li><a href="#iPhone" class="btn nav-btn">iPhone</a></li>
               <div class="horizontal-rule"></div>
               <li><a href="#SAMSUNG" class="btn nav-btn">SAMSUNG</a></li>
               <div class="horizontal-rule"></div>
               <li><a href="#One Plus" class="btn nav-btn">One Plus</a></li>
               <div class="horizontal-rule"></div>
               <li><a href="#Oppo" class="btn nav-btn">Oppo</a></li>
               <div class="horizontal-rule"></div>
               <li><a href="#VIVO" class="btn nav-btn">VIVO</strong></a></li>
               <div class="horizontal-rule"></div>
            </ul>
         </div>

         <div class="row">
            <?php 
               $select_brand="SELECT * FROM brands";
               $select_brand_result=mysqli_query($con,$select_brand) or die(mysqli_error($con));
               while($row_brand=mysqli_fetch_array($select_brand_result))
               {
                  $name=$row_brand['brand_name'];
                  $brand_id=$row_brand['id'];
                  echo "<div class='col-xs-9 col-xs-offset-3' id='$name'>";
                  echo "<h2 class='mobile-heading'>$name</h2>";
               
                  $select_items="SELECT * FROM items WHERE brand_id=$brand_id";
                  $select_items_result=mysqli_query($con,$select_items) or die(mysqli_error($con));
                  while($row_item=mysqli_fetch_array($select_items_result))
                  {
                     $item_id=$row_item['id'];
                     $item_name=$row_item['name'];
                     $item_dsc=$row_item['dsc'];
                     $item_price=$row_item['price'];
                     $img_loc=$row_item['img_loc'];
                     ?>
                     <div class="col-md-4 col-xs-12">
                        <div class="thumbnail item-shadow">
                           <?php echo "<img src='$img_loc' style='height:40vh;'>" ?>
                           <div class="caption">
                              <?php echo "<h4> <strong> $item_name</h4>"; 
                              echo "<p>$item_dsc</p>";
                              echo "<p>$item_price</p></strong>"; ?>
                               <?php 
                                 if(!isset($_SESSION['email']))
                                 {?>
                                    <a href="#" data-toggle="modal" data-target="#logInModal" class="btn btn-primary btn-block">Buy Now</a>
                                    <?php 
                                 }
                                 else
                                 {
                                    if(check_if_added_to_cart($item_id))
                                    {
                                       echo '<a href="#" class="btn btn-primary btn-success" disabled>Added to cart</a>';
                                    }
                                    else
                                    {
                                       echo "<a href='cart-add.php?id=$item_id' class='btn btn-primary btn-block'>Add to cart</a>";
                                    
                                    }
                                 }
                              ?>
                           </div>
                        </div>
                     </div>
                     <?php 
                  }
               echo "</div>";
            }?>
         </div>
   </div>

   <?php 
   include './include/footer.php';
   ?>
</body>
</html>