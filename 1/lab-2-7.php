<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<h1> Гусева Д. А. </h1>

<?php
$a=rand(-5,0);
$b=rand(0,5);
print ("<p> Числа из отрезка [".$a.",".$b."]: <br>");
do {
echo($a . "<br>");
$a=++$a; }
while ($a<=$b);
?>

<br><br><a href='.'>Назад</a><br>