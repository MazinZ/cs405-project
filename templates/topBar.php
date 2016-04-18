<?php //include_once("../config.php"); 
define("ROOT", __DIR__ ."/");
define("HTTP", ($_SERVER["SERVER_NAME"] == "localhost")
   ? "/cs405-project/"
   : "http://testsite.com/"
);


?>
<nav class="navbar navbar-light bg-faded">
  <ul class="nav navbar-nav">
      <?php if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == true){ ?>

   		 <li class="nav-item active">

     		 <a class="nav-link" href="<?php echo HTTP . "logout.php"?>">Logout </a>
         </li>

      <?php } ?>
    
   	  <?php if (!isset($_SESSION["loggedIn"])){ ?>

   		 <li class="nav-item active">

     		 <a class="nav-link" href="<?php echo HTTP . "login/index.php"?>">Login</a>
         </li>

      <?php } ?>
    
	
    
     <?php if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == true && isset($_SESSION["userType"]) && $_SESSION["userType"] == 0){ ?>

   		 <li class="nav-item active">

     		 <a class="nav-link" href="<?php echo HTTP . "shopping/cart.php"?>">View Cart </a>
         </li>

      <?php } ?>
      
      
  </ul>
  </nav>