<div class="card">
	<div class="card-title text-center">
		<h3 class="display-3">Add Services Form</h3>
	</div>
	<div class="card-body">
		<?php addService(); ?>

		<form class="row g-3" method="POST" enctype="multipart/form-data">
		  <!-- <div class="col-md-6">
		    <label>Text area testing</label>
		    <textarea name="content" class="form-control " rows="8"></textarea>
		  </div> -->
<!-- 
		  <div class="col-md-6">
		    <label for="image" class="form-label">Select Services Picture</label>
		    <input type="file" class="form-control form-control-lg" name="image">
		  </div> -->

		  <div class="col-md-6">
		    <label for="serviceName" class="form-label">Enter Work project Name </label>
		    <input type="text" class="form-control form-control-lg" name="serviceName">
		  </div>

		  <div class="col-md-6">
		    <label for="service" class="form-label">Enter Services projects </label>
		    <input type="text" class="form-control form-control-lg" name="service">
		  </div>
		  





		  
		  	<div>
		  		<br><br>
		  		<button type="submit" class="btn btn-lg btn-primary" name="addService">Create Services</button>
		  	</div>
		   
		</form>
	</div>
</div>