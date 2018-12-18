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
table, td, th {    
    border: 1px solid #ddd;
    
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
}
.img-circle
{
    width: 200px;
    height: 220px;
    padding-top: 20px;
    margin-top: 20px;
    margin-left: 10px;
    margin-bottom: 15px;
    float: : left;
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
select
{
        width: 80%;
        
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
                        <font size="4px"><b>หัวหน้าภาควิชา</b></font>
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
 
<table class="data" >
    <tr  bgcolor="B1E1A7">
                    <th style="text-align: center;">แสดง</th>
                    <th style="text-align: center;"> กรอง</th>
                   
       </tr>
       <td  style="font-weight: bold; font-size: 22px;">การลงทะเบียน</td>
      <tr>

                   <td> <input type="checkbox" name="regis" >การลงทะเบียน</td>
                   <td align="center">
                        <select class="select">
  <option value="all">--ทั้งหมด--</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
                        </select>
                   </td>
     </tr>
      <tr>
                   <td> <input type="checkbox" name="year" >ปีการศึกษา</td>
                   <td align="center">
                        
                        <select >
  <option value="all" >--ทั้งหมด--</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
                        </select>
                   </td>
     </tr>
      <tr>
                   <td> <input type="checkbox" name="seminar" >ภาคการศึกษา</td>
                   <td align="center">
                        <select>
  <option value="all">--ทั้งหมด--</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
                        </select>
                   </td>
     </tr>
     <td style="font-weight: bold; font-size: 22px;">หลักสูตร</td>
       <tr>

                   <td> <input type="checkbox" name="Course" >หลักสูตรที่ศึกษา</td>
                   <td align="center">
                        <select>
  <option value="all">--ทั้งหมด--</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
                        </select>
                   </td>
     </tr>
        
     <tr>
                   <td> <input type="checkbox" name="Course" >หมวดวิชา</td>
                   <td align="center">
                        <select>
  <option value="all">--ทั้งหมด--</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
                        </select>
                   </td>
     </tr>
     <tr>
                   <td> <input type="checkbox" name="Course" >ชื่อวิชา</td>
                   <td align="center">
                        <select>
  <option value="all">--ทั้งหมด--</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
                        </select>
                   </td>
     </tr>
     <td style="font-weight: bold; font-size: 22px;">ภาควิชา</td>
     <tr>
                   <td> <input type="checkbox" name="Course" >ภาควิชา</td>
                   <td align="center">
                        <select>
  <option value="all">--ทั้งหมด--</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
                        </select>
                   </td>
     </tr>
     <tr>
                   <td> <input type="checkbox" name="Course" >อาจารย์ผู้สอน</td>
                   <td align="center">
                        <select>
  <option value="all">--ทั้งหมด--</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
                        </select>
                   </td>
     </tr>
     <tr>
                   <td> <input type="checkbox" name="Course" >อาจารย์ที่ปรึกษา</td>
                   <td align="center">
                        <select>
  <option value="all">--ทั้งหมด--</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
                        </select>
                   </td>
     </tr>
     <td style="font-weight: bold; font-size: 22px;">นิสิต</td>
     <tr>
                   <td> <input type="checkbox" name="Course" >นิสิต</td>
                   <td align="center">
                        <select>
  <option value="all">--ทั้งหมด--</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
                        </select>
                   </td>
     </tr>
      <tr>
                   <td> <input type="checkbox" name="Course" >แผนการเรียน</td>
                   <td align="center">
                        <select>
  <option value="all">--ทั้งหมด--</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
                        </select>
                   </td>
     </tr>
      <tr>
                   <td> <input type="checkbox" name="Course" >ปีที่เข้าศึกษา</td>
                   <td align="center">
                        <select>
  <option value="all">--ทั้งหมด--</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
                        </select>
                   </td>
     </tr>
      <tr>
                   <td> <input type="checkbox" name="Course" >ช่องทางการเข้าศึกษา (รอบ)</td>
                   <td align="center">
                        <select>
  <option value="all">--ทั้งหมด--</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
                        </select>
                   </td>
     </tr>
      <tr>
                   <td> <input type="checkbox" name="Course" >ช่องทางการเข้าศึกษา (ช่องทาง)</td>
                   <td align="center">
                        <select>
  <option value="all">--ทั้งหมด--</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
                        </select>
                   </td>
     </tr>
      <tr>
                   <td> <input type="checkbox" name="Course" >เพศ</td>
                   <td align="center">
                        <select>
  <option value="all">--ทั้งหมด--</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
                        </select>
                   </td>
     </tr>
     <tr>
                   <td> <input type="checkbox" name="Course" >โรงเรียนมัธยม (ภููมิภาค)</td>
                   <td align="center">
                        <select>
  <option value="all">--ทั้งหมด--</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
                        </select>
                   </td>
     </tr>
     <tr>
                   <td> <input type="checkbox" name="Course" >โรงเรียนมัธยม (จังหวัด)</td>
                   <td align="center">
                        <select>
  <option value="all">--ทั้งหมด--</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
                        </select>
                   </td>
     </tr>
     <tr>
                   <td> <input type="checkbox" name="Course" >โรงเรียนมัธยม (ชื่อ)</td>
                   <td align="center">
                        <select>
  <option value="all">--ทั้งหมด--</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
                        </select>
                   </td>
     </tr>
</table>
<p></p>
<p></p>
<center><button type="button" onclick="goTo()" class="btn btn-primary btn-md">ตกลง</button></center>
<p></p><p></p>
<script>
function goTo() {
    location.href = "report_table_head.php";
}
</script>
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


<script type="text/javascript">
    jQuery(document).ready(function(){

    jQuery('#change-pic').on('click', function(e){
        jQuery('#changePic').modal({show:true});
    });

    jQuery('#photoimg').on('change', function()
    {
        jQuery("#preview-avatar-profile").html('');
        jQuery("#preview-avatar-profile").html('Uploading....');
        jQuery("#cropimage").ajaxForm(
        {
        target: '#preview-avatar-profile',
        success: function() {
                jQuery('img#photo').imgAreaSelect({
                aspectRatio: '1:1',
                onSelectEnd: getSizes,
            });
            jQuery('#image_name').val(jQuery('#photo').attr('file-name'));
            }
        }).submit();

    });

    jQuery('#btn-crop').on('click', function(e){
        var img_name = $("#image_name").val();
        alert(img_name);

        // new code here
        $.ajax({
            url:"upload.php",
            method:"post",
            data:{img_name:img_name},
            success: function(data) {
                $('.datashow').html(data);
             }
           });
    e.preventDefault();
    params = {
            targetUrl: 'profile.php?action=save',
            action: 'save',
            x_axis: jQuery('#hdn-x1-axis').val(),
            y_axis : jQuery('#hdn-y1-axis').val(),
            x2_axis: jQuery('#hdn-x2-axis').val(),
            y2_axis : jQuery('#hdn-y2-axis').val(),
            thumb_width : jQuery('#hdn-thumb-width').val(),
            thumb_height:jQuery('#hdn-thumb-height').val()
        };
        saveCropImage(params);
    });



    function getSizes(img, obj)
    {
        var x_axis = obj.x1;
        var x2_axis = obj.x2;
        var y_axis = obj.y1;
        var y2_axis = obj.y2;
        var thumb_width = obj.width;
        var thumb_height = obj.height;
        if(thumb_width > 0)
            {

                jQuery('#hdn-x1-axis').val(x_axis);
                jQuery('#hdn-y1-axis').val(y_axis);
                jQuery('#hdn-x2-axis').val(x2_axis);
                jQuery('#hdn-y2-axis').val(y2_axis);
                jQuery('#hdn-thumb-width').val(thumb_width);
                jQuery('#hdn-thumb-height').val(thumb_height);

            }
        else
            alert("Please select portion..!");
    }

    function saveCropImage(params) {
    jQuery.ajax({
        url: params['targetUrl'],
        cache: false,
        dataType: "html",
        data: {
            action: params['action'],
            id: jQuery('#hdn-profile-id').val(),
             t: 'ajax',
                                w1:params['thumb_width'],
                                x1:params['x_axis'],
                                h1:params['thumb_height'],
                                y1:params['y_axis'],
                                x2:params['x2_axis'],
                                y2:params['y2_axis'],
                                image_name :jQuery('#image_name').val()
        },
        type: 'Post',
       // async:false,
        success: function (response) {
                jQuery('#changePic').modal('hide');
                jQuery(".imgareaselect-border1,.imgareaselect-border2,.imgareaselect-border3,.imgareaselect-border4,.imgareaselect-border2,.imgareaselect-outer").css('display', 'none');

                jQuery("#avatar-edit-img").attr('src', response);
                jQuery("#preview-avatar-profile").html('');
                jQuery("#photoimg").val();
        },
        error: function (xhr, ajaxOptions, thrownError) {
            alert('status Code:' + xhr.status + 'Error Message :' + thrownError);
        }
    });
    }
    });
</script>

    </div>


    </body>
    <!-- footer -->
    <!-- <div class="footer">
    <p>Footer</p>
    </div>  -->
    <!-- end footer -->
    </html>
