
                        <?php 
                        // $sql = "SELECT * FROM certificate ";
                        // $results = mysqli_query($con, $sql);

                        // while ($row = mysqli_fetch_assoc($results))  {

                        //     $id = $row['id'];
                        //     $image = $row['image'];
                        //     $certificateName = $row['certificateName'];
                            
                        ?>

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
                                <h2>My <span class="primary">Certificate</span> <span class="title-bg">Works</span></h2>
                                    <!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p> -->
                                </div>
                            </div>                            
                        </div> <!-- /.row -->

                        <!-- <div class="row">
                            <div class="col-xs-12">
                                <ul class="filter list-inline">
                                    <li><a href="#" class="active" data-filter="*">All</a></li>
                                    <li><a href="#" data-filter=".Photoshop">Photoshop</a></li>
                                    <li><a href="#" data-filter=".Illustrator">Illustrator</a></li>
                                    <li><a href="#" data-filter=".Indesign">Indesign</a></li>
                                    <li><a href="#" data-filter=".Artworks">Artworks</a></li>
                                </ul>
                            </div>
                        </div> -->

                        <div class="row isotope-gutter">
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <figure class="works-item">
                                    <img src="img\certificate\1619375844Screenshot_13.png" alt="" style="height: 300px;">
                                    <div class="overlay"></div>
                                    <figcaption class="works-inner">
                                        <h4>Online Marketing</h4>
                                        <a href="https://learndigital.withgoogle.com/link/1ar27gu2qdc" target="_blank" style="color: blue;">CLICK TO VIEW CERTIFICATE</a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <figure class="works-item">
                                    <img src="img\certificate\1619375981Screenshot_5.png" alt="" style="height: 300px;">
                                    <div class="overlay"></div>
                                    <figcaption class="works-inner">
                                        <h4>Reponsive Web App</h4>
                                        <a href="https://freecodecamp.org/certification/w-t-c-13/responsive-web-design" target="_blank" style="color: blue;">CLICK TO VIEW CERTIFICATE</a>

                                    </figcaption>
                                </figure>
                            </div>
                
                        </div> <!-- /.row -->

                    </div> <!-- /.container --> <br><br><br><br><br><br><br><br>

                    <?php include "hub/nav.php"; ?>

                    <!-- /.container -->

                </div> <!-- /.pt-tablecell -->
            </div> <!-- /.pt-table -->
        </main> <!-- /.site-wrapper -->
        <?php include "hub/bottom.php" ?>
