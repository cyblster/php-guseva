<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<h1> Гусева Д. А. </h1>

<?php
	$NUM_E=2.71828;
	echo 'Число е = ' . $NUM_E . '<br>';
	$num_el=$NUM_E;
	echo '$num_el = ' . $num_el . ' - ' . gettype($num_el) . '<br>';
	settype($num_el, 'string');
	echo '$num_el = ' . $num_el . ' - ' . gettype($num_el) . '<br>';
	settype($num_el, 'int');
	echo '$num_el = ' . $num_el . ' - ' . gettype($num_el) . '<br>';
	settype($num_el, 'bool');
	echo '$num_el = ' . $num_el . ' - ' . gettype($num_el) . '<br>';
?>

<br><br><a href='.'>Назад</a><br>