<?php include "hub/functions.php"; ?>

<?php include "hub/top.php"; ?>

<?php include "hub/switcher.php"; ?>


        <section class="site-wrapper">
            <div class="pt-table">
                <div class="pt-tablecell page-services relative">
                    <a href="./" class="page-close"><i class="tf-ion-close"></i></a>
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-lg-offset-1 col-lg-10">
                                <div class="page-title text-center">
                                    <h2><span style="color: rgb(4, 191, 233);">Awesome </span><span class="primary">Services</span> <span class="title-bg">Services</span></h2>
                                    <!-- <p style="color: black; font-size: 20px;">Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica,quam nunc putamus parum claram anteposuerit.</p> -->
                                </div>

                                <div class="hexagon-menu services clear">
                                                                        <?php 
                                        $sql = "SELECT * FROM services ";
                                        $results = mysqli_query($con, $sql);

                                        while ($row = mysqli_fetch_assoc($results))  {

                                            $id = $row['id'];
                                            $serviceName = $row['serviceName'];
                                            $service = $row['service'];
                                            
                                        ?>
                                    <div class="service-hex">
                                        <svg x="0px" y="0px" viewBox="0 0 400 424.5"  xml:space="preserve" style="width: 100%; text-algin: center;">
                                            <g>
                                                <polygon class="st1" points="359.9,314.1 186.9,414 14,314.1 14,114.4 186.9,14.6 359.9,114.4"/>
                                                <polygon class="st1" points="331.2,297.6 186.9,380.9 42.6,297.6 42.6,131 186.9,47.6 331.2,131"/>
                                            </g>
                                        </svg>

                                        <div class="content">

                                            <!-- <div class="icon">
                                                <i class="et-line icon-lightbulb"></i>
                                            </div> -->
                                            <h4 style="margin-right: 20px;"><?= $serviceName; ?></h4>
                                            <p><?= $service; ?></p>
                                        </div>
                                    </div>
                                        <?php } ?>
                            </div> <!-- /.col-xs-12 -->

                        </div> <!-- /.row -->
                    </div> <!-- /.container -->

                    <?php include "hub/nav.php"; ?>

                    <!-- /.container -->

                </div> <!-- /.pt-tablecell -->
            </div> <!-- /.pt-table -->
        </section> <!-- /.site-wrapper -->
        
        <?php include "hub/bottom.php"; ?>
