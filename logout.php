<?php
   session_start();
   
   if(session_destroy()) {
      header("Location: /ams/index.php");
   }
?>