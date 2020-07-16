<?php
try {
	$pdo = new PDO('mysql:host=localhost; dbname=site', 'root','');
	$pdo->exec('SET NAMES "utf8"');
	
} catch (PDOException $e) {
	echo "Соединение с базой данных не установлено";
	include 'error.php';
	exit();
}
?>