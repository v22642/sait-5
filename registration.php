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
                    <h2 class ="sntc">Регистрация</h2>

                    <div class="row">

                        <div class="col-41 col-12-medium"></div>
                        
                        <div class="col-42 col-12-medium">

                            <section class="middle">

                                <form action="core/signup.php" method="post" enctype="multipart/form-data">

                                    <label>логин</label>
                                    <input type ="text" name="login" placeholder="введите логин">
                                    
                                    <label>E-mail</label>
                                    <input type ="email" name="email" placeholder="введите E-mail">

                                    <label>Картинка</label>
                                    <input type ="file" name="ava" ><br>

                                    <label>пароль </label>    
                                    <input type ="password" name="password"placeholder="введите свой пароль">

                                    <label>повторить пароль</label>
                                    <input type ="password" name="password_confirm" placeholder="повторите пароль">

                                    <button type ="submit">ЗАРЕГЕСТРИРОВАТЬСЯ</button>
                                    <p>Вы уже зарегестрированы?<a href ="authorization.php">войти</a></p>
                                    
                                        <?php
                                            // отображения ошибак
                                            if($_SESSION['message']){
                                                echo'<p class="ohpk">'.$_SESSION['message'].'</p>';
                                            
                                            }
                                            
                                            unset($_SESSION['message']);
                                            
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