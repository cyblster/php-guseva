<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<html>
<body>
<?php
 $conn = mysqli_connect("eu-cdbr-west-02.cleardb.net","babfe8b736370f","6e610c35", "heroku_31e74ecdd4c17a0") or die ("���������� ������������ � �������");
 mysqli_query($conn, "SET NAMES cp1251");
?>
<h2>���������� ������:</h2>
<table border="1">
<tr>
 <th> id </th>
 <th> �������� </th> <th> ��� </th>
 <th> �������, ��. ��. </th> <th> �����������, ���. </th> <th> ������ </th>
 <th> ������������� </th> <th> ���������� </th> </tr>
<?php
$result=mysqli_query($conn, "SELECT * FROM cities"); // ������ �� ������� �������� � �������������
while ($row=mysqli_fetch_array($result)){// ��� ������ ������ �� �������
 echo "<tr>";
 echo "<td>" . $row["id"] . "</td>";
 echo "<td>" . $row["name"] . "</td>";
 echo "<td>" . $row["type"] . "</td>";
 echo "<td>" . $row["area"] . "</td>";
 echo "<td>" . $row["population"] . "</td>";
 echo "<td>" . $row["district"] . "</td>";
 echo "<td><a href='edit_cities.php?id=" . $row["id"]
. "'>�������������</a></td>"; // ������ ������� ��� ��������������
 echo "<td><a href='delete_cities.php?id=" . $row["id"]
. "'>�������</a></td>"; // ������ ������� ��� �������� ������
 echo "</tr>";
}
echo "</table>";
$num_rows = mysqli_num_rows($result); // ����� ������� � ������� ��
print("<P>����� �������: $num_rows </p>");
?>
<a href="new_cities.php"> �������� ������ </a><br><br>

<h2>���� ���������:</h2>
<table border="1">
<tr>
 <th> id </th>
 <th> �������� </th> <th> ��� </th>
 <th> ������������� </th> <th> ���������� </th> </tr>
<?php
$result=mysqli_query($conn, "SELECT * FROM shops"); // ������ �� ������� �������� � �������������
while ($row=mysqli_fetch_array($result)){// ��� ������ ������ �� �������
 echo "<tr>";
 echo "<td>" . $row["id"] . "</td>";
 echo "<td>" . $row["name"] . "</td>";
 echo "<td>" . $row["inn"] . "</td>";
 echo "<td><a href='edit_shops.php?id=" . $row["id"]
. "'>�������������</a></td>"; // ������ ������� ��� ��������������
 echo "<td><a href='delete_shops.php?id=" . $row["id"]
. "'>�������</a></td>"; // ������ ������� ��� �������� ������
 echo "</tr>";
}
echo "</table>";
$num_rows = mysqli_num_rows($result); // ����� ������� � ������� ��
print("<P>����� �������: $num_rows </p>");
?>
<a href="new_shops.php"> �������� ������ </a><br><br>

<h2>����� ������:</h2>
<table border="1">
<tr>
 <th> id </th>
 <th> id ���� ��������� </th> <th> id ����������� ������ </th>
 <th> ����� ������, ���. </th> <th> �������� ������, ���. </th>
 <th> ��� ��������� </th> <th> ����� </th>
 <th> ������������� </th> <th> ���������� </th> </tr>
<?php
$result=mysqli_query($conn, "SELECT * FROM points"); // ������ �� ������� �������� � �������������
while ($row=mysqli_fetch_array($result)){// ��� ������ ������ �� �������
 echo "<tr>";
 echo "<td>" . $row["id"] . "</td>";
 echo "<td>" . $row["id_shop"] . "</td>";
 echo "<td>" . $row["id_city"] . "</td>";
 echo "<td>" . $row["volume"] . "</td>";
 echo "<td>" . $row["balance"] . "</td>";
 echo "<td>" . $row["fio"] . "</td>";
 echo "<td>" . $row["address"] . "</td>";
 echo "<td><a href='edit_points.php?id=" . $row["id"]
. "'>�������������</a></td>"; // ������ ������� ��� ��������������
 echo "<td><a href='delete_points.php?id=" . $row["id"]
. "'>�������</a></td>"; // ������ ������� ��� �������� ������
 echo "</tr>";
}
echo "</table>";
$num_rows = mysqli_num_rows($result); // ����� ������� � ������� ��
print("<P>����� �������: $num_rows </p>");
?>
<a href="new_points.php"> �������� ������ </a><br><br>


<a href="gen_pdf.php"> ��������� PDF </a><br>
<a href="gen_xls.php"> ��������� Excel </a><br>

<br><a href='..'>�����</a><br>

</body> </html>
