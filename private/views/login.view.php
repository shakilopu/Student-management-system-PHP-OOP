<?php $this->view('includes/header'); ?>

		<div class="row">
			<div class="text-center col-md-12 m-auto mt-4 shadow rounded p-4" style="max-width: 320px;">
				<h4><i class="fa-solid fa-lock"></i> Login</h4>
				<img style="width:100px" class="border border-primary rounded p-2 m-4" src="<?=ROOT?>/public/assets/img/Logo.png" alt="">
				<form>
				  	<div class="mb-3">
				    	<input type="email" placeholder="Email" name="email" class="form-control" id="email">
				    	
				  	</div>
				  	<div class="mb-3">
				    	<input type="password" placeholder="Password" name="password" class="form-control" id="password">
				  	</div>
				  	
				  	<button type="submit" class="btn btn-primary">Login</button>
				  	<a href="<?=ROOT?>/public/signup" class="btn btn-secondary">Sign Up</a>
				</form>	
			</div>
		</div>


<?php $this->view('includes/footer'); ?>
