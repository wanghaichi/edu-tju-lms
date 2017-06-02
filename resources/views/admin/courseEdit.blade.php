
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="/AdminLTE/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/AdminLTE/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/AdminLTE/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/AdminLTE/plugins/iCheck/flat/blue.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

@include('admin.header')
<!-- Left side column. contains the logo and sidebar -->
@include('admin.sidebar')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {{ $moduleName or "后台管理" }}

                <small>{{ $panelName or "模块管理" }}</small>
            </h1>
            <ol class="breadcrumb">
                <li> {{ $moduleName or "后台管理" }}</li>
                <li class="active">{{ $panelName or "模块管理" }}</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" method="post" action="{{ url('admin/reservation/course/'.$course->id)}}">
                            <div class="box-body">
                                <div class="form-group">
                                    <label>课程名称</label>
                                    <input name="courseName" type="text" class="form-control" value="{{ $course->course_name }}">
                                </div>
                                <div class="form-group">
                                    <label>教师姓名</label>
                                    <input name="teacherName" type="text" class="form-control" value="{{ $course->teacher_name }}">
                                </div>
                                <div class="form-group">
                                    <label>教师联系方式</label>
                                    <input name="teacherTel" type="text" class="form-control" value="{{ $course->teacher_tel }}">
                                </div><div class="form-group">
                                    <label>所需软件</label>
                                    <input name="software" type="text" class="form-control" value="{{ $course->software }}">
                                </div>
                                <div class="form-group">
                                    <label>备注</label>
                                    <input name="remark" type="text" class="form-control" value="{{ $course->remark }}">
                                </div>
                                <div class="form-group">
                                    <label>学生类型</label>
                                    <select name="studentCategory" class="form-control">
                                        <option value="1">本科生</option>
                                        <option value="2">研究生</option>
                                        <option value="3">博士生</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>星期 & 课程 (修改请前往选课界面重新选择即可)</label>
                                    <input type="text" class="form-control" placeholder="{{ "周".$resTime }}" disabled="">
                                </div>
                                <div class="form-group">
                                    <label>所在周次</label>
                                    {!! $weekStr !!}
                                </div>
                                <div class="form-group">
                                    <label>状态</label>
                                    <select name="status" class="form-control">
                                        <option value="0"
                                                @if($course->status === 0)
                                                selected
                                                @endif
                                        >审核中</option>
                                        <option value="1"
                                                @if($course->status === 1)
                                                selected
                                                @endif
                                        >同意</option>
                                        <option value="2"
                                                @if($course->status === 2)
                                                selected
                                                @endif
                                        >驳回</option>
                                    </select>
                                </div>
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">提交</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.box -->
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @include('admin.footer')
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="/AdminLTE/bootstrap/js/bootstrap.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- AdminLTE App -->
<script src="/AdminLTE/dist/js/app.min.js"></script>

</body>
</html>
