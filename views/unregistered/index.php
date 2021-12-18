<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="http://localhost/TravoMVC/public/css/index.css">
    <link rel="icon" href="http://localhost/TravoMVC/public/images/icons/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@600&family=Mali&family=Poppins&family=Roboto+Condensed&family=Zen+Kaku+Gothic+New&display=swap" rel="stylesheet">
    
    <body>

    <section class = "home-watermark_and_started-section">
      <div class="nav_bar-div">
        <br>
        <nav class = "nav_bar">
          <div class="nav_bar_logo">
              <img class="nav_bar_logo_img" src="http://localhost/TravoMVC/public/images/Logo/travo.png" alt="LOGO">
          </div>
          <div class="hamburger">
              <div class="line1"></div>
              <div class="line2"></div>
              <div class="line3"></div>
          </div>
          <ul class="nav_bar_links">
            <li></li>
            <li></li>
              <li><a href="#" class="nav_bar_home">HOME</a></li>
              <li><a href="../app/views/unregistered/faq.php">FAQ</a></li>
              <li><a href="#about_us-section">ABOUT</a></li>
              <li><a href="#contact_us-section">CONTACT</a></li>
              <li><a href="../app/views/unregistered/feedback.php">FEEDBACK</a></li>
              <li><a href="../app/views/unregistered/log_in.php">LOG IN</a></li>
              <li><a href="../app/views/unregistered/sign_up.php">SIGN UP</a></li>
          </ul>
      </nav>
      </div>
      <div class="home-watermark_and_started-div">
        <div class = "watermark">TRAVO.lk</div>
        <br>
        <button type="button" name="button" class="get_started-btn" onclick="window.location.href='../app/views/unregistered/log_in.php'">GET STARTED</button>
      </div>
    </section>

<!--__________________about_us________________-->

    <section class="about_us-section" id="about_us-section">
      <h1 class="h1-about_us">ABOUT US</h1>
      <div class="div-about_us">
        <h3 class="h3-about_us">Just one click to explore Taprobane...</h3>
        <img class="logo-about_us" src="http://localhost/TravoMVC/public/images/Logo/travo.png" alt="TRAVO.lk">
        <p class="p-about_us">Travo.lk was recently launched in the travel management industry just for you who are interested in visiting Sri Lanka . We are a one-stop shop which is covering all your needs while providing a wonderful vacation as well as a safe journey for all domestic travellers. <br><br>Through our travel Management Service, we are committed to protecting the businesses and travelers who engage with us from savings, efficiency, and safety from Point Pedro to Devendra Point.<p>
      </div>
      <br>
      <hr class="hr-about_us">
<!--.............image gallery <- about us...............-->
      <div onclick="prev()" class="prev_btn-about_us">
         <img class="left_arrow-about_us" src="http://localhost/TravoMVC/public/images/icons/left-arrow.png" alt="LEFT">
      </div>
      <div onclick="next()" class="next_btn-about_us">
        <img class="right_arrow-about_us" src="http://localhost/TravoMVC/public/images/icons/right-arrow.png" alt="RIGHT">
      </div>
      <div class="gallary-about_us" id="gallary">
        <div class="slide-about_us">
          <img src="http://localhost/TravoMVC/public/images/sample_images/for_homes/1.jpg" alt="">
        </div>
        <div class="slide-about_us">
          <img src="http://localhost/TravoMVC/public/images/sample_images/for_homes/2.jpg" alt="">
        </div>
        <div class="slide-about_us">
          <img src="http://localhost/TravoMVC/public/images/sample_images/for_homes/3.jpg" alt="">
        </div>
        <div class="slide-about_us">
          <img src="http://localhost/TravoMVC/public/images/sample_images/for_homes/4.jpg" alt="">
        </div>
        <div class="slide-about_us">
          <img src="http://localhost/TravoMVC/public/images/sample_images/for_homes/5.jpg" alt="">
        </div>
        <div class="slide-about_us">
          <img src="http://localhost/TravoMVC/public/images/sample_images/for_homes/6.jpg" alt="">
        </div>
        <div class="slide-about_us">
          <img src="http://localhost/TravoMVC/public/images/sample_images/for_homes/7.jpg" alt="">
        </div>
        <div class="slide-about_us">
          <img src="http://localhost/TravoMVC/public/images/sample_images/for_homes/8.jpg" alt="">
        </div>
        <div class="slide-about_us">
          <img src="http://localhost/TravoMVC/public/images/sample_images/for_homes/9.jpg" alt="">
        </div>
        <div class="slide-about_us">
          <img src="http://localhost/TravoMVC/public/images/sample_images/for_homes/10.jpg" alt="">
        </div>
        <div class="slide-about_us">
          <img src="http://localhost/TravoMVC/public/images/sample_images/for_homes/11.jpg" alt="">
        </div>
        <div class="slide-about_us">
          <img src="http://localhost/TravoMVC/public/images/sample_images/for_homes/12.jpg" alt="">
        </div>
        <div class="slide-about_us">
          <img src="http://localhost/TravoMVC/public/images/sample_images/for_homes/13.jpg" alt="">
        </div>
      </div>
<!--.............END image gallery <- about us...............-->
      <hr class="hr-about_us">
    </section>
<!--__________________END about_us________________-->


<section class="contact_us">
  <br>
  <div class="phone_mail_contact_us">
      <div class="mail_div_contact_us">
        <img class="mail_img_contact_us" src="http://localhost/TravoMVC/public/images/icons/mail.png" alt="MAIL">
        <p class="mail_contact_us"> Travolkl2021@gmail.com </p>
      </div>
      <div class="phone_div_contact_us">
        <img class="phone_img_contact_us" src="http://localhost/TravoMVC/public/images/icons/phone.png" alt="MAIL">
        <p class="phone_contact_us">0716113769</p>
      </div>
    </div>
    <div class="social_media-contact_us">
      <img class="social_media_img-about_us" src="http://localhost/TravoMVC/public/images/icons/facebook.png" alt="FACEBOOK">
      <img class="social_media_img-about_us" src="http://localhost/TravoMVC/public/images/icons/twitter.png" alt="TWITTER">
      <img class="social_media_img-about_us" src="http://localhost/TravoMVC/public/images/icons/insta.png" alt="INSTAGRAM">
      <img class="social_media_img-about_us" src="http://localhost/TravoMVC/public/images/icons/linkedin.png" alt="LINKEDIN">
    </div>
    <br/>
    <div class="copyrights_contact_us">
      <p class="">© Copyrights 2021 IS23. All rights reserved</p>
    </div>
  </section>


  <script type="text/javascript" src="http://localhost/TravoMVC/public/script/index.js"></script>
  </body>
</html>
