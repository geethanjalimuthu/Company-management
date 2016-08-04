<?php echo $this->load->view('head');?>
<div class="container">
	<div class="row">
		<div class="col-sm-5">
			<form action="" method="post">
				<div class="form-group"><label for="name">Name</label><input type="text" class="form-control" name="name"></div>
				<div class="form-group"><label for="email">Email</label><input type="text" class="form-control" name="email"></div>
				<div class="form-group"><label for="designation">Designation</label><input type="text" class="form-control" name="designation"></div>
				<div class="form-group"><input type="submit" class="btn btn-success" value="Submit"></div>
			</form>
		</div>
	</div>
</div>
<?php echo $this->load->view('footer');?>