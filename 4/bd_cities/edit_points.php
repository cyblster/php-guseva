<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<html>
<head
<title> Редактирование данных </title>
</head>
<body>
<?php
 $conn = mysqli_connect("eu-cdbr-west-02.cleardb.net","babfe8b736370f","6e610c35", "heroku_31e74ecdd4c17a0") or die ("Невозможно подключиться к серверу");
 mysqli_query($conn, 'SET NAMES cp1251');
 $rows=mysqli_query($conn, "SELECT * FROM points WHERE id=".$_GET['id']);
 while ($st = mysqli_fetch_array($rows)) {
 $id_shop=$st["id_shop"];
 $id_city=$st["id_city"];
 $volume = $st['volume'];
 $balance = $st['balance'];
 $fio = $st['fio'];
 $address = $st['address'];
 }
print "<form action='save_edit_points.php' metod='get'>";
  
print "<br>id Сети магазинов: <select name='id_shop'>";
$result=mysqli_query($conn, "SELECT * FROM shops");
foreach($result as $row) {
  if($row["id"] == $id_shops) echo "<option value='".$row["id"]."' selected>".$row["name"]."</option>";
  else echo "<option value='".$row["id"]."'>".$row["name"]."</option>";
  }
echo "</select>";

print "<br>id Населенного пункта: <select name='id_city'>";
$result=mysqli_query($conn, "SELECT * FROM cities");
foreach($result as $row) {
  if($row["id"] == $id_city) echo "<option value='".$row["id"]."' selected>".$row["name"]."</option>";
  else echo "<option value='".$row["id"]."'>".$row["name"]."</option>";
  }
echo "</select>";

print "<br>Объем продаж, руб.: <input name='volume' size='20' type='text'
value='".$volume."'>";
print "<br>Торговый баланс, руб.: <input name='balance' size='20' type='text'
value='".$balance."'>";
print "<br>ФИО директора: <input name='fio' size='20' type='text'
value='".$fio."'>";
print "<br>Адрес: <input name='address' size='20' type='text'
value='".$address."'>";
print "<input type='hidden' name='id' value='".$_GET['id']."'>";
print "<input type='submit' name='' value='Сохранить'>";
print "</form>";
print "<p><a href=\"index.php\"> Вернуться </a>";
?>
</body>
</html>