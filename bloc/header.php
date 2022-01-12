<h1><a href="index.html"></a></h1>

	<nav id="nav">
		<ul>
			<li></li>
			<li><a href="index.php">главное</a></li>
			<li><a href="find_an_expert.php">найти эксперта</a></li>
			<li><a href="messenger.php">мессенджер</a></li>
			<li><a href="left-sidebar.html">тесты</a></li>
			
			<!-- <li><a href="right-sidebar.html">ещё</a></li> -->
			<!-- сделать так чтомы менялась про входе на мой акаунт и изображения акаунта для перехода в миню и выходе чтобы показывался вход  -->
			<li><?php
				if($_SESSION['user']['id']){
					echo'<a href="../menu_about_account.php">мой кабинет</a>';
					
				}
				else{
					echo'<a href="../authorization.php">вход</a>';
				}

				if($_SESSION['user']['avatar']!=null){
					
					echo'<img src="'. $_SESSION['user']['avatar'] .'" width="50" alt="" class="u">';
				}
				elseif($_SESSION['user']['id']){
					
					echo'<img src="../img/nall.png" width="50" alt="">';
				}
				
        	?></li>
			
			<!-- заготовка для входа -->
			<!-- <li><a href="menu_about_account.php">мой кабинет<img class ="ava"src="images/avatars/1638474203unnamed.jpg" alt=""></a></li> -->

			
		</ul>

		
	</nav>
	
