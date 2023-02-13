<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="../Imagens/icon do site/favicon.ico" type="image/x-icon">
    <title>MY Music</title>

    <style>
         body{font-family: Arial, Helvetica, sans-serif;background-image:linear-gradient(to top,#7688A9,white,#7688A9); margin:auto;z-index:1; color:#051838;background-attachment: fixed;;}
        table{}
        th{margin: 0px; padding-left: 20px; padding-right: 30;padding-bottom: 20px;}
        td{margin: 0px; padding-left: 20px; padding-right: 30; padding-bottom: 10px;text-align: left;}
        div{margin: auto;margin-top: 100px; margin-left: 100px; text-align: center;}
    </style>

</head>
<body>
 <?php
$hostname="localhost";
$user="root";
$password="";
$database="teste";

$conect=mysqli_connect($hostname, $user, $password,$database);

$sql=" SELECT * FROM dados ORDER BY id DESC";

$salvar=mysqli_query($conect,$sql);


$close=mysqli_close($conect);

?>  
<div>
<h1>USUÁRIOS DO SITE</h1>
<hr>    
<table>

<tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Sobrenome</th>
    <th>Email</th>
    <th>Palavra Passe</th>
    <th>Data de Nascimento</th>
</tr> 

<?php

while($user=mysqli_fetch_assoc($salvar)){
?>
    <tr>
    <td><?php echo $user['id'];?></td>
    <td><?php echo $user['nome'];?></td>
    <td><?php echo $user['sobrenome'];?></td>
    <td><?php echo $user['email'];?></td>
    <td><?php echo $user['password'];?></td>
    <td><?php echo $user['data'];?></td>

</tr>
<?php
} 

?>
</table>


</div>

</body>
</html>

