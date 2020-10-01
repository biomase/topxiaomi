<?php
 require_once "db.php"; 
 unset($_SESSION['logged_user']);
 session_destroy();
 header('Location: /card.php')

?>