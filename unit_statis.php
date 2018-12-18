<?php

$dataPoints = array(
    array('y' => 3.96, 'label' => 'หมวดวิชาศึกษาทั่วไป'),
    array('y' => 3.00, 'label' => 'หมวดวิชาเฉพาะเลือก'),
    array('y' => 2.76, 'label' => 'หมวดวิชาเฉพาะบังคับ'),
    array('y' => 0.00, 'label' => 'หมวดวิชาเสรี'),
    array('y' => 3.56, 'label' => 'ผลการเรียนเฉลี่ย'),
);

?>
<?php

$dataPoints1 = array(
    array('label' => 'หมวดวิชาศึกษาทั่วไป', 'y' => 24),
    array('label' => 'หมวดวิชาเฉพาะ ', 'y' => 93),
    array('label' => 'หมวดวิชาเฉพาะบังคับ ', 'y' => 20),
    array('label' => 'หมวดวิชาเลือกเสรี', 'y' => 0),
    //array("label"=> "Single Parent", "y"=> 15)
);

$dataPoints2 = array(
    array('label' => 'หมวดวิชาศึกษาทั่วไป', 'y' => 6),
    array('label' => 'หมวดวิชาเฉพาะ ', 'y' => 106),
    array('label' => 'หมวดวิชาเฉพาะบังคับ ', 'y' => 38),
    array('label' => 'หมวดวิชาเลือกเสรี', 'y' => 6),
    //array("label"=> "Single Parent", "y"=> 7)
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
        <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <!-- ลบแล้ว step เป็นวงกลม -->

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
.nav-tabs
{
    font-size: 20px;
}

</style>
<script>
window.onload = function() {
    CanvasJS.addColorSet("colorShades",
                [//colorSet Array
                "#7db8ff",
                "#fc3026",
                "#ce00e6",
                "#fee45f",
                "#6adc88",
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

var chart2 = new CanvasJS.Chart("chartContainer2", {
	title: {
		//text: "Spending of Money Based on Household Composition"
	},
	colorSet: "colorShades",
	animationEnabled: true,
	toolTip:{
		shared: true,
		reversed: true
	},
	axisY: {
		suffix: "%"
	},
	data: [
		{
			type: "stackedColumn100",
			name: "เรียนแล้ว",
			showInLegend: true,
			yValueFormatString: "#,##0 หน่วยกิต",
			dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
		},{
			type: "stackedColumn100",
			name: "ยังไม่ได้เรียน",
			showInLegend: true,
			yValueFormatString: "#,##0 หน่วยกิต",
			dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
		}/*,{
			type: "stackedColumn100",
			name: "Food",
			showInLegend: true,
			yValueFormatString: "$#,##0 K",
			dataPoints: <?php echo json_encode($dataPoints3, JSON_NUMERIC_CHECK); ?>
		},{
			type: "stackedColumn100",
			name: "Insurance and Pastion",
			showInLegend: true,
			yValueFormatString: "$#,##0 K",
			dataPoints: <?php echo json_encode($dataPoints4, JSON_NUMERIC_CHECK); ?>
		},{
			type: "stackedColumn100",
			name: "Healthcare",
			showInLegend: true,
			yValueFormatString: "$#,##0 K",
			dataPoints: <?php echo json_encode($dataPoints5, JSON_NUMERIC_CHECK); ?>
		},{
			type: "stackedColumn100",
			name: "Entertainment",
			showInLegend: true,
			yValueFormatString: "$#,##0 K",
			dataPoints: <?php echo json_encode($dataPoints6, JSON_NUMERIC_CHECK); ?>
		},{
			type: "stackedColumn100",
			name: "Other",
			showInLegend: true,
			yValueFormatString: "$#,##0 K",
			dataPoints: <?php echo json_encode($dataPoints7, JSON_NUMERIC_CHECK); ?>
		}*/
	]
});
chart1.render();
chart2.render();

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

        <div style="padding-top: 15px" class="content">
                <div class="menu-top">
                    <div class="menu-box">
                        <div class="menu-box-blue ">
                            <ul>
                                <li>
                                    <a href="index.php"><font color="#000000"><b>หน้าหลัก</b></font></a>
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
                                    <a href="index.php"><font color="#000000"><b>คำนวณผลการเรียน</b></font></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="menu-box">
                        <div class="menu-box-sky active">
                            <ul>
                                <li>
                                                <a href="report.php"><b><font color="#000000">รายงาน</font></b></a>
                                                <!-- <ul>
                                                    <li><a href="unit_static.php"><font color="#000000">ผลการเรียนแบ่งตามหมวดวิชา</font></a></li>
                                                    <li><a href=""><font color="#000000">รายงานผลการเรียน</font></a></li>
                                                </ul> -->
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
                        <h2>รายงานผลการเรียนแบ่งตามหมวดวิชา</h2>

	<center>
<div id="chartContainer" style="height: 300px; width: 80%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script></center>
 <h2>รายงานหน่วยกิตที่ลงทะเบียนแบ่งตามหมวดวิชา</h2>
<center><div id="chartContainer2" style="height: 300px; width: 80%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script></center>
</body>
</html>