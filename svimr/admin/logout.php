<?php

session_start();
if (!isset($_SESSION['admin_login']))
    header("location:./index.php");

unset($_SESSION['admin_login']);
header("location:./index.php");


?>