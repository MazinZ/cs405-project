<style> 
	body{background-color:#e0e0e0;}
</style>


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
      
      <?php if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == true && isset($_SESSION["userType"]) && $_SESSION["userType"] == 0){ ?>

   		 <li class="nav-item active">

     		 <a class="nav-link" href="<?php echo HTTP . "shopping/index.php"?>">Shop </a>
         </li>

      <?php } ?>
      
       <?php if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == true && isset($_SESSION["userType"]) && $_SESSION["userType"] >0){ ?>
       <li class="nav-item active">

     		 <a class="nav-link" href="<?php echo HTTP . "dashboard/updateInventory.php"?>">Update Inventory </a>
         </li>
      
      
      <?php } ?>
      
       <?php if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == true && isset($_SESSION["userType"]) && $_SESSION["userType"] ==2){ ?>
       <li class="nav-item active">

     		 <a class="nav-link" href="<?php echo HTTP . "dashboard/salesPromo.php"?>">Add Promotion </a>
         </li>
      
      
      <?php } ?>
      
       <?php if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == true && isset($_SESSION["userType"]) && $_SESSION["userType"] == 0){ ?>
       <li class="nav-item active">

     		 <a class="nav-link" href="<?php echo HTTP . "shopping/viewOrders.php"?>">View Orders </a>
         </li>
      
      
      <?php } ?>
      
      <?php if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == true && isset($_SESSION["userType"]) && $_SESSION["userType"] > 0){ ?>
       <li class="nav-item active">

     		 <a class="nav-link" href="<?php echo HTTP . "dashboard/ViewPendingOrders.php"?>">View Orders </a>
         </li>
      
      
      <?php } ?>
      
      <?php if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == true && isset($_SESSION["userType"]) && $_SESSION["userType"]  == 2){ ?>
       <li class="nav-item active">

     		 <a class="nav-link" href="<?php echo HTTP . "dashboard/statistics.php"?>">Statistics </a>
         </li>
      
      
      <?php } ?>
      
      
      
  </ul>
  <div class="col-sm-3 col-md-3 pull-right">
		<form class="navbar-form" role="search" method="GET" action="<?php echo HTTP . 'search.php'?>">
		<div class="input-group">
			<input type="text" style="margin-top:0px;" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
			<div class="input-group-btn">
				<button class="btn btn-default" style="margin-top:0px;" type="submit"><i class="glyphicon glyphicon-search"></i></button>
			</div>
		</div>
        </form>

  </div>
  </nav>