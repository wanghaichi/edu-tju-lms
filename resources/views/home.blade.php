<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="/css/login.css" />
</head>
<body>
<div id="background" class="container-fluid">
    <div class="modal fade" id="modal_stu_login">
        <div class="modal-dialog">
            <div class="modal-content">
                <button data-dismiss="modal" class="close modal-close-btn">&times;</button>
                <div class="modal-body">
                    <form method="post" action="{{ url('/login') }}"  id="loginForm">
                    <h4 class="modal-title">教师登录</h4>
                    <input type="text" name="name" class="form-control" placeholder="工号" /><img id="stu_icon" src="/img/modal_stu_icon.png" /><br/>
                    <input type="password" name="password" class="form-control" placeholder="密码" /><img id="password_icon" src="/img/modal_password_icon.png" />
                    <div id="txt_grp">
                    </div>
                        <a onclick="$('#loginForm').submit();"><img id="modal_stu_login_btn" src="/img/modal_stu_login.png"/></a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row" id="firstRow">
        <div class="col-lg-3">
            <label id="lab_tju">天津大学软件学院</label>
        </div>
    </div>
    <div class="row" id="secondRow">
        <div class="col-lg-4 col-lg-offset-4">
            <label id="lab_title">让上机变得更简单</label>
        </div>
    </div>
    <div class="row" id="thirdRow">
        <div style="text-align: center">
            <a id="btn_student_login" class="btn" data-toggle="modal" data-target="#modal_stu_login" data-backdrop="true" ><img src="/img/teacher_login_btn.png"/></a>
            <a class="btn"><img src="/img/student_login_btn.png"/></a>
        </div>
    </div>
    <div class="row" id="footer">
        <div>
            <label id="footer_tju">天津大学软件学院</label>
            <label id="footer_aboutUs">关于我们</label>
            <label id="footer_contactUs">联系我们</label>
        </div>
    </div>
</div>

<script src="/js/jquery-3.1.0.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/login.js"></script>

</body>
</html>