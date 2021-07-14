<?php

$con = mysqli_connect('localhost','root');

if($con){
echo "connection successful";
}else{
	echo "No connection";
}

mysqli_select_db($con,'bankingcontact');

$name = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query = "insert into user(name,email,mobile,comment) values ('$name','$email','$mobile','$comment')" ;

mysqli_query($con, $query);
header('location:index.php');

?>
