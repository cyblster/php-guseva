<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<h1> Гусева Д. А. Вариант №9</h1>

<?php
	echo '(25/c - d + 2) / (d + a^2 - 1)<br>';

	$a = rand(-20, 20);
	$c = rand(-20, 20);
	$d = rand(-20, 20);

	echo '(25/' . $c . ' - ' . $d . ' + 2) / ';
	echo '(' . $d . ' + ' . $a*$a . ' - 1)';
	echo '= ' . (25/$c - $d + 2) / ($d + $a*$a / 2);

?>

<br><br><a href='.'>Назад</a><br>