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

        <!-- <link rel="icon" type="image/png"  href="../../Image/Logo/Logo.png" class="_web-inspector-hide-shortcut_"> -->
        <link href="Fonts/DBOzoneX.css" rel="stylesheet" type="text/css">                                         <!--  Font Template -->
        <link href="../../Library/Css/font-awesome.min.css" rel="stylesheet" type="text/css">                                    <!-- รูปต่างๆ สัญลักษณ์ -->
        <link href="Library/Css/myTemplate.css" rel="stylesheet" type="text/css">                                         <!-- CSS Template -->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">                                                  <!-- เส้นกรอบ -->
        <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">      <!-- ลบแล้ว step เป็นวงกลม -->




        <script type="text/javascript" src="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.js"></script>

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
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: red;
   color: white;
   text-align: center;
}
</style>

    </head>

    <body>
    <div class="content">
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
                        <div class="menu-box-blue active ">
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
                        <div class="menu-box-purple ">
                            <ul>
                                <li>
                                    <a href="examschedule.php"><font color="#000000"><b>ตารางสอบ</b></font></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="menu-box">
                        <div class="menu-box-orange ">
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
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

    <!--model profile -->
    <br>
                <div class="jumbotron">
                  <div class="row">

                      <div>
                          <div class="" style="border-bottom:1px solid black">
                            <h2 style = "font-weight: 900;">ข้อมูลสมาชิก : นิสิต</h2>
                          </div>
                            <!-- <hr> -->
                            <br>
                          <div class="col-md-6">
                          <div class="col-sm-5 col-xs-6 tital" style = "font-weight: 900;" >รหัสนิสิต:</div><div class="col-sm-7 col-xs-6 ">5820503121</div>
                            <div class="clearfix"></div><div class="bot-border"></div>
                            <div class="col-sm-5 col-xs-6 tital"style = "font-weight: 900;" >ชื่อ - นามสกุล:</div><div class="col-sm-7 col-xs-6 ">นางสาวจิรวรรธ ชินอ่อน</div>
                            <div class="clearfix"></div><div class="bot-border"></div>
                            <div class="col-sm-5 col-xs-6 tital "style = "font-weight: 900;" ></div><div class="col-sm-7 col-xs-6 ">Jirawat Chin - on</div>
                            <div class="clearfix"></div><div class="bot-border"></div>
                            <div class="col-sm-5 col-xs-6 tital " style = "font-weight: 900;">เบอร์โทรศัพท์:</div><div class="col-sm-7 col-xs-6 ">082 - 7372010</div>
                            <div class="clearfix"></div><div class="bot-border"></div>
                            <div class="col-sm-5 col-xs-6 tital " style = "font-weight: 900;">อีเมล:</div><div class="col-sm-7 col-xs-6 ">Jirawat.chi@ku.th</div>
                            <div class="clearfix"></div><div class="bot-border"></div>
                            <div class="col-sm-5 col-xs-6 tital "style = "font-weight: 900;" >วัน/เดือน/ปีเกิด:</div><div class="col-sm-7 col-xs-6 ">12 มีนาคม 2540</div>
                            <div class="clearfix"></div><div class="bot-border"></div>
                          </div>
                          <div class="col-md-6">
                            <div class="col-sm-3 col-xs-3 tital " style = "font-weight: 900;">คณะ:</div><div class="col-sm-8 col-xs-5 ">วิศวกรรมศาสตร์ กำแพงแสน </div>
                            <div class="clearfix"></div><div class="bot-border"></div>
                            <div class="col-sm-3 col-xs-3 tital " style = "font-weight: 900;">สาขาวิชา:</div><div class="col-sm-8 col-xs-5 ">วิศวกรรมคอมพิวเตอร์และอิเล็กทรอนิกส์</div>
                            <div class="clearfix"></div><div class="bot-border"></div>
                            <div class="col-sm-3 col-xs-3 tital " style = "font-weight: 900;">หลักสูตร:</div><div class="col-sm-8 col-xs-5 ">วิศวกรรมคอมพิวเตอร์และอิเล็กทรอนิกส์ 2555</div>
                            <div class="clearfix"></div><div class="bot-border"></div>
                          </div>
                      </div>
                    </div>
                </div>
    <!--end model profile -->
    <!--model table sort -->
    <a href="excel2.php" class="btn btn-success"><span class="glyphicon glyphicon-file"></span> <font size="3px">Excel</font></a>
    <a href="printpdf.php" class="btn btn-danger"><span class="glyphicon glyphicon-file"></span> <font size="3px">PDF</font></a>

    <br><br>
    <table id="grade" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ปีการศึกษา</th>
                <th>ภาคการศึกษา</th>
                <th>รหัสวิชา</th>
                <th>ชิ่อวิชา</th>
                <th>หมวดวิชา</th>
                <th>ผลการเรียน</th>
                <th>หน่วยกิต</th>
            </tr>
        </thead>

        <tfoot>
            <tr>
                <th>ปีการศึกษา</th>
                <th>ภาคการศึกษา</th>
                <th>รหัสวิชา</th>
                <th>ชิ่อวิชา</th>
                <th>หมวดวิชา</th>
                <th>ผลการเรียน</th>
                <th>หน่วยกิต</th>
            </tr>
        </tfoot>

        <tbody>
            <tr>
                <td class="text-center">2559</td>
                <td class="text-center">ภาคต้น</td>
                <td class="text-center">01417167</td>
                <td>Engineering Mathematics I</td>
                <td class="text-center">เฉพาะเลือก</td>
                <td class="text-center">B+</td>
                <td class="text-center">3</td>
            </tr>
                <tr>
                <td class="text-center">2559</td>
                <td class="text-center">ภาคต้น</td>
                <td class="text-center">01420111</td>
                <td>General Physics I</td>
                <td class="text-center">เฉพาะเลือก</td>
                <td class="text-center">D</td>
                <td class="text-center">3</td>
            </tr>
            <tr>
                <td class="text-center">2559</td>
                <td class="text-center">ภาคปลาย</td>
                <td class="text-center">01420113</td>
                <td>Laboratory in Physics I</td>
                <td class="text-center">เฉพาะเลือก</td>
                <td class="text-center">A</td>
                <td class="text-center">1</td>
            </tr>
            <tr>
            <td class="text-center">2559</td>
            <td class="text-center">ภาคต้น</td>
                <td class="text-center">01999021</td>
                <td>Thai Language for Communication</td>
                <td class="text-center">ศึกษาทั่วไป</td>
                <td class="text-center">B</td>
                <td class="text-center">3</td>
            </tr>
            <tr>
            <td class="text-center">2559</td>
            <td class="text-center">ภาคต้น</td>
                <td class="text-center">02204112</td>
                <td>Introduction to Object-Oriented Programming</td>
                <td class="text-center">เฉพาะเลือก</td>
                <td class="text-center">C</td>
                <td class="text-center">3</td>
            </tr>
            <tr>
            <td class="text-center">2560</td>
            <td class="text-center">ภาคปลาย</td>
                <td class="text-center">02999144</td>
                <td>Life Skills For Undergraduate Student</td>
                <td class="text-center">ศึกษาทั่วไป</td>
                <td class="text-center">A</td>
                <td class="text-center">1</td>
            </tr>
            <td class="text-center">2560</td>
            <td class="text-center">ภาคปลาย</td>
                <td class="text-center">02999144</td>
                <td>Life Skills For Undergraduate Student</td>
                <td class="text-center">ศึกษาทั่วไป</td>
                <td class="text-center">A</td>
                <td class="text-center">1</td>
            </tr>
             <tr>
                <td class="text-center">2560</td>
                <td class="text-center">ภาคต้น</td>
                <td class="text-center">01417167</td>
                <td>Engineering Mathematics I</td>
                <td class="text-center">เฉพาะเลือก</td>
                <td class="text-center">B+</td>
                <td class="text-center">3</td>
            </tr>
            <tr>
            <td class="text-center">2560</td>
                <td class="text-center">ภาคต้น</td>
                <td class="text-center">01420111</td>
                <td>General Physics I</td>
                <td class="text-center">เฉพาะเลือก</td>
                <td class="text-center">D</td>
                <td class="text-center">3</td>
            </tr>
            <td class="text-center">2560</td>
            <td class="text-center">ภาคปลาย</td>
                <td class="text-center">02999144</td>
                <td>Life Skills For Undergraduate Student</td>
                <td class="text-center">ศึกษาทั่วไป</td>
                <td class="text-center">A</td>
                <td class="text-center">1</td>
            </tr>
            <td class="text-center">2560</td>
            <td class="text-center">ภาคต้น</td>
                <td class="text-center">02999144</td>
                <td>Life Skills For Undergraduate Student</td>
                <td class="text-center">ศึกษาทั่วไป</td>
                <td class="text-center">A</td>
                <td class="text-center">1</td>
            </tr>
              <tr>
                <td class="text-center">2561</td>
                <td class="text-center">ภาคต้น</td>
                <td class="text-center">01417167</td>
                <td>Engineering Mathematics I</td>
                <td class="text-center">เฉพาะเลือก</td>
                <td class="text-center">B+</td>
                <td class="text-center">3</td>
            </tr>
            <tr>
            <td class="text-center">2560</td>
                <td class="text-center">ภาคต้น</td>
                <td class="text-center">01420111</td>
                <td>General Physics I</td>
                <td class="text-center">เฉพาะเลือก</td>
                <td class="text-center">D</td>
                <td class="text-center">3</td>
            </tr>
            <td class="text-center">2561</td>
            <td class="text-center">ภาคปลาย</td>
                <td class="text-center">02999144</td>
                <td>Life Skills For Undergraduate Student</td>
                <td class="text-center">ศึกษาทั่วไป</td>
                <td class="text-center">A</td>
                <td class="text-center">1</td>
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
