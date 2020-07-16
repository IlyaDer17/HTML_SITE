<?php include_once 'helpers.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title><?php htmlout($pageTitle); ?></title>
</head>
<body>
	<h1>
		<?php htmlout($pageTitle); ?>
	</h1>
	<form action="?<?php htmlout($action); ?>" method="POST">
		<div>
			<label for="name">
				Название:
				<input type="text" name="name" id="name" value="<?php htmlout($name); ?>">
			</label>
		<div>
			<input type="hidden" name="id" value="<?php htmlout($id); ?>">
			<input type="submit" value="<?php htmlout($button); ?>">
		</div>
	</form>
</body>
</html>