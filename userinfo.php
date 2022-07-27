<?php

 $con = mysqli_connect('localhost','root', '','u647901589_userinfo');

 if($con){
  echo "log in successful";
 }else{
  echo "error";
 }

  $user = $_POST['user'];
  $email= $_POST['email'];
  $mobile = $_POST['mobile'];
  $comment = $_POST['comment'];
  
$query = " insert into mcu (user, email, mobile, comment)
 values ('$user', '$email', '$mobile', '$comment')";

 mysqli_query($con, $query);


?>