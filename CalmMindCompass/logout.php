<?php 
@include 'config.php';
// echo '<script>alert("Successfully loged out ..")</script>'; not working.
session_start();
session_unset();
session_destroy();

header('location:index.php');
?>