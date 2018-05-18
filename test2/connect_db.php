<?php

define("DB_HOST", "localhost");
define("DB_USER", "clinton");
define("DB_PASSWORD", "clinton");
define("DB_DATABASE", "diseases");


$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE) or die (mysqli_error()); 
  
?>







