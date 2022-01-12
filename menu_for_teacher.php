<!DOCTYPE HTML>
<?php session_start();?>
<html>
	<head>
		<title>Dopetrope by HTML5 UP</title>
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


									<form action="">

											<!-- ЗДЕСЬ БЛОКИ ЮЗЕРОВ -->
										<label>поиск</label>
										<input type ="text" name="login" placeholder="введите логин">
										<button class="ror">
											найти
										</button>

                                    </form>



                                     <!-- ЗДЕСЬ БЛОКИ ЮЗЕРОВ при нахождения их в бд-->
                                    <div class="box post">
										<div class="call">
										<span>vlad0andr@gmail.com</span>
										<button>
											учитель 
										</button>
										<button>
											эксперт
										</button>
										</div>
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