
<?php
include('connectiondb.php');
session_start();
session_unset();
session_destroy();
mysqli_close($connect);
header("location:home.php");


?>

