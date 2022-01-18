<!-- <?php
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
?>     -->

<?php
    $to = "hurmasort@gmail.com"; // емайл получателя данных из формы
    $tema = "Форма обратной связи на PHP"; // тема полученного емайла
    $message = "Ваше имя: ".$_POST['username']."<br>";//присвоить переменной значение, полученное из формы name=name
    $message .= "E-mail: ".$_POST['email']."<br>"; //полученное из формы name=email
    $message .= "Тема: ".$_POST['theme']."<br>"; 
    $message .= "Сообщение: ".$_POST['message']."<br>"; //полученное из формы name=message
    $headers  = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента
    mail($to, $tema, $message, $headers); //отправляет получателю на емайл значения переменных
    ?>