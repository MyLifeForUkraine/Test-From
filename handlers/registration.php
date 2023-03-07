<?php
include '../includes/config.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_check = $_POST['password_check'];

if ($password === $password_check) {
   if (mysqli_num_rows(mysqli_query($connection, "SELECT * FROM `users` WHERE `email` = " . "'" . $email . "'")) >= 1) {
      echo 2;
   } else if (stripos($email, '@') === false) {
      echo 3;
   } else {
      $password = md5($password);
      mysqli_query($connection, "INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`) 
      VALUES (NULL, '$firstname', '$lastname', '$email', '$password')");
      echo 4;
   }
} else {
   echo 1;
}
