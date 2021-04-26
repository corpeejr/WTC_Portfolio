<div class="card">
	<div class="card-title text-center">
		<h3 class="display-3">Add Certificate Form</h3>
	</div>
	<div class="card-body">
		<?php addCertificate(); ?>

		<form class="row g-3" method="POST" enctype="multipart/form-data">
		  <!-- <div class="col-md-6">
		    <label>Text area testing</label>
		    <textarea name="content" class="form-control " rows="8"></textarea>
		  </div> -->

		  <div class="col-md-6">
		    <label for="image" class="form-label">Select Work Picture</label>
		    <input type="file" class="form-control form-control-lg" name="image">
		  </div>

		  <div class="col-md-6">
		    <label for="certificateName" class="form-label">Enter Work certificate Name </label>
		    <input type="text" class="form-control form-control-lg" name="certificateName">
		  </div>

		  	<div>
		  		<br><br>
		  		<button type="submit" class="btn btn-lg btn-primary" name="addCertificate">Create Certificate</button>
		  	</div>
		   
		</form>
	</div>
</div>