<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<HTML><BODY>
<h1>������ �. �.</h1>
<FORM method="post" action="<?php print $_SERVER["PHP_SELF"] ?>"> 
�����: <INPUT type="text" name="l" size="10"><br>
<INPUT type="submit" name="obr" value="�����">
</FORM>
</BODY></HTML>
<?php
 if (isset($_POST["obr"])) {
  $flag = 0;
  if ($_POST["l"] == "php_guseva") {
   echo "�����������, ������ ����� ���������";
  }
  elseif ($_POST["l"] == "php_ivanoff") {
   echo "�����������, ������ ���� ��������";
  }
  elseif ($_POST["l"] == "php_antonov") {
   echo "�����������, ������� ����� ���������";
  }
  elseif ($_POST["l"] == "php_andrew") {
   echo "�����������, ������� ������ ���������";
  }
  else {
   echo "�� �� ������������������ ������������!";
  }
 }
?>
<br><br><a href='.'>�����</a><br>