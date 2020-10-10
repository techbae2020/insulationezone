
<div class="topbar-left">
    <div class="">
        <!--<a href="index.php" class="logo text-center">Admiria</a>-->
        <a href="<?php echo site_url('builder/');?>" class="logo"><img src="<?php echo base_url();?>assets/admin/public/assets/images/logo.jpeg" height="50" width="150" alt="logo"></a>
    </div>
</div>

<div class="sidebar-inner slimscrollleft">
    <div id="sidebar-menu">
        <ul>
            <li>
                <a href="<?php echo site_url('builder/');?>" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> Dashboard </span> </a>
            </li>

            <!-- <li>
                <a href="widgets.html" class="waves-effect"><i class="mdi mdi-cube-outline"></i><span> Builder </span></a>
            </li> -->
            <li>
                <a href="<?php echo site_url('builder/product-list');?>" class="waves-effect"><i class="mdi mdi-cube-outline"></i><span> Product List </span></a>
            </li>
            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> Order List <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span></span> </a>
                <ul class="list-unstyled">
                    <li><a href="<?php echo site_url('builder/orderhistory');?>">Order History</a></li>
                    
                </ul>
            </li>
            <li>
                <a href="<?php echo site_url('builder/booking');?>" class="waves-effect"><i class="mdi mdi-cube-outline"></i><span> Booking </span></a>
            </li>
            <li>
                <a href="<?php echo site_url('builder/booking-history');?>" class="waves-effect"><i class="mdi mdi-cube-outline"></i><span> Booking History </span></a>
            </li>
        </ul>
    </div>
    <div class="clearfix"></div>
</div> <!-- end sidebarinner -->