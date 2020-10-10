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
                                <div class="col-md-12 col-xl-12">
                                <div class="card m-b-20">
                                        <div class="card-body"> 
                                            <div class="table-rep-plugin">
                                                <div class="table-responsive mb-0" data-pattern="priority-columns"> 
                                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>S.NO</th>
                                                            <th data-priority="1">#Order ID</th>
                                                            <th data-priority="3">User</th>
                                                            <th data-priority="1">Mobile No</th>
                                                            <th data-priority="3">Payable Amount</th>
                                                            <th data-priority="3">Payment Mode</th>
                                                            <th data-priority="6">Date</th>
                                                            <th data-priority="6">Status</th>
                                                            <th data-priority="6">Action</th>
                                                            <th data-priority="6">JSA FORM</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <th>1</th>
                                                            <td>597.74</td>
                                                            <td>12:12PM</td>
                                                            <td>14.81 (2.54%)</td>
                                                            <td>582.93</td>
                                                            <td>597.95</td>
                                                            <td>597.73 x 100</td>
                                                            <td>597.91 x 300</td>
                                                            <td><a href="" class="btn btn-sm" style="background:blue;color:#fff;">Completed</td>
                                                            <td><a href="<?php echo site_url('builder/jsaform');?>" class="btn btn-block" style="background:#d2d2d2;color:#fff;">JSA Form</td>
                                                        </tr>
                                                        <tr>
                                                            <th>AAPL <span class="co-name">Apple Inc.</span></th>
                                                            <td>378.94</td>
                                                            <td>12:22PM</td>
                                                            <td>5.74 (1.54%)</td>
                                                            <td>373.20</td>
                                                            <td>381.02</td>
                                                            <td>378.92 x 300</td>
                                                            <td>378.99 x 100</td>
                                                            <td><a href="" class="btn btn-sm" style="background:blue;color:#fff;">Completed</td>
                                                            <td><a href="<?php echo site_url('builder/jsaform');?>" class="btn btn-block" style="background:#d2d2d2;color:#fff;">JSA Form</td>
                                                        </tr>
                                                        <tr>
                                                            <th>AMZN <span class="co-name">Amazon.com Inc.</span></th>
                                                            <td>191.55</td>
                                                            <td>12:23PM</td>
                                                            <td>3.16 (1.68%)</td>
                                                            <td>188.39</td>
                                                            <td>194.99</td>
                                                            <td>191.52 x 300</td>
                                                            <td>191.58 x 100</td>
                                                            <td><a href="" class="btn btn-sm" style="background:blue;color:#fff;">Completed</td>
                                                            <td><a href="<?php echo site_url('builder/jsaform');?>" class="btn btn-block" style="background:#d2d2d2;color:#fff;">JSA Form</td>
                                                        </tr>
                                                        <tr>
                                                            <th>ORCL <span class="co-name">Oracle Corporation</span></th>
                                                            <td>31.15</td>
                                                            <td>12:44PM</td>
                                                            <td>1.41 (4.72%)</td>
                                                            <td>29.74</td>
                                                            <td>30.67</td>
                                                            <td>31.14 x 6500</td>
                                                            <td>31.15 x 3200</td>
                                                            <td><a href="" class="btn btn-sm" style="background:blue;color:#fff;">Completed</td>
                                                            <td><a href="<?php echo site_url('builder/jsaform');?>" class="btn btn-block" style="background:#d2d2d2;color:#fff;">JSA Form</td>
                                                        </tr>
                                                        <tr>
                                                            <th>MSFT <span class="co-name">Microsoft Corporation</span></th>
                                                            <td>25.50</td>
                                                            <td>12:27PM</td>
                                                            <td>0.66 (2.67%)</td>
                                                            <td>24.84</td>
                                                            <td>25.37</td>
                                                            <td>25.50 x 71100</td>
                                                            <td>25.51 x 17800</td>
                                                            <td><a href="" class="btn btn-sm" style="background:blue;color:#fff;">Completed</td>
                                                            <td><a href="<?php echo site_url('builder/jsaform');?>" class="btn btn-block" style="background:#d2d2d2;color:#fff;">JSA Form</td>
                                                        </tr>
                                                        <tr>
                                                            <th>CSCO <span class="co-name">Cisco Systems, Inc.</span></th>
                                                            <td>18.65</td>
                                                            <td>12:45PM</td>
                                                            <td>0.97 (5.49%)</td>
                                                            <td>17.68</td>
                                                            <td>18.23</td>
                                                            <td>18.65 x 10300</td>
                                                            <td>18.66 x 24000</td>
                                                            <td><a href="" class="btn btn-sm" style="background:blue;color:#fff;">Completed</td>
                                                            <td><a href="<?php echo site_url('builder/jsaform');?>" class="btn btn-block" style="background:#d2d2d2;color:#fff;">JSA Form</td>
                                                        </tr>
                                                        <tr>
                                                            <th>YHOO <span class="co-name">Yahoo! Inc.</span></th>
                                                            <td>15.81</td>
                                                            <td>12:25PM</td>
                                                            <td>0.11 (0.67%)</td>
                                                            <td>15.70</td>
                                                            <td>15.94</td>
                                                            <td>15.79 x 6100</td>
                                                            <td>15.80 x 17000</td>
                                                            <td><a href="" class="btn btn-sm" style="background:blue;color:#fff;">Completed</td>
                                                            <td><a href="<?php echo site_url('builder/jsaform');?>" class="btn btn-block" style="background:#d2d2d2;color:#fff;">JSA Form</td>
                                                        </tr>                                   
                                                        </tbody>
                                                    </table>
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
    <script>
       $(document).ready(function() {
            $('#example').DataTable();
            // $('#example').DataTable( {
            //     dom: 'Bfrtip',
            //     buttons: [
            //         'copy', 'csv', 'excel', 'pdf', 'print'
            //     ]
            // } );
        } );
    </script>
    </body>
</html>