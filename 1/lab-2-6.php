<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<h1> Гусева Д. А. </h1>

<?php
$a=rand(1,10); $b=rand(10,20);
print ("<p> Числа из отрезка [".$a.",".$b."]: <br>");
while ($a<=$b) { echo $a . "<br>";
 $a=++$a; }
?>

<br><br><a href='.'>Назад</a><br>