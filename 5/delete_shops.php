<?php
session_start();
if($_SESSION["rule"] == 2) {
 $conn = mysqli_connect("eu-cdbr-west-02.cleardb.net","babfe8b736370f","6e610c35", "heroku_31e74ecdd4c17a0") or die ("Невозможно подключиться к серверу");
 $zapros="DELETE FROM shops WHERE id=" . $_GET['id'];
 mysqli_query($conn, $zapros);
}
 header("Location: index.php");
 exit;
?>