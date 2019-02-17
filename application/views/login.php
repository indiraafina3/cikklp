<!doctype html>
<html>
    <head>
        <title>Selamat datang di website KKLP</title>
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/bootstrap.css"/>
    </head>
    <body><br><br><br><br>
        <style type="text/css">
            body {
                background-image: url('assets/images/login.jpg');
            }
        </style>
        <h1 style="text-align: center;"> Selamat Datang Di Website Pengusulan KKLP</h1>
        <div style="margin: auto; width: 350px; height: 250px; margin-top: 50px; border: 1px solid lightgray; padding: 0px 15px">
            <h3>Please Login</h3>
            <form action="<?php echo base_url(); ?>index.php/Input/login_validation" method="post" >
                Username <br>
                <input class="form-control" name="username" type="text" style="width: 320px;" /><span class="text-error"><?php echo form_error('username');?></span><br>
                Password <span class="text-error"><?php echo form_error('password');?></span><br>
                <input class="form-control" name="password" type="password" style="width: 320px;" /><br>
                <input name="submit" type="submit" value="Login" class="btn btn-primary" />
                <?php
                    echo $this->session->flashdata("error");
                 ?>
                <div class="text-center text-error">
                    
                </div>
            </form>
        </div>

        <script src="<?php echo base_url() ?>asset/bootstrap/bootstrap.js"></script>    
        <script src="<?php echo base_url() ?>asset/bootstrap/jquery-1.11.0.js"></script>    
    </body>
</html>