<?php include_once 'helpers.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Админ панель</title>
</head>
<body>
	<h1>Категории</h1>
	<p><a href="?add">Добавить новую категорию</a></p>
	<table>
		<tr>
			<th>Название категории</th>
			<th>Действие</th>
		</tr>
		<?php foreach($prod as $pro): ?>
		<tr>
			<td>
				<?php htmlout($pro['name']); ?>
			</td>
			<td>
				<form action="" method="POST">
					<div>
						<input type="hidden" name="id" value="<?php htmlout($pro['id']); ?>">
						<input type="submit" name="action" value="Редактировать">
						<input type="submit" name="action" value="Удалить">

					</div>
				</form>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
</body>
</html>