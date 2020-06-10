<?php

 require_once("config/config.php");
 if ( !isLogged() ) {
   redirect("index.php");
 }else{
   redirect("dashboard/");
 }

 exit;
?>
