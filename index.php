<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, inital-scale=1, shrink-to-fit=no">
	<title>Landing page</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/base.css">

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

	<section id="intro-header">
			<div class="container">
				<!--2-->
				<div class="row justify-content-center">
					<div class="wrap-headline">
						<h1 class="text-center" id="ivan">"СДЕЛАЕМ ЛУЧШЕ ВМЕСТЕ"</h1>
						<h2 class="text-center">Городской проект «Сделаем лучше вместе!» направлен на поддержку значимых проектов и инициатив в решении актуальных городских проблем. </h2>
						<hr> <! Комментарий - Тонкая линия>
						<h2 class="text-center">Приятно видеть, как меняется городская среда, активизируется и объединяется молодежь, появляются новые проекты, которыми мы гордимся. Мы видим потенциал и это вдохновляет!</h2>
						<hr>
						<ul class="list-inline text-center">
							<li class="list-inline-item"><a class="btn btn-secondary btn-lg"  href="zaiavca.html" role="button"><b>Подать заявку</b></a></li>
						</ul>
					</div>
				</div>
			</div>
	</section>

	<section id="team">
		<div class="container">
		<!--3-->
		<h1 class="text-center">Реализованные проекты	
		</h1>
		<hr>
		<h2 class="text-center"><em><big><big>Проект «Сделаем лучше вместе» дает старт новым возможностям для новых полезных проектов для улучшения жизни в городе.</big></big></em></h2>
			<div class="row">
				<div class="col-sm-12">
					<ul class="list-inline list-unstuled text-center">
						<li class="list-inline-item">
							<h3 class="text-center">Категория заявки:</h3>
							<h2 class="text-center"><b>Благоустройство и ремонт дорог</b></h2>

								<a class="ivan">

									<img src="imgs/remont.jpg" class="img-thumbnail" width="420" height="250"
							onmouseover="this.src='imgs/remont.png'; " 
							onmouseout="this.src='imgs/remont.jpg';" />
							<!Комментарий - onmouseover - картинка при наведенном курсоре.onmouseout - при не наведенном.>
								</a>
							<h5 class="text-info">Выполнен 01.16.2019г.</h5>
							<p class="text-moted"><b>Ремонт дороги по улице Ленинградская</b></p>
						</li>
						<li class="list-inline-item">
							<h3 class="text-center">Категория заявки:</h3>
							<h3 class="text-center"><b>Благоустройство и ремонт детских площадок</b></h3>

								<a class="">

									<img src="imgs/ploshadca.jpg" class="img-thumbnail" width="500" height="300"
							onmouseover="this.src='imgs/dvor.jpg'; " 
							onmouseout="this.src='imgs/ploshadca.jpg';" />
								</a>
							<h5 class="text-info">Выполнен 01.16.2019г.</h5>
							<p class="text-moted"><b>Детская площадка на улице К.Маркса</b></p>
						</li>
						<li class="list-inline-item">
							<h3 class="text-center">Категория заявки:</h3>
							<h3 class="text-center"><b>Ремонт и рестоврация исторической среды</b></h3>

								<a class="">

									<img src="imgs/restovrats.jpg" class="img-thumbnail" width="500" height="300"
							onmouseover="this.src='imgs/rest.jpg'; " 
							onmouseout="this.src='imgs/restovrats.jpg';" />
								</a>

							<h5 class="text-info">Выполнен 01.16.2019г.</h5>
							<p class="text-moted"><b>Реставрация на ул.Уральской</b></p>
						</li>
					</ul>
				</div>
			</div>
			<hr>
			<!--4-->
	</section>
	<section id="vip">
		<!--3-->
		<h2 class="text-center"><b>Заявки в разработке</b>	
		</h2>
					<ul class="list-inline list-unstuled text-center">
						<li class="list-inline-item">
							<h3 class="text-center">Категория заявки:</h3>
							<h3 class="text-center"><b>Благоустройство и ремонт дорог</b></h3>
							<img src="imgs/remont.png" class="rounded" height="300" width="500">

						</li>
						<li class="list-inline-item">
							<h3 class="text-center">Категория заявки:</h3>
							<h3 class="text-center"><b>Благоустройство и ремонт детских площадок</b></h3>
							<img src="imgs/dvor.jpg" class="rounded" height="300" width="500">
		
						</li>
						<li class="list-inline-item">
							<h3 class="text-center">Категория заявки:</h3>
							<h3 class="text-center"><b>Ремонт и рестоврация исторической среды</b></h3>
							<img src="imgs/rest.jpg" class="rounded" height="300" width="500">
						</li>
					</ul>
			<hr>
			<!--4-->
	</section>
	

	<footer> <!>
		<div class="container"> <!>
			<div class="row"> <!row - строка>

				<div class="col-sm-4"> <!col-sm-число - это количество используемых условных частей строки. В строке 12 частей.>
					<img src="logo/logo.png" class="" height="100" width="100"> <!>
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
						<a>Адрес:</a> г. Магнитогорск <br> пр. Ленина, 38<br> <!br - следующая строка>
						<a>Телефон</a> +7 (800) 100-19-34 
					</address>
				</div>
				
			</div>
		</div>
	</footer>
	<script src="js/jguery-3.1.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<script src="js/min.js"></script>

</body>
</html>