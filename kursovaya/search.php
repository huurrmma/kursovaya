<?php
// Получаем запрос
$inputSearch = $_REQUEST['search']; 
 
// Создаём SQL запрос
$sql = "SELECT ObjectName, NameWinter, District, Address, Email, WebSite, HelpPhone, SurfaceTypeWinter FROM `Parks` WHERE `ObjectName` = '$inputSearch';
 
// Отправляем SQL запрос
$result = $connect -> query($sql);