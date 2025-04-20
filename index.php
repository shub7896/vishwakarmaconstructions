<?php
session_start();

if (!isset($_SESSION['admin_id']) && !isset($_SESSION['user_id'])) {
    header("Location: index2.php");
    exit();
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Construction Website</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
    <meta charset="utf-8">
        <title>Construction - Free HTML Bootstrap Template</title>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- Custom Fonts -->
        <link rel="stylesheet" href="custom-font/fonts.css" />
        <!-- Bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <!-- Bootsnav -->
        <link rel="stylesheet" href="css/bootsnav.css">
        <!-- Fancybox -->
        <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css?v=2.1.5" media="screen" />	
        <!-- Custom stylesheet -->
        <link rel="stylesheet" href="css/custom.css" />
        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <style>
.moving-text {
  font-size: 2rem;
  color: white;
  overflow: hidden;
  border-right: 2px solid white; /* Cursor effect */
  white-space: nowrap;
  width: fit-content;
  display: inline-block;
}

.moving-text span {
   font-size:2rem;
   font-weight:800px;
  display: inline-block;
  overflow: hidden;
  white-space: nowrap;
 
  animation: typing 4s steps(30, end) infinite, blink-caret 0.75s step-end infinite;
}

@keyframes typing {
  0% { width: 0 }
  50% { width: 100% }
  100% { width: 0 }
}

@keyframes blink-caret {
  0%, 100% { border-color: transparent }
  50% { border-color: white }
}
</style>


</head>

<body>

   <!-- header section starts  -->

   <header class="header">

      <a href="#" class="logo">Vishwakarma <br> <span> constructions</span></a>

      <nav class="navbar">
         <a href="#home">home</a>
         <a href="#about">about</a>
         <a href="#services">services</a>
         <a href="#portfolio">Portfolio</a>
         <a href="#projects">projects</a>
         
         <a href="#contact">contact</a>
         <a href="#blogs">blogs</a>
      </nav>

      <div class="icons">
   <div id="menu-btn" class="fas fa-bars"></div>
   <div id="info-btn" class="fas fa-info-circle" title="Click to See Contact Info"></div>
   <div id="search-btn" class="fas fa-search" title="Click to See Search Box"></div>

   <!-- Logout icon -->
   <a href="./auth/logout.php" title="Logout">
      <div id="login-btn" class="fas fa-sign-out-alt"></div>
      
   </a>
</div>


      <!-- <form action="" class="search-form">
         <input type="search" name="" placeholder="search here..." id="search-box">
         <label for="search-box" class="fas fa-search"></label>
      </form>

      <form action="" class="login-form">
         <h3>login form</h3>
         <input type="email" placeholder="enter your email" class="box">
         <input type="password" placeholder="enter your password" class="box">
         <div class="flex">
            <input type="checkbox" name="" id="remember-me">
            <label for="remember-me">remember me</label>
            <a href="#">forgot password?</a>
         </div>
         <input type="submit" value="login now" class="btn">
         <p>don't have an account <a href="#">create one!</a></p>
      </form> -->

   </header>

   <div class="contact-info">

      <div id="close-contact-info" class="fas fa-times"></div>

      <div class="info">
         <i class="fas fa-phone"></i>
         <h3>phone number</h3>
         <p>+918433798770</p>
         <p>+919769472582</p>
      </div>

      <div class="info">
         <i class="fas fa-envelope"></i>
         <h3>email address</h3>
         <p>sauravishwakarma980@gmail.com</p>
         
      </div>

      <div class="info">
         <i class="fas fa-map-marker-alt"></i>
         <h3>office address</h3>
         <p>mumbra colony diva thane maharashtra 400612</p>
      </div>

      <div class="share">
         <a href="#" class="fab fa-facebook-f"></a>
         <a href="#" class="fab fa-twitter"></a>
         <a href="#" class="fab fa-instagram"></a>
         <a href="#" class="fab fa-linkedin"></a>
      </div>

   </div>

   <!-- header section ends -->

   <!-- home section starts  -->

   <section class="home" id="home">

      <div class="swiper home-slider">

         <div class="swiper-wrapper">

         <section class="swiper-slide slide" style="background: url(images/h1.png) no-repeat;">
  <div class="content">
    <h3>Vishwakarma Constructions</h3>
    <p class="moving-text"><span>We provide best services...</span></p>
    <br><a href="#about" class="btn">get started</a>
  </div>
</section>


            <section class="swiper-slide slide" style="background: url(images/home-slide-2.jpg) no-repeat;">
               <div class="content">
                  <h3>Building Dreams, One Brick at a Time</h3>
                  <p> We believe every structure starts with a dream. From residential homes to commercial spaces, we turn visions into reality with precision and dedication.</p>
                  <a href="#about" class="btn">get started</a>
               </div>
            </section>

            <section class="swiper-slide slide" style="background: url(images/home-slide-3.jpg) no-repeat;">
               <div class="content">
                  <h3>Strength, Design, and Innovation – We Build It All.</h3>
                  <p>The website will build trust with potential clients and illustrate the seamless transformation of
                     their ideas into reality.</p>
                  <a href="#about" class="btn">get started</a>
               </div>
            </section>

         </div>

         <div class="swiper-button-next"></div>
         <div class="swiper-button-prev"></div>

      </div>

   </section>

   <!-- home section ends -->

   <!-- about section starts  -->

   <section class="about" id="about">

      <h1 class="heading"> about us </h1>

      <div class="row">

         <div class="video">
            <video src="images/a.mp4" loop muted autoplay></video>
         </div>

         <div class="content">
            <h3>We will provide you the best work which you dreamt for!</h3>
            <p>Hard workers persevere in large and small ways to the benefit of their personal and professional
               communities. Persistence is continued, extended effort toward a goal or outcome, regardless of challenges
               or obstacles.</p>
            <a href="#services" class="btn">read more</a>
         </div>

      </div>

      <div class="box-container">

         <div class="box">
            <h3>20+</h3>
            <p>years of experience</p>
         </div>

         <div class="box">
            <h3>350+</h3>
            <p>project completed</p>
         </div>

         <div class="box">
            <h3>200+</h3>
            <p>satiesfied clients</p>
         </div>

         <div class="box">
            <h3>13+</h3>
            <p>active workers</p>
         </div>

      </div>

   </section>

   <!-- about section ends -->

   <!-- services section starts  -->

   <section class="services" id="services">

      <h1 class="heading"> our services </h1>

      <div class="box-container">

         <div class="box">
            <img src="images/service-1.png" alt="">
            <h3>building construction</h3>
            <p>Building construction is a multifaceted process that transforms an idea into a tangible structure.</p>
         </div>

         <div class="box">
            <img src="images/service-2.png" alt="">
            <h3>house renovation</h3>
            <p>House renovation involves updating, improving, or restoring residential structures to enhance their
               appearance, functionality, and value.</p>
         </div>

         <div class="box">
            <img src="images/service-3.png" alt="">
            <h3>architechture design</h3>
            <p>Architecture design involves the process of planning, designing, and constructing buildings and other
               physical structures.</p>
         </div>

         <div class="box">
            <img src="images/service-4.png" alt="">
            <h3>material supply</h3>
            <p>Material supply in the context of construction involves providing various types of materials needed for
               building projects.</p>
         </div>

         <div class="box">
            <img src="images/service-5.png" alt="">
            <h3>construction consultant</h3>
            <p>Construction consultants play a crucial role in the building industry by offering expertise in project
               management, planning, design, and construction oversight.</p>
         </div>

         <div class="box">
            <img src="images/service-6.png" alt="">
            <h3>interior design</h3>
            <p>Interior designers use various elements such as color, furniture, lighting, and decor to create
               functional and beautiful spaces.</p>
         </div>

         <div class="box">
            <img src="images/service-7.png" alt="">
            <h3>building maintenance</h3>
            <p>Building maintenance involves the upkeep, repair, and general care of physical structures, ensuring they
               remain safe, functional, and aesthetically pleasing.</p>
         </div>

         <div class="box">
            <img src="images/service-8.png" alt="">
            <h3>building renovation</h3>
            <p>Building renovation involves the process of restoring, improving, or updating existing structures to
               enhance their functionality, aesthetics, and overall value.</p>
         </div>

      </div>

   </section>

   <!-- services section ends -->

    <!-- Portfolio -->
    <section id="portfolio">
      <div class="container portfolio_area text-center">
          <h2>Made with love</h2>
          <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</p>

          <div id="filters">
              <button class="button is-checked" data-filter="*">Show All</button>
              <button class="button" data-filter=".buildings">Buildings</button>
              <button class="button" data-filter=".interior">Interior Design</button>
              <button class="button" data-filter=".isolation">Isolation</button>
              <button class="button" data-filter=".plumbing">Plumbing</button>
          </div>
          <!-- Portfolio grid -->		
          <div class="grid">
              <div class="grid-sizer"></div>
              <div class="grid-item grid-item--width2 grid-item--height2 buildings plumbing interior">
                  <img alt="" src="images/highligh_img.jpg" >
                  <div class="portfolio_hover_area">
                      <a class="fancybox" href="images/highligh_img.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><span class="fa fa-search"></span></a>
                      <a href="#"><span class="fa fa-link"></span></a>
                  </div>  
              </div>

              <div class="grid-item buildings interior isolation">
                  <img alt="" src="images/portfolio1.jpg" >
                  <div class="portfolio_hover_area">
                      <a class="fancybox" href="images/portfolio1.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><span class="fa fa-search"></span></a>
                      <a href="#"><span class="fa fa-link"></span></a>
                  </div>   
              </div>

              <div class="grid-item interior plumbing isolation">
                  <img alt="" src="images/portfolio2.jpg" >
                  <div class="portfolio_hover_area">
                      <a class="fancybox" href="images/portfolio2.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><span class="fa fa-search"></span></a>
                      <a href="#"><span class="fa fa-link"></span></a>
                  </div>  
              </div>

              <div class="grid-item isolation buildings">
                  <img alt="" src="images/portfolio3.jpg" >
                  <div class="portfolio_hover_area">
                      <a class="fancybox" href="images/portfolio3.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><span class="fa fa-search"></span></a>
                      <a href="#"><span class="fa fa-link"></span></a>
                  </div>  
              </div>

              <div class="grid-item plumbing isolation">
                  <img alt="" src="images/portfolio4.jpg" >
                  <div class="portfolio_hover_area">
                      <a class="fancybox" href="images/portfolio4.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><span class="fa fa-search"></span></a>
                      <a href="#"><span class="fa fa-link"></span></a>
                  </div>  
              </div>
          </div><!-- Portfolio grid end -->
      </div>
  </section><!-- Portfolio end -->

   <!-- projects section starts  -->

   <section class="projects" id="projects">

      <h1 class="heading"> our projects </h1>

      <div class="box-container">

         <a href="images/project-1.jpg" class="box">
            <div class="image">
               <img src="images/project-1.jpg" alt="">
            </div>
            <div class="content">
               <div class="info">
                  <h3>concept home</h3>
                  <p>construction, design</p>
               </div>
               <i class="fas fa-plus"></i>
            </div>
         </a>

         <a href="images/project-2.jpg" class="box">
            <div class="image">
               <img src="images/project-2.jpg" alt="">
            </div>
            <div class="content">
               <div class="info">
                  <h3>Mine Machinery</h3>
                  <p>construction, veichecal</p>
               </div>
               <i class="fas fa-plus"></i>
            </div>
         </a>

         <a href="images/project-3.jpg" class="box">
            <div class="image">
               <img src="images/project-3.jpg" alt="">
            </div>
            <div class="content">
               <div class="info">
                  <h3>Architecture Building design</h3>
                  <p>construction, Architecture </p>
               </div>
               <i class="fas fa-plus"></i>
            </div>
         </a>

         <a href="images/project-4.jpg" class="box">
            <div class="image">
               <img src="images/project-4.jpg" alt="">
            </div>
            <div class="content">
               <div class="info">
                  <h3>Crane</h3>
                  <p>Machinery, weight lifter</p>
               </div>
               <i class="fas fa-plus"></i>
            </div>
         </a>

         <a href="images/project-5.jpg" class="box">
            <div class="image">
               <img src="images/project-5.jpg" alt="">
            </div>
            <div class="content">
               <div class="info">
                  <h3>Official Constructions</h3>
                  <p>construction, design</p>
               </div>
               <i class="fas fa-plus"></i>
            </div>
         </a>

         <a href="images/project-6.jpg" class="box">
            <div class="image">
               <img src="images/project-6.jpg" alt="">
            </div>
            <div class="content">
               <div class="info">
                  <h3>Welding & fabrication</h3>
                  <p>Welding, Work Contract</p>
               </div>
               <i class="fas fa-plus"></i>
            </div>
         </a>

      </div>

   </section>

   <!-- projects section ends -->

   <!-- reviews section starts  -->

   <section class="reviews">

      <h1 class="heading"> clients reviews </h1>

      <div class="swiper reviews-slider">

         <div class="swiper-wrapper">

            <div class="swiper-slide slide">
               <p>Choosing Construction Website for our dream home project was the best decision we made. From the
                  initial consultation to
                  the final walkthrough, their team was professional, attentive, and dedicated to bringing our vision to
                  life. The quality
                  of craftsmanship and attention to detail exceeded our expectations. We are thrilled with our new home
                  and highly
                  recommend Construction Website to anyone looking to build a custom home which was great. </p>
               <div class="user">
                  <img src="images/aa.jpg" alt="">
                  <div class="info">
                     <h3>Shubham Maurya</h3>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                     </div>
                  </div>
               </div>
            </div>

            <div class="swiper-slide slide">
               <p>As a property developer, I have worked with many construction companies, but Construction Website
                  stands out for their commitment to quality and reliability. They delivered a complex multi-unit
                  residential project ahead of schedule and maintained the highest standards of construction. Their
                  transparent approach and proactive problem-solving made the entire process smooth and stress-free. I
                  look forward to collaborating with them on future projects.</p>
               <div class="user">
                  <img src="images/cc.jpg" alt="">
                  <div class="info">
                     <h3>Naman ojha</h3>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                     </div>
                  </div>
               </div>
            </div>

            <div class="swiper-slide slide">
               <p>Building our new corporate headquarters was a major undertaking, and Construction Website delivered
                  beyond our expectations. Their team handled every aspect of the project with professionalism and
                  expertise. The building is not only state-of-the-art but also a true reflection of our company's
                  values and vision. We appreciate collaborative approach and the commitment to quality that
                  Construction Website brought to this project.</p>
               <div class="user">
                  <img src="images/bb.jpg" alt="">
                  <div class="info">
                     <h3>Akash pandey</h3>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                     </div>
                  </div>
               </div>
            </div>

         </div>

      </div>

   </section>

   <!-- reviews section ends -->

   

   <!-- contact section starts  -->

   <section class="contact" id="contact">

      <h1 class="heading"> contact us </h1>

      <div class="row">

         <iframe class="map"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15076.89592087332!2d72.8319697277345!3d19.14167056419224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63aceef0c69%3A0x2aa80cf2287dfa3b!2sJogeshwari%20West%2C%20Mumbai%2C%20Maharashtra%20400047!5e0!3m2!1sen!2sin!4v1641716772852!5m2!1sen!2sin"
            allowfullscreen="" loading="lazy"></iframe>

         <form action="https://formsubmit.co/windhashira989@gmail.com" method="POST">
            <h3>get in touch</h3>
            <input type="text" placeholder="name" class="box">
            <input type="email" placeholder="email" class="box">
            <input type="number" placeholder="phone" class="box">
            <textarea name="" placeholder="message" class="box" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" class="btn">
         </form>

         <!-- <form action="https://formsubmit.co/windhashira989@gmail.com" method="POST">
     <input type="text" name="name" required>
     <input type="email" name="email" required>
     <button type="submit">Send</button>
</form> -->

      </div>

   </section>

   <!-- contact section ends -->
   <section class="blogs" id="blogs">
      <h1 class="heading"> our blogs </h1>
      <div class="swiper blogs-slider">
          <!-- <div class="swiper-wrapper"> -->
         </section>
          <?php
$conn = new mysqli('sql12.freesqldatabase.com', 'sql12774258', 'TrHXy4r1s6', 'sql12774258');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM blogs ORDER BY id DESC");

while ($row = $result->fetch_assoc()) {
    $shortDesc = substr($row['description'], 0, 40); // limit to 100 chars
    echo '
    <div class="swiper-slide slide">
        <div class="image">
            <img src="uploads/' . htmlspecialchars($row['image']) . '" alt="">
        </div>
        <div class="content">
            <h3>' . htmlspecialchars($row['title']) . '</h3>
            <p>' . htmlspecialchars($shortDesc) . '...</p>
            <a href="blog.php?id=' . $row['id'] . '" class="btn">See More</a>
        </div>
    </div>';
}

$conn->close();
?>

  
   <!-- blogs section ends -->

   <!-- client logo section starts -->

   <section class="logo-container">
      <div class="swiper logo-slider">
         <div class="swiper-wrapper">
            <div class="swiper-slide slide"><img src="images/client-logo-1.png" alt=""></div>
            <div class="swiper-slide slide"><img src="images/client-logo-2.png" alt=""></div>
            <div class="swiper-slide slide"><img src="images/client-logo-3.png" alt=""></div>
            <div class="swiper-slide slide"><img src="images/client-logo-4.png" alt=""></div>
            <div class="swiper-slide slide"><img src="images/client-logo-5.png" alt=""></div>
            <div class="swiper-slide slide"><img src="images/client-logo-6.png" alt=""></div>
         </div>
      </div>
   </section>

   <!-- client logo section ends -->




    <!-- Footer -->
    <footer>
      <!-- Footer top -->
      <div class="container footer_top">
          <div class="row">
              <div class="col-lg-4 col-sm-7">
                  <div class="footer_item">
                      <h4>About Company</h4>
                      
                      <p> You bring the idea, and we bring the craftsmanship. Together, we create spaces that reflect your aspirations with the highest standards of quality.</p>

                      <ul class="list-inline footer_social_icon">
                          <li><a href=""><span class="fa fa-facebook"></span></a></li>
                          <li><a href=""><span class="fa fa-twitter"></span></a></li>
                          <li><a href=""><span class="fa fa-youtube"></span></a></li>
                          <li><a href=""><span class="fa fa-google-plus"></span></a></li>
                          <li><a href=""><span class="fa fa-linkedin"></span></a></li>
                      </ul>
                  </div>
              </div>
              <div class="col-lg-2 col-sm-5">
                  <div class="footer_item">
                      <h4>Explore link</h4>
                      <ul class="list-unstyled footer_menu">
                          <li><a href=""><span class="fa fa-play"></span> Our services</a>
                          <li><a href=""><span class="fa fa-play"></span> Meet our team</a>
                          <li><a href=""><span class="fa fa-play"></span> Forum</a>
                          <li><a href=""><span class="fa fa-play"></span> Help center</a>
                          <li><a href=""><span class="fa fa-play"></span> Contact Cekas</a>
                          <li><a href=""><span class="fa fa-play"></span> Privacy Policy</a>
                          <li><a href=""><span class="fa fa-play"></span> Cekas terms</a>
                          <li><a href=""><span class="fa fa-play"></span> Site map</a>
                      </ul>
                  </div>
              </div>
              
              <div class="col-lg-3 col-sm-5">
                  <div class="footer_item">
                      <h4>Contact us</h4>
                      <ul class="list-unstyled footer_contact">
                          <li><a href=""><span class="fa fa-map-marker"></span> mumbra colony diva thane maharashtra 400612 </a></li>
                          <li><a href=""><span class="fa fa-envelope"></span> sauravishwakarma980@gmail.com</a></li>
                          <li><a href=""><span class="fa fa-mobile"></span><p>+918433798770 <br />+919769472582</p></a></li>
                      </ul>
                  </div>
              </div>
          </div>
      </div><!-- Footer top end -->

      <!-- Footer bottom -->
      <div class="footer_bottom text-center">
          <p class="wow fadeInRight">
              Made with 
              <i class="fa fa-heart"></i>
              by 
              <a target="_blank" href="#">Vishwakarma constructions</a> 
              2025. All Rights Reserved
          </p>
      </div><!-- Footer bottom end -->
  </footer><!-- Footer end -->





   <!-- footer section starts  -->

   <section class="footer">

      <div class="links">
         <a class="btn" href="#home">home</a>
         <a class="btn" href="#about">about</a>
         <a class="btn" href="#services">services</a>
         <a class="btn" href="#projects">projects</a>
         <a class="btn" href="#pricing">pricing</a>
         <a class="btn" href="#contact">contact</a>
         <a class="btn" href="#blogs">blogs</a>
      </div>

      <div class="credit"> created by <span>Saurav Vishwakarma</span> </div>

   </section>

   <!-- footer section ends -->









   <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

   <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

   <script>

      lightGallery(document.querySelector('.projects .box-container'));

   </script>
    <!-- JavaScript -->
    <script src="js/jquery-1.12.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Bootsnav js -->
    <script src="js/bootsnav.js"></script>

    <!-- JS Implementing Plugins -->
    <script src="js/isotope.js"></script>
    <script src="js/isotope-active.js"></script>
    <script src="js/jquery.fancybox.js?v=2.1.5"></script>

    <script src="js/jquery.scrollUp.min.js"></script>

    <script src="js/main.js"></script>

</body>


</html>
