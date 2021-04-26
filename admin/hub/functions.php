<?php include '../hub/db.php'; ?>

<?php 

session_start();
ob_start();

function logOut() {
	if(isset($_POST['logOut'])){
		session_destroy();
		echo "<script> window.location = '/WTC_Portfolio/login.php'</script>";
	}
}

function checkUser(){
	if(isset($_SESSION['fullName'])){
	if(isset($_SESSION['email'])){
		// echo "<script> alert('Welcome : " . $_SESSION['fullName'] . " ')</script>";
	}
	}else{
		echo "<script> window.location = '/WTC_Portfolio/login.php'</script>";
	}
		
	}

// add user 
function addUser(){
	global $con;

	if (isset($_POST['addUser'])) {
		
		$fullname 	= $_POST['fullname'];
		$email 		= $_POST['email'];
		
		$image 		= 	time().$_FILES['image']['name'];
		$image_tmp 	= 	$_FILES['image']['tmp_name'];

		$phone 		= $_POST['phone'];
		$password 	= md5($_POST['password']);
		$role 		= $_POST['role'];

		move_uploaded_file($image_tmp, "../img/users/$image");

		$sql = "INSERT INTO users( fullname, email, image, phone, password, role)VALUES ('{$fullname}', '{$email}', '{$image}', '{$phone}', '{$password}', '{$role}')";

		if ($con->query($sql) === TRUE) {
			// echo "<script> window.location = 'users.php'</script>";
		}else{
			echo "Error " . $con->error;
		}
	}
}




// view users function 
function viewUsers(){

	//make the $con virable accessable everwhere
	global $con;  


	// select all users from the database tobe process
	$selectQuery = "SELECT * FROM users";
	// create's an array of users in the results virable 
	$results = mysqli_query($con, $selectQuery);

	// loop through the results array and return in a table
	while ($rows = mysqli_fetch_assoc($results)) {
		echo "<tr>"
			    ."<th>".$rows['id']."</th>"
				."<th>".$rows['fullname']."</th>"
				."<th>"."<img class='img img-thumbnail' src='../img/users/{$rows['image']}' width='100px'>"."</th>"
				."<th>".$rows['email']."</th>"
				."<th>".$rows['phone']."</th>"
				."<th>".$rows['role']."</th>"
				."<th>"."<a href='users.php?page=editUser&id={$rows['id']}'>edit</th>".
			 	"</tr>";
	}
}




// update user function

function updateUser(){
	global $con;

	if(isset($_POST['editUser'])) {

		$id = $_POST['userId'];
		$fullname = $_POST['fullname'];
		$email = $_POST['email'];
		$image = $_POST['image'];
		$phone = $_POST['phone'];
		$password = md5($_POST['password']);
		$role = $_POST['role'];

		$sql = "UPDATE users SET 

		fullname = '{$fullname}',
		email = '{$email}',
		image = '{$image}',
		phone = '{$phone}',
		password = '{$password}',
		role = '{$role}',
		WHERE id = '{$id}' ";


		if ($con->query($sql) === TRUE) {
			echo "<script> window.location = 'users.php'</script>";
		}else{
			echo "Error " . $con->error;
		}

	}

	

}


// deleteuser user function

// function deleteUser(){
// 	global $con;



// }





// PORTFOLIO CROUD

function addWelcome(){
	global $con;

	if (isset($_POST['addWelcome'])) {
		
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$contentTitle = $_POST['contentTitle'];
		$content = $_POST['content'];
		$contentAuthor = $_POST['contentAuthor'];
		

		$image 		= 	time().$_FILES['image']['name'];
		$image_tmp 	= 	$_FILES['image']['tmp_name'];

		
		move_uploaded_file($image_tmp, "../img/welcome/$image");
	
		$sql = "INSERT INTO welcome (firstName, lastName, contentTitle, content,  contentAuthor, image) VALUES ( '{$firstName}', '{$lastName}', '{$contentTitle}',   '{$content}',  '{$contentAuthor}', '{$image}')";


		if ($con->query($sql) === TRUE) {
			echo "<script> window.location = 'welcome.php'</script>";
		}else{
			echo "error" . $con->error;
		}


	}

}

function viewWelcome(){
	global $con;

	$sql = "SELECT * FROM welcome";
	$carousel = mysqli_query($con, $sql);

	while ($rows = mysqli_fetch_assoc($carousel)) {
		echo "<tr>"
			    ."<th>".$rows['id']."</th>"
				."<th>".$rows['firstName']."</th>"
				."<th>".$rows['lastName']."</th>"
				."<th>".$rows['contentTitle']."</th>"
				."<th>".$rows['content']."</th>"
				."<th>".$rows['contentAuthor']."</th>"
				."<th>".  "<img src='../img/welcome/{$rows['image']}' width='100px'>" ."</th>"
				."<th>"."<a href='welcome.php?page=editWelcome&id={$rows['id']}'>edit</th>".
			 	"</tr>";
	}
}

function editWelcome(){
		global $con;

	if (isset($_POST['editWelcome'])) {
	    $id = $_POST['id'];
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$contentTitle = $_POST['contentTitle'];
		$content = $_POST['content'];
		$contentAuthor = $_POST['contentAuthor'];
		$image 		= 	time().$_FILES['image']['name'];
		$image_tmp 	= 	$_FILES['image']['tmp_name'];
	
		move_uploaded_file($image_tmp, "../img/welcome/$image");
		

		$sql = "UPDATE welcome SET 

		firstName = '{$firstName}',
		lastName = '{$lastName}',
		contentTitle = '{$contentTitle}',
		content = '{$content}',
		contentAuthor = '{$contentAuthor}',
		image = '{$image}',
		WHERE id = '{$id}' ";


		if ($con->query($sql) === TRUE) {
			echo "<script> window.location = 'welcome.php'</script>";
		}else{
			echo "error" . $con->error;
		}
	}
}


// About CROUD

function addAbout(){
	global $con;

	if (isset($_POST['addAbout'])) {
		

		$content = $_POST['content'];
		$dateOfBirth = $_POST['dateOfBirth'];
		$language = $_POST['language'];
		$expertIn = $_POST['expertIn'];
		$freelance = $_POST['freelance'];

		$image 		= 	time().$_FILES['image']['name'];
		$image_tmp 	= 	$_FILES['image']['tmp_name'];

		
		move_uploaded_file($image_tmp, "../img/about/$image");

		$sql = "INSERT INTO about ( content, dateOfBirth, language, expertIn, freelance, image) VALUES ( '{$content}', '{$dateOfBirth}', '{$language}', '{$expertIn}', '{$freelance}', '{$image}')";


		if ($con->query($sql) === TRUE) {
			echo "<script> window.location = 'about.php'</script>";
		}else{
			echo "error" . $con->error;
		}
	}
}

function viewAbout(){
	global $con;

	$sql = "SELECT * FROM about";
	$about = mysqli_query($con, $sql);

	while ($rows = mysqli_fetch_assoc($about)) {
		echo "<tr>"
			    ."<th>".$rows['id']."</th>"
				."<th>".$rows['content']."</th>"
				."<th>".$rows['dateOfBirth']."</th>"
				."<th>".$rows['language']."</th>"
				."<th>".$rows['expertIn']."</th>"
				."<th>".$rows['freelance']."</th>"
				."<th>".  "<img src='../img/about/{$rows['image']}' width='100px'>" ."</th>"
				."<th>"."<a href='about.php?page=editAbout&id={$rows['id']}'>edit</th>".
			 	"</tr>";
	}
}

function editAbout(){
		global $con;

	if (isset($_POST['editAbout'])) {
		$id = $_POST['id'];
		
		
		$content = $_POST['content'];
		$dateOfBirth = $_POST['dateOfBirth'];
		$language = $_POST['language'];
		$expertIn = $_POST['expertIn'];
		$freelance = $_POST['freelance'];

		$image 		= 	time().$_FILES['image']['name'];
		$image_tmp 	= 	$_FILES['image']['tmp_name'];

		
		move_uploaded_file($image_tmp, "../img/about/$image");

		$sql = "UPDATE card SET 

		content = '{$content}',
		dateOfBirth = '{$dateOfBirth}',
		language = '{$language}',
		expertIn = '{$expertIn}',
		freelance = '{$freelance}',
		image = '{$image}',
		WHERE id = '{$id}' ";


		if ($con->query($sql) === TRUE) {
			echo "<script> window.location = 'about.php'</script>";
		}else{
			echo "error" . $con->error;
		}


	}
}



// Featurette


function addWork(){
	global $con;

	if (isset($_POST['addWork'])) {
		

		// $content = $_POST['content'];
		
		$image 		= 	time().$_FILES['image']['name'];
		$image_tmp 	= 	$_FILES['image']['tmp_name'];

		$projectName = $_POST['projectName'];
		$projects = $_POST['projects'];
		
		move_uploaded_file($image_tmp, "../img/work/$image");

		$sql = "INSERT INTO works ( image, projectName, projects) VALUES ( '{$image}', '{$projectName}', '{$projects}')";


		if ($con->query($sql) === TRUE) {
			echo "<script> window.location = 'work.php'</script>";
		}else{
			echo "error" . $con->error;
		}
	}
}

function viewWork(){
	global $con;

	$sql = "SELECT * FROM works";
	$work = mysqli_query($con, $sql);

	while ($rows = mysqli_fetch_assoc($work)) {
		echo "<tr>"
			    ."<th>".$rows['id']."</th>"
				// ."<th>".$rows['content']."</th>"
				."<th>".  "<img src='../img/work/{$rows['image']}' width='100px'>" ."</th>"
				."<th>".$rows['projectName']."</th>"
				."<th>".$rows['projects']."</th>"
				."<th>"."<a href='work.php?page=editWork&id={$rows['id']}'>edit</th>".
			 	"</tr>";
	}
}

function editWork(){
		global $con;

	if (isset($_POST['editWork'])) {
		$id = $_POST['id'];
		
		// $content = $_POST['content'];
		
		$image 		= 	time().$_FILES['image']['name'];
		$image_tmp 	= 	$_FILES['image']['tmp_name'];

		$projectName = $_POST['projectName'];
		$projects = $_POST['projects'];
		
		move_uploaded_file($image_tmp, "../img/work/$image");

		$sql = "INSERT INTO works ( image, projectName, projects) VALUES (  '{$image}', '{$projectName}', '{$projects}')";

		$sql = "UPDATE works SET 

		-- content = '{$content}',
		image = '{$image}',
		projectName = '{$projectName}',
		projects = '{$projects}',
		WHERE id = '{$id}' ";


		if ($con->query($sql) === TRUE) {
			echo "<script> window.location = 'work.php'</script>";
		}else{
			echo "error" . $con->error;
		}


	}
}


function addCertificate(){
	global $con;

	if (isset($_POST['addCertificate'])) {
		

		// $content = $_POST['content'];
		
		$image 		= 	time().$_FILES['image']['name'];
		$image_tmp 	= 	$_FILES['image']['tmp_name'];

		$certificateName = $_POST['certificateName'];
		
		move_uploaded_file($image_tmp, "../img/certificate/$image");

		$sql = "INSERT INTO certificate ( image, certificateName) VALUES ( '{$image}', '{$certificateName}')";


		if ($con->query($sql) === TRUE) {
			echo "<script> window.location = 'certificate.php'</script>";
		}else{
			echo "error" . $con->error;
		}
	}
}

function viewCertificate(){
	global $con;

	$sql = "SELECT * FROM certificate";
	$certificate = mysqli_query($con, $sql);

	while ($rows = mysqli_fetch_assoc($certificate)) {
		echo "<tr>"
			    ."<th>".$rows['id']."</th>"
				// ."<th>".$rows['content']."</th>"
				."<th>".  "<img src='../img/certificate/{$rows['image']}' width='100px'>" ."</th>"
				."<th>".$rows['certificateName']."</th>"
				."<th>"."<a href='certificate.php?page=editCertificate&id={$rows['id']}'>edit</th>".
			 	"</tr>";
	}
}

function editCertificate(){
		global $con;

	if (isset($_POST['editCertificate'])) {
		$id = $_POST['id'];
		
		// $content = $_POST['content'];
		
		$image 		= 	time().$_FILES['image']['name'];
		$image_tmp 	= 	$_FILES['image']['tmp_name'];

		$certificateName = $_POST['certificateName'];
		
		move_uploaded_file($image_tmp, "../img/certificate/$image");

		$sql = "INSERT INTO certificate ( image, certificateName) VALUES (  '{$image}', '{$certificateName}')";

		$sql = "UPDATE certificate SET 

		-- content = '{$content}',
		image = '{$image}',
		certificateName = '{$certificateName}',
		WHERE id = '{$id}' ";


		if ($con->query($sql) === TRUE) {
			echo "<script> window.location = 'certificate.php'</script>";
		}else{
			echo "error" . $con->error;
		}


	}
}
?>
