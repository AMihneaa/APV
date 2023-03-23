<?php 
$email = $_SESSION['email'];
if($email == false){
  header('Location: login.php');
}
?>