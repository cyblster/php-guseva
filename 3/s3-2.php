<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<HTML><BODY>
<h1>������ �. �.</h1>
<FORM method="post" action="<?php print $_SERVER["PHP_SELF"] ?>">
<INPUT type="text" name="d1" size="3"> 
<INPUT type="text" name="d2" size="3"><br>
��������: <SELECT NAME="z" SIZE="1">
 <OPTION VALUE="1" SELECTED> �������
 <OPTION VALUE="2"> �������
 <OPTION VALUE="3"> ��������
 <OPTION VALUE="4"> ���������
 </SELECT><br>
<INPUT type="submit" name="obr" value="������!">
</FORM>
</BODY> </HTML>
<?php
 if (isset($_POST["obr"])) {
  $d1 = $_POST["d1"];
  $d2 = $_POST["d2"];
  switch ($_POST["z"]) {
   case 1:
   $s = $d1 + $d2;
   break;
   case 2:
   $s = $d1 - $d2;
   break;
   case 3:
   $s = $d1 * $d2;
   break;
   case 4:
   $s = $d1 / $d2;
   break;
  }
  echo "�����: " . $s;
 }
?>
<br><br><a href='.'>�����</a><br>