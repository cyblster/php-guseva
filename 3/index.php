<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<h1> ������ �.�. </h1>

<p> ���� � �����:
<p>
<?php
        date_default_timezone_set("Asia/Yekaterinburg");
	$d=date("d.m.Y H:i");
	
	echo($d);
?><br><br>

<a href='./f1.html'>���������� 3-1</a><br>
<a href='./f2.html'>���������� 3-2</a><br>
<a href='./f3.html'>���������� 3-3</a><br>
<a href='./f4.html'>���������� 3-4</a><br>
<a href='./f5.html'>���������� 3-5</a><br>
<a href='./f6.html'>���������� 3-6</a><br>
<a href='./f7.php'>���������� 3-7</a><br>
<a href='./s3-1.html'>������ 3-1</a><br>
<a href='./s3-2.php'>������ 3-2</a><br>
<a href='./s3-3.php'>������ 3-3</a><br>
<a href='./s3-4.php'>������ 3-4</a><br>
<a href='./s3-5.php'>������ 3-5</a><br>
<a href='./s3-6.php'>������ 3-6</a><br><br>

<a href='..'>�����</a><br>