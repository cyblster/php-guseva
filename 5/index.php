<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<html>
<body>

<?php
  session_start();

  $conn = mysqli_connect("eu-cdbr-west-02.cleardb.net","babfe8b736370f","6e610c35", "heroku_31e74ecdd4c17a0") or die ("���������� ������������ � �������");
  mysqli_query($conn, "SET NAMES cp1251");

  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $query=mysqli_query($conn, "SELECT * FROM users WHERE username='".$_POST["username"]."' AND password='".md5($_POST["password"])."'");
    if($fetch = mysqli_fetch_array($query)) {
      $_SESSION["username"] = $fetch["username"];
      $_SESSION["rule"] = $fetch["rule"];
      if(!isset($_SESSION["count"])) $_SESSION["count"] = 0;
    }
    else {
      echo "<html><head><title>�����������</title></head><body>";
      echo "�������� ��� ������������ ��� ������!<br>";
      echo "<br><a href='.'> ��������� </a>";
    }
  }
  elseif(!isset($_SESSION["username"])) { 
    echo "<html><head><title>�����������</title></head><body>";
    echo "<h1>������ �. �.</h1>";
    echo "<form method='post' action='". $_SERVER["PHP_SELF"] ."'>";
    echo "<p>������������:</p><input type='text' name='username' size='16'>";
    echo "<p>������:</p><input type='password' name='password' size='16'><br><br>";
    echo "<input type='submit' name='submit' value='�����'></form>";
    echo "<br><a href='..'>�����</a><br>";
  }
  
  if(isset($_SESSION["username"])) {
    $query=mysqli_query($conn, "SELECT rule FROM users WHERE username='" . $_SESSION["username"] . "'");
    if($fetch = mysqli_fetch_array($query)) $_SESSION["rule"] = $fetch["rule"];

    echo "<html><head><title>���������� ������</title></head><body>";
    echo "<h2>���������� ������:</h2>";
    echo "<table border='1'>";
    echo "<tr><th> id </th>";
    echo "<th> �������� </th> <th> ��� </th>";
    echo "<th> �������, ��. ��. </th> <th> �����������, ���. </th> <th> ������ </th>";
    echo "<th> ������������� </th>";
    if($_SESSION["rule"] == 2) echo "<th>����������</th>";
    echo "</tr>";
    $result=mysqli_query($conn, "SELECT * FROM cities");
    while ($row=mysqli_fetch_array($result)){
      echo "<tr>";
      echo "<td>" . $row["id"] . "</td>";
      echo "<td>" . $row["name"] . "</td>";
      echo "<td>" . $row["type"] . "</td>";
      echo "<td>" . $row["area"] . "</td>";
      echo "<td>" . $row["population"] . "</td>";
      echo "<td>" . $row["district"] . "</td>";
      echo "<td><a href='edit_cities.php?id=" . $row["id"]
      . "'>�������������</a></td>";
      if($_SESSION["rule"] == 2) echo "<td><a href='delete_cities.php?id=" . $row["id"]
      . "'>�������</a></td>";
      echo "</tr>";
    }
    echo "</table>";
    $num_rows = mysqli_num_rows($result);
    echo "<p> ����� �������: $num_rows </p>";
    echo "<a href='new_cities.php'> �������� ������ </a><br><br>";

    echo "<h2>���� ���������:</h2>";
    echo "<table border='1'>";
    echo "<tr><th> id </th>";
    echo "<th> �������� </th> <th> ��� </th>";
    echo "<th> ������������� </th>";
    if($_SESSION["rule"] == 2) echo "<th> ���������� </th></tr>";
    $result=mysqli_query($conn, "SELECT * FROM shops");
    while ($row=mysqli_fetch_array($result)){
      echo "<tr>";
      echo "<td>" . $row["id"] . "</td>";
      echo "<td>" . $row["name"] . "</td>";
      echo "<td>" . $row["inn"] . "</td>";
      echo "<td><a href='edit_shops.php?id=" . $row["id"]
      . "'>�������������</a></td>";
      if($_SESSION["rule"] == 2) echo "<td><a href='delete_shops.php?id=" . $row["id"]
      . "'>�������</a></td>";
      echo "</tr>";
    }
    echo "</table>";
    $num_rows = mysqli_num_rows($result);
    echo "<p> ����� �������: $num_rows </p>";
    echo "<a href='new_shops.php'> �������� ������ </a><br><br>";

    echo "<h2>����� ������:</h2>";
    echo "<table border='1'>";
    echo "<tr><th> id </th>";
    echo "<th> id ���� ��������� </th> <th> id ����������� ������ </th>";
    echo "<th> ����� ������, ���. </th> <th> �������� ������, ���. </th>";
    echo "<th> ��� ��������� </th> <th> ����� </th>";
    echo "<th> ������������� </th>";
    if($_SESSION["rule"] == 2) echo "<th> ���������� </th> </tr>";
    $result=mysqli_query($conn, "SELECT * FROM points");
    while ($row=mysqli_fetch_array($result)){
      echo "<tr>";
      echo "<td>" . $row["id"] . "</td>";
      echo "<td>" . $row["id_shop"] . "</td>";
      echo "<td>" . $row["id_city"] . "</td>";
      echo "<td>" . $row["volume"] . "</td>";
      echo "<td>" . $row["balance"] . "</td>";
      echo "<td>" . $row["fio"] . "</td>";
      echo "<td>" . $row["address"] . "</td>";
      echo "<td><a href='edit_points.php?id=" . $row["id"]
      . "'>�������������</a></td>";
      if($_SESSION["rule"] == 2) echo "<td><a href='delete_points.php?id=" . $row["id"]
      . "'>�������</a></td>";
      echo "</tr>";
    }
    echo "</table>";
    $num_rows = mysqli_num_rows($result);
    echo "<p> ����� �������: $num_rows </p>";
    echo "<a href='new_points.php'> �������� ������ </a><br><br>";

    if($_SESSION["rule"] == 2) {
      echo "<h2>������������:</h2>";
      echo "<table border='1'>";
      echo "<tr><th>��� ������������</th><th>������</th><th>����� �������</th>";
      echo "<th>�������������</th><th>����������</th></tr>";
      $query=mysqli_query($conn, "SELECT * FROM users");
      while($fetch=mysqli_fetch_array($query)) {
        echo "<tr><td>" . $fetch["username"] . "</td>";
        echo "<td>" . $fetch["password"] . "</td>";
        echo "<td>" . $fetch["rule"] . "</td>";
        echo "<td><a href='edit_users.php?username=" . $fetch["username"] . "'>�������������</a></td>";
        echo "<td><a href='delete_users.php?username=" . $fetch["username"]. "'>�������</a></td></tr>";
      } 
      echo "</table>";
   
      $num_rows = mysqli_num_rows($query);
      echo "<p> ����� �������: $num_rows </p>";
      echo "<a href='new_users.php'>�������� ������</a><br><br>";
    }

    echo "<br><a href='gen_pdf.php'> ��������� PDF </a><br>";
    echo "<a href='gen_xls.php'> ��������� Excel </a><br>";

    $_SESSION["count"]++;
    echo "<br>����������� �� ������: " . $_SESSION["count"];
    echo "<br><a href='exit.php'>�����</a><br>";

    echo "<br><a href='..'>�����</a><br>";

    echo "</body></html>";
 }
?>