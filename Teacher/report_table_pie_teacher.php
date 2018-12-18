<?php
 
$dataPoints = array( 
    array("label"=>"พ้นสภาพนิสิต", "symbol" => "พ้นสภาพนิสิต","y"=>46.6),
    array("label"=>"<โปรต่ำ", "symbol" => "โปรต่ำ","y"=>13.9),
    array("label"=>"โปรต่ำ", "symbol" => "โปรต่ำ","y"=>5),
    array("label"=>"โปรสูง", "symbol" => "โปรสูง","y"=>3.6),
    array("label"=>"ปกติ", "symbol" => "ปกติ","y"=>2.6),
    array("label"=>"เกียรตินิยมอันดับ 2", "symbol" => "เกียรตินิยมอันดับ2" ,"y"=>2.1),
    array("label"=>"เกียรตินิยมอันดับ 1", "symbol" => "เกียรตินิยมอันดับ1","y"=>1.5),
 
)

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
#container {
  max-width: 660px;
  margin: auto;
  height: 400px;
  margin: 0 auto;
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
    <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
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
                        <div class="menu-box-blue  ">
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
                        <div class="menu-box-red active ">
                            <ul>
                                <li>
                                    <a href="report_teacher.php"><font color="#000000"><b>รายงาน</b></font></a>
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
 
<h2> รายงานผลการเรียน <span style="color:#496F5A">ปีการศึกษาทั้งหมด หลักสูตร A</span></h2>
<table>
    <tr>
    <th>ปีการศึกษา</th>
    <th>หลักสูตร</th>
    <th colspan="4">GPA &nbsp;<a href="report_table_bar_teacher.php"><img src="bar.png"></th>
    <th colspan="7">จำนวนนิสิต &nbsp;<a href="report_table_bar_teacher.php"><img src="bar.png"></th>
    </tr>
    <tr>
        <th></th>
        <th></th>
        <th>MAX &nbsp;<a href="report_table_bar_teacher.php"><img src="bar.png"></th>
        <th>MIN &nbsp;<a href="report_table_bar_teacher.php"><img src="bar.png"></th>
        <th>AVG. &nbsp;<a href="report_table_bar_teacher.php"><img src="bar.png"></th>
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
        <td style="text-align: center;">2560</td>
        <td style="text-align: center;"> A </td>
        <td style="text-align: center;">3.78</td>
        <td style="text-align: center;">2.03</td>
        <td style="text-align: center;">2.89</td>
        <td style="text-align: center;">xxx</td>
        <td>82</td>
        <td>1</td>
        <td>2</td>
        <td>3</td>
        <td>64</td>
        <td>12</td>
        <td align="center"><a href="report_table_pie_teacher.php"><img src="pie.png"></td>
        
        
    </tr>
    <tr>
        <td style="text-align: center;">2561</td>
        <td style="text-align: center;"> A </td>
        <td style="text-align: center;">3.61</td>
        <td style="text-align: center;">1.98</td>
        <td style="text-align: center;">2.77</td>
        <td style="text-align: center;">xxx</td>
        <td>93</td>
        <td>2</td>
        <td>5</td>
        <td>7</td>
        <td>71</td>
        <td>8</td>
        <td align="center"><a href="report_table_pie_teacher.php"><img src="pie.png"></td>
        
        
    </tr>
</table>
<center><h3>จำนวนนิสิต ปีการศึกษา 2560 หลักสูตร A จำนวน 82 คน</h3></center>
<div id="container"></div>
    </div>


    </body>
    <!-- footer -->
    <!-- <div class="footer">
    <p>Footer</p>
    </div>  -->
    <!-- end footer -->
    </html>
    <script>
        var colors = Highcharts.getOptions().colors,
  categories = [
    "กำลังศึกษา",
    "พ้นสภาพนิสิต",

  ],
  data = [
    {
      "y": 97.19,
      "color": colors[2],
      "drilldown": {
        "name": "Chrome",
        "categories": [
          "<โปรต่ำ",
          "โปรต่ำ",
          "โปรสูง",
          "ปกติ",
          "เกียรตินิยมอันดับ 2",
          "เกียรตินิยมอันดับ 1",
        ],
        "data": [
         0.8,
          1.2,
          3.68,
          53.83,
          24.55,
          10.13,
                ]
      }
    },
    {
      "y": 5.81,
      "color": colors[1],
      "drilldown": {
        "name": "พ้นสภาพนิสิต",
        "categories": [
          "พ้นสภาพนิสิต"],
        "data": [
          5.81
        ]
      }
    
    }
  ],
  browserData = [],
  versionsData = [],
  i,
  j,
  dataLen = data.length,
  drillDataLen,
  brightness;


// Build the data arrays
for (i = 0; i < dataLen; i += 1) {

  // add browser data
  browserData.push({
    name: categories[i],
    y: data[i].y,
    color: data[i].color
  });

  // add version data
  drillDataLen = data[i].drilldown.data.length;
  for (j = 0; j < drillDataLen; j += 1) {
    brightness = 0.2 - (j / drillDataLen) / 5;
    versionsData.push({
      name: data[i].drilldown.categories[j],
      y: data[i].drilldown.data[j],
      color: Highcharts.Color(data[i].color).brighten(brightness).get()
    });
  }
}

// Create the chart
Highcharts.chart('container', {
  chart: {
    type: 'pie'
  },
  title: {
    text: ''
  },
  subtitle: {
    text: ''
  },
  yAxis: {
    title: {
      text: ''
    }
  },
  plotOptions: {
    pie: {
      shadow: false,
      center: ['50%', '50%']
    }
  },
  tooltip: {
    valueSuffix: '%'
  },
  series: [{
    name: 'จำนวนนิสิต',
    data: browserData,
    size: '60%',
    dataLabels: {
      formatter: function () {
        return this.y > 5 ? this.point.name : null;
      },
      color: '#ffffff',
      distance: -30,
    }
  }, {
    name: 'จำนวนนิสิต',
    data: versionsData,
    size: '90%',
    innerSize: '60%',
    dataLabels: {
      formatter: function () {
        // display only if larger than 1
        return this.y > 1 ? '<b>' + this.point.name + ':</b> ' +
          this.y + '%' : null;
      }
    },
    id: 'versions'
  }],
  responsive: {
    rules: [{
      condition: {
        maxWidth: 400
      },
      chartOptions: {
        series: [{
          id: 'versions',
          dataLabels: {
            enabled: false
          }
        }]
      }
    }]
  }
});
    </script>
