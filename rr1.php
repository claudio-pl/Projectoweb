<?php

$hostname="localhost";
$user="root";
$Password="";
$database="teste";

$mysql= mysqli_connect($hostname, $user,$Password,$database);

$email= $_POST["email"];
$password= $_POST["password"];

$sql="select id from dados where email like'%$email%' and password like'%$password%'";

$salvar=mysqli_query($mysql,$sql);

$row=mysqli_num_rows($salvar);

if ($row== 1) { header('location: index.html');} 

else {   header('location: index.html');}









?>