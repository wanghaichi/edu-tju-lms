
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
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">全部课程信息</h3>

                            {{--<div class="box-tools">--}}
                            {{--<div class="input-group input-group-sm" style="width: 150px;">--}}
                            {{--<input type="text" name="table_search" class="form-control pull-right" placeholder="Search">--}}

                            {{--<div class="input-group-btn">--}}
                            {{--<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tbody><tr>
                                    <th>ID</th>
                                    <th>课程名称</th>
                                    <th>教师姓名</th>
                                    <th>联系方式</th>
                                    <th>所需软件</th>
                                    <th>备注</th>
                                    <th>学生类别</th>
                                    <th>借用周次</th>
                                    <th>创建时间</th>
                                    <th>状态</th>
                                    <th>修改<th>
                                </tr>
                                @foreach($courses as $course)
                                    <tr>
                                        <td>{{ $course->id }}</td>
                                        <td>{{ $course->course_name }}</td>
                                        <td>{{ $course->teacher_name }}</td>
                                        <td>{{ $course->teacher_tel }}</td>
                                        <td>{{ $course->software }}</td>
                                        <td>{{ $course->remark }}</td>
                                        <td>
                                            @if($course->student_category === 1)
                                                本科生
                                            @elseif($course->student_category === 2)
                                                硕士生
                                            @elseif($course->studen_category === 3)
                                                博士生
                                            @else
                                            @endif
                                        </td>
                                        <td>{{ $course->getReservationDate() }}</td>
                                        <td>{{ $course->created_at }}</td>
                                        <td>
                                            @if($course->status === 0)
                                                <span class="label label-warning">审核中</span>
                                            @elseif($course->status === 1)
                                                <span class="label label-success">已通过</span>
                                            @elseif($course->status === 2)
                                                <span class="label label-danger">已驳回</span>
                                            @else
                                                <span class="label label-danger">未知</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ url('admin/reservation/course/'.$course->id) }}"><span class="label label-primary">修改</span></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
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
