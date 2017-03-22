<?php

require_once 'global_vars.php';

date_default_timezone_set("Asia/Kuala_Lumpur");
session_start();

		//var $db;
		//var $db_tableName;
		/*$dbhost = "localhost";
		$dbuser = "root";
		$dbpass = "";
		$dbname = "sds";*/

		$conn = mysql_connect(HOST,USER,'') or die('cannot connect to the server');
		mysql_select_db(DBNAME) or die('database selection problem');
?>
