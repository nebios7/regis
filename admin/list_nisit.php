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

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
h2 {
    color:#2B7C74;
    font-weight: 900;
}
.nav-tabs
{
    font-size: 20px;
}
</style>

    </head>

    <body>
    <div class="content">
        <!-- <br> -->
        <div style="padding-top: 15px" class="content">
            <div class="hleft">
                <a href="#"><img src="../Image/newLogoUniversity1.png" border="0"/></a>
                <div class="navbar-form navbar-right">
                    <div class = "chip">
                        <div class="dropdown">
                        <!-- <img src="img.png" alt="Person"> -->
                        <font size="4px"><b>Admin</b></font>
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
                        <div class="menu-box-blue  ">
                            <ul>
                                <li>
                                    <a href="home_admin.php"><font color="#000000"><b>หน้าหลัก</b></font></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="menu-box">
                        <div class="menu-box-green active ">
                            <ul>
                                <li>
                                    <a href="list_nisit.php"><font color="#000000"><b>รายชื่อนิสิต</b></font></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="menu-box">
                        <div class="menu-box-red  ">
                            <ul>
                                <li>
                                    <a href="importfile.php"><font color="#000000"><b>นำเข้าข้อมูล</b></font></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

    <!-- navbar tab-->
    <!--model profile -->
    <br>


        <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
    <table id="grade3" class="display" cellspacing="0" width = "100%" >
    <br>
        <thead>
            <tr>

                <th width="80px;"><center>ลำดับที่</center></th>
                <th><center>ภาควิชา</center></th>
                <th width="150px;"><center>รายละเอียด</center></th>

            </tr>
        </thead>

        <!-- <tfoot>
            <tr>
                <th>ลำดับที่</th>
                <th>ภาควิชา</th>
                <th>รายละเอียด</th>
            </tr>
        </tfoot> -->

        <tbody>
            <tr>
                <td class="text-center">1</td>
                <td>ภาควิชาวิศวกรรมโยธา-ชลประทาน</td>
                <td>
                <center><a href="list_nisit_irre.php" class="btn btn-info"><span class="glyphicon glyphicon-list-alt"></span> <font size="3px">รายชื่อนิสิต</font></a></center>
                </td>
            </tr>
            <tr>
                <td class="text-center">2</td>
                <td>ภาควิชาวิศวกรรมเครื่องกล</td>
                <td>
                <center><a href="list_nisit_me.php" class="btn btn-info"><span class="glyphicon glyphicon-list-alt"></span> <font size="3px">รายชื่อนิสิต</font></a></center>


                </td>
            </tr>
            <tr>
                <td class="text-center">3</td>
                <td>ภาควิชาวิศวกรรมโยธา</td>
                <td>
                <center><a href="list_nisit_ce.php" class="btn btn-info"><span class="glyphicon glyphicon-list-alt"></span> <font size="3px">รายชื่อนิสิต</font></a></center>

                </td>
            </tr>
            <tr>
                <td class="text-center">4</td>
                <td>ภาควิชาวิศวกรรมคอมพิวเตอร์</td>
                <td>
                <center><a href="list_nisit_cpe.php" class="btn btn-info"><span class="glyphicon glyphicon-list-alt"></span> <font size="3px">รายชื่อนิสิต</font></a></center>

                </td>
            </tr>
            <tr>
                <td class="text-center">5</td>

                <td>ภาควิชาวิศวกรรมอาหาร</td>
                <td>
                <center><a href="list_nisit_fe.php" class="btn btn-info"><span class="glyphicon glyphicon-list-alt"></span> <font size="3px">รายชื่อนิสิต</font></a></center>

                </td>
            </tr>
            <tr>
                <td class="text-center">6</td>
                <td>ภาควิชาวิศวกรรมอุตสาหการ</td>
                <td>
                <center><a href="list_nisit_ie.php" class="btn btn-info"><span class="glyphicon glyphicon-list-alt"></span> <font size="3px">รายชื่อนิสิต</font></a></center>

                </td>
            </tr>
            <tr>
                <td class="text-center">7</td>
                <td>ภาควิชาวิศวกรรมเกษตร</td>
                <td>
                <center><a href="list_nisit_ae.php" class="btn btn-info"><span class="glyphicon glyphicon-list-alt"></span> <font size="3px">รายชื่อนิสิต</font></a></center>
                </td>
            </tr>
            <tr>
                <td class="text-center">8</td>
                <td>นิสิตทั้งหมด</td>
                <td>
                <center><a href="list_nisit_all.php" class="btn btn-info"><span class="glyphicon glyphicon-list-alt"></span> <font size="3px">รายชื่อนิสิต</font></a></center>
                </td>
            </tr>
        </tbody>
    </table>
    </div>
  </div>
  <script>
$(document).ready(function() {
    $('#grade3').DataTable( {
        responsive: true,
        "pageLength": 10
    } );
} );
</script>
    </div>
    </body>
    </html>
