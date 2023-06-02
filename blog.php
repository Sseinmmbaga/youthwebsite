<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="css/bootstrap.min.css">  
<!--

-->
</head>
<body>
  
<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <h4>Youth Tech <img src="assets/images/logo-icon.png" alt=""></h4>
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="./index.php" class="active">Home</a></li>
              <!-- <li class="scroll-to-section"><a href="#features">Features</a></li> -->
              <li class="scroll-to-section"><a href="./index.php">Campaigns</a></li>
              <li class="scroll-to-section"><a href="./index.php#services">About Us</a></li>
              <li class="scroll-to-section nav-item active"><a href="">Blog</a></li>
              <li class="scroll-to-section"><a href="./index.html#contact">Volunteer</a></li> 
              <li class="scroll-to-section"><div class="main-blue-button"><a href="./index.html#contact">Donate</a></div></li> 
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
                $selected_id=$_GET['Id'];
                 $conn=mysqli_connect("localhost","root","","youthTech");
                          $selected_post_query=mysqli_query($conn,"SELECT * FROM `Posts` where `Id`=$selected_id");
                           while ($post_selected=mysqli_fetch_array($selected_post_query)) {        
            ?>
              <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
                  <div class="tm-blog-post">
                      <h3 class="tm-gold-text"><?php echo $post_selected['Title']?></h3>
                      <p><?php echo $post_selected['Author']?><?php echo "  ,"."  ".Date($post_selected['CreatedAt'])?></p>
                      <img src="<?php echo $post_selected['Image_Path']?>" alt="Image" class="img-fluid tm-img-post">
                      
                      <p><?php echo $post_selected['Paragraph1']?></p> <br>

                      <p><?php echo $post_selected['Paragraph2']?></p><br>

                      <p><?php echo $post_selected['Paragraph3']?></p><br>

                      <!-- <p>Quisque vel sem eu turpis ullamcorper euismod. Praesent quis nisi ac augue luctus viverra. Sed et dui nisi. Fusce vitae dapibus justo. Pellentesque accumsan est ac posuere imperdiet. Curabitur eros mi, lacinia at euismod quis, dapibus vel ligula. Ut sodales erat vitae nunc tempor mollis. Donec tempor lobortis tortor, in feugiat massa facilisis sed. Ut dignissim viverra pretium. In eu justo maximus turpis feugiat finibus scelerisque nec eros. Cras nec lectus tempor nibh vestibulum eleifend et ac elit.</p> -->

                      <!-- <p>Sed vitae luctus libero. Nam sem neque, finibus id sem pharetra, cursus porttitor ligula. Praesent aliquam fermentum dui, vitae venenatis libero vulputate ac. Fusce bibendum scelerisque magna eget iaculis. Phasellus non arcu eu sem convallis semper. Duis vulputate dignissim rhoncus.</p> -->
                  </div>
                  <?php
                        }
                  ?>
                  <div class="row tm-margin-t-big">
                        <?php
                          $conn=mysqli_connect("localhost","root","","youthTech");
                          $post_query=mysqli_query($conn,"SELECT * FROM `Posts` order by Id desc");
                      for ($i=1; $i <=3 ; $i++) {                                            
                          while ($post_result=mysqli_fetch_array($post_query)) {                          

            ?>
                      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">

                          <div class="tm-content-box">
                              <img src="<?php echo $post_result['Image_Path']?>" alt="Image" class="tm-margin-b-30 img-fluid">
                              <h4 class="tm-margin-b-20 tm-gold-text"><?php echo $post_result['Title']?></h4>
                              <p class="tm-margin-b-20">
                                <?php echo $post_result['Paragraph1']?>
                              </p>
                              <a href="blog.php?Id=<?php echo $post_result['Id']?>" class="tm-btn text-uppercase">Read More</a>    
                          </div>  

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
                      <h3 class="tm-gold-text tm-title">
                          Categories
                      </h3>
                      <nav>
                          <ul class="nav">
                              <li><a href="#" class="tm-text-link">Lorem ipsum dolor sit</a></li>
                              <li><a href="#" class="tm-text-link">Tincidunt non faucibus placerat</a></li>
                              <li><a href="#" class="tm-text-link">Vestibulum tempor ac lectus</a></li>
                              <li><a href="#" class="tm-text-link">Elementum egestas dui</a></li>
                              <li><a href="#" class="tm-text-link">Nam in augue consectetur</a></li>
                              <li><a href="#" class="tm-text-link">Fusce non turpis euismod</a></li>
                              <li><a href="#" class="tm-text-link">Text Link Color #006699</a></li>
                          </ul>
                      </nav>
                      <hr class="tm-margin-t-small">   
                      <h3 class="tm-gold-text tm-title tm-margin-t-small">
                          Useful Links
                      </h3>
                      <nav>   
                          <ul class="nav">
                              <li><a href="#" class="tm-text-link">Suspendisse sed dui nulla</a></li>
                              <li><a href="#" class="tm-text-link">Lorem ipsum dolor sit</a></li>
                              <li><a href="#" class="tm-text-link">Duiss nec purus et eros</a></li>
                              <li><a href="#" class="tm-text-link">Etiam pulvinar et ligula sed</a></li>
                              <li><a href="#" class="tm-text-link">Proin egestas eu felis et iaculis</a></li>
                          </ul>
                      </nav>   
                      <hr class="tm-margin-t-small">       
                  </div>
                  
                  
              </aside>

          </div>
          
      </div>
  </section>
    

  
<link rel="stylesheet" href="./assets/css/footer.css">
<footer class="main-footer">
        <div class="container">
            <div class="footer-content">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                        <div class="logo-widget footer-widget">
                            <figure class="logo-box"><a href="#" class="logo">Youth Tech<img src="./assets/images/" alt="" ></a></figure>
                            <div class="text">
                                <p>Youth technology Tanzania (YTT) is a Non-Profit organization based in Tanzania dedicated to bridging Free education on technology,
                                     Cyber security, Free access to information, Entrepreneurship skills, 
                                    Leadership skills, Research skills, Climate change, and sustainability issues to the young generation in Primary and Secondary schools
                                </p>
                            </div>
                            <ul class="footer-social">
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class='fa fa-instagram' style='color: red'></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 offset-lg-2 footer-column">
                        <div class="service-widget footer-widget">
                            <div class="footer-title">Pages</div>
                            <ul class="list">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Campaigns</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Volunteer</a></li>
                                <li><a href="#">About-us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-widget">
                        <div class="contact-widget footer-widget">
                            <div class="footer-title">Contacts</div>
                            <div class="text">
                                <p>Lorem Ipsum, simply dummy text, printing, Chandigarh</p>
                                <p>+2(784) 1223323</p>
                                <p>info@example.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- main-footer end -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 column">
                    <div class="copyright"><a href="#">Anup</a> &copy; 2019 All Right Reserved</div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 column">
                    <ul class="footer-nav">
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


  </header>

</body>
</html>