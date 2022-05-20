<link rel="stylesheet" type="text/css" href="parts/style.css">
<?php
require_once ($_SERVER['DOCUMENT_ROOT'].'/parts/header.php');
echo '<a href="parts/2strat.php">На страницу с конечным списком участников</a>';
?>
<a1><br><br>Ниже представлена таблица участников Олимпиад c сортировкой по именам!</a1><br>
<a1>OLYMP NUMBER:<br> 1 - Олимпиада по Информатике;<br> 2 - Олимпиада по Математике;<br> 3 - Олимпиада по Химии;</a1>
<?php
require_once ($_SERVER['DOCUMENT_ROOT'].'/DB/DBclass.php');

$CDateBase= new DBclass();
$data = $CDateBase->selectAll('lab_table', null, 'name');
?>
    <table>
        <tr>
            <th><a href="">NAME</a></th>
            <th><a href="parts/sortAge.php">AGE</a></th>
            <th><a href="parts/sortAdress.php">ADRESS</a></th>
            <th>OLYMP NUMBER</th>
        </tr>
        <?php foreach ($data as $row){ ?>
            <tr>
                <?php foreach ($row as $key=>$col){
                    if ($key <> 'id') {?>
                        <td><?php echo $col; ?></td>
                    <?php }
                } ?>
                <td><a href="parts/delete.php?id=<?= $row['id'] ?>"> Delete</a></td>
            </tr>
        <?php } ?>

    </table>
<h3>Добавить нового пользователя!</h3>
<form action="parts/create.php" method="post">
    <p>Имя</p>
    <input type="text" name="name">
    <p>Возраст</p>
    <input type="number" name="age">
    <p>Адрес</p>
    <textarea name="adress"></textarea><br><br>
    <p>Номер Олимпиады</p>
    <input type="number" name="id_olymp"><br><br>
    <button type="submit">Добавить!</button>
</form>
<?php
require_once ($_SERVER['DOCUMENT_ROOT'].'/parts/footer.php');
?>

