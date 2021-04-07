<?php
$user_id= $this->session->userdata('user_id');

if(!$user_id)
{

}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registration Page</title>
    <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>

<div class="container">
  <div class="row">
    <div class="col-md-4">
      <table class="table table-bordered table-striped">
     <tr>
          <th colspan="2"><h4 class="text-center">Users Details</h4></th>
    </tr>

		<?php foreach($users as $key => $val)
    {
    ?>
          <tr>
            <td>User Name</td>
            <td><?php echo $val['user_name'];?></td>
          </tr>
          <tr>
            <td>User Email</td>
            <td><?php echo $val['user_email'];?></td>
          </tr>
          <tr>
            <!-- <td>User Age</td>
            <td><?php echo  $val['user_age'];?></td>
          </tr>
          <tr>
            <td>User Mobile</td>
            <td><?php echo  $val['user_mobile'];?></td>
          </tr> -->
		  <tr> <td style="padding-top: 20px;"> </td></tr>
		  <?php
       }
      ?>
      </table>
    </div>
  </div>
<a href="<?php echo base_url('user/user_logout');?>" >  <button type="button" class="btn-primary">Logout</button></a>
</div>
  </body>
</html>