<?php
    $title = "Вход";
    require "blocks/header.php";
    require "session.php";
?>

<!-- <div class = "container mt-2">
    
    <form method="POST" action = "auth.php">
        <label>Логин</label><br>
        <input type="text" name="login" /><br>
        <label>Пароль</label><br>
        <input type="password" name="password" /><br>
        <label></label>
        <button type="submit">Войти</button> <a class="nav-link" href="signup.php">Регистрация</a>
    </form>    
</div> -->


<div class="container mt-2">
    <h1 class="display-5">Вход/Регистрация</h1>

    <?php if(isset($session_user) && $session_user != ""):?> 
        <label>Здравствуйте, <?=$_SESSION['user']['name']?> </label>
        <label></label>
        <a href="logout.php">Выйти</a>

    <?php else:?>
        <form method="POST" action = "auth.php">
        <label class="form-label">Логин</label>
        <input type="text" name="login" class="form-control" /><br>
        <label class = "form-label mt-3">Пароль</label>
        <input type="password" name="password" class="form-control" /><br>
        <label></label>
        <button class = "btn btn-outline-secondary mt-3" type="submit">Войти</button> 
        <a class="nav-link pl-0" href="signup.php">Регистрация</a>
        </form>
    <?php endif;?>
</div>

<?php
    require "blocks/footer.php";
?>
