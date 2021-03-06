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
                                    <a href="timetable.php"><font color="#000000"><b>นำเข้าข้อมูล</b></font></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

    <!-- navbar tab-->
    <h2>นิสิตภาควิชาวิศวกรรมโยธา</h2>
    <!--model table sort -->
    <table id="grade" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>รหัสนิสิต</th>
                <th>ชื่อ-นามสกุล</th>
                <th>ชั้นปี</th>

            </tr>
        </thead>

        <tfoot>
            <tr>
                <th>รหัสนิสิต</th>
                <th>ชื่อ-นามสกุล</th>
                <th>ชั้นปี</th>

            </tr>
        </tfoot>

        <tbody>
            <tr>
                <td class="text-center">5620503333</td>
                <td >อาทิตย์ ตะวัน</td>
                <td class="text-center">4</td>


            </tr>
    <tr>
    <td class="text-center">2559</td>
    <td class="text-center">ภาคต้น</td>
    <td class="text-center">01420111</td>

  </tr>
  <tr>
  <td class="text-center">2559</td>
    <td class="text-center">ภาคปลาย</td>
    <td class="text-center">01420113</td>

  </tr>
  <tr>
  <td class="text-center">2559</td>
  <td class="text-center">ภาคต้น</td>
    <td class="text-center">01999021</td>


  </tr>
  <tr>
  <td class="text-center">2559</td>
  <td class="text-center">ภาคต้น</td>
    <td class="text-center">02204112</td>


  </tr>
  <tr>
  <td class="text-center">2560</td>
  <td class="text-center">ภาคปลาย</td>
    <td class="text-center">02999144</td>


  </tr>
  <td class="text-center">2560</td>
  <td class="text-center">ภาคปลาย</td>
    <td class="text-center">02999144</td>


  </tr>
  <tr>
  <td class="text-center">2560</td>
                <td class="text-center">ภาคต้น</td>
                <td class="text-center">01417167</td>


            </tr>
  <tr>
  <td class="text-center">2560</td>
    <td class="text-center">ภาคต้น</td>
    <td class="text-center">01420111</td>

  </tr>
  <td class="text-center">2560</td>
  <td class="text-center">ภาคปลาย</td>
    <td class="text-center">02999144</td>

  </tr>
  <td class="text-center">2560</td>
  <td class="text-center">ภาคต้น</td>
    <td class="text-center">02999144</td>

  <tr>
  <td class="text-center">2561</td>
                <td class="text-center">ภาคต้น</td>
                <td class="text-center">01417167</td>

            </tr>
            <tr>
            <td class="text-center">2560</td>
                <td class="text-center">ภาคต้น</td>
                <td class="text-center">01420111</td>

            </tr>
            <td class="text-center">2561</td>
            <td class="text-center">ภาคปลาย</td>
                <td class="text-center">02999144</td>

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
