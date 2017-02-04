<?php

defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
    <title>login</title>
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Login</div>
            </div>
            <div style="padding-top:30px" class="panel-body">
                <form id="loginform" method="post" action="<?php echo base_url(); ?>index.php/welcome/login_validation" class="form-horizontal" role="form">
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="login-username" type="text" class="form-control" name="name" value=""
                               placeholder="username">
                    </div>
                    <span class='text-danger'><?php echo form_error('name'); ?></span>
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="login-password" type="password" class="form-control" name="password"
                               placeholder="password">
                    </div>
                    <span class='text-danger'><?php echo form_error('password'); ?></span>
                    <div style="margin-top:10px" class="form-group">
                        <div class="col-sm-12 controls">
                            <input type="submit" id="btn-login" value="login"  class="btn btn-success">
                        </div>
                    </div>
                    <?php if($this->session->flashdata('error') != '') { ?>
                        <label class="text-danger"><?php echo $this->session->flashdata('error'); ?></label>
                    <?php } ?>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>