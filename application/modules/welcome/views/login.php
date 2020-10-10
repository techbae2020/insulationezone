<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <base >
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
        <title>Insulation Zone | Login</title>
        <?php $this->load->view('header');?> 
    </head>

    <body
        class="page-template ltr"
        data-theme-color="#0068e1"
        style="--color-primary: #0068e1;
            --color-primary-hover: #0055b8;
            --color-primary-transparent: rgba(0, 104, 225, 0.8);
            --color-primary-transparent-lite: rgba(0, 104, 225, 0.3);"
    >
    <?php $this->load->view('header-menu');?> 

    <section class="form-wrap login-wrap">
        <div class="container">
            <div class="form-wrap-inner login-wrap-inner">
                <h2>Login</h2>
                <form method="POST" action="">
                    <input type="hidden" name="_token" value="">
                    <div class="form-group">
                        <label for="email">Email<span>*</span></label>
                        <input type="text" name="email" value="" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password<span>*</span></label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <div class="form-check remember-me">
                        <input type="hidden" name="remember_me" value="0">
                        <input type="checkbox" name="remember_me" value="1" id="remember" >
                        <label for="remember" class="form-check-label">Remember me</label>
                    </div>
                    <a href="password/reset.html" class="forgot-password">
                        forgot password?
                    </a>
                    <button type="submit" class="btn btn-primary btn-sign-in" data-loading>
                        SIGN IN
                    </button>
                </form>
                <span class="have-an-account">
                    Don&#039;t Have an Account?
                </span>
                <a href="<?php echo site_url('welcome/register');?>" class="btn btn-default btn-create-account">
                    CREATE ACCOUNT
                </a>
            </div>
        </div>
    </section>
    <?php $this->load->view('side-footer-menu');?>
        </div>
        <?php $this->load->view('footer');?>
    </body>
</html>
