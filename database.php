<?php
	$hostname = "localhost"; 
	$userne = "root"; 
	$passwd = ""; 
	$database = "webfood"; 
	
	mysql_connect($hostname,$userne,$passwd) or die ("cann't connect database");
	mysql_select_db($database) or die ("Unable to select database");
	
	mysql_query("SET character_set_results=utf8");
	mysql_query("SET character_set_client=utf8");
	mysql_query("SET character_set_connection=utf8");
?>