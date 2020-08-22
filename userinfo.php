<?php

$con = mysqli_connect('localhost','root');

if ($con) {
  echo " Connection successful ";
}else{
echo " No Connection ";
}

mysqli_select_db($con, 'userdata' );

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$comment = $_POST['comment'];

$query = " insert into userdetails (user, email, mobile, password, comment) 
values ('$user', '$email', '$mobile', '$password', '$comment' ) ";

echo "$query";

mysqli_query($con, $query);

header('location:index.html')



?>