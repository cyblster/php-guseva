<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<h1> ������ �. �. </h1>

<?php
$dn=rand(1,7);
print ($dn ." - ����� ��� ������ <br>");
switch ($dn) {
case 1: print ("��� �����������"); break;
case 2: print ("��� �������"); break;
case 3: print ("��� �����"); break;
case 4: print ("��� �������"); break;
case 5: print ("��� �������"); break;
case 6: print ("��� �������"); break;
case 7: print ("��� �����������");
}
?>

<br><br><a href='.'>�����</a><br>