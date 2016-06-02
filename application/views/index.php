<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Gubaz</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
      <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
      <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="<?php echo base_url()?>assets/style.css" type="text/css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
      <script src="<?php echo base_url()?>assets/js/prefixfree.min.js"></script>
   </head>
   <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
      <nav class="navbar navbar-default navbar-fixed-top">
         <div class="container">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>                        
               </button>
               <a class="navbar-logo" href="#myPage"><img src="<?php echo base_url() ?>assets/res/logo_lilll.png"></img></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
               <ul class="nav navbar-nav navbar-right">
                  <li><a href="#about">ABOUT</a></li>
                  <li><a href="#skills">SKILLS</a></li>
                  <li><a href="#portfolio">PORTFOLIO</a></li>
                  <li><a href="#contact">CONTACT</a></li>
               </ul>
            </div>
         </div>
      </nav>
      <div class="jumbotron text-center">
         <div class="particles" id="particles-js" style="opacity:0.2" ></div>
         <h1 style="font-family:Plume;" class="unselectable">Welcome To My Page</h1>
         <!-- <p class="p unselectable" style="margin-left:-20px;">It's Nice To Meat You!</p> -->
         <br />
         <br />
         <div class="cont">
            <p class="iam unselectable">I am a</p>
            <div class="scroller">
               <div class="inner">
                  <span class="unselectable" style="color: #ffffff;">developer.</span>
                  <span class="designer unselectable">designer.</span>
                  <span class="human unselectable">human.</span>
               </div>
            </div>
         </div>
      </div>
      <!-- Container (About Section) -->
      <div id="about" class="container-fluid text-center bg-grey">
         <h2 style="color:#ffffff;">About Me</h2>
         <br>
         <img class="img-circle" src="<?php echo base_url()?>assets/res/my_photo.jpg" alt="Bird"> 
         <div class="text-center scrollimation fade-in in" style="color:white;">
            I am Gubaz Megrelishvili, a twenty five year old developer from Tbilisi,Georgia. I have <br>graduated with a Bachelor degree of Computer Science, from the TSU University. I have a passion for <br> creating challenging, intuitive and beautiful products with strong and nice code on backend. My design process is <br> very hands-on and visual and my code is clear and undarstandable.<br><br>
            Creating is not just a job for me, it's a 
            <div class="heartbeat">passion.</div>
            <br><br>
            <br><br>
            <br><br>
         </div>
         <!-- Line between about and social networks -->
         <div class="verticalLine">
         </div>
         <!-- Social Network Info -->
         <svg class="svg--source" width="0" height="0" aria-hidden="true">
            <symbol id="svg--twitter" viewbox="0 -7 15 30">
               <path d="M15.36 3.434c-0.542 0.241-1.124 0.402-1.735 0.476 0.624-0.374 1.103-0.966 1.328-1.67-0.583 0.346-1.23 0.598-1.917 0.733-0.551-0.587-1.336-0.954-2.205-0.954-1.668 0-3.020 1.352-3.020 3.019 0 0.237 0.026 0.467 0.078 0.688-2.51-0.126-4.735-1.328-6.224-3.155-0.261 0.446-0.41 0.965-0.41 1.518 0 1.048 0.534 1.972 1.344 2.514-0.495-0.016-0.961-0.151-1.368-0.378 0 0.013 0 0.025 0 0.038 0 1.463 1.042 2.683 2.422 2.962-0.253 0.069-0.52 0.106-0.796 0.106-0.194 0-0.383-0.018-0.568-0.054 0.384 1.2 1.5 2.073 2.821 2.097-1.034 0.81-2.335 1.293-3.75 1.293-0.244 0-0.484-0.014-0.72-0.042 1.336 0.857 2.923 1.357 4.63 1.357 5.554 0 8.592-4.602 8.592-8.593 0-0.13-0.002-0.261-0.009-0.39 0.59-0.426 1.102-0.958 1.507-1.563z"
                  />
            </symbol>
            <symbol id="svg--google" viewbox="-13 -13 72 72">
               <path d="M48,22h-5v-5h-4v5h-5v4h5v5h4v-5h5 M16,21v6.24h8.72c-0.67,3.76-3.93,6.5-8.72,6.5c-5.28,0-9.57-4.47-9.57-9.75
                  s4.29-9.74,9.57-9.74c2.38,0,4.51,0.82,6.19,2.42v0.01l4.51-4.51C23.93,9.59,20.32,8,16,8C7.16,8,0,15.16,0,24s7.16,16,16,16
                  c9.24,0,15.36-6.5,15.36-15.64c0-1.17-0.11-2.29-0.31-3.36C31.05,21,16,21,16,21z" />
            </symbol>
            <symbol id="svg--facebook" viewbox="0 -7 16 30">
               <path d="M12 3.303h-2.285c-0.27 0-0.572 0.355-0.572 0.831v1.65h2.857v2.352h-2.857v7.064h-2.698v-7.063h-2.446v-2.353h2.446v-1.384c0-1.985 1.378-3.6 3.269-3.6h2.286v2.503z" />
            </symbol>
            <symbol id="svg--mail" viewbox="0 0 100 100">
               <path d="M60.846,71.839c-3.897,2.055-7.869,2.835-12.621,2.835c-11.628,0-21.483-8.504-21.483-22.119
                  c0-14.607,10.138-27.228,25.883-27.228c12.338,0,20.635,8.649,20.635,20.49c0,10.635-5.958,16.876-12.621,16.876
                  c-2.841,0-5.462-1.917-5.248-6.241h-0.283c-2.483,4.186-5.745,6.241-10,6.241c-4.111,0-7.656-3.337-7.656-8.937
                  c0-8.793,6.946-16.801,16.801-16.801c3.048,0,5.745,0.635,7.586,1.49l-2.408,12.829c-1.062,5.393-0.214,7.875,2.125,7.944
                  c3.62,0.069,7.662-4.752,7.662-12.979c0-10.277-6.172-17.656-17.165-17.656c-11.553,0-21.27,9.151-21.27,23.545
                  c0,11.842,7.731,19.145,18.221,19.145c4.042,0,7.8-0.854,10.71-2.483L60.846,71.839z M56.948,41.204
                  c-0.71-0.208-1.917-0.491-3.545-0.491c-6.241,0-11.276,5.883-11.276,12.76c0,3.124,1.559,5.393,4.682,5.393
                  c4.111,0,7.869-5.248,8.649-9.648L56.948,41.204z" />
            </symbol>
            <symbol id="svg--github" viewbox="-30 -30 150 150">
               <path d="M61.896,52.548c-3.59,0-6.502,4.026-6.502,8.996c0,4.971,2.912,8.999,6.502,8.999
                  c3.588,0,6.498-4.028,6.498-8.999C68.395,56.574,65.484,52.548,61.896,52.548z M84.527,29.132c0.74-1.826,0.777-12.201-3.17-22.132
                  c0,0-9.057,0.993-22.76,10.396c-2.872-0.793-7.736-1.19-12.597-1.19s-9.723,0.396-12.598,1.189C19.699,7.993,10.645,7,10.645,7
                  c-3.948,9.931-3.913,20.306-3.172,22.132C2.834,34.169,0,40.218,0,48.483c0,35.932,29.809,36.508,37.334,36.508
                  c1.703,0,5.088,0.004,8.666,0.009c3.578-0.005,6.965-0.009,8.666-0.009C62.191,84.991,92,84.415,92,48.483
                  C92,40.218,89.166,34.169,84.527,29.132z M46.141,80.574H45.86c-18.859,0-33.545-2.252-33.545-20.58
                  c0-4.389,1.549-8.465,5.229-11.847c6.141-5.636,16.527-2.651,28.316-2.651c0.045,0,0.093-0.001,0.141-0.003
                  c0.049,0.002,0.096,0.003,0.141,0.003c11.789,0,22.178-2.984,28.316,2.651c3.68,3.382,5.229,7.458,5.229,11.847
                  C79.686,78.322,65,80.574,46.141,80.574z M30.104,52.548c-3.588,0-6.498,4.026-6.498,8.996c0,4.971,2.91,8.999,6.498,8.999
                  c3.592,0,6.502-4.028,6.502-8.999C36.605,56.574,33.695,52.548,30.104,52.548z" />
            </symbol>
            <symbol id="svg--pinterest" viewbox="-180 -180 850 850">
               <path d="M430.149,135.248C416.865,39.125,321.076-9.818,218.873,1.642
                  C138.071,10.701,57.512,76.03,54.168,169.447c-2.037,57.029,14.136,99.801,68.399,111.84
                  c23.499-41.586-7.569-50.676-12.433-80.802C90.222,77.367,252.16-6.718,336.975,79.313c58.732,59.583,20.033,242.77-74.57,223.71
                  c-90.621-18.179,44.383-164.005-27.937-192.611c-58.793-23.286-90.013,71.135-62.137,118.072
                  c-16.355,80.711-51.557,156.709-37.3,257.909c46.207-33.561,61.802-97.734,74.57-164.704
                  c23.225,14.136,35.659,28.758,65.268,31.038C384.064,361.207,445.136,243.713,430.149,135.248z" />
            </symbol>
            <symbol id="svg--youtube" viewbox="-150 -150 800 800">
               <path d="M459,61.2C443.7,56.1,349.35,51,255,51c-94.35,0-188.7,5.1-204,10.2C10.2,73.95,0,163.2,0,255s10.2,181.05,51,193.8
                  C66.3,453.9,160.65,459,255,459c94.35,0,188.7-5.1,204-10.2c40.8-12.75,51-102,51-193.8S499.8,73.95,459,61.2z M204,369.75v-229.5
                  L357,255L204,369.75z" />
            </symbol>
            <symbol id="svg--call" viewbox="-18 -18 86 86">
               <path d="M25.989 12.274c8.663 0.1 14.09-0.454 14.8 9.148h10.564c0-14.875-12.973-16.88-25.662-16.88 c-12.69 0-25.662 2.005-25.662 16.88h10.482C11.345 11.6 17.4 12.2 26 12.274z" />
               <path d="M5.291 26.204c2.573 0 4.7 0.2 5.19-2.377c0.064-0.344 0.101-0.734 0.101-1.185H10.46H0 C0 26.4 2.4 26.2 5.3 26.204z" />
               <path d="M40.88 22.642h-0.099c0 0.5 0 0.8 0.1 1.185c0.502 2.3 2.6 2.2 5.2 2.2 c2.936 0 5.3 0.2 5.316-3.374H40.88z" />
               <path d="M35.719 20.078v-1.496c0-0.669-0.771-0.711-1.723-0.711h-1.555c-0.951 0-1.722 0.042-1.722 0.7 v1.289v1h-11v-1v-1.289c0-0.669-0.771-0.711-1.722-0.711h-1.556c-0.951 0-1.722 0.042-1.722 0.711v1.496v1.306 C12.213 24 4 35.1 3.7 36.415l0.004 8.955c0 0.8 0.7 1.5 1.5 1.5h40c0.827 0 1.5-0.673 1.5-1.5v-9 c-0.295-1.303-8.493-12.383-11-14.987V20.078z M19.177 37.62c-0.805 0-1.458-0.652-1.458-1.458s0.653-1.458 1.458-1.458 s1.458 0.7 1.5 1.458S19.982 37.6 19.2 37.62z M19.177 32.62c-0.805 0-1.458-0.652-1.458-1.458s0.653-1.458 1.458-1.458 s1.458 0.7 1.5 1.458S19.982 32.6 19.2 32.62z M19.177 27.621c-0.805 0-1.458-0.652-1.458-1.458 c0-0.805 0.653-1.458 1.458-1.458s1.458 0.7 1.5 1.458C20.635 27 20 27.6 19.2 27.621z M25.177 37.6 c-0.805 0-1.458-0.652-1.458-1.458s0.653-1.458 1.458-1.458c0.806 0 1.5 0.7 1.5 1.458S25.983 37.6 25.2 37.62z M25.177 32.62c-0.805 0-1.458-0.652-1.458-1.458s0.653-1.458 1.458-1.458c0.806 0 1.5 0.7 1.5 1.5 S25.983 32.6 25.2 32.62z M25.177 27.621c-0.805 0-1.458-0.652-1.458-1.458c0-0.805 0.653-1.458 1.458-1.458 c0.806 0 1.5 0.7 1.5 1.458C26.635 27 26 27.6 25.2 27.621z M31.177 37.62c-0.806 0-1.458-0.652-1.458-1.458 s0.652-1.458 1.458-1.458s1.458 0.7 1.5 1.458S31.983 37.6 31.2 37.62z M31.177 32.62c-0.806 0-1.458-0.652-1.458-1.458 s0.652-1.458 1.458-1.458s1.458 0.7 1.5 1.458S31.983 32.6 31.2 32.62z M31.177 27.621c-0.806 0-1.458-0.652-1.458-1.458 c0-0.805 0.652-1.458 1.458-1.458s1.458 0.7 1.5 1.458C32.635 27 32 27.6 31.2 27.621z"
                  />
            </symbol>
         </svg>
         <div class="wrapper">
            <div class="connect">
               <a href="https://twitter.com/MGubaz" class="share twitter">
                  <svg role="presentation" class="svg--icon">
                     <use xlink:href="#svg--twitter" />
                  </svg>
                  <span class="clip">TWITTER</span>
               </a>
               <a href="" rel="author" class="share google">
                  <svg role="presentation" class="svg--icon">
                     <use xlink:href="#svg--google" />
                     <span class="clip">GOOGLE +</span>
                  </svg>
               </a>
               <a href="https://www.facebook.com/GubazM" rel="author" class="share facebook">
                  <svg role="presentation" class="svg--icon">
                     <use xlink:href="#svg--facebook" />
                     <span class="clip">FACEBOOK</span>
                  </svg>
               </a>
               <a href="https://github.com/Gubaz" class="share github">
                  <svg role="presentation" class="svg--icon">
                     <use xlink:href="#svg--github" />
                     <span class="clip">GITHUB</span>
                  </svg>
               </a>
               <a href="https://www.pinterest.com/Gubazi/" class="share  pinterest">
                  <svg role="presentation" class="svg--icon">
                     <use xlink:href="#svg--pinterest" />
                     <span class="clip">PINTEREST</span>
                  </svg>
               </a>
               <a href="https://www.youtube.com/user/gubazi19" class="share  youtube">
                  <svg role="presentation" class="svg--icon">
                     <use xlink:href="#svg--youtube" />
                     <span class="clip">YOU-TUBE</span>
                  </svg>
               </a>
            </div>
         </div>
      </div>
      <!-- Container (skills Section) -->
      <div id="skills" class="container-fluid text-center bg-light">
         <h2>SKILLS</h2>
         <h4>What I offer</h4>
         <br>
         <div class="row slideanim">
            <div class="col-sm-4">
               <div class="chart" data-percent="70">65%</div>
               <h4>HTML&CSS</h4>
            </div>
            <div class="col-sm-4">
               <div class="chart" data-percent="70">70%</div>
               <h4>Java</h4>
            </div>
            <div class="col-sm-4">
               <div class="chart" data-percent="70">80%</div>
               <h4>Android</h4>
            </div>
         </div>
         <br><br>
         <div class="row slideanim">
            <div class="col-sm-4">
               <div class="chart" data-percent="70">60%</div>
               <h4>Javascript&jQuery</h4>
            </div>
            <div class="col-sm-4">
               <div class="chart" data-percent="70">75%</div>
               <h4>SQL&SQLite</h4>
            </div>
            <div class="col-sm-4">
               <div class="chart" data-percent="70">85%</div>
               <h4>JSON&XML</h4>
            </div>
         </div>
      </div>
      <section id="portfolio" class="bg-light-gray bounds">
         </br>
         </br>
         </br>
         <div class="container">
            <div class="row">
               <div class="col-lg-12 text-center">
                  <h1 class="section-heading">
                     Portfolio 
                  </h1>
                  <h3 id="below-section" class="section-subheading text-muted" style="opacity:0;"> Below are a collection of my recent works. </h3>
               </div>
            </div>
            <!--Portfolio img1-->
            <div class="row">
               <div class="col-md-4 col-sm-6 portfolio-item">
                  <a href="#" target="_blank" class="portfolio-link" data-toggle="modal">
                     <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                           <i class="fa fa-fire fa-3x"></i>
                        </div>
                     </div>
                     <img src="img/portfolio/app_page.png"alt="">
                  </a>
                  <div class="portfolio-caption">
                     <h4> Android App </h4>
                     <p id="small-text" class="text-muted"> shortly about that app </p>
                  </div>
               </div>
               <!--End of Portfolio img 1-->
               <!--Portfolio img 2-->
               <div class="col-md-4 col-sm-6 portfolio-item">
                  <a href="#" target="_blank" class="portfolio-link" data-toggle="modal">
                     <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                           <i class="fa fa-fire fa-3x"></i>
                        </div>
                     </div>
                     <img
                        src="img/portfolio/web-page.png" alt="">
                  </a>
                  <div class="portfolio-caption">
                     <h4> WebPage</h4>
                     <p id="small-text" class="text-muted">Django/HTML/CSS/Bootstrap </p>
                  </div>
               </div>
               <!--End of Portfolio img 2-->
               <!--Portfolio img 3 -->
               <div class="col-md-4 col-sm-6 portfolio-item">
                  <a href="#" target="_blank" class="portfolio-link" data-toggle="modal">
                     <div class="portfolio-hover">
                        <div class="portfolio-hover-container">
                           <i class="fa fa-fire fa-3x"> </i>
                        </div>
                     </div>
                     <img
                        src="img/portfolio/app_page.png"
                        class="img-responsive" alt="">
                  </a>
                  <div class="portfolio-caption">
                     <h4> this Web Page </h4>
                     <p id="small-text" class="text-muted">Bootstrap/CSS/HTML</p>
                  </div>
               </div>
               <!--End of Portfolio img 3-->
            </div>
         </div>
         <div id="et-main-area" class="left-diagonal">
         </div>
      </section>
      <!-- Container (Contact Section) -->
      <div id="contact" class="container-fluid bg-grey">
         <h2 style="color:#ffffff" class="text-center">CONTACT</h2>
         <div class="row">
            <div class="col-sm-5">
               <p>Contact Me and I'll get back to you within 24 hours.</p>
               <p><span class="glyphicon glyphicon-map-marker"></span> Tbilisi, Georgia</p>
               <p><span class="glyphicon glyphicon-phone"></span> +995 555 359 353</p>
               <p><span class="glyphicon glyphicon-envelope"></span> Gubazi19@gmail.com</p>
            </div>
            <div class="col-sm-7 slideanim">
               <div class="row">
                  <div class="col-sm-6 form-group">
                     <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                  </div>
                  <div class="col-sm-6 form-group">
                     <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                  </div>
               </div>
               <textarea class="form-control" id="message" name="message" placeholder="Comment" rows="5"></textarea>
               <br>
               <div class="row">
                  <div class="col-sm-12 form-group">
                     <button class="btn btn-default pull-right" type="submit">Send</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="map" id="googleMap" style=" height:500px;width:100%;"></div>
      <!-- Add Google Maps -->
      <script src="http://maps.googleapis.com/maps/api/js"></script>
      <script>
         var myCenter = new google.maps.LatLng(41.716667, 44.783333);
         
         function initialize() {
         var mapProp = {
           center:myCenter,
           zoom:12,
           scrollwheel:false,
           draggable:false,
           mapTypeId:google.maps.MapTypeId.ROADMAP
           };
         
         var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
         
         var marker = new google.maps.Marker({
           position:myCenter,
           });
         
         marker.setMap(map);
         }
         
         google.maps.event.addDomListener(window, 'load', initialize);
      </script>
      <footer style="background-color:#1D2026;width=100%;" class="container-fluid text-center">
         <a href="#myPage" title="To Top">
         <span class="glyphicon glyphicon-chevron-up"></span>
         </a>
         <p>Created And Designed By Gubaz</p>
      </footer>
      <script>
         $(document).ready(function(){
           // Add smooth scrolling to all links in navbar + footer link
           $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
         
             // Prevent default anchor click behavior
             event.preventDefault();
         
             // Store hash
             var hash = this.hash;
         
             // Using jQuery's animate() method to add smooth page scroll
             // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
             $('html, body').animate({
               scrollTop: $(hash).offset().top
             }, 900, function(){
            
               // Add hash (#) to URL when done scrolling (default click behavior)
               window.location.hash = hash;
             });
           });
           
           $(window).scroll(function() {
             $(".slideanim").each(function(){
               var pos = $(this).offset().top;
         
               var winTop = $(window).scrollTop();
                 if (pos < winTop + 600) {
                   $(this).addClass("slide");
                 }
             });
           });
         })
      </script>  
      <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
      <script src='http://rendro.github.io/easy-pie-chart/javascripts/jquery.easy-pie-chart.js'></script>
      <script>
         $(function() {
         $('.chart').easyPieChart({
         scaleColor: "#ecf0f1",
         lineWidth: 20,
         lineCap: 'butt',
         barColor: '#1abc9c',
         trackColor:	"#ecf0f1",
         size: 160,
         animate: 500
         });
         });
      </script>
      <!-- script for particles background -->
      <script src="<?php echo base_url()?>js/index.js"></script>
      <script src='http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js'></script>
      <script src='http://threejs.org/examples/js/libs/stats.min.js'></script>
      <script src="<?php echo base_url()?>assets/js/particles.js"></script>
   </body>
</html>