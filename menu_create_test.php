<!DOCTYPE HTML>
<?php session_start();?>
<html>
	<head>
		<title>Создать тест</title>
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

                                        
										<?php
											require 'core/conect.php';
											session_start();
											echo'<select name="thing">';
											
											$qu=$pdo->query('SELECT * FROM `thing`');
											while($row = $qu->fetch(PDO::FETCH_OBJ)){
												
												echo'<option>'.$row->name.'</option>';
										
											}
											echo'</select>';
										?>
										<input type ="text" name="name" placeholder="введите название тесту">
										<label>загрузкак файла .json</label><br>
                                        <input type ="file" name="file" >
                                        <br>
                                        
                                        <button type ="submit">загрузить</button>
                                        

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