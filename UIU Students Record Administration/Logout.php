<?php
   session_start();
   
   if(session_destroy()) 
   {
      header("Location: home_header.php");
   }
?>