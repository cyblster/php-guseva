<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<?php
session_start();
if(!$_SESSION["rule"]) header("Location: .");
?>

<html><body>
<?php
 $conn = mysqli_connect("eu-cdbr-west-02.cleardb.net","babfe8b736370f","6e610c35", "heroku_31e74ecdd4c17a0") or die ("���������� ������������ � �������");
 mysqli_query($conn, 'SET NAMES cp1251');
 $zapros="UPDATE points SET id_shop='".$_GET['id_shop']. "', id_city='".$_GET['id_city'].
"', volume='".$_GET['volume']."', balance='".$_GET['balance']."', fio='".$_GET['fio'].
"', address='".$_GET['address']."' WHERE id=".$_GET['id'];
 mysqli_query($conn, $zapros);
if (mysqli_affected_rows($conn)>0) {
 echo '��� ���������. <a href="index.php"> ��������� </a>'; }
 else { echo '������ ����������. <a href="index.php">
���������</a> '; }
?>
</body></html>