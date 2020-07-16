<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, inital-scale=1, shrink-to-fit=no">
	<title>Форма обратной связи</title>
	<link rel="stylesheet" type="text/css" href="css/zaiavca.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/base1.css">	

</head>
<body>
	<header>
		<div class="container">
		<!--1-->
			<div class="row justify-content-between">
			<img src="logo/logo.png" class="img-fluid" height="80" width="80">
				<a class="float-left" href="#">Городской портал</a>
				<ul class="list-inline float-right">
					<li class="list-inline-item"><a href="avtirozation.html">Авторизация</a></li>
					<li class="list-inline-item"><a href="registrats.html">Регистрация</a></li>
					<li class="list-inline-item"><a href="#">Выход</a></li>
				</ul>
			</div>
		</div>
	</header>

<div class="container">
<h1 align='center'>Заявка</h1>
	<form class="form-group">
	<div class="field-group">
			<label>
				Название:
			</label>
				<input type="text" name="field-name" class="md-field" field-name">
	</div>
	<div class="field-group">
			<label>
				Описание:
			</label>
				<input type="text" name="field-email" class="md-field" field-email">
	</div>
	<div class="field-group">
			<label>
				Категория:
			</label>
				<select name="field-message" class="md-field field-message">
					<option>Благоустройство и ремонт дорог</option>
					<option>Благоустройство и ремонт детских площадок</option>
					<option>Ремонт и рестоврация исторической среды</option>
				</select>
	</div>
	<div class="field-group">
			<label>
				Фото:
			</label>
					<input type="file">
	</div>
	<div class="field-group">
				<input type="submit" class="btn-submit"> <!input type="submit" кнопка ОТПРАВИТЬ автоматически>
	</div>
</form>

	<footer id="zaiavka"> <!>
		<div class="container"> <!>
			<div class="row"> 
				<div class="col-sm-4"> 
					<img src="logo/logo.png" class="img-fluid" height="80" width="80"> <!>
				</div>
				<div class="support"> <!>
					<h5>Служба подержки</h5> <!>
					<ul class="list-unstuled"> <!>
 						<li><a href="#">Контакты</a></li> <!>
						<li><a href="#">Политика конфидециальности</a></li> <!>
						<li><a href="#">Условия</a></li> <!>
						<li><a href="#">Справочная служба</a></li> <!>
					</ul>
				</div>
				<div class="col-sm-4"> <!>
					<address> <!Специальный тэг для адреса>
						<strong>Адрес:</strong> г. Магнитогорск <br> пр. Ленина, 38<br> 
						<abbr title="Phone">Телефон</abbr> +7 (800) 100-19-34 
					</address>
				</div>
			</div>
		</div>
	</footer>

</body>

</html>