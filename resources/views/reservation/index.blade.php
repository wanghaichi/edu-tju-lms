<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="type-html">
    <title>软件学院实验室教师约课</title>
    <link href="/css/teacher.css" rel="stylesheet" type="text/css">
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/css/jquery.searchableSelect.css" rel="stylesheet" type="text/css">
    <script src="/js/jquery-3.1.0.js" type="text/javascript"></script>
    <script src="/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/js/jquery.searchableSelect.js" type="text/javascript"></script>
</head>

<body>
<div class="head">
    <div class="head_left">天津大学软件学院</div>
    <div class="head_right">用户信息</div>
</div>
<div class="modal fade" id="myModal_search" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" style="font-size: 40px" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 style="font-size: 20px;" class="modal-title" id="myModalLabel_search">
                    选择查询信息
                </h4>
            </div>
            <div class="modal-body">
                <div style="margin:20px 10px;font-size:18px;">
                    <label style="margin:0 20px 0 0">选择实验室：</label>
                    <input type="radio" name="lab" value="210" style="margin: 0 10px 0 0">210
                    <input type="radio" name="lab" value="309" style="margin: 0 10px 0 25px;">309
                </div>
                <hr>
                <div style="margin:20px 10px;font-size:18px;">
                    <label style="margin:0 25px 0 0">选择周数：</label>
                    <select>
                        <option value="week">选择周数 </option>
                        <option value="1">第一周</option>
                        <option value="2">第二周</option>
                        <option value="3">第三周</option>
                        <option value="4">第四周</option>
                        <option value="5">第五周</option>
                        <option value="6">第六周</option>
                        <option value="7">第七周</option>
                        <option value="8">第八周</option>
                        <option value="9">第九周</option>
                        <option value="10">第十周</option>
                        <option value="11">第十一周</option>
                        <option value="12">第十二周</option>
                        <option value="13">第十三周</option>
                        <option value="14">第十四周</option>
                        <option value="15">第十五周</option>
                        <option value="16">第十六周</option>
                        <option value="17">第十七周</option>
                        <option value="18">第十八周</option>
                        <option value="19">第十九周</option>
                        <option value="20">第二十周</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭
                </button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">
                    查询
                </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" style="font-size: 40px" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <ul id="status">
                    <li id="status_li1" class="active"><strong>1.</strong>课程信息</li>
                    <li id="status_li2"><strong>2.</strong>选择实验周数</li>
                    <li id="status_li3"><strong>3.</strong>完成</li>
                </ul>
            </div>
            <div class="modal-body">
                <form action="#" method="post">
                    <div id="wizard">
                        <div class="items">
                            <!--<div style="position:absolute">-->
                            <!--<img style="position:absolute" src="/img/load.gif">-->
                            <!--</div>-->
                            <div class="page" style="opacity: 1">
                                <div class="wait_1" style="position:absolute;display:none;width:490px;height:380px;text-align:center;padding-top:100px;">
                                    <img style="padding:auto auto" src="/img/load.gif">
                                </div>
                                <div class="page_1">
                                    <p><label>课程名称：</label><input type="text" class="input" id="course_name" name="username" /></p>
                                    <p><label>任课教师：</label><input type="text" class="input" id="teacher_name" name="password" /></p>
                                    <p><label>所需软件：</label><input type="text" class="input" id="software_name" name="software" /></p>
                                    <p><label>联系方式：</label><input type="text" class="input" id="telephone" name="telephone_name" /></p>
                                    <p><label style="margin: 0 28px 0 0;">备注：</label><input type="text" class="input" id="remark" name="remark" /></p>
                                    <label style="font-size: 14px;">学生类别：</label>
                                    <input type="radio" name="category" value="1" style="margin: 0 10px 0 0;font-size:14px;">本科生
                                    <input type="radio" name="category" value="2" style="margin: 0 10px 0 20px">研究生
                                    <input type="radio" name="category" value="3" style="margin: 0 10px 0 20px">博士生
                                </div>
                                <div class="btn_nav" style="bottom: 20px;">
                                    <input type="button" id="button_course_information_next" class="next right" value="下一步&raquo;" />
                                </div>
                            </div>
                            <div class="page">
                                <div class="wait_2" style="position:absolute;display:none;width:490px;height:380px;text-align:center;padding-top:100px;">
                                    <img style="padding:auto auto" src="/img/load.gif">
                                </div>
                                <div class="page_2" style="height:260px;width:100%;margin:0 10px;">
                                    <table style="width:100%;height: 260px;" cellspacing="0" cellpadding="0">
                                        <tbody style="padding-left:40px;">
                                        <tr id="form_row1">
                                            <td>
                                                <input class="week" type="button" name="week" style="background: #ffffff;border-radius: 20px; width:75px;height:45px;font-size:15px;" value="1">
                                            </td>
                                            <td>
                                                <input class="week" type="button" name="week" style="background: #ffffff;border-radius: 20px; width:75px;height:45px;font-size:15px" value="2">
                                            </td>
                                            <td>
                                                <input  class="week"type="button" name="week" style="background: #ffffff;border-radius: 20px; width:75px;height:45px;font-size:15px" value="3">
                                            </td>
                                            <td>
                                                <input class="week" type="button" name="week" style="background: #ffffff;border-radius: 20px; width:75px;height:45px;font-size:15px" value="4">
                                            </td>
                                            <td>
                                                <input class="week" type="button" name="week" style="background: #ffffff;border-radius: 20px;width:75px;height:45px;font-size:15px" value="5">
                                            </td>
                                        </tr>
                                        <tr id="form_row2">
                                            <td>
                                                <input class="week" type="button" name="week" style="background: #ffffff;border-radius: 20px;width:75px;height:45px;font-size:15px" value="6">
                                            </td>
                                            <td>
                                                <input class="week" type="button" name="week" style="background: #ffffff;border-radius: 20px;width:75px;height:45px;font-size:15px" value="7">
                                            </td>
                                            <td>
                                                <input class="week" type="button" name="week" style="background: #ffffff;border-radius: 20px;width:75px;height:45px;font-size:15px" value="8">
                                            </td>
                                            <td>
                                                <input class="week" type="button" name="week" style="background: #ffffff;border-radius: 20px;width:75px;height:45px;font-size:15px" value="9">
                                            </td>
                                            <td>
                                                <input class="week" type="button" name="week" style="background: #ffffff;border-radius: 20px;width:75px;height:45px;font-size:15px" value="10">
                                            </td>
                                        </tr>
                                        <tr id="form_row3">
                                            <td>
                                                <input class="week" type="button" name="week" style="background: #ffffff;border-radius: 20px;width:75px;height:45px;font-size:15px" value="11">
                                            </td>
                                            <td>
                                                <input class="week" type="button" name="week" style="background: #ffffff;border-radius: 20px;width:75px;height:45px;font-size:15px" value="12">
                                            </td>
                                            <td>
                                                <input class="week" type="button" name="week" style="background: #ffffff;border-radius: 20px;width:75px;height:45px;font-size:15px" value="13">
                                            </td>
                                            <td>
                                                <input class="week" type="button" name="week" style="background: #ffffff;border-radius: 20px;width:75px;height:45px;font-size:15px" value="14">
                                            </td>
                                            <td>
                                                <input class="week" type="button" name="week" style="background: #ffffff;border-radius: 20px;width:75px;height:45px;font-size:15px" value="15">
                                            </td>
                                        </tr>
                                        <tr id="form_row4">
                                            <td>
                                                <input class="week" type="button" name="week" style="background: #ffffff;border-radius: 20px;width:75px;height:45px;font-size:15px" value="16">
                                            </td>
                                            <td>
                                                <input class="week" type="button" name="week" style="background: #ffffff;border-radius: 20px;width:75px;height:45px;font-size:15px" value="17">
                                            </td>
                                            <td>
                                                <input class="week" type="button" name="week" style="background: #ffffff;border-radius: 20px;width:75px;height:45px;font-size:15px" value="18">
                                            </td>
                                            <td>
                                                <input class="week" type="button" name="week" style="background: #ffffff;border-radius: 20px;width:75px;height:45px;font-size:15px" value="19">
                                            </td>
                                            <td>
                                                <input class="week" type="button" name="week" style="background: #ffffff;
                                                border-radius: 20px;width:75px;height:45px;font-size:15px" value="20">
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="btn_nav" style="bottom:5px;position:absolute">
                                    <input type="button" id="button_week_prev" class="prev" style="float:left;" value="&laquo;上一步" />
                                    <input type="button" id="button_week_next" class="right next" style="width:100px;margin-left:310px" value="下一步&raquo;" />
                                </div>
                            </div>
                            <div class="page" id="form_3">
                                <div class="wait_3" style="position:absolute;display:none;width:490px;height:380px;text-align:center;padding-top:100px;">
                                    <img style="padding:auto auto" src="/img/load.gif">
                                </div>
                                <div id="page_3" style="font-size: 16px;">

                                </div>
                                <div class="btn_nav" style="bottom:15px;position: absolute;">
                                    <input type="button" id="button_close_prev" class="prev" style="float:left" value="&laquo;上一步" />
                                    <!--<input type="button" class="next " id="sub" value="确定" />-->
                                    <button type="button" class="btn btn-default right" onclick="window.location.reload()" data-dismiss="modal" style="background:#ffebc8;width:70px;margin-left:340px">完成</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>
<div class="middle">
    <div class="course_t">
        <table class="course_table" id="tb1" border="0" width="100%" height="100%" cellpadding="0" cellspacing="0">
            <tbody>
            <tr id="row1" style="background-color: #ffd792">
                <th style="border-left: 1px solid #cccccc">课时</th>
                <th>周一</th>
                <th>周二</th>
                <th>周三</th>
                <th>周四</th>
                <th>周五</th>
                <th>周六</th>
                <th>周日</th>
            </tr>
            @foreach($reservationList as $rowItem)
                @if($loop->index % 2 === 0)
                    <tr id="{{ $rowItem['row_id'] }}">
                @else
                    <tr id="{{ $rowItem['row_id'] }}" style="background-color: #ffebc8">
                        @endif
                        <th style="border-left: 1px solid #cccccc">{{ $rowItem['th_val'] }}</th>
                        @foreach($rowItem['row_data'] as $item)
                            <td id="{{ $item['td_id'] }}" class="course_table_td">
                                <div id="{{ $item['div_id'] }}">
                                    @foreach($item['data'] as $courseItem)
                                        <p>{{ $courseItem['name'] }}&nbsp;第{{ $courseItem['week'] }}周</p>
                                    @endforeach
                                </div>
                                <div class="suspend" title="{{ $item['div_title'] }}">
                                    <img class="imgSearch" src="/img/search.png" data-toggle="modal" data-target="#myModal_search">
                                    <img class="imgAdd" src="/img/add.png" data-toggle="modal" data-target="#myModal">
                                </div>
                            </td>
                        @endforeach
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
    <!--<div class="middle_next">-->
    <!--<button type="button">下一步</button>-->
    <!--</div>-->
</div>
<div class="foot">
    <p style="font-size:15px;">天津大学软件学院&nbsp;&nbsp;&nbsp;关于我们&nbsp;&nbsp;&nbsp;联系我们</p>
</div>
<script type="text/javascript">
    var addInfo="";
    var numCourse;
    var numDay;
    var searchInfo="";
    $(function(){
        $('select').searchableSelect();
    });
    $(document).ready(function(){
        $(".course_table_td").hover(function(){
            //alert($(this).attr('id'));
            $(">div",this).eq(0).css("display","none");
            $(">div",this).eq(1).css("display","block");
            //$(this).children().css("display","block");
            //alert($(">div",this).eq(1).html());
        },function(){
            //$(this).children().css("display","none");
            $(">div",this).eq(0).css("display","block");
            $(">div",this).eq(1).css("display","none");
        });

        $(".imgAdd").click(function () {
            addInfo=$(this).parent().attr('title');
            wInfo = $(this).parent().parent().attr('id');
            wInfo = wInfo.split('-');
            numDay = wInfo[1];
            numCourse = wInfo[0];
            console.log(wInfo);
//            alert(wInfo);
            //alert(addInfo);
        });
    });

    $(document).ready(function(){
        $("#button_course_information_next").click(function(){
            var course_name = $("#course_name").val();
            if(course_name==""){
                alert("课程名称！");
                return false;
            }else{
                //alert(course_name);
            }
            var teacher_name = $("#teacher_name").val();
            if(teacher_name==""){
                alert("请填写教师姓名！");
                return false;
            }
            var software_name=$("#software_name").val();
            if(software_name==""){
                alert("请填写所需软件！");
                return false;
            }
            var telephone= $("#telephone").val();
            var reg = /^1[3|4|5|7|8][0-9]{9}$/;     //验证规则
            var flag = reg.test(telephone);
            if(telephone==""){
                alert("请输入手机号码！");
                return false;
            }else if(telephone.length!=11){
                alert("您输入的电话号码有误，请重新输入！");
                return false;
            }else if(!flag){
                alert("您输入的电话号码有误，请重新输入！");
                return false;
            }
            var radio_ary = document.getElementsByName("category");
            var count=0;
            for(var i = 0; i<radio_ary.length; i++){
                if(radio_ary[i].checked==true){
                    count=2;
                    //alert(radio_ary[i].value);
                }
            }
            if(count!=2){
                alert("请选择学生类型！");
                return false;
            }else{
                $(".wait_1").css({"display":"block","cursor":"wait"});
                $(".page_1").css("opacity","0.5");
                setTimeout(function(){
                    $("#button_course_information_next").parent().parent().parent().animate({"left":"-550px"},500);
                    $("#status_li1").removeClass("active");
                    $("#status_li2").addClass("active");
                },1000);
            }
        });

        //这里可以调用数据！
        $("#button_week_next").click(function(){
            //alert($(this).parent().parent().parent().attr("class"));
            //$(this).parent().parent().parent().css("left","-1100px");
            var courseName = $("#course_name").val();
            var teacherName = $("#teacher_name").val();
            var software=$("#software_name").val();
            var teacherTel = $("#telephone").val();
            var remark = $("#remark").val();
            var radio_ary = document.getElementsByName("category");
            var studentCategory;
            for(var i = 0; i<radio_ary.length; i++){
                if(radio_ary[i].checked==true){
                    studentCategory = radio_ary[i].value;
                }
            }
            var week_no="";
            var numWeek = "";
            var week_ary = document.getElementsByName("week");
            //alert(week_ary[i].stylesheet);
            $(".week").each(function () {
                //alert(this.value);
                var color=$(this).css("background-color");
                //alert(color);
                var hexColor=color.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
                delete (hexColor[0]);
                for(var i = 1; i<=3; ++i){
                    hexColor[i] = parseInt(hexColor[i]).toString(16);
                    if(hexColor[i].length == 1){
                        hexColor[i] = '0' + hexColor[i];
                    }
                }
                var hexString = hexColor.join('');
                if(hexString=='ff6262'){
                    week_no+="第"+this.value+"周 ";
                    numWeek += this.value + ",";
                }
            });
//
            $.post({
                'url' : '/reservation',
                'method' : 'post',
                'data' : {
                    'teacherName' : teacherName,
                    'teacherTel' : teacherTel,
                    'courseName' : courseName,
                    'software' : software,
                    'studentCategory' : studentCategory,
                    'remark' : remark,
                    'numWeek' : numWeek,
                    'numDay' : numDay,
                    'numCourse' : numCourse
                },
                success: function(data){
                    var str="<p><label>课程名称：</label>"+courseName+"</p>"+"<p><label>实验周数：</label>"+week_no+"</p>"+
                        "<p><label>实验时间：</label>"+addInfo+"</p>"+
                        "<p><label>学生类型：</label>"+studentCategory+"</p>"+"<p><label>教师姓名：</label>"+teacherName+"</p>"+
                        "<p><label>联系方式：</label>"+teacherTel+"</p>"+"<p><label>备注：</label>"+remark+"</p>";
                    $("#page_3").html(str);
                    $(".wait_2").css({"display":"block","cursor":"wait"});
                    $(".page_2").css("opacity","0.5");
                    setTimeout(function(){
                        $("#button_week_next").parent().parent().parent().animate({"left":"-1100px"},500);
                        $("#status_li2").removeClass("active");
                        $("#status_li3").addClass("active");
                    },1000);
                },
                error: function(){
                    alert('出错啦');
                }
            });

            //alert($(this).parent().parent().parent().attr("style"));
        });

        $("#button_week_prev").click(function(){
            $(".wait_1").css({"display":"none","cursor":"wait"});
            $(".page_1").css("opacity","");
            $(this).parent().parent().parent().animate({"left":""},500);
            $("#status_li2").removeClass("active");
            $("#status_li1").addClass("active");
        });
        $("#button_close_prev").click(function(){
            $(".wait_2").css({"display":"none","cursor":"wait"});
            $(".page_2").css("opacity","");
            $(this).parent().parent().parent().animate({"left":"-550px"},500);
            $("#status_li3").removeClass("active");
            $("#status_li2").addClass("active");
        });

    });

    //周数背景选择
    $(".week").click(function(){
        var color=$(this).css("background-color");
        //alert(color);
        var hexColor=color.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
        delete (hexColor[0]);
        for(var i = 1; i<=3; ++i){
            hexColor[i] = parseInt(hexColor[i]).toString(16);
            if(hexColor[i].length == 1){
                hexColor[i] = '0' + hexColor[i];
            }
        }
        var hexString = hexColor.join('');
//        alert(hexString);
        if(hexString=='ff6262'){
            $(this).css("background","#ffffff");
        }else{
            $(this).css("background","#ff6262");
        }
        //alert($(this).val());
    });

</script>
</body>
</html>