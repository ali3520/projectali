<?php
$date = $_POST['date'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$picklocation = $_POST['picklocation'];
$adult = $_POST['adult'];
$child = $_POST['child'];
$selecttour = $_POST['selecttour'];
$connection = mysqli_connect('localhost','root','','desert_data');
$insert= "INSERT INTO `customers`(`date`, `name`, `email`, `phone`, `picklocation`, `adult`, `child`, `selecttour`) 
VALUES ('{$date}','{$name}','{$email}','{$phone}','{$picklocation}','{$adult}','{$child}','{$selecttour}')";
mysqli_query($connection,$insert);
header("Location:http://localhost/project_ali/main/index.php");
?>