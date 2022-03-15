<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<?php
session_start();
if(!$_SESSION["rule"]) header("Location: .");
?>

<html>
<head
<title> Редактирование данных </title>
</head>
<body>
<?php
 $conn = mysqli_connect("eu-cdbr-west-02.cleardb.net","babfe8b736370f","6e610c35", "heroku_31e74ecdd4c17a0") or die ("Невозможно подключиться к серверу");
 mysqli_query($conn, 'SET NAMES cp1251');
 $rows=mysqli_query($conn, "SELECT * FROM cities WHERE id='".$_GET['id']."'");
 while ($st = mysqli_fetch_array($rows)) {
 $id=$st['id'];
 $name=$st['name'];
 $type = $st['type'];
 $type = $st['type'];
 $area = $st['area'];
 $population = $st['population'];
 $district=$st['district'];
 }
print "<form action='save_edit_cities.php' metod='get'>";
print "Название: <input name='name' size='20' type='text'
value='".$name."'>";
print "<br>Тип: <input name='type' size='20' type='text'
value='".$type."'>";
print "<br>Площадь, кв. км.: <input name='area' size='10' type='text'
value='".$area."'>";
print "<br>Численность, тыс.: <input name='population' size='20' type='text'
value='".$population."'>";
print "<br>Регион: <input name='district' size='10' type='text'
value='".$district."'>";
print "<input type='hidden' name='id' value='".$id."'> <br>";
print "<input type='submit' name='' value='Сохранить'>";
print "</form>";
print "<p><a href=\"index.php\"> Вернуться </a>";
?>
</body>
</html>