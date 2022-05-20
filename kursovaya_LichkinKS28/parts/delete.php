<?php
require_once '../parts/connect.php';

$id = $_GET['id'];

mysqli_query($connect,"DELETE FROM `lab_table` WHERE `lab_table`.`id` = '$id'");

header('Location: /');
