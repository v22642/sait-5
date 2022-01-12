<!DOCTYPE HTML>
<?php session_start();?>
<html>
	<head>
		<title>Для админа</title>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<script src="js/jquery.min.js" type="text/javascript"></script>
		<script src="js/people_search.js" type="text/javascript"></script>
		
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


									<div class="form" >

											
										<label>поиск</label>
										<input type ="email" name="email" id="txtName" placeholder="введите e-mail" >
										<button class="ror" id="btnSend">найти</button>

                                    </div>

										
                                     <!-- ЗДЕСЬ БЛОКИ ЮЗЕРОВ при нахождения их в бд-->
                                    <div class="box post">
									<div id="messages">

									</div>

                                    </div>
								</article>

							</div>
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