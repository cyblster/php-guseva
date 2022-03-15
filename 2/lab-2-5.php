<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<h1>Гусева Д. А.</h1>

<?php
 function func($u, $t) {
  if ($u > 0 && $t > 0) {
   return $u*$u + $t;
  }
  elseif ($u <= 0 && $t <= 0) {
   return $u + ($t*$t) / 3;
  }
  elseif ($u > 0 && $t <= 0) {
   return 2*$u + $t;
  }
  else {
   return $u*$u - $t;
  }
 }

 $a = rand(-10, 10);
 $b = rand(-10, 10);

 echo "a = " . $a . "<br>" . "b = " . $b . "<br>";
 echo "z = ";
 echo func($a, $b - 1) + func(($a*$a) / 3, $b*$b*$b) - func(($a - 1) / $b, $b * $a - 4);
?>

<br><br><a href='..'>Назад</a><br>