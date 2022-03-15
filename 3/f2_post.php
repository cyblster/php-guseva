<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<h1>Гусева Д. А.</h1>

<?php
 echo ("Здравствуйте, " . $_POST["userName_post"]);
 echo ("<hr>");
 echo ("Значение скрытого поля hideField_post равно " .
$_POST["hideField_post"]);
?>
<br><br><a href='.'>Назад</a><br>