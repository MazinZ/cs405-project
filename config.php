<?php
define("ROOT", __DIR__ ."/");
define("HTTP", ($_SERVER["SERVER_NAME"] == "localhost")
   ? "/cs405-project/"
   : "http://testsite.com/"
);

?>