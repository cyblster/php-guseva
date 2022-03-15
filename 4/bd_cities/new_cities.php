<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<html>
<head> <title> Добавление новой записи </title> </head>
<body>
<H2>Добавление новой записи:</H2>
<form action="save_new_cities.php" metod="get">
<br>Название: <input name="name" size="20" type="text">
<br>Тип: <input name="type" size="20" type="text">
<br>Площадь, кв. км.: <input name="area" size="10" type="text">
<br>Численность: <input name="population" size="20" type="text">
<br>Регион: <input name="district" size="10" type="text">
<p><input name="add" type="submit" value="Добавить">
<input name="b2" type="reset" value="Очистить"></p>
</form>
<p><a href="index.php"> Вернуться </a>
</body>
</html>