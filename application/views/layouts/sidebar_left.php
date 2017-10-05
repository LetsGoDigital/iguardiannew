<aside id="sidebar-left" class="sidebar-circle">

<!-- Start left navigation - profile shortcut -->
<div class="sidebar-content">
    <div class="media">
        <a class="pull-left has-notif avatar" href="<?php echo base_url('user/profile'); ?>">
            <img src="http://img.djavaui.com/?create=50x50,4888E1?f=ffffff" alt="admin">
            <i class="online"></i>
        </a>
        <div class="media-body">
            <h4 class="media-heading">Hello, <span><?php echo $this->session->userdata['logged_in']['firstname']; ?></span></h4>
        </div>
    </div>
</div><!-- /.sidebar-content -->
<!--/ End left navigation -  profile shortcut -->

    <!-- Start left navigation - menu -->
    <ul class="sidebar-menu">
        
        <?php if(is_allowed('dashboard')){ ?>
            <!-- Start navigation - dashboard -->
            <li class="<?php if (isset($active_dashboard)){ echo $active_dashboard;} ?>">
                <a href="<?php echo base_url('dashboard'); ?>">
                    <span class="icon"><i class="fa fa-home"></i></span>
                    <span class="text">Dashboard</span>
                    <?php if (isset($active_dashboard)){ ?>
                        <span class="selected"></span>
                    <?php } ?>
                </a>
            </li>
            <!--/ End navigation - dashboard -->
        <?php } ?>
            
        <!-- Start System Settings Heading -->
        <li class="sidebar-category">
            <span>SYSTEM SETTINGS</span>
            <span class="pull-right"><i class="fa fa-gear"></i></span>
        </li>
        <!--/ End System Settings Heading -->
        
        <?php if(is_allowed('company')){ ?>
            <!-- Start navigation - dashboard -->
            <li class="<?php if (isset($active_company)){ echo $active_company;} ?>">
                <a href="<?php echo base_url('system/company'); ?>">
                    <span class="icon"><i class="fa fa-building-o"></i></span>
                    <span class="text">Manage Company</span>
                    <?php if (isset($active_company)){ ?>
                        <span class="selected"></span>
                    <?php } ?>
                </a>
            </li>
            <!--/ End navigation - dashboard -->
        <?php } ?>
        
        
        <?php if(is_allowed('adduser,users,userroles')) { ?>
            <!-- Start navigation - User Management -->
            <li class="submenu <?php if (isset($active_manage_users)){ echo $active_manage_users;} ?>">
                <a href="javascript:void(0);">
                    <span class="icon"><i class="fa fa-user"></i></span>
                    <span class="text">Manage Users</span>
                    <span class="arrow"></span>
                    <?php if (isset($active_manage_users)){ ?>
                        <span class="selected"></span>
                    <?php } ?>
                </a>
                <ul>
                    <?php if(is_allowed('adduser')){ ?>
                        <li class="<?php if (isset($active_adduser)){ echo $active_adduser;} ?>"><a href="<?php echo base_url('system/adduser'); ?>">Add User</a></li>
                    <?php
                    }
                    if(is_allowed('users')){
                    ?>
                        <li class="<?php if (isset($active_users)){ echo $active_users;} ?>"><a href="<?php echo base_url('system/users'); ?>">View/Edit Users</a></li>
                    <?php
                    }
                    if(is_allowed('userroles')){
                    ?>
                        <li class="<?php if (isset($active_userroles)){ echo $active_userroles;} ?>"><a href="<?php echo base_url('system/userroles'); ?>">User Roles</a></li>
                    <?php } ?>
                </ul>
            </li>
            <!--/ End navigation - User Management -->
        <?php } ?>
            
        <?php if(is_allowed('stripe')){ ?>
            <!-- Start navigation - Stripe -->
            <li class="<?php if (isset($active_stripe)){ echo $active_stripe;} ?>">
                <a href="<?php echo base_url('system/stripe'); ?>">
                    <span class="icon"><i class="fa fa-money"></i></span>
                    <span class="text">Edit Stripe Account</span>
                    <?php if (isset($active_stripe)){ ?>
                        <span class="selected"></span>
                    <?php } ?>
                </a>
            </li>
            <!--/ End navigation - Discounts -->
        <?php } ?>
            
        <?php if(is_allowed('discounts')){ ?>
            <!-- Start navigation - Stripe -->
            <li class="<?php if (isset($active_discounts)){ echo $active_discounts;} ?>">
                <a href="<?php echo base_url('system/discounts'); ?>">
                    <span class="icon"><i class="fa fa-chain"></i></span>
                    <span class="text">Referral Discounts</span>
                    <?php if (isset($active_discounts)){ ?>
                        <span class="selected"></span>
                    <?php } ?>
                </a>
            </li>
            <!--/ End navigation - Discounts -->
        <?php } ?>
            
        <?php if(is_allowed('editwebsite')){ ?>
            <!-- Start navigation - Website -->
            <li class="<?php if (isset($active_editwebsite)){ echo $active_editwebsite;} ?>">
                <a href="<?php echo base_url('system/editwebsite'); ?>">
                    <span class="icon"><i class="fa fa-navicon"></i></span>
                    <span class="text">View/Edit Website</span>
                    <?php if (isset($active_editwebsite)){ ?>
                        <span class="selected"></span>
                    <?php } ?>
                </a>
            </li>
            <!--/ End navigation - Website -->
        <?php } ?>
            
        
            
        <!-- Start Manage Organizations Heading -->
        <li class="sidebar-category">
            <span>MANAGE ORGANIZATIONS</span>
            <span class="pull-right"><i class="fa fa-building"></i></span>
        </li>
        <!--/ End Manage Organizations  Heading -->
        
        <?php if(is_allowed('addorg,orgs')) { ?>
            <!-- Start navigation - Organization Management -->
            <li class="submenu <?php if (isset($active_org_management)){ echo $active_org_management;} ?>">
                <a href="javascript:void(0);">
                    <span class="icon"><i class="fa fa-building"></i></span>
                    <span class="text">Manage Organizations</span>
                    <span class="arrow"></span>
                    <?php if (isset($active_org_management)){ ?>
                        <span class="selected"></span>
                    <?php } ?>
                </a>
                <ul>
                    <?php if(is_allowed('addorg')){ ?>
                        <li class="<?php if (isset($active_addorg)){ echo $active_addorg;} ?>"><a href="<?php echo base_url('system/addorg'); ?>">Add Organization</a></li>
                    <?php
                    }
                    if(is_allowed('orgs')){
                    ?>
                        <li class="<?php if (isset($active_orgs)){ echo $active_orgs;} ?>"><a href="<?php echo base_url('system/orgs'); ?>">View/Edit Organizations</a></li>
                    <?php } ?>
                </ul>
            </li>
            <!--/ End navigation - Organization Management -->
        <?php } ?>
            
        <?php if(is_allowed('helpdesk')){ ?>
            <!-- Start navigation - helpdesk -->
            <li class="<?php if (isset($active_helpdesk)){ echo $active_helpdesk;} ?>">
                <a href="<?php echo base_url('system/helpdesk'); ?>">
                    <span class="icon"><i class="fa fa-money"></i></span>
                    <span class="text">Organizations Helpdesk</span>
                    <?php if (isset($active_helpdesk)){ ?>
                        <span class="selected"></span>
                    <?php } ?>
                </a>
            </li>
            <!--/ End navigation - helpdesk -->
        <?php } ?>
            
        <?php if(is_allowed('referrals')){ ?>
            <!-- Start navigation - referrals -->
            <li class="<?php if (isset($active_referrals)){ echo $active_referrals;} ?>">
                <a href="<?php echo base_url('system/referrals'); ?>">
                    <span class="icon"><i class="fa fa-chain"></i></span>
                    <span class="text">Manage Referrals</span>
                    <?php if (isset($active_referrals)){ ?>
                        <span class="selected"></span>
                    <?php } ?>
                </a>
            </li>
            <!--/ End navigation - referrals -->
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