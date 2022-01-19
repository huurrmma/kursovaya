<?php
$connect = mysqli_connect("std-mysql", "std_1606_kursovayarabota", "12345678", "std_1606_kursovayarabota");

if(mysqli_connect_errno()){
    echo 'Ошибка в подкючении к базе данных ('.mysqli_connect_errno().'): '. mysqli_connect_error();
    exit();
}


