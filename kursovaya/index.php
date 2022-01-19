<?php
    $title = "Главная";
    require "blocks/header.php";
?>

<div class = "in"> 
    <h1 class="display-3">МойПикник - Ваш помощник в поиске места для комфортного и безопасного отдыха</h1>

    <div class = "text-center">
        <img src="images/1.jpg" class="rounded" alt="парк">
    </div>

    <div class="container-fluid text-center">
        <form action="result.php">
            <input type="text" name="search" class="form-control w-50 p-3 container-fluid text-center mt-5" placeholder="Введите название парка">
            <button type="button" class="btn btn-outline-secondary mt-1">Найти</button>
        </form>
    </div>


</div>


<?php
    require "blocks/footer.php";
?>

