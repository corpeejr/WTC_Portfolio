<?php 
	if (isset($_GET['id'])) {
		$wId = $_GET['id'];
	}

	$sql = "SELECT * FROM welcome WHERE id = {$wId} ";
	$results = mysqli_query($con, $sql);

	while ($row = mysqli_fetch_assoc($results)) {

		$id = $row['id'];
		$firstName = $row['firstName'];
		$lastName = $row['lastName'];
		$contentTitle = $row['contentTitle'];
		$content = $row['content'];
		$contentAuthor = $row['contentAuthor'];
		$image = $row['image'];
		
 ?>

<div class="row">
	<div class="col-lg-8">
		<div class="card">
			<div class="card-title text-center">
				<h3 class="display-3">Edit Welcome</h3>
			</div>
			<div class="card-body">
				<?php editWelcome(); ?>

				<form class="row g-3" method="POST" >
					<input type="hidden" name="id" value="<?= $id; ?>">
				  <div class="col-md-12">
				    <label for="firstName" class="form-label">Please Enter First Name</label>
				    <input type="text" class="form-control form-control-lg" name="firstName" value="<?= $firstName; ?>">
				  </div>
				  <div class="col-md-12">
				    <label for="lastName" class="form-label">Please Enter Last Name</label>
				    <input type="text" class="form-control form-control-lg" name="lastName" value="<?= $lastName; ?>">
				  </div>
				  <div class="col-md-6">
					<label>Content Title</label>
					<textarea name="contentTitle" class="form-control " rows="8" value="<?= $contentTitle; ?>"></textarea>
				  </div>
				  <div class="col-md-6">
					<label>Content</label>
					<textarea name="content" class="form-control " rows="8" value="<?= $content; ?>"></textarea>
				  </div>
				  <div class="col-md-6">
					<label>Content Author</label>
					<textarea name="contentAuthor" class="form-control " rows="8" value="<?= $contentAuthor; ?>"></textarea>
				  </div>
	
				  <div class="col-md-6">
				    <label for="image" class="form-label">Select Profile Picture</label>
				    <input type="file" class="form-control form-control-lg" name="image">
				  </div>
				  

				  	<div style="width: 100%"> 
				  		<br><br>
				  		<button type="submit" class="btn btn-lg btn-primary" name="editWelcome">Save Changes</button>
				  	
				  		<!-- Button trigger modal -->
						<button type="button" class="btn btn-lg btn-danger" data-toggle="modal" data-target="#exampleModal" style="float: right;" name="deleteWelcome">
						  Delete Welcome
						</button>
				  	</div>
				   
				</form>
			</div>
		</div>
	</div> <!-- col-lg-8 ends -->
	<div class="col-lg-4">
		<div class="card">
			<div class="card-body">
				<img class="img img-thumbnail" src="../img/welcome/<?= $image; ?>" width="100%">
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
        <h5 class="modal-title" id="exampleModalLabel">Delete Featurette Alert</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p><b><?= $firstName; ?><?= $lastName; ?></b>Are u sure u want to delete this file?</p>
      </div>
      <div class="modal-footer">
      	<form method="POST">
      		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        	<button name="deleteWelcome" type="submit" class="btn btn-danger">Yes</button>
      	</form>
      </div>
    </div>
  </div>
</div>

<?php 

	if (isset($_POST['deleteWelcome'])) {
		$sql = "DELETE FROM welcome  WHERE id = {$id} ";
		if($con->query($sql) === TRUE){
			echo "<script> window.location = 'welcome.php'</script>";
		}else {
			echo "Error ". $con->error;
		}
	}
 ?>


