<?php 
   include './include/common.php';
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
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./css/style.css">
   <title>Settings</title>
</head>
<body>
<?php 
      include './header.php'
   ?>

  <div class="container padding-top col-md-offset-3 col-md-6 col-xs-offset-1 col-xs-10">
     <h3>Change Password</h3>
     <h4 style="color:red;"><?php 
     if(isset($_SESSION['error']))
     {
         echo $_GET['error'];
         unset($_SESSION['error']);
     } 
     ?></h4>
     <h4 style="color:green;">
     <?php 
      if(isset($_SESSION['success']))
      {
          echo $_GET['success'];     
          unset($_SESSION['success']);
      }
     ?>
     </h4>
     <form method="post" action="setting-script.php">
        <div class="form-group">
           <input type="password" placeholder="Old Password" class="form-control" name="old-password" id="old-password">
        </div>
        <div class="form-group">
           <input type="password" placeholder="New Password" class="form-control" name="new-password" id="new-password">
        </div>
        <div class="form-group">
           <input type="password" placeholder="Re-type New Password" class="form-control" name="re-new-password" id="re-new-password">
        </div>
        <input type="submit" value="Submit" class="btn btn-primary">
     </form>
  </div>  
  <?php 
   include './include/abs-footer.php';
   ?>
</body>
</html>