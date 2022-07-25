<?php $this->view('includes/header'); ?>
<?php $this->view('includes/nav'); ?>
<?php $this->view('includes/crumbs'); ?>

	<div class="row">
		<div class="col-sm-4">
			<h2> Welcome to profile page</h2>
			<img src="<?=ASSETS?>/img/male.jpg" class="rounded-circle border border-primary p-2" style="width:100px" alt="">
		</div>
		<div class="col-sm-8 bg-light p-2">
			<table class="table table-hover table-striped table-bordered">
				  <tbody>
				    <tr>
				       	<th>First Name</th>
				       	<td>Mark</td>
				    </tr>
				    <tr>
				      	<th>Last Name</th>
				      	<td>Jacob</td>
				    </tr>
				    <tr>
				      	<th>Gender</th>
				      	<td>Male</td>
				    </tr>
				    <tr>
				      	<th>Rank</th>
				      	<td>Students</td>
				    </tr>
				    <tr>
				      	<th>Date</th>
				      	<td>12/01/22</td>
				    </tr>
				    <tr>
				      	<th>User ID</th>
				      	<td>12</td>
				    </tr>
				    <tr>
				      	<th>Student ID</th>
				      	<td>10</td>
				    </tr>
				</tbody>
			</table>
		</div>
		<ul class="nav nav-tabs">
		  	<li class="nav-item">
		    	<a class="nav-link active" aria-current="page" href="#">Active</a>
		  	</li>
		  	<li class="nav-item">
		    	<a class="nav-link" href="#">Link</a>
		  	</li>
		  	<li class="nav-item">
		    	<a class="nav-link" href="#">Link</a>
		  	</li>
 		</ul>
	</div>
	

<?php $this->view('includes/footer'); ?>