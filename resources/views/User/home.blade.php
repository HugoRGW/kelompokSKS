<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Ekstraku &mdash; Kelompok-SKS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    {{-- //dari stamina --}}
   
      <link rel="stylesheet" href="{{ asset('stamina/css/jquery.fancybox.min.css') }}">
      <link rel="stylesheet" href="{{ asset('stamina/css/style.css') }}">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-logo">
          <a href="#"><img src="images/logo.png" alt="Image"></a>
        </div>
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar absolute transparent" role="banner">
      <div class="py-3">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-6 col-md-3">
              <a href="#" class="text-secondary px-2 pl-0"><span class="icon-facebook"></span></a>
              <a href="#" class="text-secondary px-2"><span class="icon-instagram"></span></a>
              <a href="#" class="text-secondary px-2"><span class="icon-twitter"></span></a>
              <a href="#" class="text-secondary px-2"><span class="icon-linkedin"></span></a>
            </div>
            <div class="col-6 col-md-9 text-right">
              <div class="d-inline-block"><a href="#" class="text-secondary p-2 d-flex align-items-center"><span class="icon-envelope mr-3"></span> <span class="d-none d-md-block">youremail@domain.com</span></a></div>
              <div class="d-inline-block"><a href="#" class="text-secondary p-2 d-flex align-items-center"><span class="icon-phone mr-0 mr-md-3"></span> <span class="d-none d-md-block">+1 232 3532 321</span></a></div>
            </div>
          </div>
        </div>
      </div>
      <nav class="site-navigation position-relative text-right bg-black text-md-right" role="navigation">
        <div class="container position-relative">
          <div class="site-logo">
            <a href="index.html"><img src="images/smk8ku.png"  style="width: 130px" alt="logo"></a>
          </div>

          <div class="d-inline-block d-md-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

          <ul class="site-menu js-clone-nav d-none d-md-block">
            <li><a href="/">Beranda</a></li>
            <li><a href="/artikel">Artikel</a> </li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="{{ route('login') }}" class="btn btn-primary text-light">Masuk</a></li> 
            <li><a href="" class="btn btn-light text-dark" >Daftar</a></li>
          </ul>
        </div>
      </nav>
    </header>
    


    <div class="slide-one-item home-slider owl-carousel">
      <div class="site-blocks-cover overlay" style="background-image: url(images/jepangku.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-start">
            <div class="col-md-6 text-center text-md-left" data-aos="fade-up" data-aos-delay="400">
              <h1>Ekstrakulikuler SMKN 8 Malang</h1>
              <p><a href="#" class="btn btn-primary btn-sm rounded-0 py-3 px-5">Read More</a></p>
            </div>
          </div>
        </div>
      </div>  

      <div class="site-blocks-cover overlay" style="background-image: url(images/bdiku.jpeg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-start">
            <div class="col-md-6 text-center text-md-left" data-aos="fade-up" data-aos-delay="400">
            <h1>Ekstrakulikuler SMKN 8 Malang</h1>
              <p><a href="#" class="btn btn-primary btn-sm rounded-0 py-3 px-5">Read More</a></p>
            </div>
          </div>
        </div>
      </div>  

      <div class="site-blocks-cover overlay" style="background-image: url(images/pramuka.jpeg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-start">
            <div class="col-md-6 text-center text-md-left" data-aos="fade-up" data-aos-delay="400">
            <h1>Ekstrakulikuler SMKN 8 Malang</h1>
              <p><a href="#" class="btn btn-primary btn-sm rounded-0 py-3 px-5">Read More</a></p>
            </div>
          </div>
        </div>
      </div>  
    </div>

 <div class="site-section" id="schedule-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8  section-heading">
            <span class="subheading">Jadwal Ekskul</span>
            <h2 class="heading mb-3">Schedule</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
              texts.
              Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          </div>
        </div>

        
        <div class="row">
          <div class="col-12">
            <ul class="nav days d-flex" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="sunday-tab" data-toggle="tab" href="#nav-sunday" role="tab" aria-controls="sunday"
                  aria-selected="true">S</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="monday-tab" data-toggle="tab" href="#nav-monday" role="tab" aria-controls="monday"
                  aria-selected="false">M</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="tuesday-tab" data-toggle="tab" href="#nav-tuesday" role="tab" aria-controls="tuesday"
                  aria-selected="false">T</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="wednesday-tab" data-toggle="tab" href="#nav-wednesday" role="tab" aria-controls="wednesday"
                  aria-selected="false">W</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" id="thursday-tab" data-toggle="tab" href="#nav-thursday" role="tab" aria-controls="thursday"
                  aria-selected="false">T</a>
              </li><li class="nav-item">
                <a class="nav-link" id="friday-tab" data-toggle="tab" href="#nav-friday" role="tab" aria-controls="friday"
                  aria-selected="false">F</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="saturday-tab" data-toggle="tab" href="#nav-saturday" role="tab" aria-controls="saturday"
                  aria-selected="false">S</a>
              </li>
            </ul>
          </div>
        </div>

        <div class="tab-content">
          <div class="tab-pane fade show active" id="nav-sunday" role="tabpanel" aria-labelledby="nav-sunday-tab">
            <div class="row">
              <div class="col-lg-6">
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_1.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Sunday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #1</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
            
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_2.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Sunday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #2</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
            
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_3.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Sunday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #3</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
            
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_4.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Sunday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #4</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
            
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_1.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Sunday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #5</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
            
            
              </div>
              <div class="col-lg-6">
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_1.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Sunday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #1</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
            
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_2.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Sunday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #2</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
            
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_3.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Sunday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #3</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
            
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_4.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Sunday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #4</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
            
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_1.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Sunday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #5</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="nav-monday" role="tabpanel" aria-labelledby="nav-monday-tab">
            <div class="row">
              <div class="col-lg-6">
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_4.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Monday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #4</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_1.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Monday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #1</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_2.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Monday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #2</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/bdiku.jpeg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Monday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #3</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_1.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Monday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #5</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
          
              </div>
              <div class="col-lg-6">
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_1.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Monday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #1</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_2.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Monday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #2</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_3.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Monday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #3</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_4.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Monday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #4</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_1.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Monday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #5</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="nav-tuesday" role="tabpanel" aria-labelledby="nav-tuesday-tab">
            <div class="row">
              <div class="col-lg-6">
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_2.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Tuesday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #2</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_1.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Tuesday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #1</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_3.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Tuesday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #3</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_4.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Tuesday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #4</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_1.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Tuesday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #5</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
          
              </div>
              <div class="col-lg-6">
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_3.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Tuesday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #3</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_1.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Tuesday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #1</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_2.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Tuesday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #2</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_4.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Tuesday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #4</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_1.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Tuesday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #5</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="nav-wednesday" role="tabpanel" aria-labelledby="nav-wednesday-tab">
            <div class="row">
              <div class="col-lg-6">
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_2.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Wednesday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #2</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_1.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Wednesday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #1</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
          
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_3.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Wednesday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #3</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_4.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Wednesday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #4</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_1.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Wednesday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #5</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
          
              </div>
              <div class="col-lg-6">
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_3.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Wednesday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #3</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_1.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Wednesday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #1</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_2.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Wednesday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #2</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
          
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_4.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Wednesday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #4</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_1.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Wednesday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #5</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="nav-thursday" role="tabpanel" aria-labelledby="nav-thursday-tab">
            <div class="row">
              <div class="col-lg-6">
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_4.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Thursday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #4</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_1.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Thursday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #1</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_2.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Thursday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #2</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_3.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Thursday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #3</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
          
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_1.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Thursday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #5</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
          
              </div>
              <div class="col-lg-6">
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_1.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Thursday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #1</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_2.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Thursday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #2</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_3.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Thursday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #3</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_4.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Thursday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #4</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_1.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Thursday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #5</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="nav-friday" role="tabpanel" aria-labelledby="nav-friday-tab">
            <div class="row">
              <div class="col-lg-6">
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_2.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Friday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #2</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_1.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Friday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #1</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
          
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_3.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Friday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #3</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_4.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Friday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #4</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_1.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Friday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #5</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
          
              </div>
              <div class="col-lg-6">
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_3.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Friday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #3</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_1.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Friday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #1</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_2.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Friday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #2</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
          
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_4.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Friday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #4</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_1.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Friday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #5</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="nav-saturday" role="tabpanel" aria-labelledby="nav-saturday-tab">
            <div class="row">
              <div class="col-lg-6">
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_1.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Saturday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #1</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_2.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Saturday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #2</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
                
          
          
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_3.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Saturday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #3</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_4.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Saturday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #4</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_1.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Saturday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #5</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
          
              </div>
              <div class="col-lg-6">
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_3.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Saturday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #3</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_1.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Saturday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #1</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_2.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Saturday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #2</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
          
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_4.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Saturday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #4</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
          
                <div class="class-item d-flex align-items-center">
                  <a href="single.html" class="class-item-thumbnail">
                    <img src="images/img_1.jpg" alt="Free website template by Free-Template.co">
                  </a>
                  <div class="class-item-text">
                    <span>Saturday 7:30am - 9:00am</span>
                    <h2><a href="single.html">EKSKUL #5</a></h2>
                    <span>By Justin Daniel</span>,
                    <span>30 minutes</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>

    <div class="site-section block-13 bg-primary fixed overlay-primary bg-image" style="background-image: url('images/extra.jpeg');"  data-stellar-background-ratio="0.5">

      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12 text-center">
            <h2 class="text-white">Ekstrakurikuler</h2>
          </div>
        </div>

        <div class="row">
          <div class="nonloop-block-13 owl-carousel">
        <div class="item">
          <!-- uses .block-12 -->
          <div class="block-12">
            <figure>
              <img src="images/bdiku.jpeg" alt="Image" class="img-fluid">
            </figure>
            <div class="text">
              <span class="meta">May 20th 2018</span>
              <div class="text-inner">
                <h2 class="heading mb-3"><a href="#" class="text-black">LOREM IPSUM</a></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa, consectetur! Eligendi illo, repellat repudiandae cumque fugiat optio!</p>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="block-12">
            <figure>
              <img src="images/bdiku.jpeg" alt="Image" class="img-fluid">
            </figure>
            <div class="text">
              <span class="meta">May 20th 2018</span>
              <div class="text-inner">
                <h2 class="heading mb-3"><a href="#" class="text-black">LOREM IPSUM</a></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa, consectetur! Eligendi illo, repellat repudiandae cumque fugiat optio!</p>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="block-12">
            <figure>
              <img src="images/bdiku.jpeg" alt="Image" class="img-fluid">
            </figure>
            <div class="text">
              <span class="meta">May 20th 2018</span>
              <div class="text-inner">
                <h2 class="heading mb-3"><a href="#" class="text-black">LOREM IPSUM</a></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa, consectetur! Eligendi illo, repellat repudiandae cumque fugiat optio!</p>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="block-12">
            <figure>
              <img src="images/img_4.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="text">
              <span class="meta">May 20th 2018</span>
              <div class="text-inner">
                <h2 class="heading mb-3"><a href="#" class="text-black">LOREM IPSUM</a></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa, consectetur! Eligendi illo, repellat repudiandae cumque fugiat optio!</p>
              </div>
            </div>
          </div>
        </div>
      
        
      </div>
        </div>
      </div>
      
    </div>


    
    
    <footer class="site-footer border-top">
      <div class="container">
       
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              <a href="#" target="_blank" >KELOMPOK SKS</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>