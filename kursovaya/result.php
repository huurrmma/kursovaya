<?php
    $title = "Результат поиска";
    require "blocks/header.php";
?>

<?php
    $connect = mysqli_connect("std-mysql", "std_1606_kursovayarabota", "12345678", "std_1606_kursovayarabota");

    if(mysqli_connect_errno()){
        echo 'Ошибка в подкючении к базе данных ('.mysqli_connect_errno().'): '. mysqli_connect_error();
        exit();
    }

    // Получаем запрос
    $inputSearch = $_REQUEST['search']; 
    
    // Создаём SQL запрос
    $sql = "SELECT ObjectName, NameWinter, District, Address, Email, WebSite, HelpPhone, SurfaceTypeWinter FROM `Parks` WHERE `ObjectName` LIKE '%$inputSearch%' OR `District` LIKE '%$inputSearch%'";
     // Отправляем SQL запрос
     $result = $connect -> query($sql);

    function doesItExist(array $arr) {
        // Создаём новый массив
        $data = array(
            'ObjectName' => $arr['ObjectName'] != false ? $arr['ObjectName'] : 'Нет данных'
        );
        return $data; // Возвращаем этот массив
    }
        
        
    function countParks($result) { 
        // Проверка на то, что строк больше нуля
        if ($result -> num_rows > 0) {
            // Цикл для вывода данных
            while ($row = $result -> fetch_assoc()) {
                // Получаем массив с строками которые нужно выводить
                $arr = doesItExist($row);
                // Вывод данных
                echo "Название парка: ". $row['ObjectName'] ."<br>
                    Номер площадки: ". $row['NameWinter'] ."<br>
                    Район: ". $row['District'] ."<br>
                    Адрес: ". $row['Address'] ."<br>
                    Тип покрытия: ". $row['SurfaceTypeWinter'] ."<hr>";
            }
        // Если данных нет
        } 
        else {
            echo "Такой парк не найден";
        }
    }
?>

<div class="res">
    <?php
        countParks($result);
    ?>
</div>



<?php
    require "blocks/footer.php";
?>
