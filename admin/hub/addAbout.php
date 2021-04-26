
<div class="card">
	<div class="card-title text-center">
		<h3 class="display-3">Add About Form</h3>
	</div>
	<div class="card-body">
		<?php addAbout(); ?>

		<form class="row g-3" method="POST" enctype="multipart/form-data">
		  <div class="col-md-6">
		    <label>Content</label>
		    <textarea name="content" class="form-control " rows="8"></textarea>
		  </div>

		  <div class="col-md-6">
		    <label for="date" class="form-label">Date of Birth</label>
		    <input type="date" class="form-control form-control-lg" name="dateOfBirth">
		  </div>

		  <div class="col-md-6">
		    <label for="language" class="form-label">Language</label>
		    <input type="text" class="form-control form-control-lg" name="language">
		  </div>

		  <div class="col-md-6">
		    <label for="expertIn" class="form-label">Select your specialization</label>
		    <input type="text" class="form-control form-control-lg" name="expertIn">
		  </div>

		  <div class="col-md-6">
		    <label for="freelance" class="form-label">Available/None</label>
		    <input type="text" class="form-control form-control-lg" name="freelance">
		  </div>

		  <div class="col-md-6">
		    <label for="image" class="form-label">Select About Picture</label>
		    <input type="file" class="form-control form-control-lg" name="image">
		  </div>
		
		  	<div>
		  		<br><br>
		  		<button type="submit" class="btn btn-lg btn-primary" name="addAbout">Create About</button>
		  	</div>
		   
		</form>
	</div>
</div>