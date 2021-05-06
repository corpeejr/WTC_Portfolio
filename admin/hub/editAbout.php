<?php 
	if (isset($_GET['id'])) {
		$cId = $_GET['id'];
	}

	$sql = "SELECT * FROM about WHERE id = {$cId} ";
	$results = mysqli_query($con, $sql);

	while ($row = mysqli_fetch_assoc($results)) {

		$id = $row['id'];
		$content = $row['content'];
		$dateOfBirth = $row['dateOfBirth'];
		$language = $row['language'];
		$expertIn = $row['expertIn'];
		$freelance = $row['freelance'];
		$image = $row['image'];

		
 ?>

<div class="row">
	<div class="col-lg-8">
		<div class="card">
			<div class="card-title text-center">
				<h3 class="display-3">Edit About</h3>
			</div>
			<div class="card-body">
				<?php editAbout(); ?>


                
		<form class="row g-3" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $id; ?>">
		  <div class="col-md-12">
		    <label>Content</label>
		    <textarea name="content" class="form-control " rows="8" value="<?= $content; ?>"></textarea>
		  </div>

		  <div class="col-md-6">
		    <label for="date" class="form-label">Date of Birth</label>
		    <input type="date" class="form-control form-control-lg" name="dateOfBirth" value="<?= $dateOfBirth; ?>">
		  </div>

		  <div class="col-md-6">
		    <label for="language" class="form-label">Language</label>
		    <input type="text" class="form-control form-control-lg" name="language" value="<?= $language; ?>">
		  </div>

		  <div class="col-md-6">
		    <label for="expertIn" class="form-label">Select your specialization</label>
		    <input type="text" class="form-control form-control-lg" name="expertIn" value="<?= $expertIn; ?>">
		  </div>

		  <div class="col-md-6">
		    <label for="freelance" class="form-label">Available/None</label>
		    <input type="text" class="form-control form-control-lg" name="freelance" value="<?= $freelance; ?>">
		  </div>
		  
		  <div class="col-md-6">
		    <label for="image" class="form-label">Select About Picture</label>
		    <input type="file" class="form-control form-control-lg" name="image">
		  </div>
		
		  
		<div style="width: 100%"> 
				<br><br>
				<button type="submit" class="btn btn-lg btn-primary" name="editAbout">Save Changes</button>
				  	
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-lg btn-danger" data-toggle="modal" data-target="#exampleModal" style="float: right;" name="deleteAbout">
					Delete User
				</button>
		</div>

		</form>
			</div>
		    </div>
	</div> <!-- col-lg-8 ends -->
	<div class="col-lg-4">
		<div class="card">
			<div class="card-body">
				<img class="img img-thumbnail" src="../img/about/<?= $image; ?>" width="100%">
			</div>
		</div>
	</div>
</div>



<?php } ?>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Card Alert</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are u sure u want to delete <b><?= $id; ?></b>?</p>
      </div>
      <div class="modal-footer">
      	<form method="POST">
      		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        	<button name="deleteAbout" type="submit" class="btn btn-danger">Yes</button>
      	</form>
      </div>
    </div>
  </div>
</div>

<?php 

	if (isset($_POST['deleteAbout'])) {
		$sql = "DELETE FROM about  WHERE id = {$id} ";
		if($con->query($sql) === TRUE){
			echo "<script> window.location = 'about.php'</script>";
		}else {
			echo "Error ". $con->error;
		}
	}
 ?>


