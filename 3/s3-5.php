<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<HTML><BODY>
<h1>������ �. �.</h1>
<h1>������ "��� ��������"</h1>
<FORM method="post" action="<?php print $_SERVER["PHP_SELF"] ?>"> 
<br><br>������� ���� ���<br><br><INPUT type="text" name="l" size="20"><br><br>

1. �������� �� ��, ��� � ������ ����� �������� ������� ��������?<br><br>
�� <INPUT type="radio" name="q1" value="1" checked>   ��� <INPUT type="radio" name="q1" value="2"><br><br>
2. ���������� �� ��� ������ ������������ �����������?<br><br>
�� <INPUT type="radio" name="q2" value="3" checked>   ��� <INPUT type="radio" name="q2" value="4"><br><br>
3. ������ �� ��, ��� ���� ������ ������� ���?<br><br>
�� <INPUT type="radio" name="q3" value="5" checked>   ��� <INPUT type="radio" name="q3" value="6"><br><br>
4. ��������� �� ���, ����� ���������� ������� ������ ��� ���������?<br><br>
�� <INPUT type="radio" name="q4" value="7" checked>   ��� <INPUT type="radio" name="q4" value="8"><br><br>
5. �������� �� �� ������� ������ ��� �����?<br><br>
�� <INPUT type="radio" name="q5" value="9" checked>   ��� <INPUT type="radio" name="q5" value="10"><br><br>
6. ����� �� �� ���������� ���������?<br><br>
�� <INPUT type="radio" name="q6" value="11" checked>   ��� <INPUT type="radio" name="q6" value="12"><br><br>
7. ����� �� �� ������� �������, � ������� ������ �� ����������?<br><br>
�� <INPUT type="radio" name="q7" value="13" checked>   ��� <INPUT type="radio" name="q7" value="14"><br><br>
8. ����������� �� �� ���������� ���� ����� ������, �����, ��� ��������?<br><br>
�� <INPUT type="radio" name="q8" value="15" checked>   ��� <INPUT type="radio" name="q8" value="16"><br><br>
9. ������� �� ��� ������������ �����������?<br><br>
�� <INPUT type="radio" name="q9" value="17" checked>   ��� <INPUT type="radio" name="q9" value="18"><br><br>
10. �������� �� �� ����� ����� 5 �����, �� �������� ������������?<br><br>
�� <INPUT type="radio" name="q10" value="19" checked>   ��� <INPUT type="radio" name="q10" value="20"><br><br>
11. ����� �� ��� �������� � ������ ����� � ����� �����������?<br><br>
�� <INPUT type="radio" name="q11" value="21" checked>   ��� <INPUT type="radio" name="q11" value="22"><br><br>
12. ����������� �� � ��� ������ �� ��������� � �������?<br><br>
�� <INPUT type="radio" name="q12" value="23" checked>   ��� <INPUT type="radio" name="q12" value="24"><br><br>
13. ������ �� �� � ������� ������������ ������������� ������?<br><br>
�� <INPUT type="radio" name="q13" value="25" checked>   ��� <INPUT type="radio" name="q13" value="26"><br><br>
14. �������� �� ��� �������� �����?<br><br>
�� <INPUT type="radio" name="q14" value="27" checked>   ��� <INPUT type="radio" name="q14" value="28"><br><br>
15. ���������� �� ��?<br><br>
�� <INPUT type="radio" name="q15" value="29" checked>   ��� <INPUT type="radio" name="q15" value="30"><br><br>
16. �������� �� ��, ��� ����� ������, �������� ��� ������� ������� ����?<br><br>
�� <INPUT type="radio" name="q16" value="31" checked>   ��� <INPUT type="radio" name="q16" value="32"><br><br>
17. ��������� �� ��� � ���� ���� � ������ ����������?<br><br>
�� <INPUT type="radio" name="q17" value="33" checked>   ��� <INPUT type="radio" name="q17" value="34"><br><br>
18. ���������� �� ��� ����������� ��������?<br><br>
�� <INPUT type="radio" name="q18" value="35" checked>   ��� <INPUT type="radio" name="q18" value="36"><br><br>
19. ��������� �� ��� ����������� ����� ����� � ���� ����� ������ ����?<br><br>
�� <INPUT type="radio" name="q19" value="37" checked>   ��� <INPUT type="radio" name="q19" value="38"><br><br>
20. ��������� �� ��� ������ ������������ �� PHP?<br><br>
�� <INPUT type="radio" name="q20" value="39" checked>   ��� <INPUT type="radio" name="q20" value="40"><br><br>
<INPUT type="submit" name="obr" value="���������">
</FORM>
</BODY></HTML>
<?php
 if(isset($_POST["obr"])) {
  $res = 0;
  $pos = array(3, 9, 10, 13, 14, 19);
  for($i = 1; $i <= 20; $i++) {
   if(in_array($i, $pos)) {
    if($_POST["q" . $i] % 2 == 1) $res++;
   }
   else {
    if($_POST["q" . $i] % 2 == 0) $res++;
   }
  }
  echo $_POST["l"] . "<br>";
  if($res > 15) echo "� ��� ����������� ��������";
  elseif($res >= 8 && $res <= 15) echo "��� �� ������ �����������, �� � ���� ����� ������";
  else echo "����� ������� ����� ���������������";
 }
?>
<br><br><a href='.'>�����</a><br>