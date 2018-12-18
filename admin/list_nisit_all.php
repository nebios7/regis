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
    <h2>นิสิตในคณะวิศวกรรมศาสตร์</h2>
    <!--model table sort -->
    <table id="grade" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th class="text-center" style="width:120px;">รหัสนิสิต</th>
                <th class="text-center">ชื่อ-นามสกุล</th>
                <th class="text-center" style="width:100px;">ภาควิชา</th>

                <th class="text-center" style="width:120px;">ชั้นปี</th>
                <th class="text-center" style="width:120px;">ประเภทหลักสูตร</th>

            </tr>
        </thead>

        <tfoot>
            <tr>
                <th class="text-center">รหัสนิสิต</th>
                <th class="text-center">ชื่อ-นามสกุล</th>
                <th class="text-center">ภาควิชา</th>

                <th class="text-center">ชั้นปี</th>
                <th class="text-center">ประเภทหลักสูตร</th>


            </tr>
        </tfoot>

        <tbody>
            <tr>
                <td class="text-center">5820503333</td>
                <td >ดนุพล</td>
                <td >วศ.เครืองกล</td>
                <td class="text-center">4</td>
                <td class="text-center">ภาคปกติ</td>

            </tr>
            <tr>
                <td class="text-center">5920551236</td>
                <td>ชูวิทย์ </td>
                <td >วศ.เครืองกล</td>

                <td class="text-center">3</td>
                <td class="text-center">ภาคพิเศษ</td>


             </tr>
             <tr>
                <td class="text-center">6020559845</td>
                <td >เปรม </td>
                <td >วศ.โยธา-ชลประทาน</td>

                <td class="text-center">2</td>
                <td class="text-center">ภาคพิเศษ</td>


            </tr>
            <tr>
                <td class="text-center">6120551459</td>
                <td>ประยุทธ์ </td>
                <td >วศ.โยธา</td>

                <td class="text-center">1</td>
                <td class="text-center">ภาคพิเศษ</td>

             </tr>
             <tr>
                <td class="text-center">5820503261</td>
                <td >สุเทพ </td>
                <td >วศ.โยธา</td>

                <td class="text-center">4</td>
                <td class="text-center">ภาคปกติ</td>

            </tr>
            <tr>
                <td class="text-center">6020503211</td>
                <td>พิชิต </td>
                <td >วศ.เกษตร</td>

                <td class="text-center">2</td>
                <td class="text-center">ภาคปกติ</td>

             </tr>
             <tr>
                <td class="text-center">6120501147</td>
                <td >ประวิตร</td>
                <td >วศ.คอมพิวเตอร์</td>

                <td class="text-center">1</td>
                <td class="text-center">ภาคปกติ</td>

            </tr>
            <tr>
                <td class="text-center">5920556945</td>
                <td>ตะวัน </td>
                <td >วศ.เกษตร</td>

                <td class="text-center">3</td>
                <td class="text-center">ภาคพิเศษ</td>


             </tr>
             <tr>
                <td class="text-center">6020503112</td>
                <td >มะลิ </td>
                <td >วศ.อารหาร</td>

                <td class="text-center">2</td>
                <td class="text-center">ภาคปกติ</td>

            </tr>
            <tr>
                <td class="text-center">6120555555</td>
                <td>มารวย </td>
                <td >วศ.เครืองกล</td>

                <td class="text-center">1</td>
                <td class="text-center">ภาคพิเศษ</td>

             </tr>

            </tbody>
</table>
<!--end model table sort -->


<script>
$(document).ready(function() {
    $('#grade').DataTable( {
        responsive: true,
        "pageLength": 50
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
