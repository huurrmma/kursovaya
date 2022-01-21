<?php
$connect = mysqli_connect("std-mysql", "std_1606_kursovayarabota", "12345678", "std_1606_kursovayarabota");

$result = mysqli_query($connect, "SELECT * FROM Users WHERE
    login='".$_POST["login"]."' AND
    password='".md5($_POST["password"])."'
");


//echo $_POST["login"];
//echo md5($_POST["password"]);

if(!$result || mysqli_num_rows($result) == 0){
	echo "Такой пользователь не существует.";
	exit;
}

session_start();
$_SESSION["user"] = mysqli_fetch_assoc($result);

header("Location: index.php");

?>