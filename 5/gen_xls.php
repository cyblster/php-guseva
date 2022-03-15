<?php
  header("Expires: Mon, 1 Apr 1974 05:00:00 GMT");
  header("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
  header("Cache-Control: no-cache, must-revalidate");
  header("Pragma: no-cache");
  header("Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
  header("Content-Disposition: attachment; filename=guseva_9.xlsx");

  require "../vendor/autoload.php";

  use PhpOffice\PhpSpreadsheet\Spreadsheet;
  use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

  $conn = mysqli_connect("eu-cdbr-west-02.cleardb.net","babfe8b736370f","6e610c35", "heroku_31e74ecdd4c17a0") or die ("Невозможно подключиться к серверу");
  mysqli_query($conn, "SET NAMES utf8");

  $spreadsheet = new Spreadsheet();
  
  $sheet = $spreadsheet -> getActiveSheet();

  $sheet -> setTitle("Населенные пункты");

  $sheet -> SetCellValue("A1", "Населенные пункты");
  $sheet -> mergeCells("A1:G1");
  $sheet -> getStyle("A1:G1") -> getAlignment() -> setHorizontal("center");

  $sheet -> getColumnDimension("A") -> setWidth(10);
  $sheet -> getColumnDimension("B") -> setWidth(25);
  $sheet -> getColumnDimension("C") -> setWidth(20);
  $sheet -> getColumnDimension("D") -> setWidth(40);
  $sheet -> getColumnDimension("E") -> setWidth(30);
  $sheet -> getColumnDimension("F") -> setWidth(30);
  $sheet -> getColumnDimension("G") -> setWidth(35);

  $sheet -> SetCellValue("A2", "№");
  $sheet -> SetCellValue("B2", "Название сети");
  $sheet -> SetCellValue("C2", "ИНН");
  $sheet -> SetCellValue("D2", "Адрес точки продаж");
  $sheet -> SetCellValue("E2", "Об. продаж, руб.");
  $sheet -> SetCellValue("F2", "Торг. баланс, руб.");
  $sheet -> SetCellValue("G2", "ФИО дир.");

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

    $sheet -> SetCellValue("A".($i+2), $i);
    $sheet -> SetCellValue("B".($i+2), $name);
    $sheet -> SetCellValue("C".($i+2), $inn);
    $sheet -> SetCellValue("D".($i+2), $address);
    $sheet -> SetCellValue("E".($i+2), $volume);
    $sheet -> SetCellValue("F".($i+2), $balance);
    $sheet -> SetCellValue("G".($i+2), $fio);
  }

  $writer = new Xlsx($spreadsheet);
  $writer -> save("php://output");

  exit();
  
?>
