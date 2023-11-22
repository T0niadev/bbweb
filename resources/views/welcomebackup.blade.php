<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="{{ asset('images/logo.png') }}"type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:300,300i,400,500,600,700,800,900,900i%7CRoboto:400%7CRubik:100,400,700">
    <link rel="stylesheet" href= "{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href= "{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" href= "{{ asset('css/style.css') }}">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src= "{{ asset('images/ie8-panel/warning_bar_0000_us.jpg') }}"  height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
      </div>
    </div>
    <div class="page" >
      <!-- Page Header-->
      <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!-- RD Navbar Panel-->
                    <div class="rd-navbar-panel">
                    <!-- RD Navbar Toggle-->
                    <button class="rd-navbar-toggle"  data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                    <!-- RD Navbar Brand-->
                    <div class="rd-navbar-brand"><a href="index.html"><img class="brand-logo-light" src= "{{ asset('images/logo.png') }}" alt="" width="207" height="51"/></a></div>
                    </div>
                    <div class="rd-navbar-main-element">
                    <div class="rd-navbar-nav-wrap">
                        <!-- RD Navbar Nav-->
                        <ul class="rd-navbar-nav">
                        <li class="rd-nav-item"><a class="rd-nav-link" href="index.html">Home</a>
                        </li>
                        <li class="rd-nav-item"><a class="rd-nav-link" href="about-us.html">About Us</a>
                        </li>
                        <li class="rd-nav-item"><a class="rd-nav-link" href="typography.html">Typography</a>
                        </li>
                        <li class="rd-nav-item"><a class="rd-nav-link" href="contacts.html">Contacts</a>
                        </li>
                        </ul><a class="button button-primary button-sm" href="#">Donate</a>
                    </div>
                    </div><a class="button button-primary button-sm"  href="#">Donate</a>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!-- Swiper-->
      <section class="section section-lg section-main-bunner section-main-bunner-filter">
        <!-- <div>
            <img class="main-bunner-img" src= "{{ asset('images/mm.jpg') }}" style="background-size: cover;">
        </div> -->
        <div class="main-bunner-img" style="background-image: url(&quot;{{ asset(('images/section1/'. $section1->image1) ) }}&quot;); background-size: cover;"></div>
        <div class="main-bunner-inner">
          <div class="container">
            <div class="row row-50 justify-content-lg-center align-items-lg-center">
              <div class="col-lg-12">
                <div class="bunner-content-modern text-center">
                    <h1 class="main-bunner-title">{{$section1->text1}}</h1>
                    <p>{{$section1->text2}}</p>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-lg bg-gray-1 bg-gray-1-decor" style="background-color:#ffeff1";
         <!-- style="background-color:#FAEFFD;" -->
      >
        <div class="container">
          <div class="row row-50">
            <div class="col-lg-6 pr-xl-5"><img src= "{{ asset('images/section2/'. $section2->image1) }}" alt="" width="518" height="430"/>
            </div>
            <div class="col-lg-6">
              <h3>{{$section2->text1}}</h3>
              <div class="text-with-divider">
                <!-- <div class="divider"></div> -->
                <h4 class="text-opacity-70" style="color:#3a41c6;">{{$section2->text2}}</h4>
              </div>
              <p style="font-size:19px;">{{$section2->text3}}</p>
             
            </div>
          </div>
        </div>
      </section>
      <section class="section section-xl" style="background-color:#F6E4FC;">
        <div class="container" >
          <div class="row justify-content-lg-between">
            
               
                
                
                    <div class="col-lg-6">
                        <div class="row row-50">
                            <div class="col-md-6 col-lg-12">
                                <div class="box-icon-modern">
                            
                                    <div class="box-icon-caption">
                                        
                                        <h4 style="font-size:30px;color:#ed7014; "><a href="#">Our Mission</a></h4>
                                        
                                        <p style="font-size:22px;">{{$section2->mission}}</p>
                                        

                                    </div>
                                 
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-12 mt-6">
                                <div class="box-icon-modern">
                                
                                    <div class="box-icon-caption">
                                        <h4 style="font-size:30px;color:#ed7014;"><a href="#">Our Vision</a></h4>
                                        <p style="font-size:22px;" >{{$section2->vision}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>    
                 
                    <div class="col-lg-6">
                        <div class="innset-xl-left-30">
                            <div class="box-img-animate">
 
                                <div class="box-img-animate-item" data-parallax-scroll="{&quot;y&quot;:60, &quot;x&quot;: 70,  &quot;smoothness&quot;: 50 }"><img src="{{ asset('images/section2/'. $section2->image2) }}" alt=""></div>
                               
                            </div>
                        </div>
                     </div>
                 
                  
              
          </div>
        </div>
      </section>
      <section class="section section-xl" style="background-color:#EDC9F9;"
      <!-- style="background-color:#977ca0;" -->
      >
        <div class="container">
          <div class="row justify-content-lg-between">
                <div class="col-lg-6">
                <div class="box-img-animate">
                    <div class="box-img-animate-item" data-parallax-scroll="{&quot;y&quot;: 0, &quot;x&quot;: 140,  &quot;smoothness&quot;: 50 }"><img src="{{ asset('images/section3/'. $section3->image1) }}" alt=""></div>
                    <div class="box-img-animate-item" data-parallax-scroll="{&quot;y&quot;: 150, &quot;x&quot;: 0,  &quot;smoothness&quot;: 50 }"><img src="{{ asset('images/section3/'. $section3->image2) }}" alt=""></div>
                    <!-- <div class="box-img-animate-item" data-parallax-scroll="{&quot;y&quot;:70, &quot;x&quot;: -250,  &quot;smoothness&quot;: 50 }"><img src="{{ asset('images/7.jpeg') }}" alt=""></div>
                    <div class="box-img-animate-item" data-parallax-scroll="{&quot;y&quot;:20, &quot;x&quot;: 20,  &quot;smoothness&quot;: 50 }"><img src="{{ asset('images/6.jpg') }}" alt=""></div> -->
                    <div class="" style="height: 170px;"><img src="{{ asset('images/section3/'. $section3->image3) }}" style="max-height: 20%;"></div>
                    <div class="box-img-animate-item" data-parallax-scroll="{&quot;y&quot;:60, &quot;x&quot;: 70,  &quot;smoothness&quot;: 50 }"><img src="{{ asset('images/7.jpeg') }}" alt=""></div>
                    <div class="" style="height: 100px;"><img src="{{ asset('images/section3/'. $section3->image4) }}" style="max-height: 20%;"></div>
                    <div class="box-img-animate-item" data-parallax-scroll="{&quot;y&quot;:0, &quot;x&quot;: 140,  &quot;smoothness&quot;: 50 }"><img src="{{ asset('images/6.jpg') }}"alt=""></div>
                </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                <div class="innset-xl-left-30">
                    <h3 style="color:#3a41c6;">Aims and Objectives</h3>
                    <p class="text-opacity-80" style="font-size:20px;">{{$section3->details}}</p>
                    <div class="row row-50">
                    <div class="col-md-6 col-lg-12">
                        <div class="box-icon-modern">
                        <div class="box-icon-inner decorate-triangle"><span style="color:#3a41c6;" class="icon-xl linearicons-umbrella2 icon-primary"></span></div>
                        <div class="box-icon-caption">
                            <h4 style="font-size:30px;"><a href="#">{{$section3->heading1}}</a></h4>
                            <p style="font-size:19px;">{{$section3->text1}}</p>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-12 mt-2">
                        <div class="box-icon-modern">
                        <div class="box-icon-inner decorate-circle"><span style="color:#3a41c6;" class="icon-xl linearicons-sun icon-primary"></span></div>
                        <div class="box-icon-caption">
                            <h4 style="font-size:30px;"><a href="#">{{$section3->heading2}}</a></h4>
                            <p style="font-size:19px;">{{$section3->text2}}</p>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-12 mt-2">
                        <div class="box-icon-modern">
                        <div class="box-icon-inner decorate-rectangle"><span style="color:#3a41c6;" class="icon-xl linearicons-baby2 icon-primary"></span></div>
                        <div class="box-icon-caption">
                            <h4 style="font-size:30px;"><a href="#">{{$section3->heading3}}</a></h4>
                            <p style="font-size:19px;">{{$section3->text4}}</p>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-12 mt-2">
                        <div class="box-icon-modern">
                        <div class="box-icon-inner decorate-rectangle"><span style="color:#3a41c6;" class="icon-xl linearicons-wallet icon-primary"></span></div>
                        <div class="box-icon-caption">
                            <h4 style="font-size:30px;"><a href="#">{{$section3->heading4}}</a></h4>
                            <p style="font-size:19px;">{{$section3->text4}}</p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
          </div>
        </div>
      </section>
      <section class="section section-lg bg-gray-1 bg-gray-1-decor" style="background-color:#F6E4FC">
        <div class="container">
          <div class="row row-50">
           
            <div class="col-lg-6">
              <h3 style="color:#3a41c6">{{$section4->heading}}</h3>
              <div class="text-with-divider">
                <!-- <div class="divider"></div> -->
                
              </div>
              <p style="font-size:19px;">{{$section4->text}}</p>
             
            </div>
            <div class="col-lg-6 pr-xl-5">
              <iframe width="600" height="500" src="{{$section4->video}}">
             </iframe>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-lg bg-gray-1" style="background-color:#f5efff;">
        <div class="container">
          <div class="row justify-content-center text-center">
            <div class="col-md-9 col-lg-7 wow-outer">
              <div class="wow slideInDown">
                <h3 style="color:#130632" >Team behind BrfAfrica</h3>
                <p style="color:#130632" >Our work would not be possible without the work of our dedicated volunteers</p>
              </div>
            </div>
          </div>
          <div class="row row-50">
            @foreach ($teams as $team)
              <div class="col-md-6 col-lg-4 wow-outer">
                <div class="wow fadeInUp">
                  <article class="box-causes">
                    <div class="box-causes-img"><img src="{{ asset('images/teams/'. $team->image) }}" alt="" width="372" height="396"/><a class="button button-sm button-primary" href="#">Donate</a>
                    </div>
                    <h4 class="font-weight-medium"><a href="#">{{$team->name}}</a></h4>
                    <p>{{$team->role}}</p>
                  </article>
                </div>
              </div>
            @endforeach
            
            
          </div>
        </div>
      </section>
      <section class="section section-lg bg-gray-1" 
       style="background-color:#F6E4FC;"
       >
        <div class="container">
          <h3 style="color:#130632" class="text-center">Testimonial</h3>
          <div class="row no-gutters" style="background-color:#F6E4FC;">
            @foreach($testimonials as $testimonial)
              <div class="col-md-6 col-lg-4">
                <div class="team-classic">
                  <div class="team-classic-figure"><img src="{{ asset('images/testimonials/'. $testimonial->image) }}" alt="" width="390" height="252"/>
                    <ul class="team-classic-soc-list">
                      <li><a class="icon icon-md fa-facebook" href="#"></a></li>
                      <li><a class="icon icon-md fa-instagram" href="#"></a></li>
                      <li><a class="icon icon-md fa-twitter" href="#"></a></li>
                    </ul>
                  </div>
                  <div class="team-classic-caption">
                    <p>{{$testimonial->description}}</p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>                
                    <h4><a class="team-name" href="#">{{$testimonial->name}} </a></h4>
                    <p>{{$testimonial->role}}</p>
                    
                  </div>
                </div>
              </div>
            @endforeach
            
        
            
            
       
          </div>
        </div>
      </section>
      <section class="parallax-container bg-gray-600"  style="background-color:#FAEFFD;">
        <div class="parallax-content section-xxl text-center" style="background-color:#FAEFFD;">
          <div class="container">
            <div class="row justify-content-md-center">
              <div class="col-md-9 col-lg-8 col-xl-8 wow-outer">
                <div class="innset-xl-right-30 innset-xl-left-30">
                  <div class="wow slideInDown">
                    <h3 style="color:#3a41c6">Subscribe to Stay Informed</h3>
                    <form class="rd-form rd-mailform rd-form-inline" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                      <div class="form-wrap">
                        <input class="form-input" id="subscribe-form-email" type="email" name="email">
                        <label class="form-label" for="subscribe-form-email">Your E-mail</label>
                      </div>
                      <div class="form-button">
                        <button class="button button-primary button-lg" type="submit">Subscribe</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Page Footer-->
      <footer class="section footer-minimal context-dark" style="background-color:#EDC9F9">
        <div class="container wow-outer">
          <div class="wow fadeIn">
            <div class="row row-50 row-lg-60">
              <div class="col-12"><a href="index.html"><img src="{{ asset('images/logo.png') }}" alt="" width="207" height="51"/></a></div>
              <div class="col-12">
                <ul class="footer-minimal-nav">
                  <li><a href="about-us.html" style="color:#130632">About Us</a></li>
                  <li><a href="#" style="color:#130632">Causes</a></li>
                  <li><a href="#" style="color:#130632">Gallery</a></li>
                  <li><a href="#" style="color:#130632">Team</a></li>
                  <li><a href="contacts.html" style="color:#130632">Contacts</a></li>
                </ul>
              </div>
              <div class="col-12">
                <ul class="social-list">
                  <li style="color:#130632"><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-facebook"style="color:#130632" href="#"></a></li>
                  <li style="color:#130632"><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-instagram" style="color:#130632" href="#"></a></li>
                  <li style="color:#130632"><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-twitter" style="color:#130632" href="#"></a></li>
                  <li style="color:#130632"><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-youtube-play"  style="color:#130632" href="#"></a></li>
                  <li style="color:#130632"><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-pinterest-p" style="color:#130632" href="#"></a></li>
                </ul>
              </div>
            </div>
            <p class="rights" style="color:#130632"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span style="color:#130632">Helper</span><span>.&nbsp;</span><span style="color:#130632">All Rights Reserved.</span><span>&nbsp;</span style="color:#130632">Design&nbsp;by&nbsp;<a href="https://www.templatemonster.com/" style="color:#130632">Templatemonster</a></p>
          </div>
        </div>
      </footer>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="{{ asset('js/core.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}" ></script>
    <!-- coded by ragnar-->
  </body>
</html>