<?php 
//iniciar sess�o
session_start();

//destruir a sess�o
session_unset();
session_destroy();

//enviar utilizador para a p�gina de entrada
header('location: index.php');
?>
