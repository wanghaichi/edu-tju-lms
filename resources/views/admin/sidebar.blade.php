<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/AdminLTE/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ $user or "admin" }}</p>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">管理列表</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> <span>实验室管理</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('admin/reservation/course') }}"><i class="fa fa-circle-o"></i> 课程信息</a></li>
{{--                    <li><a href="{{ url('admin/reservation/') }}"><i class="fa fa-circle-o"></i>借用情况 </a></li>--}}
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i> <span>用户管理</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/AdminLTE/index.html"><i class="fa fa-circle-o"></i> 教师</a></li>
                    <li><a href="/AdminLTE/index2.html"><i class="fa fa-circle-o"></i> 学生</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>