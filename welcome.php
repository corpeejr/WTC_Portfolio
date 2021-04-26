<?php include "hub/functions.php"; ?>

<?php include "hub/top.php"; ?>

<?php include "hub/switcher.php"; ?>

<?php 
$sql = "SELECT * FROM welcome ";
$results = mysqli_query($con, $sql);

while ($row = mysqli_fetch_assoc($results))  {

    $id = $row['id'];
    $firstName = $row['firstName'];
    $lastName = $row['lastName'];
    $contentTitle = $row['contentTitle'];
    $content = $row['content'];
    $contentAuthor = $row['contentAuthor'];
    $image = $row['image'];
?>



        <main class="site-wrapper">
            <div class="pt-table">
                <div class="pt-tablecell page-welcome relative">
                    <!-- .close -->
                    <a href="./" class="page-close"><i class="tf-ion-close"></i></a>
                    <!-- /.close -->

                    <div class="author-image-large">
                        <img src="img/welcome/<?= $image; ?>" alt="">
                    </div>
                    
                    <div class="container" style="color: black; font-size: 20px;">
                        <div class="row">
                            <div class="col-xs-12 col-md-6 col-lg-7">
                                <div class="page-title">
                                   <h2><span style="color: rgb(4, 191, 233);"><?= $firstName; ?></span> <span class="primary"><?= $lastName; ?></span> <span class="title-bg">About</span></h2>
                                   <p style="font-size: 20px;"><?= $contentTitle; ?></p>  
                                   <q><?= $content; ?></q>
                                    <p style="font-size: 20px;"><b><?= $contentAuthor; ?></b></p>
                                </div>
                            </div>
                        </div> <!-- /.row -->
                    </div> <!-- /.container -->

                    <?php include "hub/nav.php"; ?>
                    <!-- /.container -->

                </div> <!-- /.pt-tablecell -->
            </div> <!-- /.pt-table -->
        </main> <!-- /.site-wrapper -->
        <?php } ?>
        
<?php include "hub/bottom.php" ?>
       
