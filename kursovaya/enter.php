<?php
    $title = "Вход";
    require "blocks/header.php";
?>

<div class = "container mt-2">
    <h1 class="display-5">Вход/Регистрация</h1>
    <form method="POST" action = "auth.php">
        <label>Логин</label><br>
        <input type="text" name="login" /><br>
        <label>Пароль</label><br>
        <input type="password" name="password" /><br>
        <label></label>
        <button type="submit">Войти</button> <a class="nav-link" href="signup.php">Регистрация</a>
    </form>    
</div>


<?php
    require "blocks/footer.php";
?>
