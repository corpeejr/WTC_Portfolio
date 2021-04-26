<div class="card">
	<div class="card-title text-center">
		<h3 class="display-3">Add Welcome Form</h3>
	</div>
	<div class="card-body">
		<?php addWelcome(); ?>

		<form class="row g-3" method="POST" enctype="multipart/form-data">
		  <div class="col-md-6">
		    <label for="firstName" class="form-label">Please Enter First Name</label>
		    <input type="text" class="form-control form-control-lg" name="firstName">
		  </div>
		  <div class="col-md-6">
		    <label for="lastName" class="form-label">Please Enter Last Name</label>
		    <input type="text" class="form-control form-control-lg" name="lastName">
		  </div>
		 
		  <div class="col-md-6">
		    <label>Content Title</label>
		    <textarea name="contentTitle" class="form-control " rows="8"></textarea>
		  </div>

		  <div class="col-md-6">
		    <label>Content</label>
		    <textarea name="content" class="form-control " rows="8"></textarea>
		  </div>

		  <div class="col-md-6">
		    <label>Content Author</label>
		    <textarea name="contentAuthor" class="form-control " rows="8"></textarea>
		  </div>
	
		  <div class="col-md-6">
		    <label for="image" class="form-label">Select Welcome Picture</label>
		    <input type="file" class="form-control form-control-lg" name="image">
		  </div>
		  	<div>
		  		<br><br>
		  		<button type="submit" class="btn btn-lg btn-primary" name="addWelcome">Create Welcome</button>
		  	</div>
		   
		</form>
	</div>
</div>