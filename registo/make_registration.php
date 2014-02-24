<html>
<head>
<title>Efetuar registo</title>
</head>

<body>


<?php
$host="localhost";
$user="root";
$pass="";
$db="market_pecas";
$conexao=mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($db) or die(mysql_error());
?>

<?php 
$nome=$_POST['nome'];
$morada=$_POST['morada'];
$nif=$_POST['nif'];
$email=$_POST['email'];
$telefone=$_POST['telefone'];
$password=$_POST['password'];
$sql = mysql_query("INSERT INTO users(nome, morada, nif,email,telefone,password) 
VALUES ('$nome', '$morada', '$nif', '$email', '$telefone', '$password')");
echo "<center><h1>$nome o seu registo foi efetuado com sucesso</h1>";
?>

</body>

</html>