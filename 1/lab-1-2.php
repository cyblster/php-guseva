<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<h1> Гусева Д.А. </h1>

<p> Арифметические операции:
<p>
<?php
	$x=rand(1, 10);
	$y=rand(1, 10);
	echo($x . '+' . $y . '=' . ($x + $y) . '<br>');
	echo($x . '-' . $y . '=' . ($x - $y) . '<br>');
	echo($x . '*' . $y . '=' . ($x * $y) . '<br>');
	echo($x . '/' . $y . '=' . ($x / $y) . '<br>');
?>

<br><br><a href='.'>Назад</a><br>