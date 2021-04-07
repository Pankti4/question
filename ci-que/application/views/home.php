<center>
<?php 
	$id = $this->session->userdata('id');
	if(empty($id))
	{
	?>
<h3>
	<section class="signup">
       <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Log in</h2>
                        <?php if($this->session->flashdata('message')) { ?>
				            <div class="alert alert-danger">
				                <?php echo $this->session->flashdata('message')?>
				            </div>
				        <?php } ?>
                       <?php echo form_open('mcqs'); ?>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password"/>
                            </div>
                            <br>

                            <div class="form-group form-button">
                                <input type="submit" name="submit" id="submit" class="form-submit" value="Login"/>
                            </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </section>
	</h3>
</center>