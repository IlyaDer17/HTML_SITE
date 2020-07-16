<?php
if(isset($_GET['add']))
{
	$pageTitle = 'Новая категория';
	$action ='addform';
	$name ='';
	$id ='';
	$button ='Добавить категорию';
	include 'form.html.php';
	exit();
}
//Добавление новогй категории//
if(isset($_GET['addform']))
{
	include 'db.php';
	try
	{
		$sql ='INSERT into categories set 
		name = :name';
		$s = $pdo->prepare($sql);
		$s->bindValue(':name', $_POST['name']);
		$s->execute();
	} catch(PDOException $e)
	{
		$error = 'Ошибка при добавлении категории';
		include 'error.php';
		exit();
	}
	header('Location: .');
	exit();
}
//Редактирование записей
if (isset($_POST['action']) and $_POST['action']=='Редактировать') 
{
	include 'db.php';
	try 
	{
		$sql ='SELECT  id, name from categories where id=:id';
		$s=$pdo->prepare($sql);
		$s->bindValue(':id', $_POST['id']);
		$s->execute();
	} catch (PDOException $e) 
	{
		$error = 'Ошибка при извлечении информации о категории';
		include 'error.php';
		exit();
	}
	$row=$s->fetch();
	$pageTitle = 'Редактировать категорию';
	$action ='editform';
	$name = $row['name'];
	$id =$row['id'];
	$button ='Обновить информацию о категории';
	include 'form.html.php';
	exit();
}
if (isset($_GET['editform'])) 
{
	include 'db.php';
	try 
	{
		$sql ='UPDATE categories set 
		name = :name
		where id=:id';
		$s = $pdo->prepare($sql);
		$s->bindValue(':id', $_POST['id']);
		$s->bindValue(':name', $_POST['name']);
		$s->execute();
	} catch (PDOException $e) 
	{
		$error = 'Ошибка при обновлении записи о категории';
		include 'error.php';
		exit();
	}
	header('Location: .');
	exit();
}
//Удаление категории
if (isset($_POST['action']) and $_POST['action']=='Удалить') 
{
	include "db.php";
	try 
	{
		$sql='DELETE from categories where id=:id';
		$s=$pdo->prepare($sql);
		$s->bindValue(':id', $_POST['id']);
		$s->execute();	
	} catch (PDOException $e)
	 {
	$error = 'Ошибка при удалении категории';
		include 'error.php';
		exit();
	}
	header('Location: .');
	exit();
}
//Вывод всех категорий
include "db.php";
try
{
	$query =  "SELECT id, name from categories";
	$result = $pdo->query($query);
} catch (PDOException $e)
 {
	echo "Ошибка выполнения запроса" . $e->getMessage();
	include 'error.php';
	exit();
}
while ($row = $result->fetch()) 
{
	$prod[]=array(
		'id'			=> $row['id'],
		'name'			=> $row['name']
		);
}
include 'categories.php';
