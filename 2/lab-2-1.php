<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<h1>������ �. �.</h1>

<?php
 echo "1) \$treug[] = ";
 for ($i = 1; $i < 10; $i++) {
  $treug[] = $i * ($i + 1) / 2;
  echo $treug[$i - 1] . " ";
 }
 echo "<br>";

 echo "2) \$kvd[] = ";
 for ($i = 1; $i < 10; $i++) {
  $kvd[] = $i * $i;
  echo $kvd[$i - 1] . " ";
 }
 echo "<br>";

 echo "3) \$rez[] = ";
 $rez = array_merge($treug, $kvd);
 for ($i = 0; $i < count($rez); $i++) {
  echo $rez[$i] . " ";
 }
 echo "<br>";

 echo "4) \$rez[] (���������������) = ";
 sort($rez);
 for ($i = 0; $i < count($rez); $i++) {
  echo $rez[$i] . " ";
 }
 echo "<br>";
 
 echo "5) \$rez[] (��� \$rez[0]) = ";
 unset($rez[0]);
 $rez = array_values($rez);
 for ($i = 0; $i < count($rez); $i++) {
  echo $rez[$i] . " ";
 }
 echo "<br>";

 echo "6) \$rez1[] = ";
 $rez1 = array_unique($rez);
 $rez1 = array_values($rez1);
 for ($i = 0; $i < count($rez1); $i++) {
  echo $rez1[$i] . " ";
 }
 echo "<br>";
?>

<br><br><a href='.'>�����</a><br>