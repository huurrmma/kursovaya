<?php

// function get_parks($connect){
//     $sql = "SELECT ObjectName, NameWinter, District, Address, Email, WebSite, HelpPhone FROM Parks;";

//     $result = mysqli_query($connect, $sql);

//     $parks = mysqli_fetch_all($result, 1);

//     return $parks;

// }


function doesItExist(array $arr) {
    // Создаём новый массив
    $data = array(
        'name' => $arr['ObjectName'] != false ? $arr['ObjectName'] : 'Нет данных'
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
                  Адрес: ". $row['Address'] ."<br>;
        }
    // Если данных нет
    } else {
        echo "Такой парк не найден";
    }
}