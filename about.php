<?php include "hub/functions.php"; ?>
<?php include "hub/top.php"; ?>
<?php include "hub/switcher.php"; ?>

<?php 
$sql = "SELECT * FROM about ";
$results = mysqli_query($con, $sql);

while ($row = mysqli_fetch_assoc($results))  {

    $id = $row['id'];
    $content = $row['content'];
    $dateOfBirth = $row['dateOfBirth'];
    $language = $row['language'];
    $expertIn = $row['expertIn'];
    $freelance = $row['freelance'];
    $image = $row['image'];
?>


       

        <main class="site-wrapper">
            <div class="pt-table">
                <div class="pt-tablecell page-about relative">
                    <!-- .close -->
                    <a href="./" class="page-close"><i class="tf-ion-close"></i></a>
                    <!-- /.close -->

                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                                <div class="page-title text-center">
                                <h2><span style="color: rgb(4, 191, 233);">About </span><span class="primary">me</span> <span class="title-bg">W T C</span></h2>
                                    <p style="color: black; font-size: 20px;"><?= $content; ?></p>
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-6">
                                <div class="about-author">
                                    <figure class="author-thumb">
                                        <img src="img\about\<?= $image; ?>" alt="">
                                    </figure> <!-- /.author-bio -->
                                    <div class="author-desc">
                                        <p><b>Date of birth:</b> <?= $dateOfBirth; ?></p>
                                        <p><b>Language:</b> <?= $language; ?></p>
                                        <p><b>Expert in:</b> <?= $expertIn; ?></p>
                                        <p><b>Freelance:</b> <?= $freelance; ?></p>
                                    </div>
                                    <!-- /.author-desc -->
                                </div> <!-- /.about-author -->
                            </div> <!-- /.col -->

                            <?php include "hub/skills.php"; ?>

                           
                            </div> <!-- /.col -->
                        </div> <!-- /.row -->
                    </div> <!-- /.container -->

                    <?php include "hub/nav.php"; ?>

                    <!-- /.container -->
                </div> <!-- /.pt-tablecell -->
            </div> <!-- /.pt-table -->
        </main> <!-- /.site-wrapper -->
        <?php } ?>
        
        <?php include "hub/bottom.php"; ?>

