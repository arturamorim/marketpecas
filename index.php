<?php

//iniciar sessão
session_start();

//ligação à base de dados
include('con_db.php');

?>
<html>
<head>
<title></title>
</head>

<body background-color: #FC9804 >

<table width="800" border="1" cellspacing="0" cellpadding="0" align="center">
<tr><td width="200"></td>
<td width="600">

<?php 
//verificar se já foi feita a autenticação
if(isset($_SESSION['level_user'])){
echo "Bem vindo, ".$_SESSION['name_login'];
echo "|| <a href='shopping_list.php'>Ver lista de compras</a>";
echo "|| <a href='state_buy.php'>Ver estado da encomenda</a>";
echo "|| <a href='logout.php'>Terminar sessão</a>";
}else{
include('login.php');}
?>

</td></tr>
<tr>
<td align="center"><Strong> Categorias de artigos</strong><td/>
<td align="center"><Strong> Artigos em Destaque</strong><td/>
</tr>
<tr>
<td width='50'><?php include('show_categories.php'); ?> </td>



</body>
</html>