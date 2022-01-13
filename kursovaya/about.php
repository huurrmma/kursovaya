
<?php
    $title = "Ваш отзыв";
    require "blocks/header.php";
?>
    <div class = "container mt-2">
    <h1>Ваш отзыв</h1>
    
    <form action="check.php" method = "POST">
    <input type="text" name = "username" placeholder = "Введите имя" class = "form-control"><br>
    <input type="email" name = "email" placeholder = "Введите email" class = "form-control"><br>
    <input type="text" name = "theme" placeholder = "Тема" class = "form-control"><br>
    <textarea name="message" class = "form-control" placeholder = "Введите сообщение"></textarea> <br>
    <input type="submit" value = "Отправить" class = "btn btn-success">

    </form>
</div>
<?php
     require "blocks/footer.php";

?>