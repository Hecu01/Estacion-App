<?php
$dbName = 'proyecto';
$dbHost = 'localhost';
$user = 'root';
$password = '';
 
try
{
	$pdo = new PDO($dbName,$dbHost,$user,$password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
	echo "PDO error".$e->getMessage();
	die();
}
?>