<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<h1>Гусева Д. А.</h1>

<?php
if ($_POST["d"]=="plus") {
 $c=$_POST["a"]+$_POST["b"];
 if (isset($_POST["f"])) {
 echo ($_POST['a']."+".$_POST['b']."=".$c);
 } else { echo ("Результат = ".$c); }
} else {
 $c=$_POST["a"]*$_POST["b"];
 if (isset($_POST["f"])) {
 echo ("Результат = ".$c);
 } else {
 echo ($_POST['a']."*".$_POST['b']." = ".$c); }}
echo ("<BR> <A href='f4.html'> Вернуться назад </A>");
?>
<br><br><a href='.'>Назад</a><br>