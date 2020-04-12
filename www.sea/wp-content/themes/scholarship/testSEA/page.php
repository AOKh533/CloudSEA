<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css"/>
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
    <div class="container;" style="text-align: center; position: relative;"> <!-- entry-content;--> 
		<div class="card card-block text-xs-center">
			<div class="page_start">
				<img src="/img/B01.jpg" class="card-img img-fluid" alt="СИА">
				<div class="card-img-overlay">
					<h1 class="card-title text_on_img">Насколько ты защищён от социоинженерных атак?</h1>
					<button type="button" class="btn butt btn-primary btn-lg j-submit-report" data-toggle="popover" onclick="downloadPage('.page_start','.question1');"> УЗНАТЬ </button>
				</div>
			</div>
				
			<div class="question1">
				<?php include ('question1.php'); ?>
			</div>
			
			<div class="question2">
				<?php include ('question2.php'); ?>
			</div>
			
			<div class="answer2">
				<?php include ('answer2.php'); ?>
			</div>
		</div>
	</div>
	
	<!-- После подключения jQuery, Popper и Bootstrap JS 
	<script>
		$(function () {
			$('[data-toggle="popover"]').popover({trigger:'hover'});
		});
	</script> -->

	</div>
    <!-- Подключаем jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- Подключаем плагин Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    
    <!-- Подключаем Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous" ></script>

</body>
</html>