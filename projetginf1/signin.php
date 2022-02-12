<?php
include('home.php');
include('connectiondb.php');
if (isset($_POST['signin'])) {
    session_start();
    $user = $_POST['login'];
    $pass = $_POST['passwd'];
    $s = "select * from eleve where login='" . $user . "' and password='" . $pass . "'";
    $result = mysqli_query($connect, $s);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        $row = mysqli_fetch_assoc($result);
        header('location:liste.php');
    } else {
        header('location:home.php');
        echo "connection failed ";
    }
}
