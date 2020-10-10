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
            <link rel="stylesheet" href="<?php echo base_url();?>assets/css/mobiscroll.javascript.min.css">
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
                                <div class="col-md-12 col-xl-12">
                                <div class="card m-b-20">
                                        <div class="card-body"> 
                                            <div class="row">
                                                <div style="padding:30px; background: rgb(60 48 48 / 5%); min-height: 400px;width:100%;margin-top:1%;">
                                                    <div class="row">
                                                        <div class="col-md-4 upload-div">
                                                            <form method="post" action="#" id="#">
                                                                <div class="form-group files">
                                                                    <label>Upload purchase order </label>
                                                                    <input type="file" class="form-control" multiple="">
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="col-md-4 upload-div">
                                                            <form method="post" action="#" id="#">           
                                                                <div class="form-group files color">
                                                                    <label>Upload energy report </label>
                                                                    <input type="file" class="form-control" multiple="">
                                                                </div>          
                                                            </form>
                                                        </div>
                                                        <div class="col-md-4 upload-div">
                                                            <form method="post" action="#" id="#">       
                                                                <div class="form-group files color">
                                                                    <label>Upload architect plan  </label>
                                                                    <input type="file" class="form-control" multiple="">
                                                                </div>      
                                                            </form>
                                                        </div>
                                                        <div class="col-md-4 upload-div">
                                                            <form method="post" action="#" id="#">       
                                                                <div class="form-group files color">
                                                                    <label>Upload Specification  </label>
                                                                    <input type="file" class="form-control" multiple="">
                                                                </div>      
                                                            </form>
                                                        </div>
                                                        <div class="col-md-4 upload-div">
                                                            <form method="post" action="#" id="#">       
                                                                <div class="form-group files color">
                                                                    <label>Upload Window Schedule </label>
                                                                    <input type="file" class="form-control" multiple="">
                                                                </div>      
                                                            </form>
                                                        </div>
                                                        <div class="col-md-4 upload-div">
                                                            <form method="post" action="#" id="#">       
                                                                <div class="form-group files color">
                                                                    <label>Upload Your File </label>
                                                                    <input type="file" class="form-control" multiple="">
                                                                </div>      
                                                            </form>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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