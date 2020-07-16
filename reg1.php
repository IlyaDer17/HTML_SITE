<?php
//Регистрация пользователя
	include 'db.php';
	try
	{
		$sql ='INSERT into user set 
		fio = :fio,
		login = :login,
		email = :email,
		password = :password;
		consent = :consent';
		$s = $pdo->prepare($sql);
		$s->bindValue(':fio', $_POST['fio']);
		$s->bindValue(':login', $_POST['login']);
		$s->bindValue(':email', $_POST['email']);
		$s->bindValue(':password', $_POST['password']);
		$s->bindValue(':consent', $_POST['consent']);
		$s->execute();
	} catch(PDOException $e)
	{
		$error = 'Ошибка при регистрации';
		include 'error.php';
		exit();
	}
	header('Location: .');
	exit();
?>