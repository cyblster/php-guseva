<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<HTML>
<TITLE> ������� ��������� </TITLE>
<BODY>
<h1> ������ �. �. </h1>
<TABLE border=1>
<?php
for ($i=1; $i<=10; $i++) { // ��������� ������ ����
 echo ("<tr>"); // ������ ������ �������
 for ($k=1; $k<=10; $k++) { // ��������� ������ ����
 echo ("<td align=center>"); // ��������� ������ �������
 $p=$i*$k; // ������� ������������ ���� ����� �...
 echo ($p); // ������� ���,
 echo ("</td>"); // � ����� ��������� ������
 }
 echo ("</tr>"); // ����� ������ �������
}
?>
</TABLE>

<br><br><a href='.'>�����</a><br>

</BODY>
</HTML>