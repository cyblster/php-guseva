<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<h1>������ �. �.</h1>

<?php
if (isset($_POST["obr"])) {
 if($_POST["d1"] > $_POST["d2"]) {
  echo $_POST["d1"];
  }
 elseif($_POST["d1"] < $_POST["d2"]) {
  echo $_POST["d2"];
  }
 else {
  echo "��� ����� �����";
  }
 }
?>
<br><br><a href='.'>�����</a><br>