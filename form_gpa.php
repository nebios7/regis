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

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


        <!-- <link rel="icon" type="image/png"  href="../../Image/Logo/Logo.png" class="_web-inspector-hide-shortcut_"> -->
        <link href="Fonts/DBOzoneX.css" rel="stylesheet" type="text/css">                                         <!--  Font Template -->
        <link href="../../Library/Css/font-awesome.min.css" rel="stylesheet" type="text/css">                                   <!-- รูปต่างๆ สัญลักษณ์-->
        <link href="Library/Css/myTemplate.css" rel="stylesheet" type="text/css">                                          <!--CSS Template-->
        <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">                                                  เส้นกรอบ -->
        <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">     <!-- ลบแล้ว step เป็นวงกลม -->

    <style>

mark{
    background-color: #F1E8E8;
    font-size: 22px;
    font-weight: 900;
}
table{
    font-size: 22px;
}
</style>

    </head>

    <body>
    <div class="content">
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
                        <div class="menu-box-purple ">
                            <ul>
                                <li>
                                    <a href="examschedule.php"><font color="#000000"><b>ตารางสอบ</b></font></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="menu-box">
                        <div class="menu-box-orange active ">
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
        <!--calculator-->
            <br>
        <mark class="text-right">เกรดเฉลี่ยนสะสม:<span style="color:green;">&nbsp;2.96</span>&nbsp;&nbsp;&nbsp;หน่วยกิต:<span style="color:green;">&nbsp;113</span></mark>
        <!-- <br><br> -->
        <!-- <a href="cal_gpa.php"><input type="button" class="btn btn-info " style=" font-size: 22px;" value="เพิ่มวิชา"></a> -->

    <form method = "post" action ="">
            <div class="col-md-12">
                <table class="table" id="tb_admin">
                	<thead>
                    	<tr>
                        	<th><center>ชื่อวิชา<span style="color:red">*</span></center></th>
                        	<th><center>เกรด<span style="color:red">*</span></center></th>
                     	</tr>
                    </thead>
                   	<tbody>
                    	<!-- ช่อง 1 -->
                    	<tr>
                        	<td>
                            <center><select name="list_sub3" id="list_sub3" class="form-control input_sub">
                                    <option value="default">Data Structures & Algrorithms I</option>
                                    <!-- <option value="1">Introduction to Object-Oriented Programming</option>
                                    <option value="2">Data Structures & Algrorithms I</option>
                                    <option value="3">Data Structures & Algrorithms II</option>
                                    <option value="4">Computer Network Design</option>
                                    <option value="5">Computer Architecture</option>
                                    <option value="6">Practi. in Program.& Problem Solving Skills</option>
                                    <option value="7">Digital Fundamentals</option>
                                    <option value="8">Digital Laboratory</option> -->
                                 </select></center>
     						</td>
                            <td>
                                 <center><select name="add_grade1" id="add_grade1" class="form-control input_grade">
                                    <option value="-">-</option>
                                    <option value="4">A</option>
                                    <option value="3.5">B+</option>
                                    <option value="3">B</option>
                                    <option value="2.5">C+</option>
                                    <option value="2">C</option>
                                    <option value="1.5">D+</option>
                                    <option value="1">D</option>
                                    <option value="0">F</option>
                                </select></center>
    						</td>
                        </tr>

                        <!-- ช่อง 2 -->
                        <tr>
                        	<td>
                            <center><select name="list_sub3" id="list_sub3" class="form-control input_sub">
                                    <option value="default">Digital Fundamentals</option>
                                    <!-- <option value="1">Introduction to Object-Oriented Programming</option>
                                    <option value="2">Data Structures & Algrorithms I</option>
                                    <option value="3">Data Structures & Algrorithms II</option>
                                    <option value="4">Computer Network Design</option>
                                    <option value="5">Computer Architecture</option>
                                    <option value="6">Practi. in Program.& Problem Solving Skills</option>
                                    <option value="7">Digital Fundamentals</option>
                                    <option value="8">Digital Laboratory</option> -->
                                 </select></center>
     						</td>
                            <td>
                                 <center><select name="add_grade2" id="add_grade2" class="form-control input_grade">
                                    <option value="-">-</option>
                                    <option value="4">A</option>
                                    <option value="3.5">B+</option>
                                    <option value="3">B</option>
                                    <option value="2.5">C+</option>
                                    <option value="2">C</option>
                                    <option value="1.5">D+</option>
                                    <option value="1">D</option>
                                    <option value="0">F</option>
                                </select></center>
    						</td>
                        </tr>
                        <!-- ช่อง 3 -->
                        <tr>
                        	<td>
                                <center><select name="list_sub3" id="list_sub3" class="form-control input_sub">
                                    <option value="default">Digital Laborator</option>
                                    <!-- <option value="1">Introduction to Object-Oriented Programming</option>
                                    <option value="2">Data Structures & Algrorithms I</option>
                                    <option value="3">Data Structures & Algrorithms II</option>
                                    <option value="4">Computer Network Design</option>
                                    <option value="5">Computer Architecture</option>
                                    <option value="6">Practi. in Program.& Problem Solving Skills</option>
                                    <option value="7">Digital Fundamentals</option>
                                    <option value="8">Digital Laboratory</option> -->
                                 </select></center>
     						</td>
                            <td>
                                 <center><select name="add_grade3" id="add_grade3" class="form-control input_grade">
                                    <option value="-">-</option>
                                    <option value="4">A</option>
                                    <option value="3.5">B+</option>
                                    <option value="3">B</option>
                                    <option value="2.5">C+</option>
                                    <option value="2">C</option>
                                    <option value="1.5">D+</option>
                                    <option value="1">D</option>
                                    <option value="0">F</option>
                                </select></center>
    						</td>
                        </tr>
                        <!-- ช่อง 4 -->
                        <tr>
                        	<td>
                            <center><select name="list_sub3" id="list_sub3" class="form-control input_sub">
                                    <option value="default">Practi. in Program.& Problem Solving Skills</option>
                                    <!-- <option value="1">Introduction to Object-Oriented Programming</option>
                                    <option value="2">Data Structures & Algrorithms I</option>
                                    <option value="3">Data Structures & Algrorithms II</option>
                                    <option value="4">Computer Network Design</option>
                                    <option value="5">Computer Architecture</option>
                                    <option value="6">Practi. in Program.& Problem Solving Skills</option>
                                    <option value="7">Digital Fundamentals</option>
                                    <option value="8">Digital Laboratory</option> -->
                                 </select></center>
     						</td>
                            <td>
                                 <center><select name="add_grade4" id="add_grade4" class="form-control input_grade">
                                    <option value="-">-</option>
                                    <option value="4">A</option>
                                    <option value="3.5">B+</option>
                                    <option value="3">B</option>
                                    <option value="2.5">C+</option>
                                    <option value="2">C</option>
                                    <option value="1.5">D+</option>
                                    <option value="1">D</option>
                                    <option value="0">F</option>
                                </select></center>
    						</td>
                        </tr>
                        <!-- ช่อง 5 -->
                        <tr>
                        	<td>
                            <center><select name="list_sub3" id="list_sub3" class="form-control input_sub">
                                    <option value="default">Computer Network Design</option>
                                    <!-- <option value="1">Introduction to Object-Oriented Programming</option>
                                    <option value="2">Data Structures & Algrorithms I</option>
                                    <option value="3">Data Structures & Algrorithms II</option>
                                    <option value="4">Computer Network Design</option>
                                    <option value="5">Computer Architecture</option>
                                    <option value="6">Practi. in Program.& Problem Solving Skills</option>
                                    <option value="7">Digital Fundamentals</option>
                                    <option value="8">Digital Laboratory</option> -->
                                 </select></center>
     						</td>
                            <td>
                                 <center><select name="add_grade5" id="add_grade5" class="form-control input_grade">
                                    <option value="-">-</option>
                                    <option value="4">A</option>
                                    <option value="3.5">B+</option>
                                    <option value="3">B</option>
                                    <option value="2.5">C+</option>
                                    <option value="2">C</option>
                                    <option value="1.5">D+</option>
                                    <option value="1">D</option>
                                    <option value="0">F</option>
                                </select></center>
    						</td>
                        </tr>

                        <!-- ช่อง 6 -->
                        <tr>
                        	<td>
                            <center><select name="list_sub3" id="list_sub3" class="form-control input_sub">
                                    <option value="default">Introduction to Object-Oriented Programming</option>
                                    <!-- <option value="1">Introduction to Object-Oriented Programming</option>
                                    <option value="2">Data Structures & Algrorithms I</option>
                                    <option value="3">Data Structures & Algrorithms II</option>
                                    <option value="4">Computer Network Design</option>
                                    <option value="5">Computer Architecture</option>
                                    <option value="6">Practi. in Program.& Problem Solving Skills</option>
                                    <option value="7">Digital Fundamentals</option>
                                    <option value="8">Digital Laboratory</option> -->
                                 </select></center>
     						</td>
                            <td>
                                 <center><select name="add_grade7" id="add_grade7" class="form-control input_grade">
                                    <option value="-">-</option>
                                    <option value="4">A</option>
                                    <option value="3.5">B+</option>
                                    <option value="3">B</option>
                                    <option value="2.5">C+</option>
                                    <option value="2">C</option>
                                    <option value="1.5">D+</option>
                                    <option value="1">D</option>
                                    <option value="0">F</option>
                                </select></center>
    						</td>
                        </tr>
                        <!-- ช่อง 8 -->
                        <!-- <tr>
                        	<td>
                            <center><select name="list_sub3" id="list_sub3" class="form-control input_sub">
                                    <option value="default">--กรุณาเลือกวิชา--</option>
                                    <option value="1">Introduction to Object-Oriented Programming</option>
                                    <option value="2">Data Structures & Algrorithms I</option>
                                    <option value="3">Data Structures & Algrorithms II</option>
                                    <option value="4">Computer Network Design</option>
                                    <option value="5">Computer Architecture</option>
                                    <option value="6">Practi. in Program.& Problem Solving Skills</option>
                                    <option value="7">Digital Fundamentals</option>
                                    <option value="8">Digital Laboratory</option>
                                 </select></center>
     						</td>
                            <td>
                                 <center><select name="add_grade8" id="add_grade8" class="form-control input_grade">
                                    <option value="-">-</option>
                                    <option value="4">A</option>
                                    <option value="3.5">B+</option>
                                    <option value="3">B</option>
                                    <option value="2.5">C+</option>
                                    <option value="2">C</option>
                                    <option value="1.5">D+</option>
                                    <option value="1">D</option>
                                    <option value="0">F</option>
                                </select></center>
    						</td>
                        </tr> -->

                 	</tbody>

                </table>

                <center>
                    <input type="reset" class="btn btn-danger btn-lg active" style=" font-size: 22px;" value="ล้างข้อมูล"/>
                    <a href="cal_gpa.php"><input type="button" class="btn btn-success btn-lg active" style=" font-size: 22px;" value="คำนวณผลการเรียน"></a>
                </center>
			</div>
</form>



    </div>


    </body>
    </html>
