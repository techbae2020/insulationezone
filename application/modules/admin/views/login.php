<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"  crossorigin="anonymous">
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            vertic
        }
        .login-left{
            padding:20px 50px;
            padding-top:100px;
            min-width:50%;
            max-width:50%; 
            /*height:100vh;*/ 
            background:#46433b7a;
            -moz-box-shadow: inset -5px -5px 5px #888;
            -webkit-box-shadow: inset -5px -5px 5px #888;
            box-shadow: inset -5px -5px 5px #888;
        }
        .login-right{
            padding:20px 50px;
            padding-top:100px;
            margin-top:100px;
            min-width:50%;
            max-width:50%; 
            height:100vh;
        }
        .formclass{
            width:60%;
            margin:0 auto;
        }
        .form-control{
            border-radius:0;
            margin-bottom:20px;
        }
    </style>
</head>
<body style="background:#d3d3d3;height:100vh;overflow:hidden;">
   <section>
    <div class="row">
        <div class="login-left">
            <div style="text-align:center;margin-top:100px;">
                <img src="<?php echo base_url();?>assets/images/output-onlinepngtools.png" alt="" width="50%">
                <br></br>
                <h1>Techbae <i class="fa fa-heart" style="color:red;"></i> Team</h1>
            </div>
        </div>
        <div class="login-right">
            <div class="formclass">
                <form action="">
                    <div class="form-group">
                        <input type="text" class="form-control" name="userid" placeholder="Enter User ID"/>
                        <input type="text" class="form-control" name="password" placeholder="Enter Password"/>
                        <div>
                            <input type="checkbox"  name="remember">
                            <label for="vehicle1"> Remember details</label>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="" align="right"> Forgot password</a>
                        </div>
                        
                        <br>
                        <div style="text-align:center;">
                            <a href="<?php echo site_url('admin/dashboard');?>" class="btn btn-success" style="width:150px;">Login</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
   </section> 
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
</body>
</html>