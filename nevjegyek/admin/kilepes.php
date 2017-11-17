<?php
session_start();

unset($_SESSION['belepett']);
session_destroy(); //összes session változót megszünteti
header("Location: index.php");
?>