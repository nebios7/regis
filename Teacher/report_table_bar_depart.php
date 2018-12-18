<?php

$dataPoints = array(
    array('y' => 3.14, 'label' => 'ปีการศึกษา 2560 ภาคต้น'),
    array('y' => 2.64, 'label' => 'ปีการศึกษา 2560 ภาคปลาย'),
    array('y' => 3.01, 'label' => 'ปีการศึกษา 2561 ภาคต้น'),
    array('y' => 2.53, 'label' => 'ปีการศึกษา 2561 ภาคปลาย'),
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
        <link href="../../Library/Css/font-awesome.min.css" rel="stylesheet" type="text/css">                                    <!--รูปต่างๆ สัญลักษณ์-->
        <link href="../Library/Css/myTemplate2.css" rel="stylesheet" type="text/css">                                          <!-- CSS Template -->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">                                                 <!-- เส้นกรอบ -->
        <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">      <!-- ลบแล้ว step เป็นวงกลม -->

    <style>
table,td {    
    border: 1px solid black;
    
}
table{
        border-collapse: collapse;
    width: 100%;
    margin-top: 20px;
    font-size: 20px;
}
th, td {
    
    padding: 8px;
}

th {
    background-color: #496F5A;
    color: white;
    text-align: center;
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


.btn
{
    font-size: 16px;
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
<script>
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
    colorSet: "colorShades",
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
    </head>

    <body>
    <div class="content">
        <div style="padding-top: 15px" class="content">
            <div class="hleft">
                <a href="#"><img src="../Image/newLogoUniversity1.png" border="0"/></a>
                <div class="navbar-form navbar-right">
                    <div class = "chip">
                        <div class="dropdown">
                        <!-- <img src="img.png" alt="Person"> -->
                        <font size="4px"><b>หัวห้าภาควิชา</b></font>
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
                                    <a href="home_headDepartment.php"><font color="#000000"><b>หน้าหลัก</b></font></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="menu-box">
                        <div class="menu-box-green ">
                            <ul>
                                <li>
                                    <a href="timetable_headeDepartment.php"><font color="#000000"><b>ตารางสอน</b></font></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="menu-box">
                        <div class="menu-box-red active ">
                            <ul>
                                <li>
                                    <a href="report_headDepart.php"><font color="#000000"><b>รายงาน</b></font></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
          <!--  <div class="picside">
<img class="profile" src="profile.png">  -->

 <!--<input type='file' name='file'>
 <p></p>
 <button type='submit' name='submit'>อัปโหลดรูปโปรไฟล์</button></div>-->
 <!--ตาราง -->
 
<h2> รายงานผลการเรียน <span style="color:#496F5A">รายงานผลการเรียน ปีการศึกษาทั้งหมด หลักสูตร A</span></h2>
<table>
    <tr>
    <th>ปีการศึกษา</th>
    <th>หลักสูตร</th>
    <th colspan="4">GPA &nbsp;<a href="report_table_bar_depart.php"><img src="bar.png"></th>
    <th colspan="7">จำนวนนิสิต &nbsp;<a href="report_table_bar_depart.php"><img src="bar.png"></th>
    </tr>
    <tr>
        <th></th>
        <th></th>
        <th>MAX &nbsp;<a href="report_table_bar_depart.php"><img src="bar.png"></th>
        <th>MIN &nbsp;<a href="report_table_bar_depart.php"><img src="bar.png"></th>
        <th>AVG. &nbsp;<a href="report_table_bar_depart.php"><img src="bar.png"></th>
        <th>S.D.</th>
        <th>ทั้งหมด</th>
        <th><โปรต่ำ</th>
        <th>โปรต่ำ</th>
        <th>โปรสูง</th>
        <th>ปกติ</th>
        <th>เกียรตินิยม</th>
        <th></th>
        
        
    </tr>
    <tr>
        <td>2560</td>
        <td> A </td>
        <td>3.78</td>
        <td>2.03</td>
        <td>2.89</td>
        <td>xxx</td>
        <td>82</td>
        <td>1</td>
        <td>2</td>
        <td>3</td>
        <td>64</td>
        <td>12</td>
        <td align="center"><a href="report_table_pie_depart.php"><img src="pie.png"></td>
        
        
    </tr>
    <tr>
        <td>2561</td>
        <td> A </td>
        <td>3.61</td>
        <td>1.98</td>
        <td>2.77</td>
        <td>xxx</td>
        <td>93</td>
        <td>2</td>
        <td>5</td>
        <td>7</td>
        <td>71</td>
        <td>8</td>
        <td align="center"><a href="report_table_pie_depart.php"><img src="pie.png"></td>
        
        
    </tr>
</table>
<center><h3>เกรดเฉลี่ยของนิสิต (AVG) </h3></center>
<div id="chartContainer" style="height: 300px; width: auto;"></div>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<!--model table sort -->
<!--<h2>ตารางสอบปีการศึกษา <span> 2561 </span> ภาคการศึกษา <span>ภาคต้น </span> </h2>
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
                <td>01417167</td>
                <td>Engineering Mathematics II</td>
                <td>700</td>
                <td>10 ตุลาคม 2561 </td>
                <td>E9501</td>
                <td>13.00-16.00</td>
            </tr>
            <tr>
                <td>01420111</td>
                <td>General Physics I</td>
                <td>701</td>
                <td>09 ตุลาคม 2561 </td>
                <td>E4403</td>
                <td>10.00-12.00</td>
            </tr>
            <tr>
                <td>01420113</td>
                <td>Laboratory in Physics I</td>
                <td>703</td>
                <td>11 ตุลาคม 2561 </td>
                <td>E8405</td>
                <td>13.00-16.00</td>
            </tr>
            <tr>
                <td>01999021</td>
                <td>Thai Language for Communication</td>
                <td>704</td>
                <td>14 ตุลาคม 2561 </td>
                <td>E9501</td>
                <td>13.00-16.00</td>

            </tr>
            <tr>
                <td>02204112</td>
                <td>Engineering Mathematics I</td>
                <td>700</td>
                <td>10 ตุลาคม 2561 </td>
                <td>LH3-301</td>
                <td>08.00-10.00</td>

            </tr>
            <tr>
                <td>02999144</td>
                <td>Introduction to Object-Oriented Programming</td>
                <td>700</td>
                <td>10 ตุลาคม 2561 </td>
                <td>E8403</td>
                <td>10.00-12.00</td>

            </tr>
            <tr>
                <td>01420113</td>
                <td>Life Skills For Undergraduate Student</td>
                <td>700</td>
                <td>12 ตุลาคม 2561 </td>
                <td>E9501</td>
                <td>13.00-16.00</td>
            </tr>
        </tbody>
    </table> -->
<!--end model table sort -->




    </div>


    </body>
    <!-- footer -->
    <!-- <div class="footer">
    <p>Footer</p>
    </div>  -->
    <!-- end footer -->
    </html>
