<?php 
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
	}
	$sql = "SELECT * FROM skills WHERE id = {$id} ";
	$results = mysqli_query($con, $sql);

	while ($row = mysqli_fetch_assoc($results)) {

		$id = $row['id'];
		$skillsName = $row['skillsName'];
		$skillsValue = $row['skillsValue'];
		
 ?>

<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-title text-center">
				<h3 class="display-3">Edit Skills</h3>
			</div>
			<div class="card-body">
				<?php editSkills(); ?>

				<form class="row g-3" method="POST" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?= $id; ?>">

				<div class="col-md-6">
					<label for="skillsName" class="form-label">Enter Work skills Name </label>
					<input type="text" class="form-control form-control-lg" name="skillsName" value="<?= $skillsName; ?>">
				</div>

				<div class="col-md-6">
					<label for="skillsValue" class="form-label">Enter Work skills Value </label>
					<input type="number" class="form-control form-control-lg" name="skillsValue" value="<?= $skillsValue; ?>">
				</div>
					
					<div style="width: 100%"> 
				  		<br><br>
				  		<button type="submit" class="btn btn-lg btn-primary" name="editSkills">Save Changes</button>
				  	
				  		<!-- Button trigger modal -->
						<button type="button" class="btn btn-lg btn-danger" data-toggle="modal" data-target="#exampleModal" style="float: right;" name="deleteSkills">
						  Delete User
						</button>
				  	</div>
				  </form>
			</div>
		</div>
	</div> <!-- col-lg-8 ends -->
	
</div>



<?php } ?>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Skills Alert</h5>
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

	if (isset($_POST['deleteSkills'])) {
		$sql = "DELETE FROM  skills WHERE id = {$id} ";
		if($con->query($sql) === TRUE){
			echo "<script> window.location = 'skills.php'</script>";
		}else {
			echo "Error ". $con->error;
		}
	}
 ?>


