<?php
include('formsignup.php');
if (isset($_POST['signup']) && isset($_FILES['image'])) {
  include('connectiondb.php');
  session_start();
  $user = $_POST['login'];
  $pass = $_POST['passwd'];
  $name = $_POST['name'];
  $prenom = $_POST['prenom'];
  $filiere = $_POST['filiere'];
  $errors = array();
  $file_name = $_FILES['image']['name'];
  $file_size = $_FILES['image']['size'];
  $file_tmp = $_FILES['image']['tmp_name'];
  $file_type = $_FILES['image']['type'];
  $file_ext = strtolower(end(explode('.', $_FILES['image']['name'])));

  $expensions = array("jpeg", "jpg", "png", "jfif");

  $s = "select * from eleve where login='" . $user . "'";
  $quer = mysqli_query($connect, $s);
  $num = mysqli_num_rows($quer);
  if ($num == 1) {
    echo "login already taken";
  } else {

    if (file_exists($file_name)) {
      echo "file existant";
    }
    if (in_array($file_ext, $expensions) === false) {
      $errors[] = "extension not allowed";
    }

    if ($file_size > 2097152) {
      $errors[] = 'File size must be  2 MB';
    }

    if (empty($errors) == true) {

      move_uploaded_file($file_tmp, "uploads/" . $file_name);
      echo "Success";
    }
    $request = "insert into eleve (login,password,nom,prenom,filiere,image) values ('$user','$pass','$name','$prenom','$filiere','$file_name')";
    $q = mysqli_query($connect, $request);
    if ($q) {
      echo " sucefull";
      header('location:liste.php');
    } else {
      echo " wrong";
    }
  }
}
