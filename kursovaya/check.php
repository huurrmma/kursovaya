<?php
    $name = $_POST['username'];
    $email = $_POST['email'];
    $theme = $_POST['theme'];

    if(trim($name) == ""){
        echo "Вы не ввели имя пользователя!";
    }
    else if(strlen(trim($name)) <= 1)
        echo "Такого имени не существует";
    else if(trim($email) == "" || trim($theme) == "" || trim($_POST['message']) == "")
        echo "Введите все данные";
    else{
        
    header('Location: about.php');
    exit;
    }