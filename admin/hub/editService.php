<?php 
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
	}

	$sql = "SELECT * FROM services WHERE id = {$id} ";
	$results = mysqli_query($con, $sql);

	while ($row = mysqli_fetch_assoc($results)) {

		$id = $row['id'];
		// $content = $row['content'];
		$serviceName = $row['serviceName'];
		$service = $row['service'];
		
 ?>

<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-title text-center">
				<h3 class="display-3">Edit Service</h3>
			</div>
			<div class="card-body">
				<?php editService(); ?>

				<form class="row g-3" method="POST" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?= $id; ?>">
				<!-- <div class="col-md-6">
					<label>Place content</label>
					<textarea name="content" class="form-control " rows="8" value=""></textarea>
				</div> -->
<!-- 
				<div class="col-md-6">
					<label for="image" class="form-label">Select Work Picture</label>
					<input type="file" class="form-control form-control-lg" name="image">
				</div> -->

				<div class="col-md-6">
					<label for="serviceName" class="form-label">Enter Work Service Name </label>
					<input type="text" class="form-control form-control-lg" name="serviceName" value="<?= $serviceName; ?>">
				</div>

				<div class="col-md-6">
					<label for="service" class="form-label">Enter Work service </label>
					<input type="text" class="form-control form-control-lg" name="service" value="<?= $service; ?>">
				</div>
					
					<div style="width: 100%"> 
				  		<br><br>
				  		<button type="submit" class="btn btn-lg btn-primary" name="editService">Save Changes</button>
				  	
				  		<!-- Button trigger modal -->
						<button type="button" class="btn btn-lg btn-danger" data-toggle="modal" data-target="#exampleModal" style="float: right;" name="deleteService">
						  Delete User
						</button>
				  	</div>
				  </form>
			</div>
		</div>


<?php } ?>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Services Alert</h5>
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
        	<button name="deleteService" type="submit" class="btn btn-danger">Yes</button>
      	</form>
      </div>
    </div>
  </div>
</div>

<?php 

	if (isset($_POST['deleteService'])) {
		$sql = "DELETE FROM services  WHERE id = {$id} ";
		if($con->query($sql) === TRUE){
			echo "<script> window.location = 'services.php'</script>";
		}else {
			echo "Error ". $con->error;
		}
	}
 ?>


