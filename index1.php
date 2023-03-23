<!DOCTYPE html>

<?php require_once "controllerUserData.php"; ?>

<?php require_once "verificare_introducereotp.php";?>

<html lang="ro">
<head>
     <title>Aleargă pentru viaţă </title>
     
 <!-- Meta Tags -->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Laralink">
  
  
  <!-- Site Title -->
 
  <link rel="stylesheet" href="assets/css/plugins/fontawesome.min.css">
  <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/plugins/lightgallery.min.css">
  <link rel="stylesheet" href="assets/css/plugins/slick.css">
  <link rel="stylesheet" href="assets/css/plugins/animate.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- Theme Style -->
  <link rel="stylesheet" href="assets/css/theme_12.css">
  <link rel="stylesheet" href="assets/css/modificari.css">
  
  <link rel="icon" type="image/x-icon" href="/assets/img/event-conference/apv.ico">

</head>
<body>
  <!-- Start Preloader -->
  <div class="cs-preloader cs-accent_color cs-white_bg">
    <div class="cs-preloader_bg cs-center cs-accent_4_bg">
      <div class="cs-preloader_in cs-accent_15_border" style="zoom:2">
        <img src="assets/img/event-conference/logo.png" alt="Logo" >
      </div>
    </div>
  </div>
  <!-- End Preloader -->
  <!-- Start Header Section -->
  
<header class="cs-site_header cs-style1 cs-sticky-header cs-primary_font" >
    <div class="cs-main_header">
      <div class="container">
        <div class="cs-main_header_in">
          <div class="cs-main_header_left">
            <div class="cs-nav">
              <ul class="cs-nav_list">
                </li>
                                <li class="menu-item-has-children"><a href="about.php">Despre</a>
                  <ul>
                    <li><a href="about.php/#aboutstart">Ce este Aleargă Pentru Viaţă?</a></li>
                
                    <li><a href="team.php">Echipă</a></li>
                    <li><a href="past.php">Ediţii precedente</a></li>
                     <li><a href="media.php">Galerie Foto</a></li>
                  </ul>
                </li>
        
               <li class="menu-item-has-children"><a href="#curse">Curse</a>
                  <ul>
                    <li><a href="cursatest.php">Kids’ Race</a></li>
                    <li><a href="cursatest.php">10-16 Fete</a></li>
                    <li><a href="cursatest.php">10-16 Baieti </a></li>
                     <li><a href="cursatest.php">16-35 ani Masculin</a></li>
                       <li><a href="cursatest.php">Kids’ Race</a></li>
                    <li><a href="cursatest.php">Cursa All for One</a></li>
                    <li><a href="cursatest.php">35+ Masculin</a></li>
                     <li><a href="cursatest.php">35+ Feminin</a></li>
                  </ul>
                </li>
                <li class="menu-item-has-children"><a href="contact.php">Cauza</a>
                <li class="menu-item-has-children"><a href="contact.php">FAQs</a>
                <li class="menu-item-has-children"><a href="#contact">Contact</a>
               
                </li>
           </ul>
            </div>
          </div>
          <div class="cs-main_header_center">

                
      
           
            <a class="cs-site_branding zoomprincipal" href="index.php"><img src="../assets/img/event-conference/logo.png" alt=""></a>
          </div>
          <div class="cs-main_header_right">
   
                   <div class="cs-social_btns cs-style1" style="margin-right:3rem;" >
                        <a href="https://www.facebook.com/AleargaPentruViata" target="_blank"><i class="fab fa-facebook"></i></a>
                           <a href="https://www.youtube.com/@lsebucuresti" target="_blank"><i class="fab fa-youtube" ></i></a>
              <a href="https://www.instagram.com/aleargapentruviata.lse/" target="_blank"><i class="fab fa-instagram"></i></a>
           
             
            </div>
            
            
              <div class="cs-action_box">
           
      
              </div>
              
                         
                                     <?php 

if( $_SESSION['email']){
  echo'  <a href="#" onclick="logoutphp()"  class="cs-toolbox_btn cs-accent_bg_2 cs-white_hover cs-accent_bg_hover cs-smoth_scroll" ><span class="cs-btn_text">Deconecteaza-te</span></a>';
}
else echo'  <a href="#pricing"  class="cs-toolbox_btn cs-accent_bg_2 cs-white_hover cs-accent_bg_hover cs-smoth_scroll" ><span class="cs-btn_text">Inscriere</span></a>';
?>
              
               <script>
  
  function linken(){
      var a = "en"+location.pathname;
      location.href=a;
  }
  function inscriere(){
      location.href="pricing.php";
  } 
  function inscrierephp(){
      location.href="register.php";
  }
   function logoutphp(){
      location.href="logout-user.php";
  }
  </script>
  
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  



  <!-- End Header Section -->
  
  

  
  
  <div class="cs-height_90 cs-height_lg_80"></div>
  <!-- Start Hero Seciton -->
  <div class="cs-flying_img_wrap cs-style5 cs-parallax imagprinc" >
      
    <img src="../assets/img/event-conference/flying-img1.png" alt="Flying image" class="cs-flying_img cs-posiiton1 cs-to_up">
    <img src="../assets/img/event-conference/flying-img2.png" alt="Flying image" class="cs-flying_img cs-posiiton2 cs-to_up">
    
    <div class="cs-hero cs-style12 cs-center text-center cs-parallax cs-hobble" data-src="../assets/img/event-conference/hero-img.jpg">
        
      <div class="cs-hero_pattern cs-hover_layer3">
        <div class="cs-hero_pattern_in cs-bg_parallax" data-src="../assets/img/event-conference/hero-pattern.png">
            
                <h1 class="cs-hero_title cs-extra_bold cs-white titluimag "> 
           
            Aleargă Pentru Viaţă
            </h1>
            
        </div>
      </div>
      <div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
          
        <div class="cs-hero_text">
                
          <div class="cs-center pozitionarevideo" >
              
            <a href="https://www.youtube.com/embed/eoFqqLEIvQY?autoplay=1" class="cs-player_btn cs-style1 cs-center cs-video_open cs-white cs-accent_bg_2 cs-accent_color_hover cs-accent_bg_2_hover">
              <span class="cs-player_btn_in cs-center cs-white"><i class="fas fa-play"></i></span>
              <span class="cs-video_animaiton cs-center cs-accent_border_2">
                <span><span></span></span>
              </span>
            </a>
          </div>
      
        </div>
      </div>
      <div class="cs-hero_img cs-bg" data-src="../assets/img/creative-agency/hero-img.jpg">
        <div class="cs-hero_img_circle"></div>
      </div>
    </div>
  </div>
  <!-- End Hero Seciton -->

  <!-- Start Counter -->
  <div class="container zoom6">
      
    <div class="cs-counter_4_wrap cs-accent_bg_2 cs-parallax">
      <div class="cs-counter_4_wrap_in cs-bg_parallax" data-src="../assets/img/event-conference/counter_bg.png">
 <div class="cs-countdown  cs-style4 text-center" data-countdate="2023-05-06T00:00:00">
          <div class="cs-counter cs-style4 text-center ">
            <h3 id="cs-count-days" class="cs-counter_number cs-extra_bold cs-white"></h3>
            <div class="cs-counter_seperator cs-accent_bg"></div>
            <div class="cs-counter_title cs-medium text-uppercase cs-white cs-primary_font">Zile</div>
            </div>
            </div>
          <div class="cs-countdown  cs-style4 text-center" data-countdate="2023-05-06T00:00:00">
          <div class="cs-counter cs-style4 text-center ">
            <h3 id="cs-count-hours" class="cs-counter_number cs-extra_bold cs-white"></h3>
            <div class="cs-counter_seperator cs-accent_bg"></div>
            <div class="cs-counter_title cs-medium text-uppercase cs-white cs-primary_font">Ore</div>
            </div>
            </div>
         <div class="cs-countdown  cs-style4 text-center" data-countdate="2023-05-06T00:00:00">
          <div class="cs-counter cs-style4 text-center ">
            <h3 id="cs-count-minutes" class="cs-counter_number cs-extra_bold cs-white"></h3>
            <div class="cs-counter_seperator cs-accent_bg"></div>
            <div class="cs-counter_title cs-medium text-uppercase cs-white cs-primary_font">Minute</div>
            </div>
            </div>
           <div class="cs-countdown  cs-style4 text-center"data-countdate="2023-05-06T00:00:00">
          <div class="cs-counter cs-style4 text-center ">
            <h3 id="cs-count-seconds" class="cs-counter_number cs-extra_bold cs-white"></h3>
            <div class="cs-counter_seperator cs-accent_bg"></div>
            <div class="cs-counter_title cs-medium text-uppercase cs-white cs-primary_font">Secunde</div>
            </div>
            </div>
          </div>
        </div><!-- .cs-countdown -->
    </div>
  </div>
  <div class="cs-height_140 cs-height_lg_75"></div>
  <!-- End Counter -->
       
  <!-- Start About Seciton -->
  <div class="container">
    <div class="row">
      <div class="col-lg-5 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
        <div class="cs-vertical_middle">
          <div class="cs-vertical_middle_in">
            <div class="cs-text_box cs-style1 cs-type1">
              <div class="cs-text_box_subtitle cs-medium cs-accent_color">DESPRE APV</div>
              <h2 class="cs-text_box_title text-uppercase cs-bold"> Aleargă pentru Viaţă, <br>cros caritabil<h2 class="cs-text_box_title text-uppercase cs-bold"> <br> O tradiție de 13 ani</h2></h2>
              <div class="cs-height_35 cs-height_lg_25"></div>
              <div class="cs-text_box_text">Text - Crosul caritabil “Aleargă Pentru Viață” este cea mai mare competiție sportivă din București organizată exclusiv de studenți. își propune ca fiecare alergător care trece linia de sosire să trăiască o experiență de neuitat, îmbinând astfel mișcarea cu facerea unui bine.
<p style="margin-top:1rem;">Află mai multe despre campania noastră!
</p>
</div>
              <div class="cs-height_35 cs-height_lg_25"></div>
              <div class="cs-text_icon_box">
                <div class="cs-text_box_icon cs-center cs-accent_color cs-accent_10_bg">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="17px" height="22px">
                    <path fill-rule="evenodd" fill="currentColor" d="M11.644,18.318 C10.879,19.313 10.013,20.439 9.023,21.741 C8.900,21.904 8.706,21.999 8.500,21.999 C8.294,21.999 8.100,21.904 7.977,21.741 C6.981,20.432 6.111,19.302 5.343,18.305 C0.920,12.557 -0.000,11.360 -0.000,8.378 C-0.000,3.757 3.813,-0.001 8.500,-0.001 C13.187,-0.001 17.000,3.757 17.000,8.378 C17.000,11.355 16.077,12.554 11.644,18.318 ZM8.500,1.287 C4.534,1.287 1.308,4.468 1.308,8.378 C1.308,10.926 2.083,11.934 6.385,17.525 C7.016,18.346 7.717,19.255 8.500,20.281 C9.277,19.261 9.974,18.356 10.602,17.541 C14.915,11.933 15.692,10.921 15.692,8.378 C15.692,4.468 12.466,1.287 8.500,1.287 ZM8.500,12.890 C5.976,12.890 3.923,10.866 3.923,8.378 C3.923,5.890 5.976,3.866 8.500,3.866 C11.024,3.866 13.077,5.890 13.077,8.378 C13.077,10.866 11.024,12.890 8.500,12.890 ZM8.500,5.155 C6.697,5.155 5.231,6.601 5.231,8.378 C5.231,10.155 6.697,11.600 8.500,11.600 C10.303,11.600 11.769,10.155 11.769,8.378 C11.769,6.601 10.303,5.155 8.500,5.155 Z"/>
                  </svg>
                </div>
                <h3 class="cs-text_box_icon_title">Rectoratul UPB</h3>
              </div>
              <div class="cs-height_45 cs-height_lg_30"></div>
              <a href="#pricing" class="cs-btn cs-style1 cs-btn_lg cs-medium text_uppercase cs-primary_font cs-accent_bg_2 cs-accent_border_2 cs-white cs-accent_bg_hover cs-white_hover cs-accent_border_hover cs-smoth_scroll">INSCRIERE </a>
            </div>
          </div>
        </div>
      </div><!-- .col -->
      <div class="col-lg-6 offset-lg-1 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
        <div class="cs-right_full_width">
          <div class="cs-height_0 cs-height_lg_50"></div>
          <div class="cs-image_box cs-style3 cs-type3 cs-parallax">
            <div class="cs-image_box_img"><img src="../assets/img/event-conference/about.png" alt="About Image"></div>
            <div class="cs-image_box_text cs-to_up cs-accent_color">
              <div class="cs-image_box_text_in">
                <div class="cs-image_box_title cs-extra_bold cs-white cs-primary_font">6</div>
                <h2 class="cs-image_box_subtitle cs-medium cs-white cs-medium">mai 2023</h2>
              </div>
            </div>
            <div class="cs-image_box_pattern cs-to_left cs-accent_color_2"></div>
          </div>
        </div>
      </div><!-- .col -->
    </div>
  </div>
  <div class="cs-height_135 cs-height_lg_80"></div>
  <!-- End About Seciton -->
  
  <!-- Start Schedule Section -->
  <div id="curse"></div>
   <div class="cs-accent_4_bg cs-flying_img_wrap cs-style6 cs-parallax">
    <img src="../assets/img/event-conference/flying-img3.png" alt="Flying image" class="cs-flying_img cs-posiiton1 cs-to_up">
    <img src="../assets/img/event-conference/flying-img4.png" alt="Flying image" class="cs-flying_img cs-posiiton2 cs-to_up">
    <div class="cs-height_135 cs-height_lg_75"></div>
    <div class="container wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
      <div class="cs-section_heading cs-style2 cs-size3 text-center text-uppercase">
        <h2 class="cs-section_title cs-extra_bold">Curse</h2>
      </div>
      <div class="cs-height_70 cs-height_lg_50"></div>
    </div>
    <div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
      <div class="cs-tabs cs-style2 cs-fade_tabs">
        <ul class="cs-tab_links cs-style5 cs-mp0 text-uppercase cs-accent_bg_2">
          <li class="active">
            <a href="#tab_one" class="cs-accent_bg_hover">
              <h3 class="cs-semi_bold cs-white">Copii</h3>
              <p class="cs-white">< 10 ani</p>
            </a>
          </li>
          <li>
            <a href="#tab_two" class="cs-accent_bg_hover">
              <h3 class="cs-semi_bold cs-white">Fete</h3>
              <p class="cs-white">10-16 ani</p>
            </a>
          </li>
          <li>
            <a href="#tab_three" class="cs-accent_bg_hover">
              <h3 class="cs-semi_bold cs-white">Baieti</h3>
              <p class="cs-white">10-16 ani</p>
            </a>
          </li>
          <li>
            <a href="#tab_four" class="cs-accent_bg_hover">
              <h3 class="cs-semi_bold cs-white">Feminin</h3>
              <p class="cs-white">16-35 ani</p>
            </a>
          </li>
        
        
          <li>
            <a href="#tab_five" class="cs-accent_bg_hover">
              <h3 class="cs-semi_bold cs-white">Masculin</h3>
              <p class="cs-white">16-35 ani</p>
            </a>
          </li>
          
          
            
          <li>
            <a href="#tab_six" class="cs-accent_bg_hover">
              <h3 class="cs-semi_bold cs-white">All for One</h3>
              <p class="cs-white"></p>
            </a>
          </li>
                     <li>
            <a href="#tab_seven" class="cs-accent_bg_hover">
              <h3 class="cs-semi_bold cs-white">Feminin</h3>
              <p class="cs-white">35+ ani</p>
            </a>
          </li>
          <li>
            <a href="#tab_eight" class="cs-accent_bg_hover">
              <h3 class="cs-semi_bold cs-white">Masculin</h3>
              <p class="cs-white">35+ ani</p>
            </a>
          </li>
          
          
        </ul>
        <div class="cs-tab_content">
          <div id="tab_one" class="cs-tab active">
         
            <div class="cs-event cs-style1 cs-white_bg">
              <h2 class="cs-event_title text-uppercase cs-semi_bold">Ora de start: 11:10</h2>
              <h2 class="cs-event_title text-uppercase cs-semi_bold">Distanța: 500m</h2>
              <div class="cs-posted_by cs-primary_font text-uppercase cs-primary_color">
                
              
              </div>
              <button class="cs-event_toggle_btn cs-center cs-accent_color cs-accent_10_bg cs-accent_30_bg_hover active"><i class="fas fa-angle-down"></i></button>
              <div class="cs-event_toggle_body active">
                <div class="cs-event_details" style="margin-bottom:2.5rem;">  Cursa va avea loc în Rectoratul UPB. Vezi mai jos harta traseului!
                <p> Pentru mai multe informații consultați <a href="info.php" style=" font-weight: bold;">regulamentul </a></p>
</div>
                <iframe src="https://www.google.com/maps/d/embed?mid=19XrKFmzRQIYKnZ7VuHIsWQKeMSQaPLQ&ehbc=2E312F" width="500" height="400" ></iframe>
                <div class="cs-event_location">
                    
                    
                  <div class="cs-event_location_icon cs-center cs-accent_color cs-accent_10_bg">
                      
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="17px" height="22px">
                      <path fill-rule="evenodd" fill="currentColor" d="M11.644,18.318 C10.879,19.313 10.013,20.439 9.023,21.741 C8.900,21.904 8.706,21.999 8.500,21.999 C8.294,21.999 8.100,21.904 7.977,21.741 C6.981,20.432 6.111,19.302 5.343,18.305 C0.920,12.557 -0.000,11.360 -0.000,8.378 C-0.000,3.757 3.813,-0.001 8.500,-0.001 C13.187,-0.001 17.000,3.757 17.000,8.378 C17.000,11.355 16.077,12.554 11.644,18.318 ZM8.500,1.287 C4.534,1.287 1.308,4.468 1.308,8.378 C1.308,10.926 2.083,11.934 6.385,17.525 C7.016,18.346 7.717,19.255 8.500,20.281 C9.277,19.261 9.974,18.356 10.602,17.541 C14.915,11.933 15.692,10.921 15.692,8.378 C15.692,4.468 12.466,1.287 8.500,1.287 ZM8.500,12.890 C5.976,12.890 3.923,10.866 3.923,8.378 C3.923,5.890 5.976,3.866 8.500,3.866 C11.024,3.866 13.077,5.890 13.077,8.378 C13.077,10.866 11.024,12.890 8.500,12.890 ZM8.500,5.155 C6.697,5.155 5.231,6.601 5.231,8.378 C5.231,10.155 6.697,11.600 8.500,11.600 C10.303,11.600 11.769,10.155 11.769,8.378 C11.769,6.601 10.303,5.155 8.500,5.155 Z"></path>
                    </svg>
                  </div>
                  <h3 class="cs-event_location_title">Rectoratul UPB</h3>
                </div>
              </div>
            </div>
          
          </div><!-- .cs-tab -->
          
          
           <div id="tab_two" class="cs-tab">
         
            <div class="cs-event cs-style1 cs-white_bg">
              <div class="cs-avatar_group">
                <div class="cs-avatar cs-accent_border"><img src="../assets/img/event-conference/avatar2.png" alt="Avatar"></div>
                <div class="cs-avatar cs-accent_border"><img src="../assets/img/event-conference/avatar3.png" alt="Avatar"></div>
              </div>
              <div class="cs-event_time text-uppercase cs-primary_color cs-primary_font">11:00 am - 12:00 am</div>
              <h2 class="cs-event_title text-uppercase cs-semi_bold">Digital world busines Conference 2022 Introduction</h2>
              <div class="cs-posted_by cs-primary_font text-uppercase cs-primary_color">
                By 
                <span><span class="cs-medium cs-accent_color">Jhone Smith</span> Co-founder</span>
                <span><span class="cs-medium cs-accent_color">Adward Maya</span> Founder</span>
              </div>
              <button class="cs-event_toggle_btn cs-center cs-accent_color cs-accent_10_bg cs-accent_30_bg_hover active"><i class="fas fa-angle-down"></i></button>
              <div class="cs-event_toggle_body active">
                <div class="cs-event_details">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</div>
                <div class="cs-event_location">
                  <div class="cs-event_location_icon cs-center cs-accent_color cs-accent_10_bg">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="17px" height="22px">
                      <path fill-rule="evenodd" fill="currentColor" d="M11.644,18.318 C10.879,19.313 10.013,20.439 9.023,21.741 C8.900,21.904 8.706,21.999 8.500,21.999 C8.294,21.999 8.100,21.904 7.977,21.741 C6.981,20.432 6.111,19.302 5.343,18.305 C0.920,12.557 -0.000,11.360 -0.000,8.378 C-0.000,3.757 3.813,-0.001 8.500,-0.001 C13.187,-0.001 17.000,3.757 17.000,8.378 C17.000,11.355 16.077,12.554 11.644,18.318 ZM8.500,1.287 C4.534,1.287 1.308,4.468 1.308,8.378 C1.308,10.926 2.083,11.934 6.385,17.525 C7.016,18.346 7.717,19.255 8.500,20.281 C9.277,19.261 9.974,18.356 10.602,17.541 C14.915,11.933 15.692,10.921 15.692,8.378 C15.692,4.468 12.466,1.287 8.500,1.287 ZM8.500,12.890 C5.976,12.890 3.923,10.866 3.923,8.378 C3.923,5.890 5.976,3.866 8.500,3.866 C11.024,3.866 13.077,5.890 13.077,8.378 C13.077,10.866 11.024,12.890 8.500,12.890 ZM8.500,5.155 C6.697,5.155 5.231,6.601 5.231,8.378 C5.231,10.155 6.697,11.600 8.500,11.600 C10.303,11.600 11.769,10.155 11.769,8.378 C11.769,6.601 10.303,5.155 8.500,5.155 Z"></path>
                    </svg>
                  </div>
                  <h3 class="cs-event_location_title">503 Old Buffalo Street, New York, USA</h3>
                </div>
              </div>
            </div>
          
          </div><!-- .cs-tab -->
          
           <div id="tab_three" class="cs-tab">
         
            <div class="cs-event cs-style1 cs-white_bg">
              <div class="cs-avatar_group">
                <div class="cs-avatar cs-accent_border"><img src="../assets/img/event-conference/avatar2.png" alt="Avatar"></div>
                <div class="cs-avatar cs-accent_border"><img src="../assets/img/event-conference/avatar3.png" alt="Avatar"></div>
              </div>
              <div class="cs-event_time text-uppercase cs-primary_color cs-primary_font">11:00 am - 12:00 am</div>
              <h2 class="cs-event_title text-uppercase cs-semi_bold">Digital world busines Conference 2022 Introduction</h2>
              <div class="cs-posted_by cs-primary_font text-uppercase cs-primary_color">
                By 
                <span><span class="cs-medium cs-accent_color">Jhone Smith</span> Co-founder</span>
                <span><span class="cs-medium cs-accent_color">Adward Maya</span> Founder</span>
              </div>
              <button class="cs-event_toggle_btn cs-center cs-accent_color cs-accent_10_bg cs-accent_30_bg_hover active"><i class="fas fa-angle-down"></i></button>
              <div class="cs-event_toggle_body active">
                <div class="cs-event_details">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</div>
                <div class="cs-event_location">
                  <div class="cs-event_location_icon cs-center cs-accent_color cs-accent_10_bg">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="17px" height="22px">
                      <path fill-rule="evenodd" fill="currentColor" d="M11.644,18.318 C10.879,19.313 10.013,20.439 9.023,21.741 C8.900,21.904 8.706,21.999 8.500,21.999 C8.294,21.999 8.100,21.904 7.977,21.741 C6.981,20.432 6.111,19.302 5.343,18.305 C0.920,12.557 -0.000,11.360 -0.000,8.378 C-0.000,3.757 3.813,-0.001 8.500,-0.001 C13.187,-0.001 17.000,3.757 17.000,8.378 C17.000,11.355 16.077,12.554 11.644,18.318 ZM8.500,1.287 C4.534,1.287 1.308,4.468 1.308,8.378 C1.308,10.926 2.083,11.934 6.385,17.525 C7.016,18.346 7.717,19.255 8.500,20.281 C9.277,19.261 9.974,18.356 10.602,17.541 C14.915,11.933 15.692,10.921 15.692,8.378 C15.692,4.468 12.466,1.287 8.500,1.287 ZM8.500,12.890 C5.976,12.890 3.923,10.866 3.923,8.378 C3.923,5.890 5.976,3.866 8.500,3.866 C11.024,3.866 13.077,5.890 13.077,8.378 C13.077,10.866 11.024,12.890 8.500,12.890 ZM8.500,5.155 C6.697,5.155 5.231,6.601 5.231,8.378 C5.231,10.155 6.697,11.600 8.500,11.600 C10.303,11.600 11.769,10.155 11.769,8.378 C11.769,6.601 10.303,5.155 8.500,5.155 Z"></path>
                    </svg>
                  </div>
                  <h3 class="cs-event_location_title">503 Old Buffalo Street, New York, USA</h3>
                </div>
              </div>
            </div>
          
          </div><!-- .cs-tab -->
           <div id="tab_four" class="cs-tab">
         
            <div class="cs-event cs-style1 cs-white_bg">
              <div class="cs-avatar_group">
                <div class="cs-avatar cs-accent_border"><img src="../assets/img/event-conference/avatar2.png" alt="Avatar"></div>
                <div class="cs-avatar cs-accent_border"><img src="../assets/img/event-conference/avatar3.png" alt="Avatar"></div>
              </div>
              <div class="cs-event_time text-uppercase cs-primary_color cs-primary_font">11:00 am - 12:00 am</div>
              <h2 class="cs-event_title text-uppercase cs-semi_bold">Digital world busines Conference 2022 Introduction</h2>
              <div class="cs-posted_by cs-primary_font text-uppercase cs-primary_color">
                By 
                <span><span class="cs-medium cs-accent_color">Jhone Smith</span> Co-founder</span>
                <span><span class="cs-medium cs-accent_color">Adward Maya</span> Founder</span>
              </div>
              <button class="cs-event_toggle_btn cs-center cs-accent_color cs-accent_10_bg cs-accent_30_bg_hover active"><i class="fas fa-angle-down"></i></button>
              <div class="cs-event_toggle_body active">
                <div class="cs-event_details">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</div>
                <div class="cs-event_location">
                  <div class="cs-event_location_icon cs-center cs-accent_color cs-accent_10_bg">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="17px" height="22px">
                      <path fill-rule="evenodd" fill="currentColor" d="M11.644,18.318 C10.879,19.313 10.013,20.439 9.023,21.741 C8.900,21.904 8.706,21.999 8.500,21.999 C8.294,21.999 8.100,21.904 7.977,21.741 C6.981,20.432 6.111,19.302 5.343,18.305 C0.920,12.557 -0.000,11.360 -0.000,8.378 C-0.000,3.757 3.813,-0.001 8.500,-0.001 C13.187,-0.001 17.000,3.757 17.000,8.378 C17.000,11.355 16.077,12.554 11.644,18.318 ZM8.500,1.287 C4.534,1.287 1.308,4.468 1.308,8.378 C1.308,10.926 2.083,11.934 6.385,17.525 C7.016,18.346 7.717,19.255 8.500,20.281 C9.277,19.261 9.974,18.356 10.602,17.541 C14.915,11.933 15.692,10.921 15.692,8.378 C15.692,4.468 12.466,1.287 8.500,1.287 ZM8.500,12.890 C5.976,12.890 3.923,10.866 3.923,8.378 C3.923,5.890 5.976,3.866 8.500,3.866 C11.024,3.866 13.077,5.890 13.077,8.378 C13.077,10.866 11.024,12.890 8.500,12.890 ZM8.500,5.155 C6.697,5.155 5.231,6.601 5.231,8.378 C5.231,10.155 6.697,11.600 8.500,11.600 C10.303,11.600 11.769,10.155 11.769,8.378 C11.769,6.601 10.303,5.155 8.500,5.155 Z"></path>
                    </svg>
                  </div>
                  <h3 class="cs-event_location_title">503 Old Buffalo Street, New York, USA</h3>
                </div>
              </div>
            </div>
          
          </div><!-- .cs-tab -->
           <div id="tab_five" class="cs-tab">
         
            <div class="cs-event cs-style1 cs-white_bg">
              <div class="cs-avatar_group">
                <div class="cs-avatar cs-accent_border"><img src="../assets/img/event-conference/avatar2.png" alt="Avatar"></div>
                <div class="cs-avatar cs-accent_border"><img src="../assets/img/event-conference/avatar3.png" alt="Avatar"></div>
              </div>
              <div class="cs-event_time text-uppercase cs-primary_color cs-primary_font">11:00 am - 12:00 am</div>
              <h2 class="cs-event_title text-uppercase cs-semi_bold">Digital world busines Conference 2022 Introduction</h2>
              <div class="cs-posted_by cs-primary_font text-uppercase cs-primary_color">
                By 
                <span><span class="cs-medium cs-accent_color">Jhone Smith</span> Co-founder</span>
                <span><span class="cs-medium cs-accent_color">Adward Maya</span> Founder</span>
              </div>
              <button class="cs-event_toggle_btn cs-center cs-accent_color cs-accent_10_bg cs-accent_30_bg_hover active"><i class="fas fa-angle-down"></i></button>
              <div class="cs-event_toggle_body active">
                <div class="cs-event_details">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</div>
                <div class="cs-event_location">
                  <div class="cs-event_location_icon cs-center cs-accent_color cs-accent_10_bg">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="17px" height="22px">
                      <path fill-rule="evenodd" fill="currentColor" d="M11.644,18.318 C10.879,19.313 10.013,20.439 9.023,21.741 C8.900,21.904 8.706,21.999 8.500,21.999 C8.294,21.999 8.100,21.904 7.977,21.741 C6.981,20.432 6.111,19.302 5.343,18.305 C0.920,12.557 -0.000,11.360 -0.000,8.378 C-0.000,3.757 3.813,-0.001 8.500,-0.001 C13.187,-0.001 17.000,3.757 17.000,8.378 C17.000,11.355 16.077,12.554 11.644,18.318 ZM8.500,1.287 C4.534,1.287 1.308,4.468 1.308,8.378 C1.308,10.926 2.083,11.934 6.385,17.525 C7.016,18.346 7.717,19.255 8.500,20.281 C9.277,19.261 9.974,18.356 10.602,17.541 C14.915,11.933 15.692,10.921 15.692,8.378 C15.692,4.468 12.466,1.287 8.500,1.287 ZM8.500,12.890 C5.976,12.890 3.923,10.866 3.923,8.378 C3.923,5.890 5.976,3.866 8.500,3.866 C11.024,3.866 13.077,5.890 13.077,8.378 C13.077,10.866 11.024,12.890 8.500,12.890 ZM8.500,5.155 C6.697,5.155 5.231,6.601 5.231,8.378 C5.231,10.155 6.697,11.600 8.500,11.600 C10.303,11.600 11.769,10.155 11.769,8.378 C11.769,6.601 10.303,5.155 8.500,5.155 Z"></path>
                    </svg>
                  </div>
                  <h3 class="cs-event_location_title">503 Old Buffalo Street, New York, USA</h3>
                </div>
              </div>
            </div>
          
          </div><!-- .cs-tab -->
           <div id="tab_six" class="cs-tab">
         
            <div class="cs-event cs-style1 cs-white_bg">
              <div class="cs-avatar_group">
                <div class="cs-avatar cs-accent_border"><img src="../assets/img/event-conference/avatar2.png" alt="Avatar"></div>
                <div class="cs-avatar cs-accent_border"><img src="../assets/img/event-conference/avatar3.png" alt="Avatar"></div>
              </div>
              <div class="cs-event_time text-uppercase cs-primary_color cs-primary_font">11:00 am - 12:00 am</div>
              <h2 class="cs-event_title text-uppercase cs-semi_bold">Digital world busines Conference 2022 Introduction</h2>
              <div class="cs-posted_by cs-primary_font text-uppercase cs-primary_color">
                By 
                <span><span class="cs-medium cs-accent_color">Jhone Smith</span> Co-founder</span>
                <span><span class="cs-medium cs-accent_color">Adward Maya</span> Founder</span>
              </div>
              <button class="cs-event_toggle_btn cs-center cs-accent_color cs-accent_10_bg cs-accent_30_bg_hover active"><i class="fas fa-angle-down"></i></button>
              <div class="cs-event_toggle_body active">
                <div class="cs-event_details">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</div>
                <div class="cs-event_location">
                  <div class="cs-event_location_icon cs-center cs-accent_color cs-accent_10_bg">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="17px" height="22px">
                      <path fill-rule="evenodd" fill="currentColor" d="M11.644,18.318 C10.879,19.313 10.013,20.439 9.023,21.741 C8.900,21.904 8.706,21.999 8.500,21.999 C8.294,21.999 8.100,21.904 7.977,21.741 C6.981,20.432 6.111,19.302 5.343,18.305 C0.920,12.557 -0.000,11.360 -0.000,8.378 C-0.000,3.757 3.813,-0.001 8.500,-0.001 C13.187,-0.001 17.000,3.757 17.000,8.378 C17.000,11.355 16.077,12.554 11.644,18.318 ZM8.500,1.287 C4.534,1.287 1.308,4.468 1.308,8.378 C1.308,10.926 2.083,11.934 6.385,17.525 C7.016,18.346 7.717,19.255 8.500,20.281 C9.277,19.261 9.974,18.356 10.602,17.541 C14.915,11.933 15.692,10.921 15.692,8.378 C15.692,4.468 12.466,1.287 8.500,1.287 ZM8.500,12.890 C5.976,12.890 3.923,10.866 3.923,8.378 C3.923,5.890 5.976,3.866 8.500,3.866 C11.024,3.866 13.077,5.890 13.077,8.378 C13.077,10.866 11.024,12.890 8.500,12.890 ZM8.500,5.155 C6.697,5.155 5.231,6.601 5.231,8.378 C5.231,10.155 6.697,11.600 8.500,11.600 C10.303,11.600 11.769,10.155 11.769,8.378 C11.769,6.601 10.303,5.155 8.500,5.155 Z"></path>
                    </svg>
                  </div>
                  <h3 class="cs-event_location_title">503 Old Buffalo Street, New York, USA</h3>
                </div>
              </div>
            </div>
          
          </div><!-- .cs-tab -->
           <div id="tab_seven" class="cs-tab">
         
            <div class="cs-event cs-style1 cs-white_bg">
              <div class="cs-avatar_group">
                <div class="cs-avatar cs-accent_border"><img src="../assets/img/event-conference/avatar2.png" alt="Avatar"></div>
                <div class="cs-avatar cs-accent_border"><img src="../assets/img/event-conference/avatar3.png" alt="Avatar"></div>
              </div>
              <div class="cs-event_time text-uppercase cs-primary_color cs-primary_font">11:00 am - 12:00 am</div>
              <h2 class="cs-event_title text-uppercase cs-semi_bold">Digital world busines Conference 2022 Introduction</h2>
              <div class="cs-posted_by cs-primary_font text-uppercase cs-primary_color">
                By 
                <span><span class="cs-medium cs-accent_color">Jhone Smith</span> Co-founder</span>
                <span><span class="cs-medium cs-accent_color">Adward Maya</span> Founder</span>
              </div>
              <button class="cs-event_toggle_btn cs-center cs-accent_color cs-accent_10_bg cs-accent_30_bg_hover active"><i class="fas fa-angle-down"></i></button>
              <div class="cs-event_toggle_body active">
                <div class="cs-event_details">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</div>
                <div class="cs-event_location">
                  <div class="cs-event_location_icon cs-center cs-accent_color cs-accent_10_bg">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="17px" height="22px">
                      <path fill-rule="evenodd" fill="currentColor" d="M11.644,18.318 C10.879,19.313 10.013,20.439 9.023,21.741 C8.900,21.904 8.706,21.999 8.500,21.999 C8.294,21.999 8.100,21.904 7.977,21.741 C6.981,20.432 6.111,19.302 5.343,18.305 C0.920,12.557 -0.000,11.360 -0.000,8.378 C-0.000,3.757 3.813,-0.001 8.500,-0.001 C13.187,-0.001 17.000,3.757 17.000,8.378 C17.000,11.355 16.077,12.554 11.644,18.318 ZM8.500,1.287 C4.534,1.287 1.308,4.468 1.308,8.378 C1.308,10.926 2.083,11.934 6.385,17.525 C7.016,18.346 7.717,19.255 8.500,20.281 C9.277,19.261 9.974,18.356 10.602,17.541 C14.915,11.933 15.692,10.921 15.692,8.378 C15.692,4.468 12.466,1.287 8.500,1.287 ZM8.500,12.890 C5.976,12.890 3.923,10.866 3.923,8.378 C3.923,5.890 5.976,3.866 8.500,3.866 C11.024,3.866 13.077,5.890 13.077,8.378 C13.077,10.866 11.024,12.890 8.500,12.890 ZM8.500,5.155 C6.697,5.155 5.231,6.601 5.231,8.378 C5.231,10.155 6.697,11.600 8.500,11.600 C10.303,11.600 11.769,10.155 11.769,8.378 C11.769,6.601 10.303,5.155 8.500,5.155 Z"></path>
                    </svg>
                  </div>
                  <h3 class="cs-event_location_title">503 Old Buffalo Street, New York, USA</h3>
                </div>
              </div>
            </div>
          
          </div><!-- .cs-tab -->
          
           <div id="tab_eight" class="cs-tab">
         
            <div class="cs-event cs-style1 cs-white_bg">
              <div class="cs-avatar_group">
                <div class="cs-avatar cs-accent_border"><img src="../assets/img/event-conference/avatar2.png" alt="Avatar"></div>
                <div class="cs-avatar cs-accent_border"><img src="../assets/img/event-conference/avatar3.png" alt="Avatar"></div>
              </div>
              <div class="cs-event_time text-uppercase cs-primary_color cs-primary_font">11:00 am - 12:00 am</div>
              <h2 class="cs-event_title text-uppercase cs-semi_bold">Digital world busines Conference 2022 Introduction</h2>
              <div class="cs-posted_by cs-primary_font text-uppercase cs-primary_color">
                By 
                <span><span class="cs-medium cs-accent_color">Jhone Smith</span> Co-founder</span>
                <span><span class="cs-medium cs-accent_color">Adward Maya</span> Founder</span>
              </div>
              <button class="cs-event_toggle_btn cs-center cs-accent_color cs-accent_10_bg cs-accent_30_bg_hover active"><i class="fas fa-angle-down"></i></button>
              <div class="cs-event_toggle_body active">
                <div class="cs-event_details">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</div>
                <div class="cs-event_location">
                  <div class="cs-event_location_icon cs-center cs-accent_color cs-accent_10_bg">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="17px" height="22px">
                      <path fill-rule="evenodd" fill="currentColor" d="M11.644,18.318 C10.879,19.313 10.013,20.439 9.023,21.741 C8.900,21.904 8.706,21.999 8.500,21.999 C8.294,21.999 8.100,21.904 7.977,21.741 C6.981,20.432 6.111,19.302 5.343,18.305 C0.920,12.557 -0.000,11.360 -0.000,8.378 C-0.000,3.757 3.813,-0.001 8.500,-0.001 C13.187,-0.001 17.000,3.757 17.000,8.378 C17.000,11.355 16.077,12.554 11.644,18.318 ZM8.500,1.287 C4.534,1.287 1.308,4.468 1.308,8.378 C1.308,10.926 2.083,11.934 6.385,17.525 C7.016,18.346 7.717,19.255 8.500,20.281 C9.277,19.261 9.974,18.356 10.602,17.541 C14.915,11.933 15.692,10.921 15.692,8.378 C15.692,4.468 12.466,1.287 8.500,1.287 ZM8.500,12.890 C5.976,12.890 3.923,10.866 3.923,8.378 C3.923,5.890 5.976,3.866 8.500,3.866 C11.024,3.866 13.077,5.890 13.077,8.378 C13.077,10.866 11.024,12.890 8.500,12.890 ZM8.500,5.155 C6.697,5.155 5.231,6.601 5.231,8.378 C5.231,10.155 6.697,11.600 8.500,11.600 C10.303,11.600 11.769,10.155 11.769,8.378 C11.769,6.601 10.303,5.155 8.500,5.155 Z"></path>
                    </svg>
                  </div>
                  <h3 class="cs-event_location_title">503 Old Buffalo Street, New York, USA</h3>
                </div>
              </div>
            </div>
          
          </div><!-- .cs-tab -->
        </div>
      </div>
    </div>
    <div class="cs-height_140 cs-height_lg_80"></div>
  </div>
  
   <div class="cs-height_135 cs-height_lg_75"></div>
  <div class="container wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
    <div class="cs-section_heading cs-style2 cs-size3 text-center text-uppercase">
      <div class="cs-section_subtitle cs-primary_font cs-medium cs-accent_color">Cauza Aleargă Pentru Viață 2023
</div>
      <h2 class="cs-section_title cs-extra_bold">Florin Moise</h2>
    </div>
    <div class="cs-height_70 cs-height_lg_50"></div>
  </div>
  <div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
    <div class="cs-slider cs-style1 cs-remove_overflow">
      <div class="cs-slider_container" data-autoplay="0" data-loop="1" data-speed="600" data-center="0" data-fade-slide="1" data-slides-per-view="1">
        <div class="cs-slider_wrapper">
          <div class="cs-slide">
            <div class="cs-testimonial cs-style9">
              <div class="cs-testimonial_left">
                <div class="cs-testimonial_avatar">
                  <img src="../assets/img/event-conference/testimonial1.jpg" alt="Testimonial" class="cs-testimonial_img">
                  <img src="../assets/img/event-conference/testimonial_shape1.png" alt="" class="cs-avatar_shape cs-type1">
                  <img src="../assets/img/event-conference/testimonial_shape2.png" alt="" class="cs-avatar_shape cs-type2">
                </div>
              </div>
              <div class="cs-testimonial_right cs-vertical_middle">
                <div class="cs-vertical_middle_in">
                  <div class="cs-testimonial_icon cs-accent_20_color">
                    <img src="../assets/img/event-conference/icons/icon1.png" alt="">
                  </div>
                  <div class="cs-testimonial_text">La vârsta de 15 ani, în septembrie 2020, Florin Moise a fost implicat într-un accident provocat de un șofer neatent, aflat sub influența băuturilor alcoolice.  Astfel, a primit un diagnostic crunt: Tetraplegie Spastică Scheletară post Fractură Vertebrală.
Deși medicii nu i-au dat nici o șansă la viață, Florin a luptat să le demonstreze tuturor că este un erou. 
</div>
                  <h3 class="cs-testimonial_avatar_name text-uppercase cs-medium">Mai multe detalii despre Florin:</h3>
                   <div class="cs-height_45 cs-height_lg_30"></div>
              <a href="cauza.php" class="cs-btn cs-style1 cs-btn_lg cs-medium text_uppercase cs-primary_font cs-accent_bg_2 cs-accent_border_2 cs-white cs-accent_bg_hover cs-white_hover cs-accent_border_hover cs-smoth_scroll"> DETALII </a>
            </div>
                </div>
                </div>
              </div>
            </div>
          </div><!-- .cs-slide -->

    </div><!-- .cs-slider -->
  </div>
  <!-- End Testimonial Section -->
  
  
  <!-- End Schedule Section -->
  <div id="pricing" >
    <div></div>
    <!-- Start Pricing Section -->
    <div class="cs-gradient_bg_1 cs-flying_img_wrap cs-style8 cs-parallax">
      <img src="../assets/img/event-conference/flying-img8.png" alt="Flying image" class="cs-flying_img cs-posiiton1 cs-to_up">
      <img src="../assets/img/event-conference/flying-img7.png" alt="Flying image" class="cs-flying_img cs-posiiton2 cs-to_right_up">
      <div class="cs-height_135 cs-height_lg_75"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-5 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <div class="cs-text_box cs-style1 cs-type1">
              <div class="cs-text_box_subtitle cs-medium cs-accent_color"> Alătură-te nouă în lupta pentru Florin!
</div>
              <h2 class="cs-text_box_title text-uppercase cs-bold">Înscrie-te la Aleargă Pentru Viață 2023</h2>
              <div class="cs-height_35 cs-height_lg_35"></div>
              <div class="cs-text_box_text"> Înscrierile se pot realiza atât în ziua evenimentului, cu cel mult 30 minute înainte de startul fiecărei curse, cât și online, accesând una dintre cele două opțiuni.

Persoanele înscrise online vor avea prioritate la check-in în ziua evenimentului.
</div>
              <div class="cs-height_35 cs-height_lg_35"></div>
            
            </div>
            <div class="cs-height_0 cs-height_lg_50"></div>
          </div>
          <div class="col-lg-7 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
            <div class="cs-pricing_table_3_wrap">
              <div class="row">
                <div class="col-sm-6">
                  <div class="cs-pricing_table cs-style3 cs-white_bg text-center">
                    <div class="cs-pricing_head position-relative overflow-hidden cs-accent_color_2">
                      <h2 class="cs-pricing_name cs-medium text-uppercase cs-secondary_font cs-white_80" style="margin-top:2rem;">Înscriere APV - Plată Cash</h2>
                      <div class="cs-price_wrap cs-bold cs-white">
                        <span class="cs-symble"></span>
                        <span class="cs-price"></span>
                      </div>
                      <div class="cs-pricing_bar"></div>
                    </div>
                    <div class="cs-pricing_table_in">
                      <ul class="cs-pricing_feature cs-mp0">
                        <li><i class="fas fa-check cs-accent_color_2"></i>se realizează în ziua evenimentului, la check-in
</li>
                        <li><i class="fas fa-check cs-accent_color_2"></i>Lunch and snacks</li>
                        <li><i class="fas fa-check cs-accent_color_2"></i>Professioal worksop</li>
                        <li><i class="fas fa-check cs-accent_color_2"></i>Experience certificate </li>
                      </ul>
                      <div class="cs-pricing_meta_text cs-medium cs-accent_color_2 text-uppercase">2 Days</div>
                      <div class="cs-height_30 cs-height_lg_30"></div>
                      <div class="cs-pricing_btn">
                        <a href="preregister.php" class="cs-btn cs-style1 cs-medium text_uppercase cs-primary_font cs-accent_bg_2 cs-accent_border_2 cs-white cs-accent_bg_hover cs-white_hover cs-accent_border_hover">Participă</a>
                      </div>
                    </div>
                  </div>
                  <div class="cs-height_60 cs-height_lg_60"></div>
                </div>
                <div class="col-sm-6">
                  <div class="cs-pricing_table cs-style3 cs-white_bg text-center">
                    <div class="cs-pricing_head position-relative overflow-hidden cs-accent_color">
                      <h2 class="cs-pricing_name cs-medium text-uppercase cs-secondary_font cs-white_80" style="margin-top:2rem;">Înscriere APV - Plată Card</h2>
                      <div class="cs-price_wrap cs-bold cs-white">
                        <span class="cs-symble"></span>
                        <span class="cs-price"></span>
                      </div>
                      <div class="cs-pricing_bar"></div>
                    </div>
                    <div class="cs-pricing_table_in">
                      <ul class="cs-pricing_feature cs-mp0">
                        <li><i class="fas fa-check cs-accent_color"></i>se realizează doar online, după completarea formularului de înscriere</li>
                        <li><i class="fas fa-check cs-accent_color"></i>Lunch and snacks</li>
                        <li><i class="fas fa-check cs-accent_color"></i>Professioal worksop</li>
                        <li><i class="fas fa-check cs-accent_color"></i>Experience certificate</li>
                        <li><i class="fas fa-check cs-accent_color"></i>Access to exhibition floor</li>
                      </ul>
                      <div class="cs-pricing_meta_text cs-medium cs-accent_color text-uppercase">2 Days</div>
                      <div class="cs-height_30 cs-height_lg_30"></div>
                      <div class="cs-pricing_btn">
                        <a href="register.php" class="cs-btn cs-style1 cs-medium text_uppercase cs-primary_font cs-accent_bg cs-accent_border cs-white cs-accent_bg_2_hover cs-white_hover cs-accent_border_2_hover">Participă</a>
                      </div>
                    </div>
                  </div>
                  <div class="cs-height_60 cs-height_lg_60"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="cs-height_110 cs-height_lg_50"></div>
    </div>
    <!-- End Pricing Section -->
  </div>
  
  <!-- Start Team Seation -->
  
  <!-- End Team Seation -->



  <!-- Start Testimonial Section -->
 

  <div class="cs-flying_img_wrap cs-style9 cs-parallax">
    <img src="../assets/img/event-conference/flying-img9.png" alt="Flying image" class="cs-flying_img cs-posiiton1 cs-to_left_up">
    <img src="../assets/img/event-conference/flying-img6.png" alt="Flying image" class="cs-flying_img cs-posiiton2 cs-to_up">
    <div class="cs-height_135 cs-height_lg_75"></div>
    <div class="container wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
      <div class="cs-section_heading cs-style2 cs-size3 text-center text-uppercase">
        <div class="cs-section_subtitle cs-primary_font cs-medium cs-accent_color">Momente Speciale</div>
        <h2 class="cs-section_title cs-extra_bold">Galerie Foto</h2>
      </div>
      <div class="cs-height_70 cs-height_lg_50"></div>
    </div>
    <div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
      <div class="cs-isotop cs-style1 cs-isotop_col_3 cs-has_gutter_30 cs-lightgallery">
        <div class="cs-grid_sizer"></div>
        <div class="cs-isotop_item">
          <a href="../assets/img/event-conference/gallery_lg_8.jpg" class="cs-gallery cs-style1 cs-bg cs-gallery_height2 cs-lightbox-item" data-src="../assets/img/event-conference/gallery1.jpg">
            <div class="cs-gallery_hover cs-center cs-accent_80_bg"><span class="cs-add"></span></div>
          </a>
        </div><!-- .cs-isotop_item -->
        <div class="cs-isotop_item">
          <a href="../assets/img/event-conference/gallery_lg_7.jpg" class="cs-gallery cs-style1 cs-bg cs-gallery_height3 cs-lightbox-item" data-src="../assets/img/event-conference/gallery2.jpg">
            <div class="cs-gallery_hover cs-center cs-accent_80_bg"><span class="cs-add"></span></div>
          </a>
        </div><!-- .cs-isotop_item -->
        <div class="cs-isotop_item">
          <a href="../assets/img/event-conference/gallery_lg_12.jpg" class="cs-gallery cs-style1 cs-bg cs-gallery_height4 cs-lightbox-item" data-src="../assets/img/event-conference/gallery3.jpg">
            <div class="cs-gallery_hover cs-center cs-accent_80_bg"><span class="cs-add"></span></div>
          </a>
        </div><!-- .cs-isotop_item -->
        <div class="cs-isotop_item">
          <a href="../assets/img/event-conference/gallery_lg_11.jpg" class="cs-gallery cs-style1 cs-bg cs-gallery_height5 cs-lightbox-item" data-src="../assets/img/event-conference/gallery4.jpg">
            <div class="cs-gallery_hover cs-center cs-accent_80_bg"><span class="cs-add"></span></div>
          </a>
        </div><!-- .cs-isotop_item -->
        <div class="cs-isotop_item">
          <a href="../assets/img/event-conference/gallery_lg_10.jpg" class="cs-gallery cs-style1 cs-bg cs-gallery_height4 cs-lightbox-item" data-src="../assets/img/event-conference/gallery5.jpg">
            <div class="cs-gallery_hover cs-center cs-accent_80_bg"><span class="cs-add"></span></div>
          </a>
        </div><!-- .cs-isotop_item -->
        <div class="cs-isotop_item">
          <a href="../assets/img/event-conference/gallery_lg_1.jpg" class="cs-gallery cs-style1 cs-bg cs-gallery_height6 cs-lightbox-item" data-src="../assets/img/event-conference/gallery6.jpg">
            <div class="cs-gallery_hover cs-center cs-accent_80_bg"><span class="cs-add"></span></div>
          </a>
        </div><!-- .cs-isotop_item -->
      </div><!-- .isotop -->
    </div>
    <div class="cs-height_50 cs-height_lg_50"></div>
    <div class="text-center">
      <a href="gallery.php" class="cs-btn cs-style1 cs-btn_lg cs-medium text_uppercase cs-primary_font cs-accent_bg_2 cs-accent_border_2 cs-white cs-accent_bg_hover cs-white_hover cs-accent_border_hover">Galerie Foto</a>
    </div>
    <div class="cs-height_140 cs-height_lg_80"></div>
  </div>
  <!-- End Gallery Section -->


  <!-- Start Sponsors Section -->
  <div class="cs-gradient_bg_2">
    <div class="cs-height_135 cs-height_lg_75"></div>
    <div class="container wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
      <div class="cs-section_heading cs-style4 cs-size4 text-uppercase">
        <div class="cs-section_heading_left" >
               <h2 class="cs-section_title cs-extra_bold text-center">Sponsori</h2>
        </div>
        <div class="cs-section_heading_right">
        
          </a>
        </div>
      </div>
      <div class="cs-height_75 cs-height_lg_55"></div>
    </div>
    <div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
      <div class="row">
        <div class="col-lg-4">
          <div class="cs-post cs-style10">
            <a href="https://upb.ro/"  target="_blank" class="cs-post_thumb" data-src="../assets/img/event-conference/post1.png"></a>
         
          </div>
          <div class="cs-height_30 cs-height_lg_30"></div>
        </div>
        <div class="col-lg-4">
          <div class="cs-post cs-style10">
            <a href="http://www.electronica.pub.ro/"  target="_blank" class="cs-post_thumb" data-src="../assets/img/event-conference/post2.png"></a>
       
          </div>
          <div class="cs-height_30 cs-height_lg_30"></div>
        </div>
        <div class="col-lg-4">
          <div class="cs-post cs-style10 ">
            <a href="https://lsebucuresti.org/" target="_blank" class="cs-post_thumb cs-bg" data-src="../assets/img/event-conference/post3.png"></a>
           
          </div>
          <div class="cs-height_30 cs-height_lg_30"></div>
        </div>
      </div>
    </div>
    <div class="cs-height_110 cs-height_lg_50"></div>
  </div>
  <!-- End Sponsors Section -->
 <!-- Start Team Seation -->
 <div id="contact"></div>
  <div class="cs-flying_img_wrap cs-style7 cs-parallax">
    <img src="../assets/img/event-conference/flying-img5.png" alt="Flying image" class="cs-flying_img cs-posiiton1 cs-to_up">
    <img src="../assets/img/event-conference/flying-img6.png" alt="Flying image" class="cs-flying_img cs-posiiton2 cs-to_up">
    <div class="cs-height_130 cs-height_lg_70"></div>
    <div class="container wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
      <div class="cs-section_heading cs-style2 text-center cs-size2 text-uppercase">
        <h2 class="cs-section_title cs-extra_bold">Contact</h2>
        <div class="cs-height_5 cs-height_lg_5"></div>
 
      </div>
      <div class="cs-height_75 cs-height_lg_55"></div>
    </div>
    <div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
      <div class="row">
        <div class="col-lg-4">
          <div class="cs-team_member cs-style8 text-center cs-white_bg">
            <div class="cs-team_member_in cs-accent_5_bg cs-accent_5_bg_2_hover cs-transition_3 cs-accent_border cs-accent_border_2_hover">
              <div class="cs-member_image position-relative">
                <img src="../assets/img/event-conference/team1.jpg" alt="Member" class="cs-accent_border cs-transition_3">
               
              </div>
              <div class="cs-member_info">
                <h2 class="cs-member_name cs-semi_bold text-uppercase">Bogdan Vlad</h2>
                <div class="cs-member_designation cs-primary_color"><p></p>Coordonator Aleargă Pentru Viață <p><p></p>bogdan.mihail.vlad29@gmail.com
<p></p>0726894957
</p></div>
              </div>
            </div>
          </div>
          <div class="cs-height_30 cs-height_lg_30"></div>
        </div>
        <div class="col-lg-4">
          <div class="cs-team_member cs-style8 text-center cs-white_bg">
            <div class="cs-team_member_in cs-accent_5_bg cs-accent_5_bg_2_hover cs-transition_3 cs-accent_border cs-accent_border_2_hover">
              <div class="cs-member_image position-relative">
                <img src="../assets/img/event-conference/team2.jpg" alt="Member" class="cs-accent_border cs-transition_3">
              
              </div>
            <div class="cs-member_info">
                <h2 class="cs-member_name cs-semi_bold text-uppercase">Teodora Naidin</h2>
                <div class="cs-member_designation cs-primary_color"><p></p>Coordonator Departamentul Sportiv <p><p><p></p>teodoranaidin@gmail.com</p>0770775823
</p></div>
              </div>
            </div>
          </div>
          <div class="cs-height_30 cs-height_lg_30"></div>
        </div>
        <div class="col-lg-4">
          <div class="cs-team_member cs-style8 text-center cs-white_bg">
            <div class="cs-team_member_in cs-accent_5_bg cs-accent_5_bg_2_hover cs-transition_3 cs-accent_border cs-accent_border_2_hover">
              <div class="cs-member_image position-relative">
                <img src="../assets/img/event-conference/team3.jpg" alt="Member" class="cs-accent_border cs-transition_3">
               
              </div>
      <div class="cs-member_info">
                <h2 class="cs-member_name cs-semi_bold text-uppercase">Cesar Leoni</h2>
                <div class="cs-member_designation cs-primary_color"><p></p>Vicecoordonator Aleargă Pentru Viață<p><p><p></p>leoni.cesar.emanuele@gmail.com</p>0770591517
</p></div>
              </div>
          </div>
         
        </div>
      </div>
    </div>
  </div>
  <!-- End Team Seation -->
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
  <script src="assets/js/plugins/jquery-3.6.0.min.js"></script>
  <script src="assets/js/plugins/isotope.pkg.min.js"></script>
  <script src="assets/js/plugins/jquery.slick.min.js"></script>
  <script src="assets/js/plugins/lightgallery.min.js"></script>
  <script src="assets/js/plugins/jquery.counter.min.js"></script>
  <script src="assets/js/plugins/wow.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>