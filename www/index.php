<?php 
  header('Content-type: text/html; charset=utf-8');
?><!--  -->
<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		$title="Новини про все";
	 	require_once "blocks/head.php";
	 ?>

</head>
<body>
	<!-- СТВОРЕННЯ ШАПКИ-->
	<header id="firstShow" style="background-image: url(/img/1.jpg); height: 100vh; position: relative; background-size: cover;">
		<?php require_once "blocks/header.php" ?>
		<div id="words">			
		<p id="one"><b>МИ БУДУЄМО</b></p>
		<p id="two"><b>МАЙБУТНЄ!</b></p>			
		</div>

	</header>
	<!--СТВОРЕННЯ СЛОГАНУ-->
	<div id="secondShow">
			<p><b>МОЖЛИВІСТЬ ЗРОБИТИ</b></p>
			<p><b>КРАЩИЙ ВИБІР -</b></p>
			<p><b>КЛЮЧ ДО УСПІХУ!</b></p>			
	</div>
	<div id="line">
		
	</div>	
	<!--СТВОРЕННЯ ЦЕНТРАЛЬНОЇ ЧАСТИНИ-->
	<div id="thirdPart">
		<div id="services">	
			<a href="#" >
				 <div class="serv1">
					<div class="black" style="background-color: black">
						<div class="layer1" style="background-image:url(/img/1.jpg)">
							<p class="name">
								<b >ЧІКАГО</b>
							</p>
						</div>
					</div>
					<div class="layer2"></div>
				</div>
			</a>
			<a href="#">
				<div class="serv2">
					<div class="black" style="background-color: black">
						<div class="layer1" style="background-image:url(/img/4.jpg)">
							<p class="name">
								<b>СІНГАПУР</b>
							</p>
						</div>
					</div>
					<div class="layer2"></div>
				</div>
			</a>
		</div>

		<div id="services2">	
			<a href="#">
				 <div class="serv3">

					<div class="black" style="background-color: black">
						<div class="layer1" style="background-image:url(/img/20.jpg)">
							<p class="name">
								<b>НЬЮ-ЙОРК</b>
							</p>
						</div>
					</div>
					<div class="layer2"></div>
				</div>
			</a>
			<a href="#">
				<div class="serv4">
					<div class="black" style="background-color: black">
						<div class="layer1" style="background-image:url(/img/17.jpg)">
							<p class="name">
								<b>ДУБАЇ</b>
							</p>
						</div>
					</div>
					<div class="layer2"></div>
				</div>
			</a>
		</div>

	<!--БЛОК НОВИН-->
		<?php require_once "blocks/news.php" ?>
		

	</div>

		
	

	<!-- СТВОРЕННЯ БОКОВОЇ ПАНЕЛІ-->


	

	
	<!-- СТВОРЕННЯ ФУТЕРУ-->
	<div id="line">
		
	</div>
	<?php require_once "blocks/footer.php" ?>
</body>
</html>