<?php include "hub/top.php"; ?>

<?php include "hub/switcher.php"; ?>

<?php

if(isset($_POST['email']) && $_POST['email'] != ''){
    if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){

        $userName = $_POST['name'];
        $userEmail = $_POST['email'];
        $messageSubject = $_POST['subject'];
        $message = $_POST['message'];

        $to = "wilmotcorpeejr25@gmail.com";
        $body = "";

        $body .= "From: ".$userName. "\r\n";
        $body .= "Email: ".$userEmail. "\r\n";
        $body .= "Message: ".$message. "\r\n";

        mail($to,$messageSubject,$body);
    }
}


?>

        <main class="site-wrapper">
            <div class="pt-table">
                <div class="pt-tablecell page-contact relative">
                    <!-- .close -->
                    <a href="./" class="page-close"><i class="tf-ion-close"></i></a>
                    <!-- /.close -->

                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                                <div class="page-title text-center">
                                    <h2>Get in  <span class="primary">touch</span> <span class="title-bg">Contact</span></h2>
                                </div>
                            </div>                            
                        </div> <!-- /.row -->

                        <div class="row">
                            <div class="col-xs-12 col-sm-5 col-md-4 col-lg-3">
                                <div class="contact-block">
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="tf-envelope2"></i>
                                        </div>
                                        <div class="media-body">
                                            <h4>Email</h4>
                                            <p><a href="mailto:wilmotcorpeejr25@gmail.com">wilmotcorpeejr25@gmail.com</a></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.contact-block -->
                                <div class="contact-block">
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="tf-phone2"></i>
                                        </div>
                                        <div class="media-body">
                                            <h4>Phone #1</h4>
                                            <p><a href="tel:+231 777 085 668">+231 777 085 668</a></p>
                                        </div>
                                        <div class="media-body">
                                            <h4>Phone #2</h4>
                                            <p><a href="tel:+231 888 073 396">+231 888 073 396</a></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.contact-block -->
                                <div class="contact-block">
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="tf-mobile"></i>
                                        </div>
                                        <div class="media-body">
                                            <h4>Facebook</h4>
                                            <p><a href="facebook:Wilmot T. Corpee Jr">Wilmot T. Corpee Jr</a></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.contact-block -->

                                <ul class="contact-social">
                                     <li>
                                        <span class="contact-social-hex"></span>
                                        <a href="www.fb.com/themefisher"><i class="tf-ion-social-facebook"></i></a>
                                    </li> 
                                    <!-- <li>
                                        <span class="contact-social-hex"></span>
                                        <a href="www.twitter.com/themefisher"><i class="tf-ion-social-twitter"></i></a>
                                    </li> -->
                                    <li>
                                        <span class="contact-social-hex"></span>
                                        <a href="#"><i class="tf-ion-social-google"></i></a>
                                    </li>
                                    <li>
                                        <span class="contact-social-hex"></span>
                                        <a href="www.dribbble.com/themefisher"><i class="tf-ion-social-dribbble"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-xs-12 col-sm-7 col-md-7 col-md-offset-1 col-lg-offset-2">
                                <div class="section-title clear">
                                    <h3>Send me a meesage</h3>
                                    <span class="bar-dark"></span>
                                    <span class="bar-primary"></span>
                                </div>

                                <form id="contact-form" class="row contact-form no-gutter" action="#" method="post">
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="input-field name">
                                            <span class="input-icon" id="name" ><i class="tf-profile-male"></i></span>
                                            <input type="text" class="form-control" name="name"  placeholder="Enter your full name">
                                        </div>
                                    </div> <!-- ./col- -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="input-field email">
                                            <span class= "input-icon" id="email"><i class="tf-envelope2"></i></span>
                                            <input type="email" class="form-control" name="email" placeholder="Your email address">
                                        </div>
                                    </div> <!-- ./col- -->
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="input-field">
                                            <span class= "input-icon" id="subject"><i class="tf-pricetags"></i></span>
                                            <input type="text" class="form-control" name="subject" placeholder="Enter the discussion title">
                                        </div>
                                    </div> <!-- ./col- -->
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="input-field message">
                                            <span class= "input-icon" ><i class="tf-pencil2"></i></span>
                                            <textarea name="message" id="message" class="form-control" placeholder="Write your message"></textarea>
                                        </div>
                                    </div> <!-- ./col- -->
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="input-field">
                                            <span class="btn-border">
                                                <button type="submit" class="btn btn-primary btn-custom-border text-uppercase">Send Message now</button>
                                            </span>
                                        </div>
                                        <div class="msg-success">Your Message was sent successfully</div>
                                        <div class="msg-failed">Something went wrong, please try again later</div>
                                    </div> <!-- ./col- -->
                                </form> <!-- /.row -->
                            </div> <!-- /.col- -->
                        </div> <!-- /.row -->
                    </div> <!-- /.container -->

                    <?php include "hub/nav.php"; ?>

                    <!-- /.container -->

                </div> <!-- /.pt-tablecell -->
            </div> <!-- /.pt-table -->
        </main> <!-- /.site-wrapper -->

        <?php include "hub/bottom.php"; ?>
