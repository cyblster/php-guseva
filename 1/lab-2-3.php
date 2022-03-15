<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<h1> Гусева Д. А. </h1>

<?php
$а = "А";
switch ($а) {
case 'А' :
 echo 'Переменная имеет значение "А"';
case 'В':
 echo 'Переменная имеет значение "В"'; break;
default:
 echo 'Ответ не найден ' ;
}
?>

<br><br><a href='.'>Назад</a><br>