<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<h1>������ �. �.</h1>

<?php
  $n = rand(3, 5);

  $arr1 = array();
  $arr2 = array();

  $count = 0;

  for($i = 0; $i < $n; $i++) {
    $arr1[] = rand(1, 2);
    $arr2[] = rand(1, 1);
    
    if($arr1[$i] == $arr2[$i]) $count++;
  }
  
  echo "������ 1: ";
  for($i = 0; $i < $n; $i++) echo $arr1[$i] . " ";
  echo "<br>";

  echo "������ 2: ";
  for($i = 0; $i < $n; $i++) echo $arr2[$i] . " ";
  echo "<br>";

  if($count == $n) echo "��";
?>

<br><br><a href='.'>�����</a><br>