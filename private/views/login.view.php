<?php $this->view('includes/header'); ?>

		<div class="row">
			<div class="text-center col-md-12 m-auto mt-4 shadow rounded p-4" style="max-width: 320px;">
				<h4><i class="fa-solid fa-lock"></i> Login</h4>
				<img style="width:100px" class="border border-primary rounded p-2 m-4" src="<?=ROOT?>/public/assets/img/Logo.png" alt="">
				<?php if (count($errors) > 0) : ?>
					<div class="alert alert-warning alert-dismissible fade show" role="alert">
					  <strong>Errors!</strong> 
					  <?php foreach ($errors as $error):?>
					  	<br> <?=$error?>
					  <?php endforeach; ?>
					  <span type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </span>
					</div>
				<?php endif; ?>
				<form method="post">
				  	<div class="mb-3">
				    	<input type="email" value="<?=get_var('email')?>" placeholder="Email" name="email" class="form-control" id="email">
				    	
				  	</div>
				  	<div class="mb-3">
				    	<input type="password" value="<?=get_var('password')?>" placeholder="Password" name="password" class="form-control" id="password">
				  	</div>
				  	
				  	<button type="submit" class="btn btn-primary">Login</button>
				  	<a href="<?=ROOT?>/public/signup" class="btn btn-secondary">Sign Up</a>
				</form>	
			</div>
		</div>


<?php $this->view('includes/footer'); ?>
