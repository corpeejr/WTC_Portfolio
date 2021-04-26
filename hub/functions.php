<?php include "hub/db.php"; ?>
<?php 
session_start();
ob_start();
function login(){
    global $con;

    if(isset($_POST['loginBtn'])){

        $email =$_POST['email'];
        $pass =md5($_POST['password']);
        // $pass =$_POST['password'];

        //$echo = $email . " " . $pass;

        $sql = "SELECT * FROM users WHERE email = '{$email}' ";

        $user = mysqli_query($con, $sql);

        while($row = mysqli_fetch_assoc($user)){
            $dbEmail = $row['email'];
            $dbPass = $row['password'];
            $dbFullName = $row['fullname'];
            $dbImage = $row['image'];
            $dbRole = $row['role'];
        }

        if(isset($dbEmail)){
            if($dbPass === $pass){
                $_SESSION['fullName'] = $dbFullName;
                $_SESSION['email'] = $dbEmail;
                $_SESSION['image'] = $dbImage;
                $_SESSION['role'] = $dbRole;
     


                echo "<script> window.location = 'admin/index.php'</script>";
            }else {

                echo "Password Incorrect";
            }
        }else{
            echo "User Not found";
        }
    }
}


?>





