<!DOCTYPE html>
    <html lang="en" xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="utf-8">
        <title>คลังข้อมูลนิสิตคณะวิศวกรรมศาสตร์</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

<script src="https://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript" language="javascript"></script>
<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.min.js" type="text/javascript" language="javascript"></script>
<!-- <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" /> -->

<!-- page 10 -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">

<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<link href="../Fonts/DBOzoneX.css" rel="stylesheet" type="text/css">                                         <!--  Font Template -->
<link href="../Library/Css/myTemplate2.css" rel="stylesheet" type="text/css">                                          <!-- CSS Template -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">                                                  <!--เส้นกรอบ-->
<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">      <!--ลบแล้ว step เป็นวงกลม-->


<!-- material google -->
        <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round"> -->
        <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
        <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

<!-- time -->
<script type="text/javascript" src="../js/jq.schedule.js"></script>
<link rel="stylesheet" type="text/css" href="../css/style.css" />
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
                        start:'13:00',
                        end:'16:00',
                        text:'ประชุมสาขา',
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
                <a href="#"><img src="../Image/newLogoUniversity1.png" border="0"/></a>
                <div class="navbar-form navbar-right">
                    <div class = "chip">
                        <div class="dropdown">
                        <!-- <img src="img.png" alt="Person"> -->
                        <font size="4px"><b>คณบดี</b></font>
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
                                    <a href="home_dean.php"><font color="#000000"><b>หน้าหลัก</b></font></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="menu-box">
                        <div class="menu-box-green active ">
                            <ul>
                                <li>
                                    <a href="timetable_dean.php"><font color="#000000"><b>ตารางสอน</b></font></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="menu-box">
                        <div class="menu-box-red  ">
                            <ul>
                                <li>
                                    <a href="report_dean.php"><font color="#000000"><b>รายงาน</b></font></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

    <!-- navbar tab-->

<!-- <div class="container"> -->
  <h2>ตารางสอนปีการศึกษา <span style="color:green;"> 2561 </span> ภาคการศึกษา <span style="color:green;">ภาคต้น </span> </h2>


  <div class="tab-content">

    <div id="home" class="tab-pane fade in active">
    <div id="schedule"></div>
    </div>
    </div>
  </div>
</div>
<!-- end navbar tab-->
    </div>


    </body>
    </html>
