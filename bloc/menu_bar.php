<section class="box">
    <header>
        <h3>Меню</h3>
    </header>
    
    <ul class="divided">
        <!-- 0 =обычный пользователь  -->
        <!-- 1= админ -->
        <!-- 2= учитель -->
        <!-- 3= эксперт -->

        <!-- для всех пользователей  -->
        <li><a href="menu_about_account.php">Об акаунте</a></li> 
        
        <li><a href="menu_change_data.php">Сменить данные</a></li>

        
        
        
        
        
        <?php
            if($_SESSION['user']['user']==1|| $_SESSION['user']['user']==2 || $_SESSION['user']['user']==3){
                echo'<li><a href="menu_about_expert.php">Об эксперт</a></li>';
                echo'<li><a href="menu_tests.php">Тесты</a></li>';
            }
            else{
                
            }
            if($_SESSION['user']['user']==1){
                echo'<li><a href="menu_for_admin.php">Для админа</a></li>';
                echo'<li><a href="menu_add_thing_.php">Добавить предмет</a></li>';
            }
            else{
                
            }
            if($_SESSION['user']['user']==1|| $_SESSION['user']['user']==2 ){
                echo'<li><a href="menu_for_teacher.php">Для учителя</a></li>';
                echo'<li><a href="menu_create_test.php">Создать тест</a></li>';
                echo'<li><a href="menu_add_theme.php">Добавить тему </a></li>';
                echo'<li><a href="menu_give_access_to_the_test.php">Дать доступ к тесту</a></li>';
            }
            else{
                
            }
            
        ?>
    </ul>
    <footer>
        <a href="../core/exit.php" class="bu alt">выйти из акаунта</a>
    </footer>
</section>