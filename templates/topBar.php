<?php include_once("../config.php"); ?>
<nav class="navbar navbar-light bg-faded">
  <ul class="nav navbar-nav">
      <?php if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == true){ ?>

   		 <li class="nav-item active">

     		 <a class="nav-link" href="<?php echo HTTP . "logout.php"?>">Logout <span class="sr-only">(current)</span></a>
      
      <?php } ?>
    </li>
    

  </ul>
  </nav>