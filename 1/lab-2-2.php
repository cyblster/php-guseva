<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<h1> ������ �. �. </h1>

<p> ���������� �����:
<p>
<?php
$x=rand(1,10);
$y=rand(1,10);
print ('$x =' . $x . "<br>");
print ('$y =' . $y . "<br>");
if ($x>$y) echo("���������� =" . $x);
elseif ($x<$y) echo ("���������� =" . $y);
else print ("����������� ���");
?>

<br><br><a href='.'>�����</a><br>