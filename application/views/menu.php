<body class="hold-transition layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <i class="fa fa-sync fa-spin"></i>
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <!-- <li class="nav-item d-none d-sm-inline-block">
                    <a href="http://fe-entry-form-manual-dev.apps.ocp4dev.muf.co.id/eyJhbGciOiJIUzUxMiJ9.eyJzdWIiOiIxOTAxMjg5MyIsImV4cCI6MTY1NTU0ODE0MywiaWF0IjoxNjU1NDYxNzQzfQ.wGa_NnNJP6c_RBnIaYKBt0_UosfGUBTV2Ti8tnJ1VbT8oNVyO9BSGLJy3XSRmCsqepuGMThrmsuQJXxfq68wAw" class="nav-link">Home</a>
                </li> -->
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>


                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" role="button" data-toggle="modal" data-target="#modal-default">
                        <i class="fas fa-user-cog"> </i> PROFILE
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" role="button" id="btn-logout">
                        <i class="far fa-arrow-alt-circle-left"> </i> LOG OUT
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
                <div class="modal-content" style="background-color: transparent;box-shadow : none;border: none">
                    <div class="modal-body">
                        <div class="card card-widget widget-user">

                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="widget-user-header bg-info-white" style="padding: 0%;text-align:left;height:56px;padding:2%">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <img src="<?php echo base_url() ?>assets/dist/img/logo.png" style="opacity: .8;width : 20%">
                            </div>
                            <div class="widget-user-header bg-info">

                                <h3 class="widget-user-username" style="font-weight: 1000 ;" id="login-nama"></h3>
                                <h5 class="widget-user-desc" id="login-nik"></h5>
                                <h5 class="widget-user-desc" id="login-no-telp"></h5>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-sm-6 border-right">
                                        <div class="description-block">
                                            <h5 class="description-header" id="login-jabatan"></h5>
                                            <span class="description-text">JABATAN</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-6">
                                        <div class="description-block">
                                            <h5 class="description-header" id="login-cabang">13,000</h5>
                                            <span class="description-text">CABANG</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->

                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color:#204a7e ;">
            <!-- Brand Logo -->
            <a href="#" class="brand-link navbar-white navbar-light" style="background-image : url('assets/dist/img/bg.png'); border-bottom : 1px solid white">
                <!-- <img src="<?php echo base_url() ?>assets/dist/img/muf.jpeg" class="brand-image elevation-3" style="opacity: .8"> -->
                <div class=row>
                    <div class="col-lg-12">
                        <img src="<?php echo base_url() ?>assets/dist/img/logo.png" style="opacity: .8">
                    </div>
                    <div class="col-lg-12">
                        <span class="brand-text font-weight" style="color : #204a7e ;font-size:14px"><b>ACQUISITION
                                MANAGEMENT
                                SYSTEM</b></span>
                    </div>
                </div>

            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?php echo base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Alexander Pierce</a>
                    </div>
                </div> -->

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu" data-accordion="false" id="ul-menu-main">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class='nav-item'><a href='https://todoist.com/auth/signup' class='nav-link'>
                                <p>NEW ENTRY</p>
                            </a></li>
                        <li class='nav-item'><a href='Main/form' class='nav-link'>
                                <p>FORM</p>
                            </a></li>
                    </ul>

                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>