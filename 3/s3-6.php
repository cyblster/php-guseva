<h1>Гусева Д. А.</h1><br>

<?php
  header('Content-Type: text/html; charset=windows-1251');

  echo "<form method='post' action='".$_SERVER["PHP_SELF"]."'>";
  echo "<h2>9. Подсчитать число предложений в тексте. Предложение оканчивается символами «.», «!», «?», «...».</h2>";
  echo "Введите текст:<br><textarea type='text' name='text9' cols='30' rows='5'></textarea><br>";
  echo "<input type='submit' name='submit9' value='Обработать'></form>";

  if(isset($_POST["submit9"])) {
    $sentences = 0;

    preg_match_all("/[а-яА-Яa-zA-Z0-9]\./", $_POST["text9"], $matches);
    $sentences += count($matches[0]);

    preg_match_all("/[а-яА-Яa-zA-Z0-9]\?/", $_POST["text9"], $matches);
    $sentences += count($matches[0]);

    preg_match_all("/[а-яА-Яa-zA-Z0-9]\!/", $_POST["text9"], $matches);
    $sentences += count($matches[0]);

    echo "Число предложений в тексте: ".$sentences;
  }
  echo "<br><br><br>";

  echo "<form method='post' action='".$_SERVER["PHP_SELF"]."'>";
  echo "<h2>10. Заменить в данном тексте все малые латинские буквы на заглавные.</h2>";
  echo "Введите текст:<br><textarea type='text' name='text10' cols='30' rows='5'></textarea><br>";
  echo "<input type='submit' name='submit10' value='Обработать'></form>";

  if(isset($_POST["submit10"])) {
    $eng = str_split("qwertyuiopasdfghjklzxcvbnm");
    $text = str_split($_POST["text10"]);

    for($i = 0; $i < count($text); $i++) {
      if(in_array($text[$i], $eng))
        echo mb_convert_case($text[$i], MB_CASE_UPPER, "windows-1251");
      else echo $text[$i];
    }
  }
  echo "<br><br><br>";

  echo "<form method='post' action='".$_SERVER["PHP_SELF"]."'>";
  echo "<h2>11. Пользователем задается произвольный текст и два символа. Перепечатать заданный текст, удалив из него все вхождения первого символа, непосредственно за которыми идет второй символ.</h2>";
  echo "Введите текст:<br><textarea type='text' name='text11' cols='30' rows='5'></textarea><br>";
  echo "Первый символ: <input type='text' name='before' size='5'><br>";
  echo "Второй символ: <input type='text' name='after' size='5'><br>";
  echo "<input type='submit' name='submit11' value='Обработать'></form>";
  
  if(isset($_POST["submit11"])) {
    $text = str_split($_POST["text11"]);
    $before = strtolower($_POST["before"]);
    $after = strtolower($_POST["after"]);

    for($i = 0; $i < count($text) - 1; $i++)
      if(strtolower($text[$i]) != $before || strtolower($text[$i + 1]) != $after)
        echo $text[$i];
    echo $text[count($text) - 1];
  }
?>