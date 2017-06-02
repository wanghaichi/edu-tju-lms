<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="type-html">
    <title>软件学院实验室学生查询</title>
    <link href="/css/student.css" rel="stylesheet" type="text/css">
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
                    <script type="text/javascript">
                        $(function(){
                            $('select').searchableSelect();
                        });
                    </script>
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
                                        <p style="display: none;">{{ $courseItem['teacher_name'] }}</p>
                                        <p style="display: none;">{{ $courseItem['teacher_tel'] }}</p>
                                        <p style="display: none;">{{ $courseItem['software'] }}</p>
                                        <p style="display: none;">{{ $courseItem['remark'] }}</p>
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
    <div class="middle_next">
        <button type="button" data-toggle="modal" data-target="#myModal_search" style="letter-spacing: 5px;">查 询</button>
    </div>
</div>
<div class="foot">
    <p style="font-size:15px;">天津大学软件学院&nbsp;&nbsp;&nbsp;关于我们&nbsp;&nbsp;&nbsp;联系我们</p>
</div>
</body>
</html>