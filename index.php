<?php

//iniciar sess�o
session_start();

//liga��o � base de dados
include('ligacao_bd.php');

?>

<table width="800" border="1" cellspacing="0" cellpadding="0" align="center">
<tr><td width="200"></td>
<td width="600">

<?php 
//verificar se j� foi feita a autentica��o
if(isset($_SESSION)['nivel_