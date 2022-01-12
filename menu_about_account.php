<!DOCTYPE HTML>
<?php session_start();?>
<html>
	<head>
		<title>Об акаунте</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		
		<link rel="stylesheet" href="css/main.css" />
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">
		<section id="header">
		<?php require "bloc/header.php"?>
		</section>		
					
				<section id="main">
					<div class="container">
						<div class="row">
							
							<div class="col-4 col-12-medium">

								<!-- Sidebar -->
									
								<?php require "bloc/menu_bar.php"?>

							</div>
							<div class="col-8 col-12-medium ">

								<!-- Content -->
									<article class="box post">
										<!-- здесь сделать отображения информации об акаунте -->
										<?php
										// echo'<p>Имя</p>';
										// echo'<p>'.$_SESSION['user']['lоgin'].'</p>';
										echo'<p>E-mail</p>';
										echo'<p>'.$_SESSION['user']['email'].'</p>';
										echo'<p>аватар</p>';
										echo'<img class ="ava1"src="'.$_SESSION['user']['avatar'].'" alt="">';
										// "id"=>$user['id'],
										// "lоgin" => $user['lоgin'],
										// "email" => $user['email'],
										// "avatar" =>$user['avatar'],
										// "user" =>$user['user']
										?>
										
										
										
										

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