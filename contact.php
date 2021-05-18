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
      ?>  
      <div class="container padding-top">
         <h2>CONTACT US</h2>
         <div class="row">
            <div class="col-md-8 col-xs-12">
               <div style="color:green;">
                  <h3>
                     <?php 
                        if(isset($_SESSION['success']))
                        {
                           echo $_GET['message'];
                           unset($_SESSION['success']);
                        }
                     ?>
                  </h3>
               </div>
               <form method="post" action="contact-script.php">
               <div class="form-group">
                  <label for="name">Name :</label>
                  <input type="text" class="form-control" name="name"> 
               </div>
               <div class="form-group">
                  <label for="email">Email :</label>
                  <input type="email" class="form-control" name="email">
               </div>
               <div class="form-group">
                  <label for="message">Message :</label>
                  <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
               </div>
               <input type="submit" value="Submit" class="btn btn-primary">
               </form>
            </div>
            <div class="col-md-4 col-xs12">
               <h2>COMPANY INFORMATION</h2>
               <img src="./img/contact.jpg" alt="" style="width: 20vw;">
               <p>
                  <strong> Adderss:</strong>
                  <br>
                  Lorem ipsum dolor sit amet, <br>
                  consectetur adipisicing elit. <br>
                  Tempora, eaque?<br>
                  India <br>
                  <strong> Phone number:</strong>
                  <br>
                  7350956775 <br>
                  <strong> Email Address:</strong><br>
                  company@mail.com <br>
                  <strong>Follow us on Instagram and Facebook</strong>

               </p>
            </div>
         </div>
      </div>
  
   <div class="visible-xs">
     <?php 
   include './include/footer.php';
   ?>
   </div>
   <div class="hidden-xs">
   <?php 
   include './include/abs-footer.php';
   ?>
   </div>
</body>
</html>