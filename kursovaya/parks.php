<?php
    $title = "Все площадки";
    require "blocks/header.php";
?>

<div class ="par">
    <?php
    $connect = mysqli_connect("std-mysql", "std_1606_kursovayarabota", "12345678", "std_1606_kursovayarabota");
    if($connect->connect_error){
        die("Ошибка: " . $connect->connect_error);
    }

    $sql = "SELECT ObjectName, NameWinter, District, Address, Email, HelpPhone FROM Parks;";
    if($result = $connect->query($sql)){
        $rowsCount = $result->num_rows; // количество полученных строк
        echo "<p>Общее количество площадок: $rowsCount</p>";
        echo "<table><tr><th>Название парка</th><th>Номер площадки</th><th>Район</th><th>Адрес</th><th>Сайт</th><th>Телефон</th></tr>";
        foreach($result as $row){
            echo "<tr>";
                echo "<td>" . $row["ObjectName"] . "</td>";
                echo "<td>" . $row["NameWinter"] . "</td>";
                echo "<td>" . $row["District"] . "</td>";
                echo "<td>" . $row["Address"] . "</td>";
                echo "<td>" . $row["Email"] . "</td>";
                echo "<td>" . $row["HelpPhone"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        $result->free();
    } else{
        echo "Ошибка: " . $connect->error;
    }
    $connect->close();
    ?>
</div>
<?php
    require "blocks/footer.php";
?>