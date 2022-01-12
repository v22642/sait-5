<!DOCTYPE HTML>
<?php session_start();?>
<html>
	<head>
		<title>Dopetrope by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<script src="js/jquery.min.js" type="text/javascript"></script>
		<script src="js/people_search1.js" type="text/javascript"></script>
		<link rel="stylesheet" href="css/main.css" />
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">
            <section id="header">
            <?php require "bloc/header.php"?>
            </section>		
					
				<section id="main">
					<div class="container">

							<div class="col-88 col-12-medium ">
								
								
								<!-- Content -->
								<article class="box post">
								<div class="form" >
                                         <!-- ЗДЕСЬ БЛОКИ ЮЗЕРОВ -->
                                    <label>поиск предметы</label>
                                    
										<select id="gg" name="thing">
											<option>Английский</option>
											<option>Русский</option>
											<option>Математика</option>
											
										</select>
										<select name="topic">
											<option>
												Prese simpol
											</option>
											
											
										</select>
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
				</section>

		
				

			<!-- Footer -->
			
			<section id="footer">
				<?php require "bloc/footer.php"?>
					
			</section>

		</div>

	</body>
</html>