<?php 
  header('Content-type: text/html; charset=utf-8');
?><!--  -->
<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		$title="ЗВОРОТНІЙ ЗВ'ЯЗОК";
	 	require_once "blocks/head.php";
	 ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script>
		$(document).ready(function() {
			 $("#done").click(function() {
			 	$('#messageShow').hide(); //Повідомлення про помилку ховається
			 	var name = $("#name").val();
			 	var email = $("#email").val();
			 	var subject = $("#subject").val();
			 	var message = $("#message").val();
			 	var fail ="";
			 	if (name.length < 3) fail = "Ім'я не менше 3 символів";
			 	else if (email.split('@').length -1 == 0 || email.split('.').length -1 == 0)
			 		fail = "Ви ввели невірний email";
			 	else if (subject.length < 5)
			 		fail = "Тема повідомлення не менше 5 символів";
			 	else if (message.length < 20)
			 		fail = "Повідомлення не менше 20 символів";
			 	if (fail != "") {
			 		$("#messageShow").html (fail + "<div class='clear'><br></div>");
			 		$("#messageShow").show ();//Повідомлення з'являється
			 		return false;
			 	} 
			 	$.ajax ({
			 		url: 'ajax/feedback.php',
			 		type: 'POST',
			 		cache: false,
			 		data: {'name': name, 'email': email, 'subject': subject, 'message': message},
			 		dataType: 'html',
			 		succcess: function (data){
			 			if(data =='Повідомлення відправлено') {
			 				$("#messageShow").html (data + "<div class='clear'><br></div>");
			 				$('#messageShow').show(),
			 			}
			 		}
			 	});
			 });
		});
	</script>
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
	<div id="form">
		<div id="formCenter">
			<div id="formColor">

				<div id="formCenter">

					<div id="big">
						<div id="textFeedback">
							<h1>ЗАМОВИТИ</h1><br/>
							<h1>ДЗВІНОК</h1><br/>
							<P>Графік роботи</P>
							<p>ПН-ПТ:9:00-19:00</p>
							<p>СБ-НД:10:-17:00</p>
						</div>
					</div>

					

					<input type="text" placeholder="Ім'я" id="name" name="name" ><br/>
					<input type="text" placeholder="Email" id="email" name="email"><br/>
					<input type="text" placeholder="Тема повідомлення" id="subject" name="subject"><br/>
					<textarea name="message" placeholder="Введіть сюди ваше повідомлення" id="message"></textarea><br/>
					<div id="messageShow" style="width: 100%; text-align: center; color: red;padding: 0;"></div>
					<input type="button" name="done" id="done" value="Відправити"><br/>
				</div>
			</div>
			
		</div>
	</div>

		
	

	


	

	
	<!-- СТВОРЕННЯ ФУТЕРУ-->
	
	<?php require_once "blocks/footer.php" ?>
</body>
</html>