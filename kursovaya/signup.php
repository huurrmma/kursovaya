
<?php
$connect = mysqli_connect("std-mysql", "std_1606_kursovayarabota", "12345678", "std_1606_kursovayarabota");

require "blocks/header.php";
session_start();



$name = $_POST['name'];
$login = $_POST['login'];
$pass = $_POST['password'];

if (!empty($_POST)){
    if(trim($name) == ""){
        echo '<script type="text/javascript">alert(" Вы не ввели имя пользователя!")</script>';
    }
    else if(trim($login) == "") {
        echo '<script type="text/javascript">alert("Введите логин!")</script>';
    }
    else if(trim($pass) == "") {
        echo '<script type="text/javascript">alert("Вы не ввели пароль!")</script>';
    }

    else{
    $result = mysqli_query($connect, "SELECT * FROM Users WHERE login=\"".$_POST['login']."\"");
    
    if(mysqli_num_rows($result) == 0){
        mysqli_query($connect, "INSERT INTO Users (name, login, password) VALUES (
            \"".$_POST["name"]."\", 
            \"".$_POST["login"]."\",
            \"".md5($_POST["password"])."\"
            )"
        );
    }
    
    header("Location: enter.php"); 
}
}

$title = "Регистрация";
$content = "

<div class = 'mt-3 container'>
<h1 class = 'mt-5 display-5'>Регистрация</h1>

<form  method=\"POST\">
    <div class = 'row'>
        <label>Имя пользователя</label>
        <input class = 'form-control' type=\"text\" name=\"name\" value = '".$_SESSION['name']."'>
    </div>
    
    <div class = 'row'>
        <label>Логин</label>
        <input class = 'form-control' onkeyup='checkParams()' type=\"text\" name=\"login\" value = '".$_SESSION['login']."'>
    </div>
    
    <div class = 'row'>
        <label>Пароль</label>
        <input  class = 'form-control' type=\"password\" name=\"password\" >
    </div>
    <div class = 'mt-3'>
        <button class = 'btn btn-outline-secondary mt-3' type=\"submit\">Зарегистрироваться</button>
    </div>
</form>
</div>
";



require  "blocks/footer.php";
?>

<div class = "container-fluid">
                <?=$content?>
</div>