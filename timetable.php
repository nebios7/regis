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

<script src="https://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript" language="javascript"></script>
<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.min.js" type="text/javascript" language="javascript"></script>
<link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />

<!-- page 10 -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">

<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<link href="Fonts/DBOzoneX.css" rel="stylesheet" type="text/css">                                         <!--  Font Template -->
<link href="Library/Css/myTemplate.css" rel="stylesheet" type="text/css">                                          <!-- CSS Template -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">                                                  <!--เส้นกรอบ-->
<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">      <!--ลบแล้ว step เป็นวงกลม-->


<!-- time -->
<script type="text/javascript" src="js/jq.schedule.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/2.3.2/css/bootstrap.min.css" rel="stylesheet" media="screen"> -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/2.3.2/js/bootstrap.min.js"></script>
<!-- end time -->



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
.nav-tabs
{
    font-size: 20px;
}
</style>
<script type="text/javascript">
jQuery(document).ready(function(){
    var $sc = jQuery("#schedule").timeSchedule({
        startTime: "08:00", // schedule start time(HH:ii)
        endTime: "21:00",   // schedule end time(HH:ii)
        widthTime:60 * 30,  // cell timestamp example 30 minutes
        timeLineY:60,       // height(px)
        verticalScrollbar:20,   // scrollbar (px)
        timeLineBorder:2,   // border(top and bottom)
        debug:"#debug",     // debug string output elements
        rows : {
            '1' : {
                title : 'วันจันทร์',
                schedule:[
                    {
                        start:'09:00',
                        end:'12:00',
                        text:'Text Area',
                        data:{
                        }
                    },
                       {
                        start:'19:00',
                        end:'20:00',
                        text:'Text Area',
                        data:{
                        }
                    }
                ]
            },
            '2' : {
                title : 'วันอังคาร',
                schedule:[
                    {
                        start:'13:00',
                        end:'14:30',
                        text:'Text Area',
                        data:{
                        }
                    }
                ]
            },
            '3' : {
                title : 'วันพุธ',
                schedule:[
                    {
                        start:'09:30',
                        end:'11:00',
                        text:'Text Area',
                        data:{
                        }
                    }
                ]
            },
            '4' : {
                title : 'วันพฤหัสบดี',
                schedule:[
                    {
                        start:'08:00',
                        end:'10:30',
                        text:'Text Area',
                        data:{
                        }
                    }
                ]
            },
            '5' : {
                title : 'วันศุกร์',
                schedule:[
                    {
                        start:'14:30',
                        end:'16:00',
                        text:'Text Area',
                        data:{
                        }
                    }
                ]
            },
            '6' : {
                title : 'วันเสาร์',
                schedule:[

                ]
            },
            '7' : {
                title : 'วันอาทิตย์',
                schedule:[

                ]
            }
        },
        change: function(node,data){
            alert("change event");
        },
        init_data: function(node,data){
        },
        click: function(node,data){
            alert("click event");
        },
        append: function(node,data){
        },
        time_click: function(time,data){
            alert("time click event");
        },
    });
});
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
                        <div class="menu-box-red active ">
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

    <!-- navbar tab-->

<!-- <div class="container"> -->
  <h2>ตารางเรียนปีการศึกษา <span style="color:green;"> 2561 </span> ภาคการศึกษา <span style="color:green;">ภาคต้น </span> </h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">ข้อมูลแบบตารางวัน-เวลา</a></li>
    <li><a data-toggle="tab" href="#menu1">ข้อมูลแบบปกติ</a></li>
  </ul>

  <div class="tab-content">

    <div id="home" class="tab-pane fade in active">
    <div id="schedule"></div>
    </div>

    <div id="menu1" class="tab-pane fade">
    <table id="grade" class="display" cellspacing="0" width = "100%" >
    <br>
        <thead>
            <tr>

                <th>รหัสวิชา</th>
                <th>ชิ่อวิชา</th>
                <th>หน่วยกิต</th>
                <th>หมู่เรียน</th>
                <th>ห้องเรียน</th>
                <th>เวลาเรียน</th>
                <th>อาจารย์ผู้สอน</th>
            </tr>
        </thead>

        <tfoot>
            <tr>
                <th>รหัสวิชา</th>
                <th>ชิ่อวิชา</th>
                <th>หน่วยกิต</th>
                <th>หมู่เรียน</th>
                <th>ห้องเรียน</th>
                <th>เวลาเรียน</th>
                <th>อาจารย์ผู้สอน</th>
            </tr>
        </tfoot>

        <tbody>
            <tr>
                <td class="text-center">01417167</td>
                <td>Engineering Mathematics I</td>
                <td class="text-center">3</td>
                <td class="text-center">700</td>
                <td class="text-center">E9501</td>
                <td>
                <div>อ. 8.30-10.00</div><div>พฤ. 8.30-10.00</div>
                </td>
                <td>E9042 ดวงเพ็ญ</td>
            </tr>
            <tr>
                <td class="text-center">01420111</td>
                <td>General Physics I</td>
                <td class="text-center">3</td>
                <td class="text-center">701</td>
                <td class="text-center">E4403</td>
                <td>
                <div>อ. 13.00-14.30</div><div>พฤ. 8.30-10.00</div>
                </td>
                <td>E9042 วรัญญา</td>
            </tr>
            <tr>
                <td class="text-center">01420113</td>
                <td>Laboratory in Physics I</td>
                <td class="text-center">1</td>
                <td class="text-center">703</td>
                <td class="text-center">E8405</td>
                <td>
                <div>จ. 13.00-16.00</div>
                </td>
                <td>E9040 อมรฤทธิ์</td>
            </tr>
            <tr>
                <td class="text-center">01999021</td>
                <td>Thai Language for Communication</td>
                <td class="text-center">3</td>
                <td class="text-center">704</td>
                <td class="text-center">E9501</td>
                <td>
                <div>ศ. 9.00-12.00</div>
                </td>
                <td>E9040 อมรฤทธิ์</td>
            </tr>
            <tr>
                <td class="text-center">02204112</td>
                <td>Engineering Mathematics I</td>
                <td class="text-center">3</td>
                <td class="text-center">700</td>
                <td class="text-center">LH3-301</td>
                <td>
                <div>พ. 8.30-10.00</div><div>พฤ. 8.30-10.00</div>
                </td>
                <td>E9042 ศิวดล</td>
            </tr>
            <tr>
                <td class="text-center">02999144</td>
                <td>Introduction to Object-Oriented Programming</td>
                <td class="text-center">1</td>
                <td class="text-center">700</td>
                <td class="text-center">E8403</td>
                <td>
                <div>ศ. 8.30-10.00</div><div>ศ. 8.30-10.00</div>
                </td>
                <td>E9042 ดวงเพ็ญ</td>
            </tr>
            <tr>
                <td class="text-center">01420113</td>
                <td class="text-center">Life Skills For Undergraduate Student</td>
                <td class="text-center">3</td>
                <td class="text-center">700</td>
                <td class="text-center">E9501</td>
                <td>
                <div>อ. 8.30-10.00</div><div>พฤ. 8.30-10.00</div>
                </td>
                <td>E9042 ศิวดล</td>
            </tr>
        </tbody>
    </table>
    </div>
  </div>
</div>
<!-- end navbar tab-->

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
    </html>
