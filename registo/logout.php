<?php  
	session_start();
	session_destroy();
	header("Location: login.php"); //fun��o header para redirecionar em php
?>