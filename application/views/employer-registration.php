<?php $this->load->view('head');?>
<div class="container">
	<h2>Employer Registration</h2>
	
	<div class="row">
				<div class="col-sm-5">
					<?php if($this->session->flashdata('email')){?>
  						<div class="alert alert-danger">      
   							 <?php echo $this->session->flashdata('email')?>
  						</div>
					<?php } ?>
					
				</div>

	</div>
	<div class="row">
		<div class="col-sm-5">
				<form method="post" action="post-registration">
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" name="name" class="form-control" value="<?php echo set_value('name'); ?>">
						<?php echo form_error('name');?>
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" name="email" class="form-control">
						<?php echo form_error('email');?>
					</div>
					<div class="form-group">
						<label for="designation">Designation</label>
						<input type="designation" name="designation" class="form-control">
						<?php echo form_error('designation');?>
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" class="form-control">
						<?php echo form_error('password');?>
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-success" name="submit" value="Register"> 
					</div>
					<div>
						<p>Already registered User.Please <a href="employer-login">Sign-In</a></p>
					</div>
			</form>
		</div>
	</div>
</div>
<?php $this->load->view('footer');?>