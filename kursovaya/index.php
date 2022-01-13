<?php
    $title = "Главная";
    require "blocks/header.php";
?>

<h1 class="display-3">МойПикник - Ваш помощник в поиске места для комфортного и безопасного отдыха</h1>

<div class="container-fluid text-center">
    <form action="parks.php">
        <input type="text" class="form-control w-50 p-3 container-fluid text-center mt-5" placeholder="Введите название парка">
        <button type="button" class="btn btn-outline-secondary mt-1">Найти</button>
    </form>
</div>


<?php
    require "blocks/footer.php";
?>

