<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title;?></title>
    <link rel="stylesheet" href="styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="bg-success p-2 text-dark bg-opacity-10">
    <div class="container-fluid">   
        <!-- <nav class="nav nav-pills">         
        <header>
            <a href="index.php" class="navbar-brand">МойПикник</a>
            <a href="index.php">Главная</a>
            <a href="about.php">Ваш отзыв</a>
            <a href="#">Контакты</a>
        </header>
        </nav>      -->
        
        <!-- <nav class="nav nav-pills nav-fill w-25 shadow p-3 mb-5 bg-body rounded">
            <a href="index.php" class="navbar-brand ">МойПикник</a>
            <a class="nav-link" href="about.php">Ваш отзыв</a>
            <a class="nav-link" href="contact.php">Полезная информация</a>
        </nav> -->

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">МойПикник</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link" href="about.php">Ваш отзыв</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="contact.php">Полезная информация</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="enter.php">Вход</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>