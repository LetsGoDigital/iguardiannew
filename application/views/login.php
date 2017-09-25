<!-- START @SIGN WRAPPER -->
<div id="sign-wrapper">

    <!-- Brand -->
    <div class="brand">
        <img src="http://img.djavaui.com/?create=220x100,4888E1?f=ffffff" alt="brand logo"/>
    </div>
    <!--/ Brand -->

    <!-- Login form -->
        <?php echo form_open('user/login',array('class' => 'sign-in form-horizontal shadow rounded no-overflow')); ?>
        <div class="sign-header">
            <div class="form-group">
                <div class="sign-text">
                    <span>Member Area</span>
                </div>
            </div><!-- /.form-group -->
        </div><!-- /.sign-header -->
        <div class="sign-body">
            <div class="form-group">
                <div class="input-group input-group-lg rounded no-overflow">
                    <input type="text" class="form-control input-sm" placeholder="Email " id="email" name="email">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                </div>
            </div><!-- /.form-group -->
            <div class="form-group">
                <div class="input-group input-group-lg rounded no-overflow">
                    <input type="password" class="form-control input-sm" placeholder="Password" id="password" name="password">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                </div>
            </div><!-- /.form-group -->
        </div><!-- /.sign-body -->
        <div class="sign-footer">
            <div class="form-group">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="ckbox ckbox-theme">
                            <input id="rememberme" type="checkbox">
                            <label for="rememberme" class="rounded">Remember me</label>
                        </div>
                    </div>
                    <div class="col-xs-6 text-right">
                        <a href="<?php echo base_url('user/forgot'); ?>" title="lost password">Lost password?</a>
                    </div>
                </div>
            </div><!-- /.form-group -->
            <div class="form-group">
                <button type="submit" class="btn btn-theme btn-lg btn-block no-margin rounded" id="login-btn">Sign In</button>
            </div><!-- /.form-group -->
        </div><!-- /.sign-footer -->
    <?php echo form_close(); ?><!-- /.form-horizontal -->
    <!--/ Login form -->

    <!-- Content text -->
    <p class="text-muted text-center sign-link">Need an account? <a href="<?php echo base_url('user/signup'); ?>"> Sign up free</a></p>
    <!--/ Content text -->

</div><!-- /#sign-wrapper -->
<!--/ END SIGN WRAPPER -->