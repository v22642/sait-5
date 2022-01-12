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

                <section id="intro" class="container">
                    <h2 class ="sntc">Авторизировоться</h2>
                    <div class="row">
                        <div class="col-41 col-12-medium">

                            
                        </div>
                        <div class="col-42 col-12-medium">
                            <section class="middle">
                                <form action="core/signin.php" method="post" enctype="multipart/form-data">

                                    <label>E-mail</label>
                                    <input type ="email" name="email" placeholder="введите E-mail">
                                    
                                    <label>пароль </label>    
                                    <input type ="password" name="password"placeholder="введите свой пароль">
                                    
                                    <button type ="submit">ВОЙТИ</button>
                                    <p>Вы ещё не зарегестрированы?<a href ="registration.php">зарегестрированы</a></p>
                                    
                                            <?php
                                            // отображения ошибак  
                                            if($_SESSION['message']){
                                                echo'<p class="ohpk">'.$_SESSION['message'].'</p>';
                                            
                                            }
                                            
                                            unset($_SESSION['message']);
                                            //echo '<p class="o">ошибка</p>';
                                        ?> 
                                </form>
                            </section>
                        </div>
                        <div class="col-41 col-12-medium">
                            
                        </div>
                    </div>
                    
                </section>

            </section>

			<!-- Main -->
			
				

			<!-- Footer -->
			
			<section id="footer">
				<?php require "bloc/footer.php"?>
			</section>

		</div>

	</body>
</html>