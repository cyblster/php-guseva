<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<h1> Гусева Д. А. Вариант №9(1)</h1>

<?php
  $N = rand(1, 100);

  echo "Делители числа " . $N . ":<br>";

  for($i = 1; $i < sqrt($N); $i++)
    if($N % $i == 0)
      echo $i . "<br>" . $N / $i . "<br>";
?>

<br><br><a href='.'>Назад</a><br>