<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<HTML><BODY>
<h1>������ �. �.</h1>
<FORM method="post" action="<?php print $_SERVER["PHP_SELF"] ?>"> 
�������� �� 1 �� <INPUT type="text" name="d" size="3"><br>
����� ����� �������� �� ���������? <SELECT NAME="z" SIZE="1">
 <OPTION VALUE="1" SELECTED> ������
 <OPTION VALUE="2"> ��������
 <OPTION VALUE="3"> �������
 <OPTION VALUE="4"> ���������
 </SELECT><br>
<INPUT type="submit" name="obr" value="������!">
</FORM>
</BODY> </HTML>
<?php
 if (isset($_POST["obr"])) {
  switch ($_POST["z"]) {
   case 1:
   for ($i = 1; $i <= $_POST["d"]; $i++) {
    if ($i % 2 == 0) echo $i . " ";
   }
   break;
   case 2:
   for ($i = 1; $i <= $_POST["d"]; $i++) {
    if ($i % 2 == 1) echo $i . " ";
   }
   break;
   case 3:
   for ($i = 2; $i <= $_POST["d"]; $i++) {
    $del = 2;
    while ($i % $del != 0) {
     $del++;
    }
    if ($del == $i) echo $i . " ";
   }
   break;
   case 4:
   for ($i = 2; $i <= $_POST["d"]; $i++) {
    $del = 2;
    while ($i % $del != 0) {
     $del++;
    }
    if ($del != $i) echo $i . " ";
   }
   break;
  }
 }
?>
<br><br><a href='.'>�����</a><br>