<!doctype html>
<html lang="en"><meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
            <meta charset="utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
            <title>Admiria - Responsive Flat Admin Dashboard</title>
            <meta content="Admin Dashboard" name="description" />
            <meta content="Themesbrand" name="author" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <!-- App Icons -->
            <?php $this->load->view('builder-header-link');?>
    </head>
<body class="fixed-left">
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>
        <!-- Begin page -->
        <div id="wrapper">

           <!-- ========== Left Sidebar Start ========== -->
   <div class="left side-menu">


<?php $this->load->view('sidebar');?>
</div>
<!-- Left Sidebar End -->

            <!-- Start right Content here -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- Top Bar Start -->
                   <?php $this->load->view('builder-header');?>
                    <!-- Top Bar End -->

                    <!-- ==================
                         PAGE CONTENT START
                         ================== -->

                    <div class="page-content-wrapper">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-md-6 col-xl-3">
                                    <a href="<?php echo site_url('builder/booking');?>">
                                        <div class="mini-stat clearfix bg-white">
                                            <span class="mini-stat-icon bg-purple mr-0 float-right"><i class="mdi mdi-basket"></i></span>
                                            <div class="mini-stat-info">
                                                <span class="counter text-purple">Booking</span>
                                            </div>
                                            <div class="clearfix"></div>
                                            
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="mini-stat clearfix bg-white">
                                        <span class="mini-stat-icon bg-blue-grey mr-0 float-right"><i class="mdi mdi-black-mesa"></i></span>
                                        <div class="mini-stat-info">
                                            <span class="counter text-blue-grey">Job Board</span>
                                        </div>
                                        <div class="clearfix"></div>
                                        
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="mini-stat clearfix bg-white">
                                        <span class="mini-stat-icon bg-brown mr-0 float-right"><i class="mdi mdi-buffer"></i></span>
                                        <div class="mini-stat-info">
                                            <span class="counter text-brown">Invoice</span>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="mini-stat clearfix bg-white">
                                        <span class="mini-stat-icon bg-teal mr-0 float-right"><i class="mdi mdi-coffee"></i></span>
                                        <div class="mini-stat-info">
                                            <span class="counter text-teal">20544</span>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            

                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->
                <?php $this->load->view('builder-footer');?>
                
            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->
    <?php $this->load->view('builder-footer-link');?>
    </body>
</html>