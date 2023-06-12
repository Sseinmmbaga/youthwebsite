<?php 
include_once "./connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <title>Youth_Tech</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/youth-customer-style.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">

    <!-- Bootstrap style -->
    <link rel="stylesheet" href="./vendor/bootstrap/css/template-mo.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400"> Google web font "Open Sans"
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--  Footer Link-->
    <link rel="stylesheet" href="./assets/css/footer.css">

<style>


</style>
</head>

<body>

    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php" class="logo">
                            <h4>Youth Tech <img src="assets/images/logo-icon.png" alt=""></h4>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="./index.php" class="active">Home</a></li>
                            <!-- <li class="scroll-to-section"><a href="#features">Features</a></li> -->
                            <li class="scroll-to-section"><a href="./index.php#about">Campaigns</a></li>
                            <li class="scroll-to-section"><a href="./index.php#services">About Us</a></li>
                            <li class="scroll-to-section nav-item active"><a href="">Blog</a></li>
                            <li class="scroll-to-section"><a href="./index.php#contact">Volunteer</a></li>
                            <li class="scroll-to-section">
                                <div class="main-blue-button"><a href="./index.php#contact">Donate</a></div>
                            </li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
        <section class="tm-section">
            <div class="container-fluid">
                <div class="row">
                    <?php
                    $selected_id = $_GET['Id'];
                    include_once "./connection.php";
                    if (empty($selected_id)) {
                        # code...
                        $selected_post_query = mysqli_query($conn, "SELECT * FROM `Posts` order by Id desc limit 1");
                        while ($post_selected = mysqli_fetch_array($selected_post_query)) {
                    ?>
                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
                                <div class="tm-blog-post">
                                    <h3 class="tm-gold-text"><?php echo $post_selected['Title'] ?></h3>
                                    <p><?php echo $post_selected['Author'] ?><?php echo "  ," . "  " . $post_selected['CreatedAt'] ?></p>
                                    <img src="<?php echo $post_selected['Image_Path'] ?>" alt="Image" class="img-fluid tm-img-post">

                                    <p><?php echo $post_selected['Paragraph1'] ?></p> <br>

                                    <p><?php echo $post_selected['Paragraph2'] ?></p><br>

                                    <p><?php echo $post_selected['Paragraph3'] ?></p><br>


                                </div>
                            <?php
                        }
                            ?>
                            <?php
                        } else {
                            # code...                
                            $selected_post_query = mysqli_query($conn, "SELECT * FROM `Posts` where `Id`=$selected_id");
                            while ($post_selected = mysqli_fetch_array($selected_post_query)) {
                            ?>
                                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
                                    <div class="tm-blog-post">
                                        <h3 class="tm-gold-text"><?php echo $post_selected['Title'] ?></h3>
                                        <p><?php echo $post_selected['Author'] ?><?php echo "  ," . "  " . Date($post_selected['CreatedAt']) ?></p>
                                        <img src="<?php echo $post_selected['Image_Path'] ?>" alt="Image" class="img-fluid tm-img-post">

                                        <p><?php echo $post_selected['Paragraph1'] ?></p> <br>

                                        <p><?php echo $post_selected['Paragraph2'] ?></p><br>

                                        <p><?php echo $post_selected['Paragraph3'] ?></p><br>


                                    </div>
                            <?php
                            }
                        }
                            ?>
                            <div class="row tm-margin-t-big">
                                <h4 class="blog-heading">Recent Post</h4>
                                <hr>
                                <?php
                                
                                $post_query = mysqli_query($conn, "SELECT * FROM `Posts` order by Id desc");
                                for ($i = 1; $i <= 3; $i++) {
                                    while ($post_result = mysqli_fetch_array($post_query)) {

                                ?>
                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">

                                            <div class="tm-content-box">
                                                <img src="<?php echo $post_result['Image_Path'] ?>" alt="Image" class="tm-margin-b-30 img-fluid">
                                                <h4 class="tm-margin-b-20 tm-gold-text"><?php echo $post_result['Title'] ?></h4>
                                                <p class="tm-margin-b-20">
                                                    <?php echo $post_result['Paragraph1'] ?>
                                                </p>
                                                <a href="blog.php?Id=<?php echo $post_result['Id'] ?>" class="tm-btn text-uppercase">Read More</a>
                                            </div>
                                            <br>

                                        </div>

                                <?php

                                    }
                                }

                                ?>

                                <!-- <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">

                          <div class="tm-content-box">
                              <img src="./Images/image2.jpg" alt="Image" class="tm-margin-b-30 img-fluid">
                              <h4 class="tm-margin-b-20 tm-gold-text">Lorem ipsum dolor #2</h4>
                              <p class="tm-margin-b-20">Aenean cursus tellus mauris, quis
                              consequat mauris dapibus id. Donec
                              scelerisque porttitor pharetra</p>
                              <a href="#" class="tm-btn text-uppercase">Read More</a>    
                          </div>  

                      </div> -->

                                <!-- <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">

                          <div class="tm-content-box">
                              <img src="./Images/image3.jpg" alt="Image" class="tm-margin-b-30 img-fluid">
                              <h4 class="tm-margin-b-20 tm-gold-text">Lorem ipsum dolor #3</h4>
                              <p class="tm-margin-b-20">Aenean cursus tellus mauris, quis
                              consequat mauris dapibus id. Donec
                              scelerisque porttitor pharetra</p>
                              <a href="#" class="tm-btn text-uppercase">Detail</a>    
                          </div>  

                      </div>     -->
                            </div>

                                </div>

                                <aside class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 tm-aside-r">

                                    <div class="tm-aside-container">
                                        <hr class="tm-margin-t-small">
                                        <h3 class="tm-gold-text tm-title tm-margin-t-small">
                                            Useful Links
                                        </h3>
                                        <nav>
                                            <ul >
                                                <li><a href="https://meta.m.wikimedia.org/wiki/Wikimedia_Community_Kilimanjaro" target="_blank" class="tm-text-link">Our Meta page</a></li>
                                                <li><a href="" class="tm-text-link">Dashboard</a></li>
                                                <li><a href="#" class="tm-text-link">Facebook page</a></li>
                                                <li><a href="#" class="tm-text-link">Instagram page</a></li>

                                            </ul>
                                        </nav>
                                        <hr class="tm-margin-t-small">
                                    </div>


                                </aside>

                            </div>

                </div>
        </section>
        
 <!-- Footer Start -->
<div class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-3">
        <div class="footer-blog">
          <h3>Useful Links </h3>
          <div>
            <a href="https://meta.m.wikimedia.org/wiki/Wikimedia_Community_Kilimanjaro" target="_blank">Our Meta page</a>
            
          </div>
          <div>
            <a href="#">Dashboard</a>
           
          </div>
          <div>
            <a href="#">Facebook page</a>
            
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="footer-insta">
          <h3>From Instagram</h3>
          <a href=""><img src="Images/abu1.jpg" alt="Image"></a>
          <a href=""><img src="Images/abu2.jpg" alt="Image"></a>
          <a href=""><img src="Images/abu3.jpg" alt="Image"></a>
          <a href=""><img src="Images/abu1.jpg" alt="Image"></a>
          <a href=""><img src="Images/abu4.jpg" alt="Image"></a>
          <a href=""><img src="Images/abu2.jpg" alt="Image"></a>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="footer-tags">
          <h3>Pages</h3>
          <a href="">Home</a>
          <a href="">Campaigns</a>
          <a href="">About Us</a>
          <a href="">Blog</a>
          <a href="">Volunteer</a>
          <a href="">Donate</a>
         
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="footer-newsletter">
          <h3>Newsletter</h3>
          <div class="form">
            <input class="form-control" placeholder="Your Name">
            <input class="form-control" placeholder="Your Email">
            <button class="btn">Subscribe</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="footer-contact">
      <div class="row align-items-center">
        <div class="col-md-4">
          <h4>Call Now</h4>
          <p>+255 756 7890</p>
        </div>
        <div class="col-md-4">
          <h4>Email Us</h4>
          <p>wikimediakilimanjaro12@youthtech.com</p>
        </div>
        <div class="col-md-4">
          <h4>Get in Touch</h4>
          <a href=""><i class="fa fa-twitter"></i></a>
          <a href=""><i class="fa fa-facebook-f"></i></a>
          <a href=""><i class="fa fa-youtube"></i></a>
          <a href=""><i class="fa fa-instagram"></i></a>
          <a href=""><i class="fa fa-linkedin-in"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="copyright">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <div class="copy-text">
            <p>&copy; <a href="#">Youth Tech</a>. All Rights Reserved.</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="copy-menu">
            <a href="">Terms</a>
            <a href="">Privacy</a>
            <a href="">Author</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Footer End -->
  
  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/custom.js"></script>

</body>

</html>