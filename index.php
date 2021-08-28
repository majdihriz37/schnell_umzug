<?php
   spl_autoload_register(function ($class) {
      include "class/".$class.".class.php";
   });
   //session_start();
   //adminDB::connect();
   new Controller();
?>  