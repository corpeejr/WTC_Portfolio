<?php 
	if (isset($_GET['id'])) {
		$cId = $_GET['id'];
	}

	$sql = "SELECT * FROM certificate WHERE id = {$cId} ";
	$results = mysqli_query($con, $sql);

	while ($row = mysqli_fetch_assoc($results)) {

		$id = $row['id'];
		// $content = $row['content'];
		$image1 = $row['image'];
		$certificateName = $row['certificateName'];
		
 ?>

<div class="row">
	<div class="col-lg-8">
		<div class="card">
			<div class="card-title text-center">
				<h3 class="display-3">Edit Certificate</h3>
			</div>
			<div class="card-body">
				<?php editCertificate(); ?>

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
					<label for="certificateName" class="form-label">Enter Work certificate Name </label>
					<input type="text" class="form-control form-control-lg" name="certificateName" value="<?= $certificateName; ?>">
				</div>

				
					<div style="width: 100%"> 
				  		<br><br>
				  		<button type="submit" class="btn btn-lg btn-primary" name="editCertificate">Save Changes</button>
				  	
				  		<!-- Button trigger modal -->
						<button type="button" class="btn btn-lg btn-danger" data-toggle="modal" data-target="#exampleModal" style="float: right;" name="deleteCertificate">
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
				<img class="img img-thumbnail" src="../img/certificate/<?= $image; ?>" width="100%">
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
        	<button name="deleteCertificate" type="submit" class="btn btn-danger">Yes</button>
      	</form>
      </div>
    </div>
  </div>
</div>

<?php 

	if (isset($_POST['deleteCertificate'])) {
		$sql = "DELETE FROM certificate  WHERE id = {$id} ";
		if($con->query($sql) === TRUE){
			echo "<script> window.location = 'certificate.php'</script>";
		}else {
			echo "Error ". $con->error;
		}
	}
 ?>


