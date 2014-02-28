<?php

//iniciar sessão
session_start();

//ligação à base de dados
include('ligacao_bd.php');

?>

<table width="800" border="1" cellspacing="0" cellpadding="0" align="center">
<tr><td width="200"></td>
<td width="600">

<?php 
//verificar se já foi feita a autenticação
if(isset($_SESSION)['nivel_