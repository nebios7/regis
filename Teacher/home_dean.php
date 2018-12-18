<?php
$dataPoints = array(
    array('y' => 3.43, 'label' => 'ปีการศึกษา 2559 ภาคต้น'),
    array('y' => 3.16, 'label' => 'ปีการศึกษา 2559 ภาคปลาย'),
    array('y' => 2.86, 'label' => 'ปีการศึกษา 2560 ภาคต้น'),
    array('y' => 3.13, 'label' => 'ปีการศึกษา 2560 ภาคปลาย'),
    array('y' => 2.98, 'label' => 'ปีการศึกษา 2561 ภาคต้น'),
    array('y' => 3.63, 'label' => 'ปีการศึกษา 2561 ภาคปลาย'),
    array('y' => 3.24, 'label' => 'ผลการเรียนเฉลี่ย'),
);
?>
<!DOCTYPE html>
    <html lang="en" xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="utf-8">
        <title>คลังข้อมูลนิสิตคณะวิศวกรรมศาสตร์</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!--profile -->
        <!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->

        <!-- material google -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         <!-- end material google -->

        <!--page 10 -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>

        <link rel="icon" type="image/png"  href="../../Image/Logo/Logo.png" class="_web-inspector-hide-shortcut_">
        <link href="../Fonts/DBOzoneX.css" rel="stylesheet" type="text/css">                                         <!--  Font Template -->
        <link href="../../Library/Css/font-awesome.min.css" rel="stylesheet" type="text/css">                                    <!-- รูปต่างๆ สัญลักษณ์ -->
        <link href="../Library/Css/myTemplate2.css" rel="stylesheet" type="text/css">                                          <!-- CSS Template -->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">                                                  <!-- เส้นกรอบ -->
        <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">      <!-- ลบแล้ว step เป็นวงกลม -->

    <style>
table {
    font-size : 18px;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
}

th {
    cursor: pointer;
    font-size : 20px;
}

th, td {
    text-align: left;
    padding: 16px;
}

tr:nth-child(even) {
    background-color: #f2f2f2
}
/* table th:nth-child(3), td:nth-child(3) {
  display: none;
} */
.jumbotron {
  /* background-color: #bbffbb; */
}

h2 {
    color:#2B7C74;
    font-weight: 900;
}
.nav-tabs
{
    font-size: 20px;
}
i.icon-orange{
    color:#ff8000;
}
i.icon-blue{
    color:#0080ff;
}

</style>

    </head>

    <body>
    <div class="content">

        <!-- <div class="header">

        </div> -->

        <!-- <br> -->
        <div style="padding-top: 15px" class="content">
            <div class="hleft">
                <a href="#"><img src="../Image/newLogoUniversity1.png" border="0"/></a>
                <div class="navbar-form navbar-right">
                    <div class = "chip">
                        <div class="dropdown">
                        <!-- <img src="img.png" alt="Person"> -->
                        <font size="4px"><b>คณบดี</b></font>
                        <!-- <a  href="" data-toggle="modal"  data-target="#Login" title="เข้าสู่ระบบ"><font size="4px"><i class="fa fa-fw fa-lock"></i><b>เข้าสู่ระบบ</b></font></a> -->
                        <a href="" data-toggle="tooltip" title="ออกจากระบบ"><font size="4px" color="red"><i class="fa fa-fw fa-power-off"></i><b>ออกจากระบบ</b></font></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

               <div style="padding-top: 15px" class="content">
                <div class="menu-top">
                    <div class="menu-box">
                        <div class="menu-box-blue active ">
                            <ul>
                                <li>
                                    <a href="home_dean.php"><font color="#000000"><b>หน้าหลัก</b></font></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="menu-box">
                        <div class="menu-box-green ">
                            <ul>
                                <li>
                                    <a href="timetable_dean.php"><font color="#000000"><b>ตารางสอน</b></font></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="menu-box">
                        <div class="menu-box-red  ">
                            <ul>
                                <li>
                                    <a href="report_dean.php"><font color="#000000"><b>รายงาน</b></font></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

    <!-- navbar tab-->

<!-- <div class="container"> -->
<div>
<h2>รายชื่อนิสิตในคณะวิศวกรรมศาสตร์ กำแพงแสน</h2>
<select>
  <option value="volvo">นิสิตที่ปรึกษา</option>
  <option value="saab">นิสิตในภาควิชา</option>
  <option value="saab">นิสิตในคณะ</option>

</select>
    <a href="../teacher_ex.php" class="btn btn-success"><span class="glyphicon glyphicon-file"></span> <font size="3px">Excel</font></a>
    <a href="../teacher_print.php" class="btn btn-danger"><span class="glyphicon glyphicon-file"></span> <font size="3px">PDF</font></a>

    </div>
    <br>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">นิสิตที่ปรึกษา</a></li>
    <li><a data-toggle="tab" href="#menu1">นิสิตในภาควิชา</a></li>
    <li><a data-toggle="tab" href="#menu2">นิสิตในคณะ</a></li>
  </ul>

  <div class="tab-content">
  <div id="home" class="tab-pane fade in active">
  <table id="grade" class="display" cellspacing="0" width = "100%" >
    <br>
        <thead>
            <tr>
                <th>รหัสนิสิต</th>
                <th>ชื่อ-นามสกุล</th>
                <th>ประเภทหลักสูตร</th>
                <th>สิทธิ์ฝึกงาน</th>
                <th>สิทธิ์ทำโครงงาน</th>
                <th>หน่วยกิต</th>
                <th>ผลการเรียน</th>
                <th>รายละเอียด</th>
            </tr>
        </thead>

        <tfoot>
            <tr>
                 <th>รหัสนิสิต</th>
                <th>ชื่อ-นามสกุล</th>
                <th>ประเภทหลักสูตร</th>
                <th>สิทธิ์ฝึกงาน</th>
                <th>สิทธิ์ทำโครงงาน</th>
                <th>หน่วยกิต</th>
                <th>ผลการเรียน</th>
                <th>รายละเอียด</th>
            </tr>
        </tfoot>

        <tbody>
            <tr>
                <td class="text-center">5820501111</td>
                <td>อาทิตย์</td>
                <td class="text-center">ภาคปกติ</td>
                <td class="text-center" style="color:green;">มีสิทธิ์</td>
                <td class="text-center" style="color:green;">มีสิทธิ์</td>
                <td class="text-center">99</td>
                <td>2.76 <span style="color:green;">(+0.15)</span></td>
                <td><a href="#profile"data-toggle="modal" class="profile"><i class="material-icons icon-blue" title="profile">&#xe87c;</i></a>
                <a href="#chart" class="chart"data-toggle="modal"><i class="material-icons icon-orange" title="chart">&#xe01d;</i></a>
                </td>
            </tr>
            <tr>
                <td class="text-center">5820500009</td>
                <td>ชูวิทย์</td>
                <td class="text-center">ภาคปกติ</td>
                <td class="text-center" style="color:green;">มีสิทธิ์</td>
                <td class="text-center" style="color:green;">มีสิทธิ์</td>
                <td class="text-center">99</td>
                <td>3.40 <span style="color:green;">(+0.51)</span></td>
                <td><a href="#profile"data-toggle="modal" class="profile"><i class="material-icons icon-blue" title="profile">&#xe87c;</i></a>
                <a href="#chart" class="chart"data-toggle="modal"><i class="material-icons icon-orange" title="chart">&#xe01d;</i></a>
                </td>

            </tr>
            <tr>
                <td class="text-center">5820502345</td>
                <td>ดนุพล</td>
                <td class="text-center">ภาคปกติ</td>
                <td class="text-center" style="color:green;">มีสิทธิ์</td>
                <td class="text-center" style="color:green;">มีสิทธิ์</td>
                <td class="text-center">99</td>
                <td>3.01 <span style="color:red;">(-0.39)</span></td>
                <td><a href="#profile"data-toggle="modal" class="profile"><i class="material-icons icon-blue" title="profile">&#xe87c;</i></a>
                <a href="#chart" class="chart"data-toggle="modal"><i class="material-icons icon-orange" title="chart">&#xe01d;</i></a>
                </td>

            </tr>
            <tr>
                <td class="text-center">5820559385</td>
                <td>กานดา </td>
                <td class="text-center">ภาคพิเศษ</td>
                <td class="text-center" style="color:green;">มีสิทธิ์</td>
                <td class="text-center" style="color:green;">มีสิทธิ์</td>
                <td class="text-center">99</td>
                <td>2.01 <span style="color:red;">(-0.81)</span></td>
                <td><a href="#profile"data-toggle="modal" class="profile"><i class="material-icons icon-blue" title="profile">&#xe87c;</i></a>
                <a href="#chart" class="chart"data-toggle="modal"><i class="material-icons icon-orange" title="chart">&#xe01d;</i></a>
                </td>

            </tr>
            <tr>
                <td class="text-center">5920555555</td>
                <td>มะลิ </td>
                <td class="text-center">ภาคพิเศษ</td>
                <td class="text-center" style="color:red;">ไม่มีสิทธิ์</td>
                <td class="text-center" style="color:red;">ไม่มีสิทธิ์</td>
                <td class="text-center">50</td>
                <td>3.21 <span style="color:green;">(+0.17)</span></td>
                <td><a href="#profile"data-toggle="modal" class="profile"><i class="material-icons icon-blue" title="profile">&#xe87c;</i></a>
                <a href="#chart" class="chart"data-toggle="modal"><i class="material-icons icon-orange" title="chart">&#xe01d;</i></a>
                </td>

            </tr>
            <tr>
                <td class="text-center">5920501343</td>
                <td>มารวย</td>
                <td class="text-center">ภาคปกติ</td>
                <td class="text-center" style="color:red;">ไม่มีสิทธิ์</td>
                <td class="text-center" style="color:red;">ไม่มีสิทธิ์</td>
                <td class="text-center">50</td>
                <td>2.71 <span style="color:green;">(+0.11)</span></td>
                <td><a href="#profile"data-toggle="modal" class="profile"><i class="material-icons icon-blue" title="profile">&#xe87c;</i></a>
                <a href="#chart" class="chart"data-toggle="modal"><i class="material-icons icon-orange" title="chart">&#xe01d;</i></a>
                </td>
            </tr>
            <tr>
                <td class="text-center">6020501098</td>
                <td >พิชิต </td>
                <td class="text-center">ภาคปกติ</td>
                <td class="text-center" style="color:red;">ไม่มีสิทธิ์</td>
                <td class="text-center" style="color:red;">ไม่มีสิทธิ์</td>
                <td class="text-center">50</td>
                <td>2.89 <span style="color:red;">(-0.21)</span></td>
                <td><a href="#profile"data-toggle="modal" class="profile"><i class="material-icons icon-blue" title="profile">&#xe87c;</i></a>
                <a href="#chart" class="chart"data-toggle="modal"><i class="material-icons icon-orange" title="chart">&#xe01d;</i></a>
                </td>
            </tr>
            <tr>
                <td class="text-center">6020551409</td>
                <td>ประวิตร</td>
                <td class="text-center">ภาคพิเศษ</td>
                <td class="text-center" style="color:red;">ไม่มีสิทธิ์</td>
                <td class="text-center" style="color:red;">ไม่มีสิทธิ์</td>
                <td class="text-center">50</td>
                <td>2.54 <span style="color:red;">(-0.07)</span></td>
                <td><a href="#profile"data-toggle="modal" class="profile"><i class="material-icons icon-blue" title="profile">&#xe87c;</i></a>
                <a href="#chart" class="chart"data-toggle="modal"><i class="material-icons icon-orange" title="chart">&#xe01d;</i></a>
                </td>

            </tr>
        </tbody>
    </table>
    </div>

    <div id="menu1" class="tab-pane fade ">
    <table id="grade2" class="display" cellspacing="0" width = "100%" >
    <br>
        <thead>
            <tr>
                <th>รหัสนิสิต</th>
                <th>ชื่อ-นามสกุล</th>
                <th>ประเภทหลักสูตร</th>
                <th>ที่ปรึกษา</th>
                <th>สิทธิ์ฝึกงาน</th>
                <th>สิทธิ์ทำโครงงาน</th>
                <th>หน่วยกิต</th>
                <th>ผลการเรียน</th>
                <th>รายละเอียด</th>
            </tr>
        </thead>

        <tfoot>
            <tr>
                <th>รหัสนิสิต</th>
                <th>ชื่อ-นามสกุล</th>
                <th>ประเภทหลักสูตร</th>
                <th>สิทธิ์ฝึกงาน</th>
                <th>ที่ปรึกษา</th>
                <th>สิทธิ์ทำโครงงาน</th>
                <th>หน่วยกิต</th>
                <th>ผลการเรียน</th>
                <th>รายละเอียด</th>
            </tr>
        </tfoot>

        <tbody>
            <tr>
                <td class="text-center">5820501111</td>
                <td>อาทิตย์</td>
                <td class="text-center">ภาคปกติ</td>
                <td>อ.วรัญญา</td>
                <td class="text-center" style="color:green;">มีสิทธิ์</td>
                <td class="text-center" style="color:green;">มีสิทธิ์</td>
                <td class="text-center">99</td>
                <td>2.76 <span style="color:green;">(+0.15)</span></td>
                <td><a href="#profile"data-toggle="modal" class="profile"><i class="material-icons icon-blue" title="profile">&#xe87c;</i></a>
                <a href="#chart" class="chart"data-toggle="modal"><i class="material-icons icon-orange" title="chart">&#xe01d;</i></a>
                </td>
            </tr>
            <tr>
                <td class="text-center">5820500009</td>
                <td>ชูวิทย์</td>
                <td class="text-center">ภาคปกติ</td>
                <td>อ.พิเชษฐ์</td>
                <td class="text-center" style="color:green;">มีสิทธิ์</td>
                <td class="text-center" style="color:green;">มีสิทธิ์</td>
                <td class="text-center">99</td>
                <td>3.40 <span style="color:green;">(+0.51)</span></td>
                <td><a href="#profile"data-toggle="modal" class="profile"><i class="material-icons icon-blue" title="profile">&#xe87c;</i></a>
                <a href="#chart" class="chart"data-toggle="modal"><i class="material-icons icon-orange" title="chart">&#xe01d;</i></a>
                </td>

            </tr>
            <tr>
                <td class="text-center">5820502345</td>
                <td>ดนุพล</td>
                <td class="text-center">ภาคปกติ</td>
                <td>อ.ศิวดล</td>
                <td class="text-center" style="color:green;">มีสิทธิ์</td>
                <td class="text-center" style="color:green;">มีสิทธิ์</td>
                <td class="text-center">99</td>
                <td>3.01 <span style="color:red;">(-0.39)</span></td>
                <td><a href="#profile"data-toggle="modal" class="profile"><i class="material-icons icon-blue" title="profile">&#xe87c;</i></a>
                <a href="#chart" class="chart"data-toggle="modal"><i class="material-icons icon-orange" title="chart">&#xe01d;</i></a>
                </td>

            </tr>
            <tr>
                <td class="text-center">5820559385</td>
                <td>กานดา </td>
                <td class="text-center">ภาคพิเศษ</td>
                <td>อ.จักกริช</td>
                <td class="text-center" style="color:green;">มีสิทธิ์</td>
                <td class="text-center" style="color:green;">มีสิทธิ์</td>
                <td class="text-center">99</td>
                <td>2.01 <span style="color:red;">(-0.81)</span></td>
                <td><a href="#profile"data-toggle="modal" class="profile"><i class="material-icons icon-blue" title="profile">&#xe87c;</i></a>
                <a href="#chart" class="chart"data-toggle="modal"><i class="material-icons icon-orange" title="chart">&#xe01d;</i></a>
                </td>

            </tr>
            <tr>
                <td class="text-center">5920555555</td>
                <td>มะลิ </td>
                <td class="text-center">ภาคพิเศษ</td>
                <td>อ.ดวงเพ็ญ</td>
                <td class="text-center" style="color:red;">ไม่มีสิทธิ์</td>
                <td class="text-center" style="color:red;">ไม่มีสิทธิ์</td>
                <td class="text-center">50</td>
                <td>3.21 <span style="color:green;">(+0.17)</span></td>
                <td><a href="#profile"data-toggle="modal" class="profile"><i class="material-icons icon-blue" title="profile">&#xe87c;</i></a>
                <a href="#chart" class="chart"data-toggle="modal"><i class="material-icons icon-orange" title="chart">&#xe01d;</i></a>
                </td>

            </tr>
            <tr>
                <td class="text-center">5920501343</td>
                <td>มารวย</td>
                <td class="text-center">ภาคปกติ</td>
                <td>อ.บุญรัตน์</td>
                <td class="text-center" style="color:red;">ไม่มีสิทธิ์</td>
                <td class="text-center" style="color:red;">ไม่มีสิทธิ์</td>
                <td class="text-center">50</td>
                <td>2.71 <span style="color:green;">(+0.11)</span></td>
                <td><a href="#profile"data-toggle="modal" class="profile"><i class="material-icons icon-blue" title="profile">&#xe87c;</i></a>
                <a href="#chart" class="chart"data-toggle="modal"><i class="material-icons icon-orange" title="chart">&#xe01d;</i></a>
                </td>
            </tr>
            <tr>
                <td class="text-center">6020501098</td>
                <td >พิชิต </td>
                <td class="text-center">ภาคปกติ</td>
                <td>อ.ฐิติพงษ์</td>
                <td class="text-center" style="color:red;">ไม่มีสิทธิ์</td>
                <td class="text-center" style="color:red;">ไม่มีสิทธิ์</td>
                <td class="text-center">50</td>
                <td>2.89 <span style="color:red;">(-0.21)</span></td>
                <td><a href="#profile"data-toggle="modal" class="profile"><i class="material-icons icon-blue" title="profile">&#xe87c;</i></a>
                <a href="#chart" class="chart"data-toggle="modal"><i class="material-icons icon-orange" title="chart">&#xe01d;</i></a>
                </td>
            </tr>
            <tr>
                <td class="text-center">6020551409</td>
                <td>ประวิตร</td>
                <td class="text-center">ภาคพิเศษ</td>
                <td>อ.ฐิติพงษ์</td>
                <td class="text-center" style="color:red;">ไม่มีสิทธิ์</td>
                <td class="text-center" style="color:red;">ไม่มีสิทธิ์</td>
                <td class="text-center">50</td>
                <td>2.54 <span style="color:red;">(-0.07)</span></td>
                <td><a href="#profile"data-toggle="modal" class="profile"><i class="material-icons icon-blue" title="profile">&#xe87c;</i></a>
                <a href="#chart" class="chart"data-toggle="modal"><i class="material-icons icon-orange" title="chart">&#xe01d;</i></a>
                </td>

            </tr>
        </tbody>
    </table>
    </div>
    <div id="menu2" class="tab-pane fade ">
    <table id="grade3" class="display" cellspacing="0" width = "100%" >
    <br>
        <thead>
            <tr>
                <th>รหัสนิสิต</th>
                <th>ชื่อ-นามสกุล</th>
                <th>ภาควิชา</th>
                <th>ประเภทหลักสูตร</th>
                <th>ที่ปรึกษา</th>
                <th>สิทธิ์ฝึกงาน</th>
                <th>สิทธิ์ทำโครงงาน</th>
                <th>หน่วยกิต</th>
                <th>ผลการเรียน</th>
                <th>รายละเอียด</th>
            </tr>
        </thead>

        <tfoot>
            <tr>
                <th>รหัสนิสิต</th>
                <th>ชื่อ-นามสกุล</th>
                <th>ภาควิชา</th>
                <th>ประเภทหลักสูตร</th>
                <th>สิทธิ์ฝึกงาน</th>
                <th>ที่ปรึกษา</th>
                <th>สิทธิ์ทำโครงงาน</th>
                <th>หน่วยกิต</th>
                <th>ผลการเรียน</th>
                <th>รายละเอียด</th>
            </tr>
        </tfoot>

        <tbody>
            <tr>
                <td class="text-center">5820501111</td>
                <td>อาทิตย์</td>
                <td>วศ.คอม</td>
                <td class="text-center">ภาคปกติ</td>
                <td>อ.วรัญญา</td>
                <td class="text-center" style="color:green;">มีสิทธิ์</td>
                <td class="text-center" style="color:green;">มีสิทธิ์</td>
                <td class="text-center">99</td>
                <td>2.76 <span style="color:green;">(+0.15)</span></td>
                <td><a href="#profile"data-toggle="modal" class="profile"><i class="material-icons icon-blue" title="profile">&#xe87c;</i></a>
                <a href="#chart" class="chart"data-toggle="modal"><i class="material-icons icon-orange" title="chart">&#xe01d;</i></a>
                </td>
            </tr>
            <tr>
                <td class="text-center">5820500009</td>
                <td>ชูวิทย์</td>
                <td>วศ.คอม</td>
                <td class="text-center">ภาคปกติ</td>
                <td>อ.พิเชษฐ์</td>
                <td class="text-center" style="color:green;">มีสิทธิ์</td>
                <td class="text-center" style="color:green;">มีสิทธิ์</td>
                <td class="text-center">99</td>
                <td>3.40 <span style="color:green;">(+0.51)</span></td>
                <td><a href="#profile"data-toggle="modal" class="profile"><i class="material-icons icon-blue" title="profile">&#xe87c;</i></a>
                <a href="#chart" class="chart"data-toggle="modal"><i class="material-icons icon-orange" title="chart">&#xe01d;</i></a>
                </td>

            </tr>
            <tr>
                <td class="text-center">5820502345</td>
                <td>ดนุพล</td>
                <td>วศ.คอม</td>
                <td class="text-center">ภาคปกติ</td>
                <td>อ.ศิวดล</td>
                <td class="text-center" style="color:green;">มีสิทธิ์</td>
                <td class="text-center" style="color:green;">มีสิทธิ์</td>
                <td class="text-center">99</td>
                <td>3.01 <span style="color:red;">(-0.39)</span></td>
                <td><a href="#profile"data-toggle="modal" class="profile"><i class="material-icons icon-blue" title="profile">&#xe87c;</i></a>
                <a href="#chart" class="chart"data-toggle="modal"><i class="material-icons icon-orange" title="chart">&#xe01d;</i></a>
                </td>

            </tr>
            <tr>
                <td class="text-center">5820559385</td>
                <td>กานดา </td>
                <td>วศ.คอม</td>
                <td class="text-center">ภาคพิเศษ</td>
                <td>อ.จักกริช</td>
                <td class="text-center" style="color:green;">มีสิทธิ์</td>
                <td class="text-center" style="color:green;">มีสิทธิ์</td>
                <td class="text-center">99</td>
                <td>2.01 <span style="color:red;">(-0.81)</span></td>
                <td><a href="#profile"data-toggle="modal" class="profile"><i class="material-icons icon-blue" title="profile">&#xe87c;</i></a>
                <a href="#chart" class="chart"data-toggle="modal"><i class="material-icons icon-orange" title="chart">&#xe01d;</i></a>
                </td>

            </tr>
            <tr>
                <td class="text-center">5920555555</td>
                <td>มะลิ </td>
                <td>วศ.คอม</td>
                <td class="text-center">ภาคพิเศษ</td>
                <td>อ.ดวงเพ็ญ</td>
                <td class="text-center" style="color:red;">ไม่มีสิทธิ์</td>
                <td class="text-center" style="color:red;">ไม่มีสิทธิ์</td>
                <td class="text-center">50</td>
                <td>3.21 <span style="color:green;">(+0.17)</span></td>
                <td><a href="#profile"data-toggle="modal" class="profile"><i class="material-icons icon-blue" title="profile">&#xe87c;</i></a>
                <a href="#chart" class="chart"data-toggle="modal"><i class="material-icons icon-orange" title="chart">&#xe01d;</i></a>
                </td>

            </tr>
            <tr>
                <td class="text-center">5920501343</td>
                <td>มารวย</td>
                <td>วศ.คอม</td>
                <td class="text-center">ภาคปกติ</td>
                <td>อ.บุญรัตน์</td>
                <td class="text-center" style="color:red;">ไม่มีสิทธิ์</td>
                <td class="text-center" style="color:red;">ไม่มีสิทธิ์</td>
                <td class="text-center">50</td>
                <td>2.71 <span style="color:green;">(+0.11)</span></td>
                <td><a href="#profile"data-toggle="modal" class="profile"><i class="material-icons icon-blue" title="profile">&#xe87c;</i></a>
                <a href="#chart" class="chart"data-toggle="modal"><i class="material-icons icon-orange" title="chart">&#xe01d;</i></a>
                </td>
            </tr>
            <tr>
                <td class="text-center">6020501098</td>
                <td >พิชิต </td>
                <td>วศ.คอม</td>
                <td class="text-center">ภาคปกติ</td>
                <td>อ.ฐิติพงษ์</td>
                <td class="text-center" style="color:red;">ไม่มีสิทธิ์</td>
                <td class="text-center" style="color:red;">ไม่มีสิทธิ์</td>
                <td class="text-center">50</td>
                <td>2.89 <span style="color:red;">(-0.21)</span></td>
                <td><a href="#profile"data-toggle="modal" class="profile"><i class="material-icons icon-blue" title="profile">&#xe87c;</i></a>
                <a href="#chart" class="chart"data-toggle="modal"><i class="material-icons icon-orange" title="chart">&#xe01d;</i></a>
                </td>
            </tr>
            <tr>
                <td class="text-center">6020551409</td>
                <td>ประวิตร</td>
                <td>วศ.คอม</td>
                <td class="text-center">ภาคพิเศษ</td>
                <td>อ.ฐิติพงษ์</td>
                <td class="text-center" style="color:red;">ไม่มีสิทธิ์</td>
                <td class="text-center" style="color:red;">ไม่มีสิทธิ์</td>
                <td class="text-center">50</td>
                <td>2.54 <span style="color:red;">(-0.07)</span></td>
                <td><a href="#profile"data-toggle="modal" class="profile"><i class="material-icons icon-blue" title="profile">&#xe87c;</i></a>
                <a href="#chart" class="chart"data-toggle="modal"><i class="material-icons icon-orange" title="chart">&#xe01d;</i></a>
                </td>

            </tr>
        </tbody>
    </table>
    </div>
  </div>

<script>
$(document).ready(function() {
    $('#grade').DataTable( {
        responsive: true,
        "pageLength": 10
    } );
    $('#grade2').DataTable( {
        responsive: true,
        "pageLength": 10
    } );
    $('#grade3').DataTable( {
        responsive: true,
        "pageLength": 10
    } );
} );


window.onload = function() {
            CanvasJS.addColorSet("colorShades",
                    [//colorSet Array
                    "#0000ff",
                    "#0080ff",
                    "#00ffff",
                    "#80ff80",
                    "#ffff00",
                    "#ff8000",
                    "#ff0000"
                    ]);

            var chart1 = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                theme: "light2",

                // colorSet: "colorShades",
                title:{
                    //text: "Gold Reserves"
                },
                axisY: {
                    //title: "Gold Reserves (in tonnes)"
                },
                data: [{
                    type: "column",
                    yValueFormatString: "#,##0.##",
                    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                }]
            });
            chart1.render();
        }
</script>

<!-- Edit Modal HTML -->
<div id="profile" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">

                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h3 class="modal-title">ข้อมูลส่วนตัว</h3>
					</div>
					<div class="modal-body">
                    <div class="picside">
                        <div>
                            <center><img class="img-circle" id="avatar-edit-img" src="../Image/profile.png"  data-holder-rendered="true" src="default.jpg"/></center>
                        </div>
                     </div>
                     <br>
                    <table class="data">
                    <tr>
                        <th>รหัสประจำตัวนิสิต </th>
                        <td>5820503121</td>
                    </tr>
                    <tr>
                        <th>ชื่อ-นามสกุล (ไทย)</th>
                        <td>นางสาว จิรวรรธ ชินอ่อน</td>

                    </tr>
                    <tr>
                        <th>ชื่อ-นามสกุล (อังกฤษ)</th>
                        <td>MISS JIRAWAT CHIN-ON </td>

                    </tr>
                    <tr>
                        <th>รหัสประจำตัวประชาชน</th>
                        <td>xxxxxxxxxxxxxxxxxx</td>

                    </tr>
                    <tr>
                        <th>เพศ</th>
                        <td>หญิง</td>

                    </tr>
                    </table>
                    <h3>ช่องทางการติดต่อ</h3>
                    <table class="data">
                    <tr>
                        <th>เบอร์โทรศัพท์</th>
                        <td>082 - 7372010</td>
                    </tr>
                    <tr>
                        <th>เบอร์โทรศัพท์ผู้ปกครอง</th>
                        <td>085 - 4587621</td>

                    </tr>
                    <tr>
                        <th>e-Mail</th>
                        <td>Jirawat.chi@ku.th</td>

                    </tr>
                    </table>
                    <h3>การศึกษาปัจจุบัน</h3>
                    <table class="data">
                    <tr>
                        <th>อาจารย์ที่ปรึกษา</th>
                        <td>จักกริช พฤษการ (E9037)</td>
                    </tr>
                    <tr>
                        <th>ระดับปริญญา</th>
                        <td>ปริญญาตรี</td>

                    </tr>
                    <tr>
                        <th>วิทยาเขต </th>
                        <td>กำแพงแสน</td>
                    </tr>
                    <tr>
                        <th>สาขาวิชา </th>
                        <td>วิศวกรรมคอมพิวเตอร์ (E25)</td>
                    </tr>
                    <tr>
                        <th>คณะ</th>
                        <td>วิศวกรรมศาสตร์ กำแพงแสน</td>
                    </tr>
                    <tr>
                        <th>ประเภทหลักสูตร </th>
                        <td>ภาษาไทย (ภาคปกติ) (E25)</td>
                    </tr>
                    <tr>
                        <th>สถานภาพนิสิต</th>
                        <td>กำลังศึกษา</td>
                    </tr>
                    </table>
                    <h3>การศึกษาระดับมัธยม</h3>
                    <table class="data">
                    <tr>
                        <th>มัธยมศึกษา</th>
                        <td>โรงเรียนสิรินธรราชวิทยาลัย</td>
                    </tr>
                    <tr>
                        <th>จังหวัด</th>
                        <td>นครปฐม</td>
                    </tr>
                    <tr>
                        <th>ช่องทางรับเข้า</th>
                        <td>แอดมิชชั่น</td>
                    </tr>
                    <tr>
                        <th>คะแนน</th>
                        <td>17,900/30,000</td>
                    </tr>
                    </table>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-danger" data-dismiss="modal" value="ปิด">
					</div>
				</form>
			</div>
		</div>
    </div>


    <!-- Edit Modal HTML -->
	<div id="chart" class="modal fade">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<form>
					<div class="modal-header">

                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h3 class="modal-title">ผลการเรียน</h3>
					</div>
					<div class="modal-body">

                        <div class="row">
                            <div class="col-sm-7">

                            <div id="chartContainer" style="height: 300px; width: auto;"></div>
                            <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
                            </div>

                            <div class="col-sm-5">

                            <table class="table" style="height: 300px; width: 50;">
                        <thead>
                            <tr>
                            <th scope="col">ภาคการศึกษา</th>
                            <th scope="col">ปีการศึกษา</th>
                            <th scope="col">หน่วยกิต</th>
                            <th scope="col">ผลการเรียน</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">ภาคต้น</th>
                            <td class="text-center">2559</td>
                            <td class="text-center">22</td>
                            <td>3.40 <span></span></td>

                            </td>

                            </tr>
                            <tr>
                            <th scope="row">ภาคปลาย</th>
                            <td class="text-center">2559</td>
                            <td class="text-center">17</td>
                            <td>3.01 <span style="color:red;">(-0.39)</span></td>

                            </tr>
                            <tr>
                            <th scope="row">ภาคต้น</th>
                            <td class="text-center">2560</td>
                            <td class="text-center">20</td>
                            <td>2.85 <span style="color:red;">(-0.16)</span></td>

                            </tr>
                            <tr>
                            <th scope="row">ภาคปลาย</th>
                            <td class="text-center">2560</td>
                            <td class="text-center">20</td>
                            <td>3.11 <span style="color:green;">(+0.26)</span></td>

                            </tr>
                            <tr>
                            <th scope="row">ภาคต้น</th>
                            <td class="text-center">2561</td>
                            <td class="text-center">21</td>
                            <td>2.98 <span style="color:red;">(-0.13)</span></td>

                            </tr>
                            <tr>
                            <th scope="row">ภาคปลาย</th>
                            <td class="text-center">2561</td>
                            <td class="text-center">14</td>
                            <td>2.79 <span style="color:red;">(-0.19)</span></td>

                            </tr>
                            <tr>
                            <th scope="row">ผลการเรียนเฉลี่ย</th>
                            <td></td>
                            <td class="text-center">114</td>
                            <td>3.25</td>

                            </tr>
                        </tbody>
                            </table>
                            </div> <!--col-4-->


                        </div> <!--row -->

					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-danger" data-dismiss="modal" value="ปิด">
					</div>
				</form>
			</div>
		</div>
    </div>






    </div>
    </body>
    </html>
