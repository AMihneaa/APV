<!DOCTYPE html>

<?php require_once "controllerUserData.php"; ?>
<html lang="ro">
<head>
  <!-- Meta Tags -->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Laralink">
  <!-- Site Title -->
  <title>Contact | ExpoJobs 2023</title>
  <link rel="stylesheet" href="../assets/css/plugins/fontawesome.min.css">
  <link rel="stylesheet" href="../assets/css/plugins/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/plugins/lightgallery.min.css">
  <link rel="stylesheet" href="../assets/css/plugins/slick.css">
  <link rel="stylesheet" href="../assets/css/plugins/animate.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <!-- Theme Style -->
  <link rel="stylesheet" href="../assets/css/theme_12.css">
</head>

<body>
  <!-- Start Preloader -->
  <div class="cs-preloader cs-accent_color cs-white_bg">
    <div class="cs-preloader_bg cs-center cs-accent_4_bg">
      <div class="cs-preloader_in cs-accent_15_border">
        <img src="../assets/img/event-conference/logo.svg" alt="Logo">
      </div>
    </div>
  </div>
  <!-- End Preloader -->
  <!-- Start Header Section -->
    <?php require_once 'layouts/header.php';?>
 
  <!-- End Header Section -->
  <div class="cs-height_90 cs-height_lg_80"></div>
  <!-- Start Hero Seciton -->
  <div class="cs-flying_img_wrap cs-style5 cs-parallax">
    <img src="../assets/img/event-conference/flying-img1.png" alt="Flying image" class="cs-flying_img cs-posiiton1 cs-to_up">
    <img src="../assets/img/event-conference/flying-img2.png" alt="Flying image" class="cs-flying_img cs-posiiton2 cs-to_up">
    <div class="cs-hero cs-style12 cs-type1 cs-center text-center cs-gradient_overlay_60 cs-parallax cs-hobble" data-src="../assets/img/event-conference/hero-img.jpg">
      <div class="cs-hero_pattern cs-hover_layer3">
        <div class="cs-hero_pattern_in cs-bg_parallax" data-src="../assets/img/event-conference/hero-pattern.png"></div>
      </div>
      <div class="container">
        <div class="cs-hero_text">
          <h1 class="cs-hero_title cs-extra_bold cs-white text-uppercase">Contact</h1>
          <div class="cs-height_10 cs-height_lg_0"></div>
          <ol class="cs-breadcrumb cs-style2 cs-type1 cs-white_80 cs-medium">
            <li class="cs-breadcrumb_item"><a href="index.html" class="cs-white">Home</a></li>
            <li class="cs-breadcrumb_item">Contact</li>
          </ol>
        </div>
      </div>
      <div class="cs-hero_img cs-bg" data-src="../assets/img/creative-agency/hero-img.jpg">
        <div class="cs-hero_img_circle"></div>
      </div>
    </div>
  </div>
  <!-- End Hero Seciton -->

  <!-- Start Contact -->
  <div id="next_section">
    <div class="cs-height_140 cs-height_lg_80"></div>
    <div class="container">
      <div class="cs-contact cs-style2 cs-white_bg">
        <div class="cs-contact_left cs-accent_bg position-relative">
          <div class="cs-contact_info_wrap">
            <h4 class="cs-contact_title cs-semi_bold cs-white">Contact Information</h4>
            <div class="cs-height_10 cs-height_lg_10"></div>
            <ul class="cs-contact_info cs-mp0 cs-white">
              <li><i class="fas fa-phone-alt"></i>+123 4567 890 123</li>
              <li><i class="far fa-address-book"></i>yourmail@email.com</li>
              <li><i class="fas fa-fax"></i>+1 323 555 1234</li>
              <li><i class="fas fa-map-marker-alt"></i>Your location, your street, your <br>house number</li>
            </ul>
          </div>
          <div class="cs-social_btns_wrap">
            <div class="cs-social_btns cs-style1 cs-white_50">
              <a href="#" class="cs-accent_color_2_hover"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="cs-accent_color_2_hover"><i class="fab fa-twitter"></i></a>
              <a href="#" class="cs-accent_color_2_hover"><i class="fab fa-instagram"></i></a>
              <a href="#" class="cs-accent_color_2_hover"><i class="fab fa-pinterest-p"></i></a>
            </div>
          </div>
          <div class="cs-circle cs-accent_60_bg_2"></div>
        </div>
        <div class="cs-contact_right cs-accent_10_bg">
          <h4 class="cs-contact_title cs-semi_bold">Get In Touch</h4>
          <div class="cs-height_10 cs-height_lg_10"></div>
          
              <form action="register.php"class="cs-contact_form" method="POST" autocomplete="">
                                 <?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                                    <div class="row cs-row_gap_20">
       
                        <input class="cs-form_field cs-white_bg cs-accent_30_border cs-primary_color"  type="text" name="name" placeholder="Nume" required value="<?php echo $name ?>">
               
                        <input type="phone" class="cs-form_field cs-white_bg cs-accent_30_border cs-primary_color" placeholder="Telefon" name="phone" required style="margin-top: 1rem;">
               
                        <input  class="cs-form_field cs-white_bg cs-accent_30_border cs-primary_color"  type="email" name="email" placeholder="E-mail" required value="<?php echo $email ?>" style="margin-top: 1rem;">
                    
                 
                        <input  class="cs-form_field cs-white_bg cs-accent_30_border cs-primary_color"  type="password" name="password" placeholder="Parola" required style="margin-top: 1rem;">
                   
                        <input class="cs-form_field cs-white_bg cs-accent_30_border cs-primary_color" type="password" name="cpassword" placeholder="Confirmare parola" required style="margin-top: 1rem;">
                  
                        <input  class="cs-form_field cs-white_bg cs-accent_30_border cs-primary_color"  type="submit" name="signup" value="Signup" style="margin-top: 1rem;">
               
                    <div class="link login-link text-center" style="margin-top: 1rem;">Ai deja cont? <a href="login.php">Loghează-te aici</a></div>
                </form>
                            </form>
        </div>
      </div>
    </div>
    <div class="cs-height_140 cs-height_lg_80"></div>
  </div>
  <!-- End Portfolio -->

  <!-- Start Footer Section -->
 <?php require_once 'layouts/footer.php';?>
  <!-- End Footer Section -->

  <!-- Start Video Popup -->
  <div class="cs-video_popup">
    <div class="cs-video_popup_overlay"></div>
    <div class="cs-video_popup_content">
      <div class="cs-video_popup_layer"></div>
      <div class="cs-video_popup_container">
        <div class="cs-video_popup_align">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="about:blank"></iframe>
          </div>
        </div>
        <div class="cs-video_popup_close"></div>
      </div>
    </div>
  </div>
  <!-- End Video Popup -->

  <!-- Script -->
  <script src="../assets/js/plugins/jquery-3.6.0.min.js"></script>
  <script src="../assets/js/plugins/isotope.pkg.min.js"></script>
  <script src="../assets/js/plugins/jquery.slick.min.js"></script>
  <script src="../assets/js/plugins/lightgallery.min.js"></script>
  <script src="../assets/js/plugins/jquery.counter.min.js"></script>
  <script src="../assets/js/plugins/wow.min.js"></script>
  <script src="../assets/js/main.js"></script>
</body>
</html>