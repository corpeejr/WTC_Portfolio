<?php 
	if (isset($_GET['id'])) {
		$cId = $_GET['id'];
	}

	$sql = "SELECT * FROM work WHERE id = {$cId} ";
	$results = mysqli_query($con, $sql);

	while ($row = mysqli_fetch_assoc($results)) {

		$id = $row['id'];
		// $content = $row['content'];
		$image1 = $row['image'];
		$projectName = $row['projectName'];
		$projects = $row['projects'];
		
 ?>

<div class="row">
	<div class="col-lg-8">
		<div class="card">
			<div class="card-title text-center">
				<h3 class="display-3">Edit Work</h3>
			</div>
			<div class="card-body">
				<?php editWork(); ?>

				<form class="row g-3" method="POST" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?= $id; ?>">
				<!-- <div class="col-md-6">
					<label>Place content</label>
					<textarea name="content" class="form-control " rows="8" value=""></textarea>
				</div> -->

				<div class="col-md-6">
					<label for="image" class="form-label">Select Work Picture</label>
					<input type="file" class="form-control form-control-lg" name="image">
				</div>

				<div class="col-md-6">
					<label for="projectName" class="form-label">Enter Work project Name </label>
					<input type="text" class="form-control form-control-lg" name="projectName" value="<?= $projectName; ?>">
				</div>

				<div class="col-md-6">
					<label for="projects" class="form-label">Enter Work projects </label>
					<input type="text" class="form-control form-control-lg" name="projects" value="<?= $projects; ?>">
				</div>
					
					<div style="width: 100%"> 
				  		<br><br>
				  		<button type="submit" class="btn btn-lg btn-primary" name="editWork">Save Changes</button>
				  	
				  		<!-- Button trigger modal -->
						<button type="button" class="btn btn-lg btn-danger" data-toggle="modal" data-target="#exampleModal" style="float: right;" name="deleteWork">
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
				<img class="img img-thumbnail" src="../img/work/<?= $image; ?>" width="100%">
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
        <h5 class="modal-title" id="exampleModalLabel">Delete carousel Alert</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are u sure u want to delete <b><?= $projectName ?> </b>?</p>
      </div>
      <div class="modal-footer">
      	<form method="POST">
      		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        	<button name="deleteWork" type="submit" class="btn btn-danger">Yes</button>
      	</form>
      </div>
    </div>
  </div>
</div>

<?php 

	if (isset($_POST['deleteWork'])) {
		$sql = "DELETE FROM work  WHERE id = {$id} ";
		if($con->query($sql) === TRUE){
			echo "<script> window.location = 'work.php'</script>";
		}else {
			echo "Error ". $con->error;
		}
	}
 ?>


