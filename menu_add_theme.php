<!DOCTYPE HTML>
<?php session_start();?>
<html>
	<head>
		<title>Добавить тему</title>
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
                                    <form action="core/signup.php" method="post" enctype="multipart/form-data">
									<label>Предметы</label>
									<?php
										require 'core/conect.php';
										echo'<select name="thing">';
										session_start();
										$qu=$pdo->query('SELECT * FROM `thing`');
										while($row = $qu->fetch(PDO::FETCH_OBJ)){
											
											echo'<option>'.$row->name.'</option>';
									
										}
										echo'</select>';
									?>
                                        <label>Название темы</label>
                                        <input type ="email" name="email" placeholder="Название темы">
                                        <label>загрузка JSON</label>
                                        <input type ="file" name="ava" >
                                        <br>
                                        <button type ="submit">Сделать здесь</button>
										<br>
                                        <button type ="submit">Добавить</button>
                                        

                                                <?php
                                                // отображения ошибак
                                                // if($_SESSION['message']){
                                                //     echo'<p class="ohpk">'.$_SESSION['message'].'</p>';
                                                
                                                // }
                                                
                                                // unset($_SESSION['message']);
                                                //echo '<p class="o">ошибка</p>';
                                                ?> 
                                    </form>

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