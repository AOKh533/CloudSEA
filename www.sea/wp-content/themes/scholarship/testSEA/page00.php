<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap - Prebuilt Layout</title>

    <!-- Bootstrap -->
    <link href="../../../../css/bootstrap-4.3.1.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css"/>
  </head>
  <body>

    <div class="jumbotron jumbotron-fluid text-center">
		<div class="container" style="text-align: center; position: relative;">
			<div class="card card-block text-xs-center">
				<div class="page_start">
				<p><img src="http://www.sea/wp-content/uploads/2020/04/B01.jpg" alt="Картинка СИА"></p>
					<div class="card-img-overlay">
						<h1 class="card-title text_on_img">Насколько ты защищён от социоинженерных атак?</h1>
						<button type="button" class="btn butt btn-primary btn-lg j-submit-report" data-toggle="popover" onclick="downloadPage('.page_start','.question1');"> УЗНАТЬ </button>
					</div>
				</div>
			</div>
		</div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    <script src="../../../../js/jquery-3.3.1.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed --> 
    <script src="../../../../js/popper.min.js"></script>
  <script src="../../../../js/bootstrap-4.3.1.js"></script>
  </body>
</html>
