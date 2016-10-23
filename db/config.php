<?php
	
	$mysql_hostname = "localhost";
	$mysql_user = "root";
	$mysql_password = "";
	$mysql_database = "tv_series_db";

	$bd = mysql_connect ($mysql_hostname, $mysql_user, $mysql_password) or die ("Erreur");
	mysql_select_db ($mysql_database, $bd) or die ("Erreur");

?>