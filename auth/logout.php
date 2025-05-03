<?php
session_start();
session_unset();
session_destroy();
header("Location: logout msg.php"); 
exit;
?>
