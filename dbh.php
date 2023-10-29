<?php

$servername = "dbsv123.database.windows.net";
$dBUsername = "adminBoss123";
$dbPassword = "P@55w0rD#123";
$dBName = "db_project";

$conn = mysqli_connect($servername, $dBUsername, $dbPassword, $dBName);

if(!$conn){
	echo "Databese Connection Failed";
}

?>