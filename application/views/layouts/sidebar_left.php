<aside id="sidebar-left" class="sidebar-circle">

<!-- Start left navigation - profile shortcut -->
<div class="sidebar-content">
    <div class="media">
        <a class="pull-left has-notif avatar" href="page-profile.html">
            <img src="http://img.djavaui.com/?create=50x50,4888E1?f=ffffff" alt="admin">
            <i class="online"></i>
        </a>
        <div class="media-body">
            <h4 class="media-heading">Hello, <span>Lee</span></h4>
            <small>Web Designer</small>
        </div>
    </div>
</div><!-- /.sidebar-content -->
<!--/ End left navigation -  profile shortcut -->

    <!-- Start left navigation - menu -->
    <ul class="sidebar-menu">
        
        <?php if(is_allowed('dashboard')){ ?>
            <!-- Start navigation - dashboard -->
            <li class="<?php if (isset($active_dashboard)){ echo $active_dashboard;} ?>">
                <a href="<?php echo site_url($this->config->item('link_url').'/dashboard'); ?>">
                    <span class="icon"><i class="fa fa-home"></i></span>
                    <span class="text">Dashboard</span>
                    <?php if (isset($active_dashboard)){ ?>
                        <span class="selected"></span>
                    <?php } ?>
                </a>
            </li>
            <!--/ End navigation - dashboard -->
        <?php } ?>
        
        
        <?php if(is_allowed('newstaff,newchild')) { ?>
            <!-- Start navigation - New Record -->
            <li class="submenu <?php if (isset($active_new_record)){ echo $active_new_record;} ?>">
                <a href="javascript:void(0);">
                    <span class="icon"><i class="fa fa-globe"></i></span>
                    <span class="text">New Record</span>
                    <span class="arrow"></span>
                    <?php if (isset($active_new_record)){ ?>
                        <span class="selected"></span>
                    <?php } ?>
                </a>
                <ul>
                    <?php if(is_allowed('newstaff')){ ?>
                        <li class="<?php if (isset($active_new_staff)){ echo $active_new_staff;} ?>"><a href="<?php echo base_url('manage/newstaff'); ?>">Staff</a></li>
                    <?php
                    }
                    if(is_allowed('newchild')){
                    ?>
                        <li class="<?php if (isset($active_new_child)){ echo $active_new_child;} ?>"><a href="<?php echo base_url('manage/newchild'); ?>">Child</a></li>
                    <?php } ?>
                </ul>
            </li>
            <!--/ End navigation - New Record -->
        <?php } ?>
            
        <?php if(is_allowed('createnotification')) { ?>
            <!-- Start navigation - Create Notification -->
            <li class="<?php if (isset($active_create_notification)){ echo $active_create_notification;} ?>">
                <a href="<?php echo base_url('notification') ?>">
                    <span class="icon"><i class="fa fa-forumbee"></i></span>
                    <span class="text">Create Notification</span>
                    <?php if (isset($active_create_notification)){ ?>
                        <span class="selected"></span>
                    <?php } ?>
                </a>
            </li>
            <!--/ End navigation - Create Notification -->
        <?php } ?>

    </ul><!-- /.sidebar-menu -->
    <!--/ End left navigation - menu -->

<!-- Start left navigation - footer -->
<div class="sidebar-footer hidden-xs hidden-sm hidden-md">
    <a id="setting" class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-title="Setting"><i class="fa fa-cog"></i></a>
    <a id="fullscreen" class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-title="Fullscreen"><i class="fa fa-desktop"></i></a>
    <a id="lock-screen" data-url="account/lock-screen" class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-title="Lock Screen"><i class="fa fa-lock"></i></a>
    <a id="logout" data-url="account/sign-in" class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-title="Logout"><i class="fa fa-power-off"></i></a>
</div><!-- /.sidebar-footer -->
<!--/ End left navigation - footer -->

</aside><!-- /#sidebar-left -->