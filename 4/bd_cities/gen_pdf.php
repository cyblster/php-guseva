<?php
  $conn = mysqli_connect("eu-cdbr-west-02.cleardb.net","babfe8b736370f","6e610c35", "heroku_31e74ecdd4c17a0") or die ("Невозможно подключиться к серверу");
  mysqli_query($conn, "SET NAMES cp1251");

  define('FPDF_FONTPATH',"../../fpdf/font/");
  require("../../fpdf/fpdf.php");
  
  $pdf = new FPDF();
  $pdf -> AddPage();
 
  $pdf -> AddFont("Arial", "", "arial.php");
  $pdf -> SetFont("Arial", "", "18");

  $pdf -> Cell(190, 10, "Населенные пункты", 1, 1, "C");

  $pdf -> SetFont("Arial", "", "8");

  $pdf -> Cell(10, 5, "№", 1, 0, "C");
  $pdf -> Cell(25, 5, "Название сети", 1, 0, "C");
  $pdf -> Cell(20, 5, "ИНН", 1, 0, "C");
  $pdf -> Cell(40, 5, "Адрес точки продаж", 1, 0, "C");
  $pdf -> Cell(30, 5, "Об. продаж, руб.", 1, 0, "C");
  $pdf -> Cell(30, 5, "Торг. баланс, руб.", 1, 0, "C");
  $pdf -> Cell(35, 5, "ФИО дир.", 1, 1, "C");

  $pdf -> SetFont("Arial", "", "7");

  $query = mysqli_query($conn, "SELECT * FROM points");
  for($i = 1; $fetch_points = mysqli_fetch_array($query); $i++) {
    $id_shop = $fetch_points["id_shop"];
    $volume = $fetch_points["volume"];
    $balance = $fetch_points["balance"];
    $fio = $fetch_points["fio"];
    $address = $fetch_points["address"];

    $query_shops = mysqli_query($conn, "SELECT * FROM shops WHERE id = '" . $id_shop . "'");
    if($fetch_shops = mysqli_fetch_array($query_shops)) {
      $name = $fetch_shops["name"];
      $inn = $fetch_shops["inn"];
    }

    $pdf -> Cell(10, 5, $i, 1, 0, "C");
    $pdf -> Cell(25, 5, $name, 1, 0, "C");
    $pdf -> Cell(20, 5, $inn, 1, 0, "C");
    $pdf -> Cell(40, 5, $address, 1, 0, "C");
    $pdf -> Cell(30, 5, $volume, 1, 0, "C");
    $pdf -> Cell(30, 5, $balance, 1, 0, "C");
    $pdf -> Cell(35, 5, $fio, 1, 1, "C");
}

$pdf -> Output("guseva_9.pdf", "D");
?>