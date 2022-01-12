<!DOCTYPE HTML>
<?php session_start();?>
<html>
	<head>
		<title>Мессенджер</title>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<script src="js/jquery.min.js" type="text/javascript"></script>
		<script src="js/js1.js" type="text/javascript"></script>
		<link rel="stylesheet" href="css/main.css" />
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">
		<section id="header">
		<?php require "bloc/header.php"?>
		</section>		
		pGPzN79t
				<section id="main">
					<div class="container">
						<div class="row">
							
							<div class="col-4 col-12-medium">

								<!-- Sidebar -->
									
								<?php require "bloc/menu_bar1.php"?>

							</div>
							<div class="col-8 col-12-medium ">

								<!-- Content -->
									<article class="box post">
										<!-- здесь сделать отображения информации об акаунте -->
										<div style="overflow: auto; width:100%; height:400px;">
										<div id="messages">

										</div>
										</div>
										<div class="form">
										<input type ="text" name="name" id="txtName" placeholder="" >
										<button class="ror" id="btnSend">найти</button>
									</div> 
									
									</article>

							</div>
						</div>
					</div>
				</section>

		
				

			<!-- Footer -->
			
			<section id="footer">
				<?php require "bloc/footer.php"?>
					
			</section>
			
		</div>

	</body>
</html>