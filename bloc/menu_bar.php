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
        <li><a href="menu_about_account.php">Об акаунте</a></li> <!-- показывает данные пользователя кроме пороля-->
        <!-- для всех пользователей  -->
        <li><a href="menu_change_data.php">Сменить данные</a></li><!--	сменить ник, картинку, пороль ,почту -->
        <!-- для пользователей 2 и 3 -->
        <li><a href="menu_about_expert.php">Об эксперт</a></li><!-- здесь эксперт делает свои данные свои даные  -->
        <!-- для пользователей 1 -->
        <li><a href="menu_for_admin.php">Для админа</a></li><!-- админ ищит пользователя и делает его учителям или экспертом -->
        <!-- для пользователей 2 -->
        <li><a href="menu_for_teacher.php">Для учителя</a></li><!-- ищит пользователя и делает его экспертом  -->
    </ul>
    <footer>
        <a href="#" class="bu alt">выйти из акаунта</a>
    </footer>
</section>