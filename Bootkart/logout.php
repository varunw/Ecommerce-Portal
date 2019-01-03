<?php 
session_start();
session_destroy();
echo 'Successfully Logout';
header('Refresh:2;url=index.php');
?>