<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<HTML>
<HEAD> <TITLE> ������ ����� </TITLE> </HEAD>
<BODY>
<h1>������ �. �.</h1>
<FORM method="post" action="<?php print $_SERVER["PHP_SELF"] ?>">
 ������� ����� �� 1 �� 10:
 <INPUT type="text" name="a" size="3">
 <INPUT type="hidden" name="h" value="5"> // ����������� �����
 <P> <INPUT type="submit" name="obr" value="���������">
</FORM>
<?php
if (isset($_POST["obr"])) {
if ($_POST["a"]==$_POST["h"]) { echo($_POST["a"]." - �������!");
 } else {
 if ($_POST["a"]>$_POST["h"]) {
 echo($_POST["a"]." - �����...");
 } else { echo($_POST["a"]." - ����..."); }
 } }
?>
<br><br><a href='.'>�����</a><br>

</BODY> </HTML>