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

    <section class="form-wrap register-wrap">
        <div class="container">
            <div class="form-wrap-inner register-wrap-inner">
                <span class="have-an-account">
                    Already Have an Account? &nbsp;&nbsp;<a href="<?php echo site_url('welcome/login');?>">Login</a>
                </span>
               <br>
                <h2>Register</h2>

                <form method="POST" action="">
                    <input type="hidden" name="_token" value="OBAbGK7cINJ2uCJigNwpbx28xzyppllkxo7RMBNJ">
                    <div class="form-group">
                        <label for="user-name">
                            User Name<span>*</span>
                        </label>
                        <input type="text" name="username" value="" id="user-name" class="form-control" placeholder="User Name">
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <label for="fname">First Name<span>*</span></label>
                                <input type="text" name="fname" value="" id="fname" class="form-control" placeholder="First Name">
                            </div>
                            <div class="col-6">
                                <label for="lname">Last Name<span>*</span></label>
                                <input type="text" name="lname" value="" id="lname" class="form-control" placeholder="Last Name">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <label for="email">Password<span>*</span></label>
                                <input type="text" name="password" value="" id="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="col-6">
                                <label for="password">Confirm Password<span>*</span></label>
                                <input type="text" name="cpassword" value="" id="cpassword" class="form-control" placeholder="Confirm Password">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <label for="phone">Phone Number<span>*</span></label>
                                <input type="text" name="phone" value="" id="phone" class="form-control" placeholder="Phone Number">
                            </div>
                            <div class="col-6">
                                <label for="adress">Adress<span>*</span></label>
                                <input type="text" name="adress" value="" id="adress" class="form-control" placeholder="Adress">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="company">
                            Company<span>*</span>
                        </label>
                        <input type="text" name="company" value="" id="company" class="form-control" placeholder="Company">
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <label for="email">ABN<span>*</span></label>
                                <input type="text" name="email" value="" id="email" class="form-control" placeholder="ABN">
                            </div>
                            <div class="col-6">
                                <label for="email">Builder Licence No<span>*</span></label>
                                <input type="text" name="email" value="" id="email" class="form-control" placeholder="Dealer Licence No">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-4">
                                <label for="city">
                                    City<span>*</span>
                                </label>
                                <input type="text" name="city" value="" id="city" class="form-control" placeholder="City">
                            </div>
                            <div class="col-4">
                                <label for="state">
                                    State<span>*</span>
                                </label>
                                <input type="text" name="state" value="" id="state" class="form-control" placeholder="State">
                            </div>
                            <div class="col-4">
                                <label for="postcode">
                                    Post Code<span>*</span>
                                </label>
                                <input type="text" name="postcode" value="" id="postcode" class="form-control" placeholder="Post Code">
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-check terms-and-conditions">
                        <input type="hidden" name="privacy_policy" value="0">
                        <input type="checkbox" name="privacy_policy" value="1" id="terms" >
                        <label for="terms" class="form-check-label">
                            I agree to the <a href="privacy-policy.html">Privacy Policy</a>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-create-account" data-loading>
                        CREATE ACCOUNT
                    </button>
                </form>
               
            </div>
        </div>
    </section>
    <?php $this->load->view('side-footer-menu');?>
        </div>
        <?php $this->load->view('footer');?>
    </body>
</html>
