<?php
	$hostname="127.0.0.1";
	$username="root";
	$password="mysql";
	$dbname="denguedb";
	
	mysql_connect($hostname,$username, $password);
	mysql_select_db($dbname);
    ?>