<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administrator</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/datepicker3.css" rel="stylesheet">
    <link href="css/bootstrap-table.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

    <!--Icons-->
    <script src="js/lumino.glyphs.js"></script>
    <script src="../ckeditor/ckeditor.js"></script>

    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><span>Manage </span>User</a>
                <div class="user-menu">
                    <li class="dropdown pull-right">
                        <i style="color: #fff;">
                            <?php if (isset($_SESSION['user_mail'])) {
                                echo $_SESSION['user_mail'];
                            } ?>
                        </i>
                        <a href="index.php?controller=logout&action=logout" class="btn btn-primary" style="margin-bottom: 10px; margin-left: 10px;"> Đăng xuất</a>
                    </li>
                </div>
            </div>

        </div><!-- /.container-fluid -->
    </nav>

    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <form role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>
        </form>
        <ul class="nav menu">
            <li class=""><a href="index.php"><svg class="glyph stroked male user ">
                        <use xlink:href="#stroked-male-user" />
                    </svg>Dashboard</a></li>
            <li class=""><a href="index.php?controller=user"><svg class="glyph stroked male user ">
                        <use xlink:href="#stroked-male-user" />
                    </svg>Quản lý thành viên</a></li>
        </ul>

    </div>
    <!--/.sidebar-->

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home">
                            <use xlink:href="#stroked-home"></use>
                        </svg></a></li>
                <li><a href="">Quản lý thành viên</a></li>
                <li class="active">Thêm thành viên</li>
            </ol>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thêm thành viên</h1>
            </div>
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-8">
                            <?php
                            if(isset($errors)){
                                foreach($errors as $item){
                                    echo '<div class="alert alert-danger">'.$item.'</div>';
                                }
                            }
                            ?>
                            <form role="form" method="post">
                                <div class="form-group">
                                    <label>Họ & Tên</label>
                                    <input name="user_name" type="text" class="form-control" required min="5" max="255" placeholder="" value="<?php if(isset($data['user_name'])) {echo $data['user_name'];} ?>">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input name="user_mail"  type="email" class="form-control" required min="5" max="255" value="<?php if(isset($data['user_mail'])) {echo $data['user_mail'];} ?>">
                                </div>
                                <div class="form-group">
                                    <label>Mật khẩu</label>
                                    <input name="user_pass"  type="password" class="form-control" required min="5" max="255" value="<?php if(isset($data['user_pass'])) {echo $data['user_pass'];} ?>">
                                </div>
                                <div class="form-group">
                                    <label>Nhập lại mật khẩu</label>
                                    <input name="user_re_pass"  type="password" class="form-control" required min="5" max="255" value="<?php if(isset($data['user_re_pass'])) {echo $data['user_re_pass'];} ?>">
                                </div>

                                <button name="sbm" type="submit" class="btn btn-success">Thêm mới</button>
                                <button type="reset" class="btn btn-default">Làm mới</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div><!-- /.col-->
        </div><!-- /.row -->
    </div>
    <!--/.main-->
</body>

</html>