<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<h1>������ �. �.</h1>

<?php
 $len = rand(3, 20);
 for ($i = 0; $i < $len; $i++) {
  $arr[] = rand(10, 99);
 }

 echo "������ �� " . $len . " ���������, ����������� ���������� �������:<br>";

 echo "4) ";
 sort($arr);
 for ($i = 0; $i < count($arr); $i++) {
  echo $arr[$i] . " ";
 }
 echo "<br>";
 
 echo "5) ";
 $arr = array_reverse($arr);
 for ($i = 0; $i < count($arr); $i++) {
  echo $arr[$i] . " ";
 }
 echo "<br>";
 
 echo "6) ";
 array_pop($arr);
 for ($i = 0; $i < count($arr); $i++) {
  echo $arr[$i] . " ";
 }
 echo "<br>";
 
 echo "7) ";
 $s = 0;
 for ($i = 0; $i < count($arr); $i++) {
  $s += $arr[$i];
 }
 echo "���������� ���������: " . count($arr) . "; �����: " . $s . "<br>";

 echo "8) ������� ��������������: " . $s / count($arr) . "<br>";
 
 echo "9) ������� � ������� ����� 50: ";
 if (in_array(50, $arr)) {
  echo "��<br>";
 }
 else {
  echo "���<br>";
 }

 echo "10) ";
 $arr = array_unique($arr);
 for ($i = 0; $i < count($arr); $i++) {
  echo $arr[$i] . " ";
 }
 echo "<br>";
 
 
?>

<br><br><a href='.'>�����</a><br>