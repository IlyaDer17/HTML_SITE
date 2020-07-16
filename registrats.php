<?php include_once 'helpers.php'; 

	$pageTitle = 'Регистрация';
	$action ='addform';
	$fio ='';
	$login ='';
	$email ='';
	$password ='';
	$consent ='';
	$id ='';
	$button ='Регистрация';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, inital-scale=1, shrink-to-fit=no">
	<title>Регистрация</title>
	<link rel="stylesheet" type="text/css" href="css/reg1.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/base.css">	

</head>
<body>
<header>
		<div class="container">
		<!--1-->
			<div class="row justify-content-between">
			<img src="logo/logo.png" class="img-fluid" height="80" width="80">
				<a class="float-left" href="index.html">Городской портал</a>
				<ul class="list-inline float-right">
					<li class="list-inline-item"><a href="avtirozation.html">Авторизация</a></li>
					<li class="list-inline-item"><a href="registrats.html">Регистрация</a></li>
					
				</ul>
			</div>
		</div>
	</header>
<form action="reg1.php" method="POST" id="signup">
      <div>
        <p>
          <label for="fio">ФИО</label>
          <input type="text" name="fio" id="fio" required pattern="[А-Яа-яЁё -]+" value="<?php htmlout($fio); ?>" placeholder="Василий Иванович Петров"><span></span>
        </p>

        <p>
          <label for="login">Логин</label>
          <input type="text" name="login" id="name" required pattern="[A-Za-z]+" value="<?php htmlout($login); ?>" placeholder="Vasya777"><span></span>
        </p>

        <p>
          <label for="email">Эл. почта</label>
          <input type="Email" name="email" id="email" required value="<?php htmlout($email); ?>" placeholder="example@post.com"><span></span>
        </p>

        <p>
          <label for="password">Пароль</label>
          <input type="password" name="password" id="password" required value="<?php htmlout($password); ?>" placeholder="от 4 до 10 символов" minlength="4" maxlength="10"><span></span>
        </p>
        <p>
          <label for="Password1">Повторите</label>
          <input type="password" name="Password1" id="Password1" required value="<?php htmlout($Password1); ?>" placeholder="от 4 до 10 символов" minlength="4" maxlength="10"><span></span>
        </p>

        <p>
          <label for="consent" id="soglasie_podpis">Согласен на обработку персональных данных</label>
          <input type="checkbox" name="consent" id="soglasie" class="form-check-input" required value="<?php htmlout($consent); ?>"><span></span>
        </p>
        <input type="hidden" name="id" id="id" value="<?php htmlout($id); ?>">
        <button type="submit" id="button" action="index.html">Зарегистрироваться</button>

      </div>
     
    </form>

	<footer class="foo">
		<div class="container"> 
			<div class="row">
				<div class="col-sm-2">
					<img src="logo/logo.png" class="img-fluid">
				</div>
				<div class="col-sm-2">
					<h5>Отдел по молодежной политике</h5>
					<ul class="list-unstuled">
						<li><a href="#">Документы</a></li>
						<li><a href="#">Издательства</a></li>
						<li><a href="#">О нас</a></li>
						<li><a href="#">Контакты</a></li>
					</ul>
				</div>
				<div class="col-sm-2">
					<h5>Социальные сети</h5>
					<ul class="list-unstuled">
						<li><a href="#">Facbook</a></li>
						<li><a href="#">Twitter</a></li>
						<li><a href="#">Blok</a></li>
					</ul>
				</div>
				<div class="col-sm-2">
					<h5>Служба подержки</h5>
					<ul class="list-unstuled">
						<li><a href="#">Контакты</a></li>
						<li><a href="#">Политика конфидециальности</a></li>
						<li><a href="#">Условия</a></li>
						<li><a href="#">Справочная служба</a></li>
					</ul>
				</div>
				<div class="col-sm-4">
					<address>
						<strong>Адресс:</strong>г.Магнитогорск<br>
						пр. Ленина, д. 72, 1 этаж, пресс-центр<br>
						<abbr title="Phone">Телефон</abbr> (456) 456-45-45
					</address>
				</div>
			</div>
		</div>
	</footer>
	<script src="js/jguery-3.1.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>

