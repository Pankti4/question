<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Login</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="screen" title="no title">
</head>
<body>

<span style="background-color:red;">
  <div class="container">
      <div class="row">
          <div class="col-md-4 col-md-offset-4">
              <div class="login-panel panel panel-success">
                  <div class="panel-heading">
                      <h3 class="panel-title">Login here</h3>
                  </div>
                  <div class="panel-body">
                  
                  <?php
                  $error_msg=$this->session->flashdata('error_msg');
                  if($error_msg)
                  {
                    echo $error_msg;
                  }
                   ?>

                      <form role="form" method="post" action="<?php echo base_url('user/register_user'); ?>">
                          <fieldset>
                              <div class="form-group">
                                  <input class="form-control" placeholder="Please enter Name" name="user_name" type="text" autofocus>
                              </div>

                              <div class="form-group">
                                  <input class="form-control" placeholder="Please enter E-mail" name="user_email" type="email" autofocus>
                              </div>
                              <div class="form-group">
                                  <input class="form-control" placeholder="Enter Password" name="user_password" type="password" value="">
                              </div>

                              <!-- <div class="form-group">
                                  <input class="form-control" placeholder="Enter Age" name="user_age" type="number" value="">
                              </div>

                              <div class="form-group">
                                  <input class="form-control" placeholder="Enter Mobile No" name="user_mobile" type="mobile" value="">
                              </div> -->

                              <!-- <input class="btn btn-lg btn-success btn-block" type="submit" value="Register" name="register" > -->
                              <a href="<?php echo base_url('user/login_view');?>" >  <button type="submit" class="btn btn-lg btn-success btn-block">Login</button></a>
                          </fieldset>
                      </form>

                     <!--  <center><b>You have Already registered ?</b> <br></b><a href="<?php echo base_url('user/login_view'); ?>">Login Here</a></center> -->
                </div>
              </div>
          </div>
      </div>
  </div>
</span>
</body>
</html>