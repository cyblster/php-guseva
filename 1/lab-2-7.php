<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<h1> ������ �. �. </h1>

<?php
$a=rand(-5,0);
$b=rand(0,5);
print ("<p> ����� �� ������� [".$a.",".$b."]: <br>");
do {
echo($a . "<br>");
$a=++$a; }
while ($a<=$b);
?>

<br><br><a href='.'>�����</a><br>