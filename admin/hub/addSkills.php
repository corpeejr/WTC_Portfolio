<div class="card">
	<div class="card-title text-center">
		<h3 class="display-3">Add Skills Form</h3>
	</div>
	<div class="card-body">
		<?php addSkills(); ?>

		<form class="row g-3" method="POST" enctype="multipart/form-data">

		  <div class="col-md-6">
		    <label for="skillsName" class="form-label">Enter Skills Name </label>
		    <input type="text" class="form-control form-control-lg" name="skillsName">
		  </div>

		  <div class="col-md-6">
		    <label for="skillsValue" class="form-label">Enter Skills Value </label>
		    <input type="number" class="form-control form-control-lg" name="skillsValue">
		  </div>
		  





		  
		  	<div>
		  		<br><br>
		  		<button type="submit" class="btn btn-lg btn-primary" name="addSkills">Create Skills</button>
		  	</div>
		   
		</form>
	</div>
</div>