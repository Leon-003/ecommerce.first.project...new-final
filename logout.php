<?php
   session_start();
   session_unset();

   //destroy
   session_destroy();
   header('Location:login.php');
?>