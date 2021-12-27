<!DOCTYPE HTML>

<html>
	<head>
		<title>Dopetrope by HTML5 UP</title>
		<meta charset="utf-8" />
		
		<script src="cry.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		
		<link rel="stylesheet" href="css/main.css" />
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<section id="header">
				<?php require "bloc/header.php"?>
					<!-- банер с пацаном -->
						<section id="banner">
							<header>
								
							</header>
						</section>

					<!-- С нами ты cможешь -->

						<section id="intro" class="container">
							<h2 class ="sntc">С нами ты cможешь</h2>
							<div class="row">
								<div class="col-4 col-12-medium">

									<section class="first">
									<img src="images/opportunity.png" alt="">
										
										<p>Безотрывно от учебы закрепить пройденные темы, проработать задания ОГЭ и ЕГЭ</p>
									</section>
								</div>
								<div class="col-4 col-12-medium">
									<section class="middle">
									<img  class="i1" src="images/opportunity-2.png" alt="">
										
									
										<p>Самостоятельно определять время, место и условия обучения</p>
									</section>
								</div>
								<div class="col-4 col-12-medium">
									<section class="last">
									<img  class="i2" src="images/opportunity-3.png" alt="">
										
										<p>Не беспокоиться о том, что отстанешь от своих одноклассников, ведь темп обучения выбираешь ты сам</p>
									</section>
								</div>
							</div>
							<div class="row">
								<div class="col-4 col-12-medium">
									<section class="first">
									<img  class="i3" src="images/opportunity-4.png" alt="">
										
										<p>Найти новых друзей</p>
									</section>
								</div>
								<div class="col-4 col-12-medium">
									<section class="middle">
									<img class="i4" src="images/opportunity-5.png" alt="">
										
										<p>Получить подарки</p>
									</section>
								</div>
								<div class="col-4 col-12-medium">
									<section class="last">
									<img src="images/opportunity-6.png" alt="">
									
										<p>Стать экспертом</p>
									</section>
								</div>
							</div>



							
						</section>

			</section>

			<!-- Main -->
				<section id="main">
					<div class="container">
						<div class="row">
							<div class="col-12">

								<!-- новасти -->
								<!-- надо сделать эту хрень автоматьм -->
									<section>
										<header class="major">
											<h2>Новасти</h2>
										</header>
										<div class="all">
										<input checked type="radio" name="respond" id="desktop">
											<article id="slider"><!-- всё что даёт его переключать -->
												<input checked type="radio" name="slider" id="switch1">
												<input type="radio" name="slider" id="switch2">
												<input type="radio" name="slider" id="switch3">
												<input type="radio" name="slider" id="switch4">
												<input type="radio" name="slider" id="switch5">
												<div id="slides">
													<div id="overflow">
														<div class="image"><!-- картинки -->
															<article><img src="images/удалить/1.jpg"></article>
															<article><img src="2.jpg"></article>
															<article><img src="3.jpg"></article>
															<article><img src="4.jpg"></article>
															<article><img src="5.jpg"></article>
														</div>
													</div>
												</div>
												<div id="controls"><!-- стрелки для каждого из слайдов чтобы его двигать-->
													<label for="switch1"></label>
													<label for="switch2"></label>
													<label for="switch3"></label>
													<label for="switch4"></label>
													<label for="switch5"></label>
												</div>
												<div id="active"><!-- точки для переключения -->
													<label for="switch1"></label>
													<label for="switch2"></label>
													<label for="switch3"></label>
													<label for="switch4"></label>
													<label for="switch5"></label>
												</div>
											</article>
										</div>
										</div>
									</section>
									<?php require "bloc/footer.php"?>
							</div>
							
						</div>
					</div>
					
				</section>
				<!-- Footer -->
					
		</div>
		
	</body>
</html>