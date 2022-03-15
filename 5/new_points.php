<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<?php
session_start();
if(!$_SESSION["rule"]) header("Location: .");
?>

<html>
<head> <title> Добавление новой записи </title> </head>
<body>
<?php
 $conn = mysqli_connect("eu-cdbr-west-02.cleardb.net","babfe8b736370f","6e610c35", "heroku_31e74ecdd4c17a0") or die ("Невозможно подключиться к серверу");
 mysqli_query($conn, "SET NAMES cp1251");
?>
<H2>Добавление новой записи:</H2>
<form action="save_new_points.php" metod="get">

<?php
print "<br>id Сети магазинов: <select name='id_shop'>";
$result=mysqli_query($conn, "SELECT * FROM shops");
echo "<option value='' selected hidden>...</option>";
foreach($result as $row) echo "<option value='".$row["id"]."'>".$row["name"]."</option>";
echo "</select>";
?>

<?php
print "<br>id Населенного пункта: <select name='id_city'>";
$result=mysqli_query($conn, "SELECT * FROM cities");
echo "<option value='' selected hidden>...</option>";
foreach($result as $row) echo "<option value='".$row["id"]."'>".$row["name"]."</option>";
echo "</select>";
?>

<br>Объем продаж, руб.: <input name="volume" size="20" type="text">
<br>Торговый баланс, руб.: <input name="balance" size="20" type="text">
<br>ФИО директора: <input name="fio" size="20" type="text">
<br>Адрес: <input name="address" size="20" type="text">
<p><input name="add" type="submit" value="Добавить">
<input name="b2" type="reset" value="Очистить"></p>
</form>
<p><a href="index.php"> Вернуться </a>
</body>
</html>