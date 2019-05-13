<?php 
  header('Content-type: text/html; charset=utf-8');
?><!--  -->
<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		$title="НІНФОРМАЦІЯ ПРО НАМ";
	 	require_once "blocks/head.php";
	 ?>

</head>
<body style="background-image: url(/img/gor29.jpg); height: 100vh; position: relative; background-size: cover;">
	<!-- СТВОРЕННЯ ШАПКИ-->
	<header >

	<div id="relative2">
		<div id="logo">
			<a href="" title="Перейти на головну сторінку"><b>НОВИНИ</b></a>
		</div>	
		<div id="menuHead">
			<a href="/about.php">
				<div><b>ПРО НАС</b></div>
			</a>
		</div>	
		<div id="menuHead2">
			<a href="/feedback.php">
				<div><b>ЗВОРОТНІЙ ЗВ'ЯЗОК</b></div>
			</a></b>
		</div>
		
		<div id="regAuth">
			<a href="/reg.php">
				<div><b>РЕГІСТРАЦІЯ</b></div>
			</a>
		</div>
		<div id="regAuth">
			<a href="/auth.php">
				<div id><b>АВТОРИЗАЦІЯ</b></div>
			</a>			 
		</div>
	</div>
	
	</header>

		
	<!--ЦЕНТРАЛЬНА ЧАСТИНА-->
	<div id="centerAbout">
		<div id="blockAbout">
			<div id="titleAbout">
				<br/>
				<h2>ІНФОРМАЦІЯ ПРО НАС</h2>
			</div>
			<br/>
			<div id="textAbout">
				<p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.</p>
			</div>
			
		</div>

		

		
		<?php require_once "blocks/news.php" ?>
		

	</div>

		
	

	<!-- СТВОРЕННЯ БОКОВОЇ ПАНЕЛІ-->


	

	
	<!-- СТВОРЕННЯ ФУТЕРУ-->
	
	<?php require_once "blocks/footer.php" ?>
</body>
</html>