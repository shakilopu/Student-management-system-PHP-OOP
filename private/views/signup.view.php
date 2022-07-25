<?php $this->view('includes/header'); ?>
		<div class="row">
			<div class="text-center col-md-12 m-auto mt-4 shadow rounded p-4" >
				<h4><i class="fa-solid fa-lock"></i> Sign Up</h4>
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
				    	<input type="text" value="<?=get_var('firstname')?>" placeholder="First Name" name="firstname" class="form-control" id="fname">
				  	</div>
					<div class="mb-3">
				    	<input type="text" value="<?=get_var('lastname')?>" placeholder="Last Name" name="lastname" class="form-control" id="lname">
				  	</div>
				  	<div class="mb-3">
				    	<input type="email" value="<?=get_var('email')?>" placeholder="Email" name="email" class="form-control" id="email">
				  	</div>
				  	<div class="mb-3">
				    	<select name="gender" id="gender" class="form-control">
				    		<option <?=get_select( 'gender', '')?> value="">Select your gender</option>
				    		<option <?=get_select( 'gender', 'male')?> value="male">Male</option>
				    		<option <?=get_select( 'gender', 'female')?> value="female">Female</option>
				    	</select>
				  	</div>
				  	<div class="mb-3">
				    	<select name="rank" id="rank" class="form-control">
				    		<option <?=get_select( 'rank', '')?> value="">Select a Rank</option>
				    		<option <?=get_select( 'rank', 'student' )?> value="student">Student</option>
				    		<option <?=get_select( 'rank', 'lecturer' )?> value="lecturer">Lecturer</option>
				    		<option <?=get_select( 'rank', 'reception' )?> value="reception">Reception</option>
				    		<option <?=get_select( 'rank', 'admin' )?> value="admin">Admin</option>
				    		<option <?=get_select( 'rank', 'superadmin' )?> value="superadmin">Superadmin</option>
				    	</select>
				  	</div>
				  	<div class="mb-3">
				    	<input type="password" value="<?=get_var('password')?>" placeholder="Password" name="password" class="form-control" id="password">
				  	</div>
				  	<div class="mb-3">
				    	<input type="password" value="<?=get_var('password2')?>" placeholder="Retype Password" name="password2" class="form-control" id="password2">
				  	</div>
				  	<a href="<?=ROOT?>/public/login" class="btn btn-secondary">Login</a>
				  	<button type="submit" class="btn btn-primary">Sign Up</button>
				</form>	
			</div>
		</div>

<?php $this->view('includes/footer'); ?>
