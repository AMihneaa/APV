 <header class="cs-site_header cs-style1 cs-sticky-header cs-primary_font">
    <div class="cs-main_header">
      <div class="container">
        <div class="cs-main_header_in">
          <div class="cs-main_header_left">
            <div class="cs-nav">
              <ul class="cs-nav_list">
                </li>
                                <li class="menu-item-has-children"><a href="about.php">Despre</a>
                  <ul>
                    <li><a href="about.php">Ce este Aleargă Pentru Viaţă?</a></li>
                
                    <li><a href="team.php">Echipă</a></li>
                    <li><a href="past.php">Ediţii precedente</a></li>
                     <li><a href="media.php">Galerie Foto</a></li>
                  </ul>
                </li>
        
               <li class="menu-item-has-children"><a href="racing.php">Curse</a>
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
                <li class="menu-item-has-children"><a href="contact.php">Contact</a>
               
                </li>
               
                
              </ul>
            </div>
          </div>
          <div class="cs-main_header_center">
            <a class="cs-site_branding" href="index.php"><img src="../assets/img/event-conference/logo.svg" alt=""></a>
          </div>
          <div class="cs-main_header_right">
   
                   <div class="cs-social_btns cs-style1" style="margin-right:3rem;" >
                        <a href="https://www.facebook.com/AleargaPentruViata" target="_blank"><i class="fab fa-facebook"></i></a>
                           <a href="https://www.youtube.com/@lsebucuresti" target="_blank"><i class="fab fa-youtube" ></i></a>
              <a href="https://www.instagram.com/aleargapentruviata.lse/" target="_blank"><i class="fab fa-instagram"></i></a>
           
             
            </div>
            
            
              <div class="cs-action_box">
                <a href="#" class="cs-center position-relative cs-accent_color_2 " onclick="linken()">
            
      
              </div>
             <?php 

if( $_SESSION['email']){
  echo'  <a href="#" onclick="logoutphp()"  class="cs-toolbox_btn cs-accent_bg_2 cs-white_hover cs-accent_bg_hover cs-smoth_scroll" ><span class="cs-btn_text">Deconecteaza-te</span></a>';
}
else echo'  <a href="#" onclick="inscriere.php"  class="cs-toolbox_btn cs-accent_bg_2 cs-white_hover cs-accent_bg_hover cs-smoth_scroll" ><span class="cs-btn_text">Inscriere</span></a>';
?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  
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
      location.href="logout.php";
  }
  </script>
  