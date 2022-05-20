<link rel="stylesheet" type="text/css" href="style.css">
<?php
require_once 'connect.php';
require_once($_SERVER['DOCUMENT_ROOT'] . '/parts/header.php');
echo ' <a href="../index.php">На главную</a>';
echo '<br><br>';
echo'<a1>Конечный список участников ниже!</a1>';
$tab2 = mysqli_query($connect,"SELECT lab_table.name,lab_table.age,lab_table.adress,lab_table2.olymp FROM `lab_table` LEFT JOIN `lab_table2` ON lab_table.id_olymp=lab_table2.id_olymp;");
$tab2 = mysqli_fetch_all($tab2);
?>
<table>
    <tr>
        <th>NAME</th>
        <th>AGE</th>
        <th>ADRESS</th>
        <th>OLYMP</th>
    </tr>
<?php
foreach ($tab2 as $tab2){
?>
    <tr>
        <td><?=$tab2[0]?></td>
        <td><?=$tab2[1]?></td>
        <td><?=$tab2[2]?></td>
        <td><?=$tab2[3]?></td>
    </tr>
    <?php
}
?>
</table>
<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/parts/footer.php');
?>

