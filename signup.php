<?php 
   require './include/common.php';
   if(isset($_SESSION['email']))
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
   ?>
   
   <div class="container padding-top">
      <div class="row">
         <div class="col-md-6 hidden-xs">
            <img src="./img/oneplus-8.jpg" alt="" style="width:35vw; padding-top:20px;">
         </div>

         <div class="col-md-6 col-xs-12">
            
            <h3> <strong>SIGN UP </strong> </h3>
                  
            <form method="post" action="signup_script.php">
            <div style="color: red; padding-top:20px;">
               <?php    
                  if(isset($_SESSION['error']))
                  {
                     echo $_GET['error'];
                     unset($_SESSION['error']);
                  }
               ?>
            </div>
               <div class="form-group">
                  <input type="text" placeholder="Name" id="name" name="name" class="form-control" pattern="[A-Za-z\s]{4,}$" required>
               </div>
               <div class="form-group">
                  <input type="email" placeholder="Email" id="email" name="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required> 
               </div>
               <div class="form-group">
                  <input type="password" id="password" name="password" placeholder="Password" class="form-control" pattern="[a-z0-9._%+-@$%#&*/]{8,}" required>
               </div>
               <div class="form-group">
                  <input type="text" id="contact" name="contact" placeholder="Contact" class="form-control" pattern="[7-9]{1}[0-9]{9}" maxlength="10" required>
               </div>
               <div class="form-group">
                  <input type="text" id="city" name="city" placeholder="City" class="form-control" required>
               </div>
               <div class="form-group">
                  <input type="text" id="address" name="address" placeholder="Address" class="form-control" required>
               </div>

               <input type="submit" value="Submit" class="btn btn-primary">
            </form>
            
         </div>
      </div>
   </div>

   
   
   <?php 
   include './include/abs-footer.php';
   ?>
   
</body>
</html>