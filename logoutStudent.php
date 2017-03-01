<?php
	require_once "dbconfig.php";
	
	unset($_SESSION);
	session_unset();
	session_destroy();
	
	header("Location: index.php");
?>