<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<HTML><BODY>
<h1>Гусева Д. А.</h1>
<FORM method="post" action="<?php print $_SERVER["PHP_SELF"] ?>"> 
Логин: <INPUT type="text" name="l" size="10"><br>
<INPUT type="submit" name="obr" value="Войти">
</FORM>
</BODY></HTML>
<?php
 if (isset($_POST["obr"])) {
  $flag = 0;
  if ($_POST["l"] == "php_guseva") {
   echo "Здравстуйте, Гусева Диана Артемовна";
  }
  elseif ($_POST["l"] == "php_ivanoff") {
   echo "Здравстуйте, Иванов Иван Иванович";
  }
  elseif ($_POST["l"] == "php_antonov") {
   echo "Здравстуйте, Антонов Антон Антонович";
  }
  elseif ($_POST["l"] == "php_andrew") {
   echo "Здравстуйте, Андреев Андрей Андреевич";
  }
  else {
   echo "Вы не зарегистрированный пользователь!";
  }
 }
?>
<br><br><a href='.'>Назад</a><br>