<?php

$dataPoints = array(
    array('y' => 3.43, 'label' => 'ปีการศึกษา 2559 ภาคต้น'),
    array('y' => 3.16, 'label' => 'ปีการศึกษา 2559 ภาคปลาย'),
    array('y' => 2.86, 'label' => 'ปีการศึกษา 2560 ภาคต้น'),
    array('y' => 3.13, 'label' => 'ปีการศึกษา 2560 ภาคปลาย'),
    array('y' => 2.98, 'label' => 'ปีการศึกษา 2561 ภาคต้น'),
    array('y' => 2.63, 'label' => 'ปีการศึกษา 2561 ภาคปลาย'),
    array('y' => 3.03, 'label' => 'ผลการเรียนเฉลี่ย'),
);

?>

<!DOCTYPE HTML>
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
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

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
    *{
        font-family: 'DB Ozone X', sans-serif;
    }
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
#chartContainer
{
    margin-top: 30px;
}
#chartContainer2
{
	padding-top: 30px;
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
.nav-tabs
{
    font-size: 20px;
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
                        <font size="4px"><b>วรัญญา  อรรถเสนา</b></font>
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
                                    <a href="home_teacher.php"><font color="#000000"><b>หน้าหลัก</b></font></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="menu-box">
                        <div class="menu-box-green ">
                            <ul>
                                <li>
                                    <a href="timetable_teacher.php"><font color="#000000"><b>ตารางสอน</b></font></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="menu-box">
                        <div class="menu-box-red  ">
                            <ul>
                                <li>
                                    <a href="timetable.php"><font color="#000000"><b>รายงาน</b></font></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <h2><span>5820501111</span> <span>นายสมชาย สมชาย<span></h2>
<!-- </div> -->

<div class="container" >
  <div class="row">
    <div class="col-sm-5">

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
      <th scope="col">รายละเอียด</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">ภาคต้น</th>
      <td class="text-center">2559</td>
      <td class="text-center">22</td>
      <td>3.40 <span></span></td>
      <td><a href="#myModal" data-toggle="modal"><span>ผลการเรียน</span></a>
      </td>

    </tr>
    <tr>
      <th scope="row">ภาคปลาย</th>
      <td class="text-center">2559</td>
      <td class="text-center">17</td>
      <td>3.01 <span style="color:red;">(-0.39)</span></td>
      <td><a href="#myModal" data-toggle="modal"><span>ผลการเรียน</span></a>
    </tr>
    <tr>
      <th scope="row">ภาคต้น</th>
      <td class="text-center">2560</td>
      <td class="text-center">20</td>
      <td>2.85 <span style="color:red;">(-0.16)</span></td>
      <td><a href="#myModal" data-toggle="modal"><span>ผลการเรียน</span></a>
    </tr>
    <tr>
      <th scope="row">ภาคปลาย</th>
      <td class="text-center">2560</td>
      <td class="text-center">20</td>
      <td>3.11 <span style="color:green;">(+0.26)</span></td>
      <td><a href="#myModal" data-toggle="modal"><span>ผลการเรียน</span></a>
    </tr>
    <tr>
      <th scope="row">ภาคต้น</th>
      <td class="text-center">2561</td>
      <td class="text-center">21</td>
      <td>2.98 <span style="color:red;">(-0.13)</span></td>
      <td><a href="#myModal" data-toggle="modal"><span>ผลการเรียน</span></a>
    </tr>
    <tr>
      <th scope="row">ภาคปลาย</th>
      <td class="text-center">2561</td>
      <td class="text-center">14</td>
      <td>2.79 <span style="color:red;">(-0.19)</span></td>
      <td><a href="#myModal" data-toggle="modal"><span>ผลการเรียน</span></a>
    </tr>
    <tr>
      <th scope="row">ผลการเรียนเฉลี่ย</th>
      <td></td>
      <td class="text-center">114</td>
      <td>3.25</td>
      <td></a>
    </tr>
  </tbody>
    </table>
    </div> <!--col-4-->


  </div> <!--row -->


</div><!-- contain -->

</div>
<br>
<script>
  $('#classModal').modal('show')
</script>

<!-- Edit Modal HTML -->

<div class="modal fade" id="myModal">
<div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h3 class="modal-title">ผลการเรียนปีการศึกษา 2559 ภาคต้น</h3>
        </div>
        <div class="modal-body">
        <table id="grade" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>


                <th>รหัสวิชา</th>
                <th>ชิ่อวิชา</th>
                <th>หมวดวิชา</th>
                <th>ผลการเรียน</th>
                <th>หน่วยกิต</th>
            </tr>
        </thead>



        <tbody>
            <tr>


                <td>01417167</td>
                <td>Engineering Mathematics I</td>
                <td>เฉพาะเลือก</td>
                <td class="text-center">B+</td>
                <td class="text-center">3</td>
            </tr>

  <tr>


    <td>01420113</td>
    <td>Laboratory in Physics I</td>
    <td>เฉพาะเลือก</td>
    <td class="text-center">A</td>
    <td class="text-center">1</td>
  </tr>
  <tr>
                <td>01417167</td>
                <td>Engineering Mathematics I</td>
                <td>เฉพาะเลือก</td>
                <td class="text-center">B+</td>
                <td class="text-center">3</td>
            </tr>
            <tr>


                <td>01420111</td>
                <td>General Physics I</td>
                <td>เฉพาะเลือก</td>
                <td class="text-center">D</td>
                <td class="text-center">3</td>
            </tr>
            <tr>


                <td>01417167</td>
                <td>Engineering Mathematics I</td>
                <td>เฉพาะเลือก</td>
                <td class="text-center">B+</td>
                <td class="text-center">3</td>
            </tr>
            <tr>


                <td>01420111</td>
                <td>General Physics I</td>
                <td>เฉพาะเลือก</td>
                <td class="text-center">D</td>
                <td class="text-center">3</td>
            </tr>
            <tr>

                <td>01420111</td>
                <td>General Physics I</td>
                <td>เฉพาะเลือก</td>
                <td class="text-center">D</td>
                <td class="text-center">3</td>
            </tr>

            </tbody>
</table>

        <div class="modal-footer">
          <button type="button" class="btn btn-default " data-dismiss="modal">Close</button>
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
	<!-- Edit Modal HTML -->
</body>
</html>
