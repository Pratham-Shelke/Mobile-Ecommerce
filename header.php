<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
         <div class="navbar-header">
         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
         </button>
            <a href="./index.php" class="navbar-brand">Mobile E-Store</a>
         </div>
         <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right mr-auto" >
            <?php 
            if(!isset($_SESSION['email'])) 
            {?>
               <li><a href="./signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
               <li><a href="#" data-toggle="modal" data-target="#logInModal"><span class="glyphicon glyphicon-log-in"></span> Log In</a></li>
                      
            <?php
            }
            else
            {?>
               <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="glyphicon glyphicon-shopping-cart"></span> Cart
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background: black; text-align:center;">
                     <a href="./cart.php" class="dropdown-item" style="text-decoration-none; color:white; padding:1px;">Cart</a>
                     <hr style="padding:2px; margin:0;">
                     <a href="./purchase.php" class="dropdown-item" style="text-decoration-none; color:white; padding:1px;">Purchased</a>
                  </div>               
               </li>
               <li><a href="./settings.php"><span class="glyphicon glyphicon-user"></span> Settings</a></li>
               <li><a href="./logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
            <?php
            }?>
               <li><a href="./about.php"><span class="glyphicon glyphicon-tasks"></span> About Us</a></li>
               <li><a href="./contact.php"><span class="glyphicon glyphicon-phone"></span> Contact Us</a></li>
            </ul>
         </div>     
      </div>
</nav>
<?php 
   if(!isset($_SESSION['email'])) 
   {?>
      <div class="modal fade" id="logInModal" tabindex="-1" role="dialog" aria-labelledby="logInModalTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h3 class="modal-title" id="logInModalTitle">LOG IN
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                  </button></h3>
               </div>
               <div class="modal-body">
                  <p>Don't have an account? <a href="signup.php">Register</a></p>
                  <form method="post" action="login_script.php">
                  <div style="color:red;">
                     <?php 
                        if(isset($_SESSION['login_visit']))
                        {
                           echo $_GET['log_error'] ;    
                           unset($_SESSION['login_visit']);                      
                        }?>
                   </div>
                     <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email" name="email">
                     </div>
                     <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                     </div>
                     <div class="form-group">
                        <input type="submit" value="Log In" class="btn btn-primary">
                     </div>
                     <a href="#">Forgot Password ?</a>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <?php 
   } ?>

