<?php

require_once '../parts/connect.php';

$name = $_POST['name'];
$age = $_POST['age'];
$adress = $_POST['adress'];
$id_olymp = $_POST['id_olymp'];

mysqli_query($connect, "INSERT INTO `lab_table` (`id`, `name`, `age`, `adress`, `id_olymp`) VALUES ( NULL , '$name', '$age', '$adress', '$id_olymp') ");

header('Location: /');

