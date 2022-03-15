<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<html>
<body>
<?php
 $conn = mysqli_connect("eu-cdbr-west-02.cleardb.net","babfe8b736370f","6e610c35", "heroku_31e74ecdd4c17a0") or die ("Невозможно подключиться к серверу");
 mysqli_query($conn, "SET NAMES cp1251");
?>
<h2>Населенные пункты:</h2>
<table border="1">
<tr>
 <th> id </th>
 <th> Название </th> <th> Тип </th>
 <th> Площадь, кв. км. </th> <th> Численность, тыс. </th> <th> Регион </th>
 <th> Редактировать </th> <th> Уничтожить </th> </tr>
<?php
$result=mysqli_query($conn, "SELECT * FROM cities"); // запрос на выборку сведений о пользователях
while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
 echo "<tr>";
 echo "<td>" . $row["id"] . "</td>";
 echo "<td>" . $row["name"] . "</td>";
 echo "<td>" . $row["type"] . "</td>";
 echo "<td>" . $row["area"] . "</td>";
 echo "<td>" . $row["population"] . "</td>";
 echo "<td>" . $row["district"] . "</td>";
 echo "<td><a href='edit_cities.php?id=" . $row["id"]
. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
 echo "<td><a href='delete_cities.php?id=" . $row["id"]
. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
 echo "</tr>";
}
echo "</table>";
$num_rows = mysqli_num_rows($result); // число записей в таблице БД
print("<P>Всего записей: $num_rows </p>");
?>
<a href="new_cities.php"> Добавить запись </a><br><br>

<h2>Сети магазинов:</h2>
<table border="1">
<tr>
 <th> id </th>
 <th> Название </th> <th> ИНН </th>
 <th> Редактировать </th> <th> Уничтожить </th> </tr>
<?php
$result=mysqli_query($conn, "SELECT * FROM shops"); // запрос на выборку сведений о пользователях
while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
 echo "<tr>";
 echo "<td>" . $row["id"] . "</td>";
 echo "<td>" . $row["name"] . "</td>";
 echo "<td>" . $row["inn"] . "</td>";
 echo "<td><a href='edit_shops.php?id=" . $row["id"]
. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
 echo "<td><a href='delete_shops.php?id=" . $row["id"]
. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
 echo "</tr>";
}
echo "</table>";
$num_rows = mysqli_num_rows($result); // число записей в таблице БД
print("<P>Всего записей: $num_rows </p>");
?>
<a href="new_shops.php"> Добавить запись </a><br><br>

<h2>Точки продаж:</h2>
<table border="1">
<tr>
 <th> id </th>
 <th> id Сети магазинов </th> <th> id Населенного пункта </th>
 <th> Объем продаж, руб. </th> <th> Торговый баланс, руб. </th>
 <th> ФИО директора </th> <th> Адрес </th>
 <th> Редактировать </th> <th> Уничтожить </th> </tr>
<?php
$result=mysqli_query($conn, "SELECT * FROM points"); // запрос на выборку сведений о пользователях
while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
 echo "<tr>";
 echo "<td>" . $row["id"] . "</td>";
 echo "<td>" . $row["id_shop"] . "</td>";
 echo "<td>" . $row["id_city"] . "</td>";
 echo "<td>" . $row["volume"] . "</td>";
 echo "<td>" . $row["balance"] . "</td>";
 echo "<td>" . $row["fio"] . "</td>";
 echo "<td>" . $row["address"] . "</td>";
 echo "<td><a href='edit_points.php?id=" . $row["id"]
. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
 echo "<td><a href='delete_points.php?id=" . $row["id"]
. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
 echo "</tr>";
}
echo "</table>";
$num_rows = mysqli_num_rows($result); // число записей в таблице БД
print("<P>Всего записей: $num_rows </p>");
?>
<a href="new_points.php"> Добавить запись </a><br><br>


<a href="gen_pdf.php"> Сохранить PDF </a><br>
<a href="gen_xls.php"> Сохранить Excel </a><br>

<br><a href='..'>Назад</a><br>

</body> </html>
