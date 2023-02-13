<?php
$hostname="localhost";
$user="root";
$Password="";
$database="teste";


$mysql= mysqli_connect($hostname, $user,$Password,$database)or die("conecção falhou");

$nome=$_POST["nome"];
$sobrenome=$_POST["sobrenome"];
$email=$_POST["email"];
$password=$_POST["password"];
$data=$_POST["data"];

$sql="insert into dados (nome,sobrenome,email,password,data) values('$nome','$sobrenome','$email','$password','$data')";

$salvar=mysqli_query($mysql,$sql);

mysqli_close($mysql);

header('locatin: index.html');

echo"Dados enviados com sucesso..."

?>