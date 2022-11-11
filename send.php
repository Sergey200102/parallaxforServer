<?php

$connection  = mysqli_connect('127.0.0.1', 'root','','paralax');

if($connection == false){
echo "Не удалось подлючиться к базе данных </br>";
echo mysqli_connect_error();
exit();
}
 


$name = $_POST['name'];
$email = $_POST['email'];

mysqli_query($connection, "INSERT INTO `clients`(`id`, `name`, `email`) VALUES ('','$name','$email')");


?> 