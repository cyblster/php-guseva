<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<HTML>
<h1>������ �. �.</h1>

<BODY>
<TABLE border=1>
<?php
 $m = rand(1, 10);
 $n = rand(1, 10);
 $min = 0;

 echo "������� A �������� " . $m . "x" . $n;
 for ($i = 0; $i < $m; $i++) {
  echo "<tr>";
  for ($j = 0; $j < $n; $j++) {
   echo "<td align=center>";
   $temp[] = rand(-5, 20);
   if($temp[$j] < $min) $min = $temp[$j];
   
   echo $temp[$j] . "</td>";
  }
  echo ("</tr>");
  $arr[] = $temp;
  unset($temp);
 }
?>
</TABLE>
<br>

<?php
if($min < 0) echo "���������� ������������� ����� � ������� = " . $min;
?>

<br><br><a href='.'>�����</a><br>
</BODY>
</HTML>