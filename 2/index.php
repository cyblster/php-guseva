<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<h1> ������ �.�. </h1>

<p> ���� � �����:
<p>
<?php
        date_default_timezone_set("Asia/Yekaterinburg");
	$d=date("d.m.Y H:i");
	
	echo($d);
?><br><br>

<a href='./lab-2-1.php'>������� 2-1</a><br>
<a href='./lab-2-2.php'>������� 2-2</a><br>
<a href='./lab-2-3.php'>������� 2-3</a><br>
<a href='./lab-2-4.php'>������� 2-4</a><br>
<a href='./lab-2-5.php'>������� 2-5</a><br>
<a href='./lab-2-6.php'>������� 2-6</a><br><br>

<a href='..'>�����</a><br>