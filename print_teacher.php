<?php

require_once __DIR__.'/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'regisku';
$conn = mysqli_connect($servername, $username, $password, $dbname);

mysqli_set_charset($conn, 'utf8');

if (!$conn) {
    die('Connection failed: '.mysqli_connect_error());
}

$sql = 'SELECT * FROM `subject`';

$result = mysqli_query($conn, $sql);
$content = '';
// if (mysqli_num_rows($result) > 0) {
//     $i = 1;
//     while($row = mysqli_fetch_assoc($result)) {
//         $content .= '<tr style="border:1px solid #000;">
//             <td style="border-right:1px solid #000;padding:3px;text-align:center;"  >'.$i.'</td>
//             <td style="border-right:1px solid #000;padding:3px;text-align:center;" >'.$row['subjectCode'].'</td>
//             <td style="border-right:1px solid #000;padding:3px;"  >'.$row['nameSubjectThai'].'</td>
//             <td style="border-right:1px solid #000;padding:3px;"  >'.$row['nameSubjectEng'].'</td>
//             <td width="20%" style="border-right:1px solid #000;padding:3px;text-align:right;"  >'.$row['note'].'</td>
//             <td style="border-right:1px solid #000;padding:3px;text-align:center;"  >'.$i.'</td>
//
//             <td style="border-right:1px solid #000;padding:3px;text-align:center;"  >'.$i.'</td>
//
//         </tr>';
//         $i++;
//     }
// }

mysqli_close($conn);

// $mpdf = new mPDF();

$head = '
<style>
   body{
       font-family: "Garuda";//เรียกใช้font Garuda สำหรับแสดงผล ภาษาไทย
   }
</style>

<h2 style="text-align:center">รายชื่อนิสิต</h2>

<table id="bg-table" width="100%" style="border-collapse: collapse;font-size:12pt;margin-top:8px;">
   <tr style="border:1px solid #000;padding:4px;">
       <td  style="border-right:1px solid #000;padding:4px;text-align:center;"   width="20%">รหัสนิสิต</td>
       <td  style="border-right:1px solid #000;padding:4px;text-align:center;"   width="40%">ชื่อ-นามสกุล</td>
       <td  style="border-right:1px solid #000;padding:4px;text-align:center;"  width="15%">ประเภทหลักสูตร</td>

       <td  style="border-right:1px solid #000;padding:4px;text-align:center;"  width="15%">สิทธิ์ฝึกงาน</td>

       <td  style="border-right:1px solid #000;padding:4px;text-align:center;"  width="15%">สิทธิ์ทำโครงงาน</td>
       <td  style="border-right:1px solid #000;padding:4px;text-align:center;"  width="15%">หน่วยกิต</td>

       <td  style="border-right:1px solid #000;padding:4px;text-align:center;"  width="15%">ผลการเรียน</td>

   </tr>

</thead>
   <tbody>';

$end = '</tbody>
</table>';

$mpdf->WriteHTML($head);

$mpdf->WriteHTML($content);

$mpdf->WriteHTML($end);

$mpdf->Output();
