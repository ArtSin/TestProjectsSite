<?php
function GetPage()
{
	if ($_GET['p'] == 0)
	{
		include_once("pages/main.html");
	}
	else
	{
		if (file_exists("pages/" . $_GET['p'] . ".html"))
		{
			include_once("pages/" . $_GET['p'] . ".html");
		}
		else
		{
			header("HTTP/1.0 404 Not Found");
			echo "<h1>404</h1>\n";
			echo "<p>Страница не найдена</p>\n";
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Сайт для кружка по информатике</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width" />
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300&amp;subset=latin,cyrillic" rel="stylesheet" type="text/css" />
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

<link href="http://agorbatchev.typepad.com/pub/sh/3_0_83/styles/shThemeDefault.css" rel="stylesheet" type="text/css" />
<script src="http://agorbatchev.typepad.com/pub/sh/3_0_83/scripts/shCore.js" type="text/javascript"></script>
<script src="http://agorbatchev.typepad.com/pub/sh/3_0_83/scripts/shAutoloader.js" type="text/javascript"></script>

<link href="main.css" rel="stylesheet" type="text/css" />
<script src="main.js" type="text/javascript"></script>
</head>
<body>
	<!-- Хеадер -->
	<div id="header">
		<!--[if lt IE 9]>
		<div id="ie-warning">Вы используете IE < 9! Обновитесь или перейдите на другой браузер (
		<a href="https://www.google.com/intl/ru/chrome/browser/">Google Chrome</a>, 
		<a href="http://www.mozilla.org/ru/firefox/new/">Firefox</a>, 
		<a href="http://www.opera.com/ru">Opera</a>)
		</div>
		<![endif]-->
		<div id="logo"><h1>Тестовый сайт</h1></div>
		<div id="menu">
			<ul>
				<li><a href="index.php">Заглавная страница</a></li>
				<li class="menu-root">Проекты</li>
				<li class="menu-sub"><ul>
					<li><a href="index.php?p=1">Проект #1</a></li>
				</ul></li>
			</ul>
		</div>
	</div>
	<!-- Основное -->
	<div id="main">
		<div id="col-left">
			<h2>Ссылки</h2>
			<ul>
				<li><a href="https://github.com/ArtSin/TestProjects">Репозиторий на GitHub</a></li>
				<li><a href="https://github.com/ArtSin/TestProjectsSite">Репозиторий сайта на GitHub</a></li>
			</ul>
		</div>
		<div id="col-content">
			<?php GetPage(); ?>
		</div>
	</div>
	<!-- Футер -->
	<div id="footer">
		<a href="http://validator.w3.org/check/referer" style="text-decoration: none;">
			<img src="html5-logo.png" alt="Valid HTML5!" title="Valid HTML5!" />
		</a>
		<a href="http://jigsaw.w3.org/css-validator/check/referer" style="text-decoration: none;">
			<img src="http://jigsaw.w3.org/css-validator/images/vcss.gif" alt="Valid CSS!" title="Valid CSS!" />
		</a>
		<a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/deed.ru">
			<img alt="Лицензия Creative Commons" src="http://i.creativecommons.org/l/by-sa/3.0/88x31.png" />
		</a>
		<br />
		Это произведение доступно по <a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/deed.ru">
		лицензии Creative Commons «Attribution-ShareAlike» («Атрибуция — На тех же условиях») 3.0 Непортированная</a>.
	</div>
</body>
</html>
