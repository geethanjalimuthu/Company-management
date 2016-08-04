<?php $this->load->view('head');?>
		<div class="container">
		<h2>Employer Login</h2>
			<div class="row">
				<div class="col-sm-5">
					<?php if($this->session->flashdata('success')){?>
  						<div class="alert alert-success">      
   							 <?php echo $this->session->flashdata('success')?>
  						</div>
					<?php } ?>
					<?php if($this->session->flashdata('invalid')){?>
  						<div class="alert alert-danger">      
   							 <?php echo $this->session->flashdata('invalid')?>
  						</div>
					<?php } ?>
					<?php if($this->session->flashdata('logout')){?>
  						<div class="alert alert-success">      
   							 <?php echo $this->session->flashdata('logout')?>
  						</div>
					<?php } ?>

				</div>
				
			</div>
			<div class="row">
				<div class="col-sm-5">
				<form method="post" action="post-employerlogin">
					<div class="form-group">
						<label for="email">Email</label>
						<input type="text" name="email" class="form-control">
						<?php echo form_error('email'); ?>
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" class="form-control">
						<?php echo form_error('password'); ?>
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-success" name="submit" value="Sign-In">
					</div>
					<p>Not yet registered!<a href="employer-registration">Register</a></p> 
					</form>
				</div>
			</div>
		</div>
<?php $this->load->view('footer');?>
