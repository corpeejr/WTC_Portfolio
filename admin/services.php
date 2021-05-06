<?php include "hub/top.php"; ?>

    <!-- Page Wrapper -->
    <div id="wrapper">

       <?php include "hub/sidebar.php"; ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include "hub/nav.php"; ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                   
                   
                    <?php 

                        if (isset($_GET['page'])) {
                            $page = $_GET['page'];
                        }else{
                            $page = '';
                        }

                        // echo "<h1>" .$page. "</h1>";

                        switch ($page) {
                            case 'addServices':
                                include "hub/addServices.php";
                                break;
                            case 'editService':
                                include "hub/editService.php";
                                break;
                            
                            default:
                                include "hub/allServices.php";
                                break;
                        } 

                    ?>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; WTC_Portfolio 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

       <!-- Logout Modal-->
       <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><?= $_SESSION['fullName']; ?> are you ready to leave</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    
                    <form method="POST">
                    <button type="submit" class="btn btn-danger" name="logOut">LogOut</button>
                    </form>

                <?php logOut(); ?>
                </div>
            </div>
        </div>
    </div>


    <?php include "hub/bottom.php"; ?>