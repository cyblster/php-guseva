<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<h1>������ �. �.</h1>

<?php
if ($_POST["d"]=="plus") {
 $c=$_POST["a"]+$_POST["b"];
 echo ("����� ����� = $c");
} else {
 $c=$_POST["a"]*$_POST["b"];
 echo ("������������ ����� = $c");
 }
echo ("<BR> <A href='f3.html'> ��������� ����� </A>");
?>
<br><br><a href='.'>�����</a><br>