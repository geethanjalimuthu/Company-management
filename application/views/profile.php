<div class="container">
<h3>Profile</h3>
<a href="logout">Logout</a>
<?php $user = $this->session->userdata('user');?>
<div><?php echo "Hi"."<b>".$user['name']."!</b>";?></div>
<div>	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit commodi temporibus delectus, harum aut aliquid debitis, sit quod, quaerat blanditiis voluptatem maiores. Magni reiciendis voluptas non, veritatis omnis, cum et.</div>
</div>
