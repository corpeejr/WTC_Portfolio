<?php include "hub/functions.php"; ?>

<?php include "hub/top.php"; ?>

<?php include "hub/switcher.php"; ?>


        <main class="site-wrapper">
            <div class="pt-table">
                <div class="pt-tablecell page-works relative">
                    <!-- .close -->
                    <a href="./" class="page-close"><i class="tf-ion-close">    </i></a>
                    <!-- /.close -->

                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                                <div class="page-title text-center">
                                    <h2>My <span class="primary">works</span> <span class="title-bg">works</span></h2>
                                </div>
                            </div>                            
                        </div> <!-- /.row -->


                        <div class="row">
                            <div class="col-xs-12">
                                <ul class="filter list-inline">
                                    <li><a href="#" class="active" data-filter="*">All</a></li>
                                    <!-- <li><a href="#" data-filter=".Photoshop">Photoshop</a></li>
                                    <li><a href="#" data-filter=".Illustrator">Illustrator</a></li>
                                    <li><a href="#" data-filter=".Indesign">Indesign</a></li>
                                    <li><a href="#" data-filter=".Artworks">Artworks</a></li> -->
                                </ul>
                            </div>
                        </div>
                        <?php 
                        $sql = "SELECT * FROM works ";
                        $results = mysqli_query($con, $sql);

                        while ($row = mysqli_fetch_assoc($results))  {

                            $id = $row['id'];
                            $image = $row['image'];
                            $projectName = $row['projectName'];
                            $projects = $row['projects'];
                            
                        ?>
                        <div class="row isotope-gutter">
                        
                            <div class="col-xs-12 col-sm-6 col-md-4 Photoshop Illustrator">
                                <figure class="works-item">
                                    <img src="img/work/<?= $image; ?>" alt="">
                                    <div class="overlay"></div>
                                    <figcaption class="works-inner">
                                        <h4><?= $projectName; ?>"</h4>
                                        <p><?= $projects; ?>"</p>
                                    </figcaption>
                                </figure>
                                
                            </div>
                          
                        </div> <!-- /.row -->
                        <?php } ?>
                
                    </div> <!-- /.container -->
               
                   
                    <?php include "hub/nav.php"; ?>
                    <!-- /.container -->
                    
                    </div> <!-- /.container -->
                </div> <!-- /.pt-tablecell -->
            </div> <!-- /.pt-table -->
        </main> <!-- /.site-wrapper -->
        <?php include "hub/bottom.php" ?>
