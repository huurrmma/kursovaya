<?php
    $title = "Главная";
    require "blocks/header.php";
    require "session.php";
?>

<div class = "in"> 
    <h1 class="display-3 text-center">МойПикник </h1>
    <h1 class="display-5 text-center">- Ваш помощник в поиске места для комфортного и безопасного отдыха</h1>

    <div class="row">
        <div class="col-lg-6 mb-5">
            <div class="map">
                <!-- <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A176fd8e74f0cf4513061207e58848f50ae1278b4bb94ebb59b7162792d05ef00&amp;width=500&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script> -->
                <script type="text/javascript" class="rounded float-end" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A176fd8e74f0cf4513061207e58848f50ae1278b4bb94ebb59b7162792d05ef00&amp;width=655&amp;height=504&amp;lang=ru_RU&amp;scroll=true"></script>
                <!-- <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A176fd8e74f0cf4513061207e58848f50ae1278b4bb94ebb59b7162792d05ef00&amp;width=423&amp;height=317&amp;lang=ru_RU&amp;scroll=true"></script> -->
            </div>
        </div>

        <div class="col-lg-6 mb-5">
            <div class="">
                <img src="images/2.jpg" class="rounded float-start im" alt="парк">
            </div>
        </div>
    </div>

    <?php if(isset($session_user) && $session_user != ""):?> 
        <h3 class="text-center display-6">Поиск площадки для пикника</h3>

        <div class="container-fluid text-center">
            <form action="result.php">
                <input type="text" name="search" class="form-control w-50 p-3 container-fluid text-center mt-5" placeholder="Введите название парка">
                <button type="submit" class="btn btn-outline-secondary mt-1">Найти</button>
            </form>
        </div>
    <?php else:?> 
        <h3 class="text-center display-6">Поиск площадки для пикника</h3>
        <p class = " text-danger container-fluid text-center">Для поиска необходимо авторизоваться</p>
        <input type="text" name = "district" placeholder = "Введите название парка" class = "form-control w-50 p-3 container-fluid text-center mt-5"><br>
    <?php endif;?>



</div>


<?php
    require "blocks/footer.php";
?>

