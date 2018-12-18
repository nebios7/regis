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
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

        <!--page 10 -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>

        <link rel="icon" type="image/png"  href="../../Image/Logo/Logo.png" class="_web-inspector-hide-shortcut_">
        <link href="Fonts/DBOzoneX.css" rel="stylesheet" type="text/css">                                         <!--  Font Template -->
        <link href="../../Library/Css/font-awesome.min.css" rel="stylesheet" type="text/css">                                    <!-- รูปต่างๆ สัญลักษณ์ -->
        <link href="Library/Css/myTemplate.css" rel="stylesheet" type="text/css">                                          <!-- CSS Template -->
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
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: red;
   color: white;
   text-align: center;
}
span {
    color:green;
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
                <a href="#"><img src="Image/newLogoUniversity1.png" border="0"/></a>
                <div class="navbar-form navbar-right">
                    <div class = "chip">
                        <div class="dropdown">
                        <!-- <img src="img.png" alt="Person"> -->
                        <font size="4px"><b>จิรวรรธ ชินอ่อน</b></font>
                        <!-- <a  href="" data-toggle="modal"  data-target="#Login" title="เข้าสู่ระบบ"><font size="4px"><i class="fa fa-fw fa-lock"></i><b>เข้าสู่ระบบ</b></font></a> -->
                        <a href="" data-toggle="tooltip" title="ออกจากระบบ"><font size="4px" color="red"><i class="fa fa-fw fa-power-off"></i><b>ออกจากระบบ</b></font></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--  aaaaaaaa    -->
        <div style="padding-top: 15px" class="content">
                <div class="menu-top">
                    <div class="menu-box">
                        <div class="menu-box-blue ">
                            <ul>
                                <li>
                                    <a href="nisit.php"><font color="#000000"><b>หน้าหลัก</b></font></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="menu-box">
                        <div class="menu-box-green ">
                            <ul>
                                <li>
                                    <a href="info_nisit.php"><font color="#000000"><b>ข้อมูลส่วนตัว</b></font></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="menu-box">
                        <div class="menu-box-red ">
                            <ul>
                                <li>
                                    <a href="timetable.php"><font color="#000000"><b>ตารางเรียน</b></font></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="menu-box">
                        <div class="menu-box-purple active ">
                            <ul>
                                <li>
                                    <a href="examschedule.php"><font color="#000000"><b>ตารางสอบ</b></font></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="menu-box">
                        <div class="menu-box-orange  ">
                            <ul>
                                <li>
                                    <a href="form_gpa.php"><font color="#000000"><b>คำนวณผลการเรียน</b></font></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="menu-box">
                        <div class="menu-box-sky">
                            <ul>
                                <li>
                                                <a href="report.php"><b><font color="#000000">รายงาน</font></b></a>
                                                <!-- <ul>
                                                    <li><a href=""><font color="#000000">รายงานสถิติ</font></a></li>
                                                    <li><a href=""><font color="#000000">รายงานผลการเรียน</font></a></li>
                                                </ul> -->
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


<!--model table sort -->
<h2>ตารางสอบปีการศึกษา <span> 2561 </span> ภาคการศึกษา <span>ภาคต้น </span> </h2>
<table id="grade" class="display" cellspacing="0" width = "100%" >
    <br>
        <thead>
            <tr>

                <th>รหัสวิชา</th>
                <th>ชิ่อวิชา</th>
                <th>หมู่เรียน</th>
                <th>วันที่</th>
                <th>ห้องสอบ</th>
                <th>เวลา</th>

            </tr>
        </thead>

        <tfoot>
            <tr>
                <th>รหัสวิชา</th>
                <th>ชิ่อวิชา</th>
                <th>หมู่เรียน</th>
                <th>วันที่</th>
                <th>ห้องสอบ</th>
                <th>เวลา</th>
            </tr>
        </tfoot>

        <tbody>
            <tr>
                <td class="text-center">01417167</td>
                <td>Engineering Mathematics II</td>
                <td class="text-center">700</td>
                <td>10 ตุลาคม 2561 </td>
                <td class="text-center">E9501</td>
                <td>13.00-16.00</td>
            </tr>
            <tr>
                <td class="text-center">01420111</td>
                <td>General Physics I</td>
                <td class="text-center">701</td>
                <td>09 ตุลาคม 2561 </td>
                <td class="text-center">E4403</td>
                <td>10.00-12.00</td>
            </tr>
            <tr>
                <td class="text-center">01420113</td>
                <td>Laboratory in Physics I</td>
                <td class="text-center">703</td>
                <td>11 ตุลาคม 2561 </td>
                <td class="text-center">E8405</td>
                <td>13.00-16.00</td>
            </tr>
            <tr>
                <td class="text-center">01999021</td>
                <td>Thai Language for Communication</td>
                <td class="text-center">704</td>
                <td>14 ตุลาคม 2561 </td>
                <td class="text-center">E9501</td>
                <td>13.00-16.00</td>

            </tr>
            <tr>
                <td class="text-center">02204112</td>
                <td>Engineering Mathematics I</td>
                <td class="text-center">700</td>
                <td>10 ตุลาคม 2561 </td>
                <td class="text-center">LH3-301</td>
                <td>08.00-10.00</td>

            </tr>
            <tr>
                <td class="text-center">02999144</td>
                <td>Introduction to Object-Oriented Programming</td>
                <td class="text-center">700</td>
                <td>10 ตุลาคม 2561 </td>
                <td class="text-center">E8403</td>
                <td>10.00-12.00</td>

            </tr>
            <tr>
                <td class="text-center">01420113</td>
                <td>Life Skills For Undergraduate Student</td>
                <td class="text-center">700</td>
                <td>12 ตุลาคม 2561 </td>
                <td class="text-center">E9501</td>
                <td>13.00-16.00</td>
            </tr>
        </tbody>
    </table>
<!--end model table sort -->


<script>
$(document).ready(function() {
    $('#grade').DataTable( {
        responsive: true,
        "pageLength": 10
    } );
} );
</script>

    </div>
    </body>
    <!-- footer -->
    <!-- <div class="footer">
    <p>Footer</p>
    </div>  -->
    <!-- end footer -->
    </html>
