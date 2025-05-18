<?php
session_start();
$_SESSION['is_guest'] = true;
header("Location: ../HILEETUMBLER.php"); // Redirect to the home page
exit();
?>
