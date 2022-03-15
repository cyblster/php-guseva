<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<h1> Гусева Д. А. </h1>

<p> Наибольшее число:
<p>
<?php
$x=rand(1,10);
$y=rand(1,10);
print ('$x =' . $x . "<br>");
print ('$y =' . $y . "<br>");
if ($x>$y) echo("Наибольшее =" . $x);
elseif ($x<$y) echo ("Наибольшее =" . $y);
else print ("Наибольшего нет");
?>

<br><br><a href='.'>Назад</a><br>