<?php

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'ปีการศึกษา');
$sheet->setCellValue('B1', 'ภาคการศึกษา');
$sheet->setCellValue('C1', 'รหัสวิชา');
$sheet->setCellValue('D1', 'ชื่อวิชา');
$sheet->setCellValue('E1', 'หมวดวิชา');
$sheet->setCellValue('F1', 'ผลการเรียน');
$sheet->setCellValue('G1', 'หน่วยกิต');

// $writer = new Xlsx($spreadsheet);
// // $writer->save('hello world.xlsx');
// $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');
// header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
// header('Content-Disposition: attachment; filename="file.xlsx"');
// $writer->save('php://output');

$spreadsheet->getActiveSheet()->settitle('รายวิชา');
$spreadsheet->setActiveSheetIndex(0);

$time = date("H:i:sa");
$date = date("d-m-Y");
list($h,$i,$s) = explode(":",$time);

$file_name = "รายวิชาที่นิสิตลงทะเบียน".$date."_เวลา".$h."-".$i."-".$s;


$writer = new Xlsx($spreadsheet);
// $writer->save('hello world.xlsx');
$writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename="'.$file_name.'.xlsx"');

$writer->save('php://output');
exit();


// $writer = new Xlsx($spreadsheet);
//
// // save file to server and create link
//
// $writer->save('excel/itoffside.xlsx');
// echo '<a href="excel/itoffside.xlsx">Download Excel</a>';
