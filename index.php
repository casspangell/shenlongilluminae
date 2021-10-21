<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <title>Shenlong Illuminae Healing Center</title>
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta property="og:image" content="path/to/image.jpg">
    <!--Favicon-->
    <link rel="icon" href="img/favicon/favicon.ico">
    <!--Libs css-->
    <link rel="stylesheet" href="css/libs.css">
    <!--Main css-->
    <link rel="stylesheet" href="css/main.css">

     <script src="https://www.google.com/recaptcha/api.js" async defer></script>
     <script>
       function onSubmit(token) {
         document.getElementById("contactForm").submit();
       }
     </script>

  </head>
  <body class="dark-load">
    <header class="top-nav page-header" id="top-nav">
      <div class="container">
        <nav class="top-menu">
          <ul class="sf-menu">
            <!--Menu default-->
            <li><a class="smooth-scroll" href="#services">Services</a></li>
            <li> <a class="smooth-scroll" href="#contact">Contact</a></li>
          </ul>
            <!-- <a class="toggle-mnu" href="#"><span></span></a>
            <a class="toggle-top" href="#"><span></span><span></span><span></span><span></span><span></span></a>-->
        </nav>
        <!-- Start mobile menu-->
        <div id="mobile-menu">
          <div class="inner-wrap">
            <nav>
              <ul class="nav_menu">
                <li><a class="smooth-scroll" href="#services">Services</a></li>
                <li> <a class="smooth-scroll" href="#contact">Contact</a></li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- End mobile menu-->
      </div>

        <style>
        .status 
      {
          font-size: 15px;
          color: white;
          padding: 15px;
      }
      </style>

    </header>



    <!-- Start full screen top nav-->
    <div class="fullscreen-topnav rotate background-image" data-image="img/bg1_flame.jpg">
      <!-- Start container-->
      
      <!-- Start container-->
      <div class="container-fluid height-half-60" style="padding-top: 50px;">
        <div class="row no-padding-bottom height-full">
          <div class="items height-full">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-full-screen height-full">
              <div class="content table">
                <div class="table-cell">
                  <h3>Shenlong Illuminae Healing Center:</h3>
                  <p style="color: #ffffff">I am a Tao Hands Practitioner which helps transform negative information into positive information. I have been a healer for 24 years and am trained in eastern and western practices. With a degree in Psychology supplementing my healing practice, I am also a Certified Reiki Master in Celtic Reiki and Violet Flame Reiki, and a Munay Aki Practitioner.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-full-screen height-full">
              <div class="content table">
                <div class="table-cell">
                  <h3>Contact Us:</h3>


                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End container-->
    </div>
    <!-- End full screen top nav-->
    <!-- Start slider section-->
    <div class="slider" id="top">
      <div id="preloader">
        <div id="status"></div>
      </div>
      <div class="full-slider intro">
                <!-- Start slide-->
        <div class="slide bg-mask background-image full-vh" data-image="img/dragon_green_bg.jpg">
          <div class="container-slide vertical-align center">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="slide-title tlt">
                    <!--Textline-->
                    <ul class="texts hidden">
                      <li data-out-effect="fadeOut" data-out-shuffle="true">Healing Grief & Anxiety</li>
                      <li data-in-effect="fadeIn">Healing from Addictions</li>
                      <li data-in-effect="fadeIn">Tao Hands Practitioner</li>
                      <li data-in-effect="fadeIn">Certified Reiki Master</li>
                      <li data-in-effect="fadeIn">Munay Aki Practitioner</li>
                    </ul>
                  </div>
                  <div class="heading-title" style="font-size: 50px;"><span style="text-shadow: 0px 0px 4px #000; color: #fff;">Shenlong Illuminae Healing Center</span></div>
                </div>
              </div>
            </div>
          </div>
        </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

            <!--Section trigger-->
    <section class="section-trigger background-image" data-image="img/bg1_galaxy.jpg">
      <div class="container">
        <div class="row">
           <div class="col-md-6 col-md-offset-1">
                  <div class="video-iframe">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/ZR6YTgwVBJI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                </div>
          <div class="col-md-5">
            <form class="form-inline" role="form" action="" id="contactForm" name="contactForm" method="POST">
                    <input type="text" name="name" id="name" placeholder="Name">
                    <input type="text" name="phone" id="phone" placeholder="Phone Number">
                    <input type="email" name="email" id="email" placeholder="Email">
                    <!--<div class="g-recaptcha" data-sitekey="6LftqOIcAAAAACrLf1WLF-V6Vk6m_Sg7MQh7A9Oa" ></div>-->
                    <div class="form-group">
                        <input type="hidden" name="captcha_token" id="recaptchaResponse" data-sitekey="6LftqOIcAAAAACrLf1WLF-V6Vk6m_Sg7MQh7A9Oa">
                    </div>
                    <input class="btn white-btn" type="submit" data-callback='onSubmit' name="submit" id="submit" value="Free Consultation">
                  </form> 

                 <div class="status">
                   <?php
                   if (isset($_POST['submit'])) {
                        if (empty($_POST['name'])) {
                           echo "<span>Invalid Name</span>";
                        } else if (empty($_POST['phone'])) {
                           echo "<span>Invalid Phone Number</span>";
                        } else if (empty($_POST['email'])) {
                           echo "<span>Invalid Email Address</span>";
                        } else {
                            require "contact.php";
                        }
                    }
                    ?> 
                </div> 
              </div>
        </div>
      </div>
    </section>

<!--Section our some work-->
   <!-- <section class="section-portfolio background-image" id="services">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-push-2">
            <div class="heading-title center">
              <h2 style="color: #0000cc">Our healing modalities</h2>
              <h2 style="color: #000; size: 31px">Select Below to Book</h2>
              <div class="small-desd"><span style="font-size:16px;">I have many different areas I offer healing in.  Some areas are grief, anxiety, trauma and much more. I offer Card readings, Crystal healings, Reiki Infused Charmed Custom Oils, and more.</span></div>
    

            </div>

          </div>
        </div>
      </div> -->
      
     <!-- <div class="container-fluid">
        <div class="row">
          <div class="portfolio portfolio-items">
            <div class="col-md-6 col-lg-3 col-sm-6 col-xs-12 item-portfolio portfolio-item category-3"><a href="https://calendly.com/phoenixflame3396815/choice-of-one-healing-modality" target="_blank">
                <div class="item-wrap dh-container"><img src="img/petblessings_small_shd.jpg">
                  <div class="content dh-overlay">
                    
                    <div class="content-wrap">
                      <div class="content-va">
                        <h2>Pet Blessings/Healing</h2>
                        <p>Using my open spiritual channels and healing modalities offering services for pets.</p>
                      </div>
                    </div>
                  </div>
                </div></a></div>
 
            <div class="col-md-6 col-lg-3 col-sm-6 col-xs-12 item-portfolio portfolio-item category-3"><a href="https://calendly.com/phoenixflame3396815/choice-of-one-healing-modality" target="_blank">
                <div class="item-wrap dh-container"><img src="img/taohandsblessing_small_shd.jpg">
                  <div class="content dh-overlay">
                 
                    <div class="content-wrap">
                      <div class="content-va">
                        <h2>Tao Hands Blessings</h2>
                        <p>Tao Hands Blessings for One Condition</p>
                      </div>
                    </div>
                  </div>
                </div></a></div>
            <div class="col-md-6 col-lg-3 col-sm-6 col-xs-12 item-portfolio portfolio-item category-2"><a href="https://calendly.com/phoenixflame3396815/choice-of-one-healing-modality">
                <div class="item-wrap dh-container"><img src="img/mixedreiki_small_shd.jpg">
                  <div class="content dh-overlay">
                
                    <div class="content-wrap">
                      <div class="content-va">
                        <h2>Reiki Modality and Blessed Oil</h2>
                        <p>Reiki at a distance as you lay down. I will have a discussion with you as to issue you would like help with such as anxiety. I can do two issues per bottle. Reiki energies Custom Made for you with charmed crystal pieces in oils.</p>
                      </div>
                    </div>
                  </div>
                </div></a></div>
            <div class="col-md-6 col-lg-3 col-sm-6 col-xs-12 item-portfolio portfolio-item category-4"><a href="https://calendly.com/phoenixflame3396815/choice-of-one-healing-modality">
                <div class="item-wrap dh-container"><img src="img/runestone_small_shd.jpg">
                  <div class="content dh-overlay">
                   
                    <div class="content-wrap">
                      <div class="content-va">
                        <h2>Rune Stone Reading</h2>
                        <p>I will have you focus on the issue, then I will prepare a reading. I will Facebook call you or send you a recording through Facebook. This is an in-depth reading.</p>
                      </div>
                    </div>
                  </div>
                </div></a></div>
            <div class="col-md-6 col-lg-3 col-sm-6 col-xs-12 item-portfolio portfolio-item category-1"><a href="https://calendly.com/phoenixflame3396815/choice-of-one-healing-modality">
                <div class="item-wrap dh-container"><img src="img/violetflame_small_shd.jpg">
                  <div class="content dh-overlay">
           
                    <div class="content-wrap">
                      <div class="content-va">
                        <h2>Violet Flame Reiki Healing Blessing</h2>
                        <p>I will have a discussion with you as to issue you would like help with such as anxiety. Then, Reiki will be at sent by distance as you lay down.</p>
                      </div>
                    </div>
                  </div>
                </div></a></div>
            <div class="col-md-6 col-lg-3 col-sm-6 col-xs-12 item-portfolio portfolio-item category-1"><a href="https://calendly.com/phoenixflame3396815/choice-of-one-healing-modality">
                <div class="item-wrap dh-container"><img src="img/whitedragonreiki_small_shd.jpg">
                  <div class="content dh-overlay">
                   
                    <div class="content-wrap">
                      <div class="content-va">
                        <h2>White Dragon Reiki</h2>
                        <p>This service is to help people with trauma issues. This is done at a distance. We will talk briefly you will lay down and recieve.</p>
                      </div>
                    </div>
                  </div>
                </div></a></div>
            <div class="col-md-6 col-lg-3 col-sm-6 col-xs-12 item-portfolio portfolio-item category-1"><a href="https://calendly.com/phoenixflame3396815/choice-of-one-healing-modality">
                <div class="item-wrap dh-container"><img src="img/celticreiki_small_shd.jpg">
                  <div class="content dh-overlay">
                  
                    <div class="content-wrap">
                      <div class="content-va">
                        <h2>Celtic Reiki Healing</h2>
                        <p>Come feel the healing of divine Violet flame, for one condition. (ex: emotional imbalance). This is done by distance.</p>
                      </div>
                    </div>
                  </div>
                </div></a></div>
            <div class="col-md-6 col-lg-3 col-sm-6 col-xs-12 item-portfolio portfolio-item category-1"><a href="https://calendly.com/phoenixflame3396815/choice-of-one-healing-modality">
                <div class="item-wrap dh-container"><img src="img/woundhealerreiki_small_shd.jpg">
                  <div class="content dh-overlay">
               
                    <div class="content-wrap">
                      <div class="content-va">
                        <h2>Wound Healer Reiki Healing</h2>
                        <p>Done at a distance, lie down and recieve. The time depends person to person.</p>
                      </div>
                    </div>
                  </div>
                </div></a></div>
                </div>
                </div>
                </div>
            </section> -->

    <!--Section our services-->
    <section class="section-our-services bg-dark-section" id="services">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-push-2">
            <div class="heading-title center">
              <h2 style="color: #0000cc">Our healing modalities</h2>
              <h2 style="color: #000; size: 31px">Select Below to Book</h2>
              <div class="small-desd"><span style="font-size:16px;">I have many different areas I offer healing in.  Some areas are grief, anxiety, trauma and much more. I offer Card readings, Crystal healings, Reiki Infused Charmed Custom Oils, and more.</span></div>
            </div>
        </div>
        <div class="row">
          <div class="item-service">
            <div class="col-md-3 icon-service bg-mask background-image" data-image="img/violetflame_small_shd.jpg">
            </div>
            <div class="col-md-9 content-service">
              <h2>Reiki Modality and Blessed Oil</h2>
              <p>Reiki at a distance as you lay down. I will have a discussion with you as to issue you would like help with such as anxiety. I can do two issues per bottle. Reiki energies Custom Made for you with charmed crystal pieces in oils.</p><br>
              <h2>Violet Flame Reiki Healing Blessing</h2>
              <p>I will have a discussion with you as to issue you would like help with such as anxiety. Then, Reiki will be at sent by distance as you lay down.</p><br>
              <h2>White Dragon Reiki</h2>
              <p>This service is to help people with trauma issues. This is done at a distance. We will talk briefly you will lay down and recieve.</p><br>
              <h2>Celtic Reiki Healing</h2>
              <p>Come feel the healing of divine Violet flame, for one condition. (ex: emotional imbalance). This is done by distance.</p><br>
              <hr>
              <div class="buttons-section left"><a class="btn white-btn" href="service-single.html">Connect</a></div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="item-service">
            <div class="col-md-3 icon-service bg-mask background-image">
            </div>
            <div class="col-md-9 content-service">
              <h2>Tao Hands Blessings</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
              <hr>
              <div class="buttons-section left"><a class="btn white-btn">Get started</a></div>
            </div>
          </div>
        </div>

      </div>
    </section>
              
    <!--Section trigger-->
    <section class="section-trigger background-image" data-image="img/bg1_galaxy.jpg">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="heading-title small-heading center">
              <h2 style="color: #fff; text-shadow: 0px 0px 10px #000;">When an energetic flow is blocked, stagnant, unaligned, or imbalanced in the body, we experience difficulty moving on from traumas, self-esteem issues, brain fog, creative blocks, emotional imbalances, insomnia, physical ailments, eating disorders, unhealthy habits, and just feel poorly.<br><br>We all need help being cleared, unblocked, re-balanced, and re-aligned so we can feel good. Releasing these blocks and stagnation allows us to truly heal, grow, and thrive.<br>What is revealed is our true selves.</h2>
            </div>
             <div class="buttons-section center"><a class="btn accent-btn large-btn" href="#contact">Contact the Healing Center</a></div> 
          </div>
        </div>
      </div>
    </section>

    
   <!-- <section class="related-projects" style="background-size:cover; padding-bottom:0px;" id="certifications">
      <div class="container">
         <div class="row">
          <div class="col-md-8 col-md-push-2">
            <div class="heading-title center">
              <h2 style="color: #000066;">Current certifications</h2>
              <p style="font-size: 20px;">Coming Soon: Certified Spiritual Life Coach, Certified Goals Success Life Coach, Certified Happiness Life Coach, Certified Life Purpose Coach, Certified Professional Life Coach, Certified Master Life Coach</p>
            </div>

          </div>
        </div>
      </div>

        </div>
      </div>
    </section>


    <section class="section-carousel-trigger" style="padding-top: 0px, padding-bottom: 25px">
      <div class="container">
        <div class="row">


            <div class="col-md-4">
              <div class="item-triggel-carousel center">
                <img src="img/certs/celtic_dragon_reiki_master_sm.jpg" style="width: 100%; height: auto;" alt="logo">
              </div>
            </div>
  
            <div class="col-md-4">
              <div class="item-triggel-carousel center">
                <img src="img/certs/certificate_dragon_empowerment_sm.jpg" style="width: 100%; height: auto;" alt="logo">
              </div>
            </div>

            <div class="col-md-4">
              <div class="item-triggel-carousel center">
                <img src="img/certs/shamanic_reiki.png" style="width: 100%; height: auto;" alt="logo">
              </div>
            </div>
 
            <div class="col-md-4">
              <div class="item-triggel-carousel center">
                <img src="img/certs/certificate_white_dragon_reiki_sm.png" style="width: 100%; height: auto;" alt="logo">
              </div>
            </div>

            <div class="col-md-4">
              <div class="item-triggel-carousel center">
                <img src="img/certs/certificate_crystal_dragon_reiki_sm.png" style="width: 100%; height: auto;" alt="logo">
              </div>
            </div>

            <div class="col-md-4">
              <div class="item-triggel-carousel center">
                <img src="img/certs/certificate_rainbow_dragon_reiki_sm.png" style="width: 100%; height: auto;" alt="logo">
              </div>
            </div>

            <div class="col-md-4">
              <div class="item-triggel-carousel center">
                <img src="img/certs/lemurian _facilitator_sm.png" style="width: 100%; height: auto;" alt="logo">
              </div>
            </div>

            <div class="col-md-4">
              <div class="item-triggel-carousel center">
                <img src="img/certs/mmm_sm.png" style="width: 100%; height: auto;" alt="logo">
              </div>
            </div>

        </div>

      
    </section> -->



     <!--Section testimonials-->
 <!--   <section class="section-testimonials bg-dark-section background-image" data-image="img/bg3.jpg">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-push-2">
            <div class="heading-title small-heading center">
              <h2>Customers  <span>love us</span></h2>
              <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="testimonials-items">
 
            <div class="col-md-4">
              <div class="item-testimonials"><img src="img/ava.jpg" alt="photo">
                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum</p><span class="name">Alex Rezvova</span><span class="person">Designer, Company name</span>
              </div>
            </div> 
       
            <div class="col-md-4">
              <div class="item-testimonials"><img src="img/ava2.jpg" alt="photo">
                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum</p><span class="name">Jacob Kai</span><span class="person">Creative Director, Company name</span>
              </div>
            </div> 

            <div class="col-md-4">
              <div class="item-testimonials"><img src="img/ava3.jpg" alt="photo">
                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum</p><span class="name">Albin Erlend</span><span class="person">Programer, Company name</span>
              </div>
            </div> 

            <div class="col-md-4">
              <div class="item-testimonials"><img src="img/ava3.jpg" alt="photo">
                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum</p><span class="name">Albin Erlend</span><span class="person">Programer, Company name</span>
              </div>
            </div> 
    
          </div>
        </div> 
        
       <div class="dots-control-carousel" id="dots-control-testimonials"></div>
      </div> 
      
      <div class="prev-next-block-rotate" id="control-customers">
        <div class="wrap-prev">
          <div class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
        </div>
        <div class="wrap-next">
          <div class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
        </div>
      </div>
    </section> -->

    <!--Section trigger-->
   <!-- <section class="section-trigger bg-white-section white-70 background-image" data-image="img/bg3.jpg">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="heading-title small-heading center">
              <h2>Let’s discuss what you’re seeking help with and see if it’s a fit.  <span>From there, we will schedule your Initial Healing Session.</span></h2>
            </div>
            <div class="buttons-section center"><a class="btn accent-btn large-btn" href="#contact">Connect with the Healing Center</a></div>
          </div>
        </div>
      </div>
    </section> -->

    <!--Section contact with us-->
    <section class="section-contact-with-us bg-dark-section background-image" id="contact" data-image="img/dragon_green_bg.jpg">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-push-2">
            <div class="heading-title small-heading center">
              <h2>Connect with Shenlong Illuminae<br>Healing Center</h2>
              <div><img src="img/bio_photo_altered.jpg" style="width:50%; height: auto;"></div>
              <p>I work with many different modalities to heal. Among them crystals, chi balls of energy, Spirits help and love. I help you to activate your healing. I am also a Tao Hands Practitioner and can offer my services to assist you in facilitating your healing.<p> 

              <p>I am a Tao Hands Practitioner which helps transform negative information into positive information. I have been a healer for 24 years. I am trained in eastern and western practices. I have my Bachelors degree in Psychology and am a Certified Reiki Master in Celtic Reiki, Violet Flame Reiki as well as a Munay Aki Practioner. I do distance blessing and healings in my services as well as house blessings. I also work with pets, offering blessings and healings.</p>

              <p>I specialize in healing grief, anxiety, and helping people heal from addictions. I offer many things such as Card readings, Crystal healings, and Reiki Infused Charmed Custom Oils.</p>

              <p>Reach out today for a free consultation.</p>
              <p>I look forward to helping you start your healing journey today.</p>
             
            </div>
          </div>
        </div>
        <div class="row">
           <div class="contact-wrap">
              <p class="phone"><i class="fa fa-phone" aria-hidden="true"></i>+1 717-658-7983</p>
              <a class="email" href="malito:jennifer@shenlongilluminae.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>jennifer@shenlongilluminae.com</a>
              <!--Start social links-->
              <ul class="social-links">
                <li><a href="https://www.facebook.com/flightofthephoenix75"><i class="fa fa-facebook"></i></a></li>
              </ul>
              <!--End social links-->
            </div>
          <div class="col-md-6">
            <!--<div class="buttons-section"><a class="btn dark-btn large-btn smooth-scroll" style="color: #000066;" href="">Book Now</a></div>-->
          </div>
          <div class="col-md-6">
            <div class="contact-form">
             
          <!--  <form class="contact-form-sub contact-form-bg" method="post"> 
            <div class="col-md-6">
                  <input class="form-control" type="text" required="" name="Name" placeholder="Name">
                </div> 
                <div class="col-md-6">
                  <input class="form-control" type="email" required="" name="Email" placeholder="Email">
                </div>
                <div class="col-md-12">
                  <textarea class="form-control" rows="9" required="" name="Message" placeholder="Message"></textarea>
                  <p class="success-msg hidden notify">Your message has been sent!</p>
                  <p class="error-msg hidden notify">Error sending message!</p>
                  <input class="btn btn-blue btn-form" type="submit" value="Send">
                </div>
              </form> -->


             <!-- <form action="" method="post" style="color: #fff">
              First Name: <input type="text" name="first_name">
              Last Name: <input type="text" name="last_name">
              Email: <input type="text" name="email">
              Message:<br><textarea rows="5" name="message" cols="30"></textarea>
              <input type="submit" name="submit" value="Submit" style="background-color: inherit;">
              </form> -->

            </div>
          </div>
        </div>
      </div>
    </section>

            <!--Section trigger-->
    <section class="section-trigger background-image" data-image="img/bg1_galaxy.jpg">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="heading-title small-heading center">
              <h2 style="color: #cccccc; text-shadow: 0px 0px 10px #000;">Our lives on this earth can sometimes be more difficult than we would ever imagine.  <span style="color: #ffff">Healing starts with the whole body, mind, and spirit.</span></h2>
            </div>
             <!-- <div class="buttons-section center"><a class="btn accent-btn large-btn" href="#contact">Contact the Healing Center</a></div> -->
          </div>
        </div>
      </div>
    </section>

    <!--Section our location-->
    <!--<div class="map-section">
      <div class="map-content" id="map" data-zoom="13" data-height="400" data-address="Konotop" data-address-details="Our location"></div>
    </div> -->
    <!-- Old browsers support--><!--[if lt IE 9]>
<script src="libs/html5shiv/es5-shim.min.js"></script>
<script src="libs/html5shiv/html5shiv.min.js"></script>
<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="libs/respond/respond.min.js"></script>
<![endif]-->
    <footer style="padding-top: 0px">
      <div class="down-footer">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <p>© 2021 All Rights Reserved.  -   Created by <a href="https://www.zeroeightysix.com">ZeroEightySix</a></p>
              <ul class="footer-menu">
                <li><a href="index.html">Home</a></li>
                <li><a class="smooth-scroll" href="#services">Services</a></li>
                <li><a class="smooth-scroll" href="#certifications">Certifications</a></li>
                <li> <a class="smooth-scroll" href="#contact">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--button to top-->
    <div class="top icon-down toTopFromBottom"><a class="smooth-scroll" href="#top"><i class="pe-7s-angle-up"></i></a></div>
    <!--end button to top-->
    <!--Libs-->
    <script src="js/libs.js"></script>
    <!--Use scripts-->
    <script src="js/common.js"></script>

  </body>
</html>