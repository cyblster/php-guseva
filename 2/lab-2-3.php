<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<h1>������ �. �.</h1>

<?php
 echo "1) ������������� ������<br>";
 $cust = array(
  "cnum" => 2001,
  "cname" => "Hoffman",
  "city" => "London",
  "snum" => 1001,
 );
 foreach($cust as $key => $value) {
  echo $key . " = " . $value . "<br>";
 }
 echo "<br>";
 
 echo "2) ���������� ������ ��������<br>";
 $cust["raiting"] = 100;
 foreach($cust as $key => $value) {
  echo $key . " = " . $value . "<br>";
 }
 echo "<br>";
 
 echo "3) ���������� �� ���������<br>";
 asort($cust);
 foreach($cust as $key => $value) {
  echo $key . " = " . $value . "<br>";
 }
 echo "<br>";
 
 echo "4) ���������� �� ������<br>";
 ksort($cust);
 foreach($cust as $key => $value) {
  echo $key . " = " . $value . "<br>";
 }
 echo "<br>";

 echo "4) ��������� �������� Sort()<br>";
 sort($cust);
 foreach($cust as $key => $value) {
  echo $key . " = " . $value . "<br>";
 }
 echo "<br>";
?>

<br><br><a href='.'>�����</a><br>