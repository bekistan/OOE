
@include('layouts.app')
@if (!Auth::guest())
<link href="asset/img/favicon.png" rel="icon">
<link href="asset/img/apple-touch-icon.png" rel="apple-touch-icon">


<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Satisfy" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="{{ asset('asset/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
<link href="{{asset('asset/glightbox/css/glightbox.min.css')}}" rel="stylesheet">

<link href="{{asset('asset/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
<link href="{{asset('asset/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">


</head>

 
<section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title">
        <span>Multimedia</span>
        <h2>Multimedia</h2>
        <p>Audios and Videos posted by expertise you follow</p>
      </div>

      <ul id="portfolio-flters" class="d-flex justify-content-center">
        <li data-filter="*" class="filter-active">All</li>
        <li data-filter=".filter-video">VIDEO</li>
        <li data-filter=".filter-audio">AUDIO</li>
       
      </ul>

      <div class="row portfolio-container">

        
        @foreach ($multimedia as $post)

        <div class="col-lg-4 col-md-6 portfolio-item filter-video">
          
          <div class="portfolio-img"><img src="..\storage\multimedias\{{$post->cover}}" class="img-fluid" alt=""></div>
          <div class="portfolio-info">
            <h4>{{$post->title}}</h4>
            
            <a href="..\storage\multimedias\{{$post->cover}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Book 1"><i class="bx bx-plus"></i></a>
            <a href="http://localhost/OOE/public/multimedia/{{$post->id}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>  
       
        @endforeach
        

        @foreach ($multimedia2 as $post2)
        
        <div class="col-lg-4 col-md-6 portfolio-item filter-audio">
          <div class="portfolio-img"><img src="..\storage\multimedias\{{$post2->cover}}" class="img-fluid" alt=""></div>
          <div class="portfolio-info">
            <h4>{{$post2->title}}</h4>
            <a href="storage\multimedias\{{$post2->cover}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
            <a href="http://localhost/OOE/public/multimedia/{{$post2->id}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
        @endforeach



       



      </div>

    </div>
  
  
  

  <!-- Vendor JS Files -->
  <script src="http://localhost/OOE/public/asset/purecounter/"></script>
  <script src="http://localhost/OOE/public/asset/glightbox/js/glightbox.min.js"></script>
  <script src="http://localhost/OOE/public/asset/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="http://localhost/OOE/public/asset/swiper/swiper-bundle.min.js"></script>
  <script src="http://localhost/OOE/public/asset/waypoints/noframework.waypoints.js"></script>
  <script src="http://localhost/OOE/public/asset/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="http://localhost/OOE/public/asset/js/main.js"></script>
  </body>
@endif
<style>

body {
  font-family: "Open Sans", sans-serif;
  color: #444444;
}

a {
  color: #ffb727;
  text-decoration: none;
}

a:hover {
  color: #ffc85a;
  text-decoration: none;
}

h1, h2, h3, h4, h5, h6 {
  font-family: "Raleway", sans-serif;
}

/*--------------------------------------------------------------
# Back to top button
--------------------------------------------------------------*/
.back-to-top {
  position: fixed;
  visibility: hidden;
  opacity: 0;
  right: 15px;
  bottom: 15px;
  z-index: 996;
  background: #ffb727;
  width: 40px;
  height: 40px;
  border-radius: 4px;
  transition: all 0.4s;
}
.back-to-top i {
  font-size: 28px;
  color: #fff;
  line-height: 0;
}
.back-to-top:hover {
  background: #ffc550;
  color: #fff;
}
.back-to-top.active {
  visibility: visible;
  opacity: 1;
}

/*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
#header {
  z-index: 997;
  transition: all 0.5s;
  height: 80px;
  background: rgba(25, 28, 31, 0.8);
}
#header.header-transparent {
  background: transparent;
}
#header.header-scrolled {
  height: 60px;
  background: rgba(25, 28, 31, 0.8);
}

/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
/**
* Desktop Navigation 
*/
.navbar {
  padding: 0;
}
.navbar ul {
  margin: 0;
  padding: 0;
  display: flex;
  list-style: none;
  align-items: center;
}
.navbar li {
  position: relative;
}
.navbar a, .navbar a:focus {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 10px 15px;
  color: rgb(2, 2, 2);
  white-space: nowrap;
  transition: 0.3s;
  font-size: 12px;
  font-family: "Raleway", sans-serif;
  text-transform: uppercase;
  font-weight: 600;
  letter-spacing: 1px;
}
.navbar a i, .navbar a:focus i {
  font-size: 12px;
  line-height: 0;
  margin-left: 5px;
}
.navbar a:hover, .navbar .active, .navbar .active:focus, .navbar li:hover > a {
  color: #ffb727;
}
.navbar .dropdown ul {
  display: block;
  position: absolute;
  left: 14px;
  top: calc(100% + 30px);
  margin: 0;
  padding: 10px 0;
  z-index: 99;
  opacity: 0;
  visibility: hidden;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
  transition: 0.3s;
  border-radius: 4px;
}
.navbar .dropdown ul li {
  min-width: 200px;
}
.navbar .dropdown ul a {
  padding: 10px 20px;
  font-size: 14px;
  text-transform: none;
  font-weight: 400;
  color: #3b434a;
  letter-spacing: 1px;
}
.navbar .dropdown ul a i {
  font-size: 12px;
}
.navbar .dropdown ul a:hover, .navbar .dropdown ul .active:hover, .navbar .dropdown ul li:hover > a {
  color: #ffb727;
}
.navbar .dropdown:hover > ul {
  opacity: 1;
  top: 100%;
  visibility: visible;
}
.navbar .dropdown .dropdown ul {
  top: 0;
  left: calc(100% - 30px);
  visibility: hidden;
}
.navbar .dropdown .dropdown:hover > ul {
  opacity: 1;
  top: 0;
  left: 100%;
  visibility: visible;
}
@media (max-width: 1366px) {
  .navbar .dropdown .dropdown ul {
    left: -90%;
  }
  .navbar .dropdown .dropdown:hover > ul {
    left: -100%;
  }
}

/**
* Mobile Navigation 
*/
.mobile-nav-toggle {
  color: #fff;
  font-size: 28px;
  cursor: pointer;
  display: none;
  line-height: 0;
  transition: 0.5s;
}

@media (max-width: 991px) {
  .mobile-nav-toggle {
    display: block;
  }

  .navbar ul {
    display: none;
  }
}
.navbar-mobile {
  position: fixed;
  overflow: hidden;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  background: rgba(36, 41, 46, 0.9);
  transition: 0.3s;
  z-index: 999;
}
.navbar-mobile .mobile-nav-toggle {
  position: absolute;
  top: 15px;
  right: 15px;
}
.navbar-mobile ul {
  display: block;
  position: absolute;
  top: 55px;
  right: 15px;
  bottom: 15px;
  left: 15px;
  padding: 10px 0;
  border-radius: 10px;
  background-color: #fff;
  overflow-y: auto;
  transition: 0.3s;
}
.navbar-mobile a, .navbar-mobile a:focus {
  padding: 10px 20px;
  font-size: 14px;
  color: #3b434a;
}
.navbar-mobile a:hover, .navbar-mobile .active, .navbar-mobile li:hover > a {
  color: #ffb727;
}
.navbar-mobile .getstarted, .navbar-mobile .getstarted:focus {
  margin: 15px;
}
.navbar-mobile .dropdown ul {
  position: static;
  display: none;
  margin: 10px 20px;
  padding: 10px 0;
  z-index: 99;
  opacity: 1;
  visibility: visible;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
}
.navbar-mobile .dropdown ul li {
  min-width: 200px;
}
.navbar-mobile .dropdown ul a {
  padding: 10px 20px;
}
.navbar-mobile .dropdown ul a i {
  font-size: 12px;
}
.navbar-mobile .dropdown ul a:hover, .navbar-mobile .dropdown ul .active:hover, .navbar-mobile .dropdown ul li:hover > a {
  color: #ffb727;
}
.navbar-mobile .dropdown > .dropdown-active {
  display: block;
}

/*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
#hero {
  width: 100%;
  height: 100vh;
  background: url("../img/fdd.jpg") top right;
  background-size: cover;
  position: relative;
}
#hero:before {
  content: "";
  background: rgba(0, 0, 0, 0.65);
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
}
#hero .hero-container {
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  padding: 0 15px;
}
#hero h1 {
  margin: 0 0 10px 0;
  font-size: 64px;
  font-family: "Satisfy", serif;
  color: #fff;
}
#hero h2 {
  color: #eee;
  margin-bottom: 50px;
  font-size: 13px;
  font-weight: 500;
  letter-spacing: 1px;
  text-transform: uppercase;
}
#hero .btn-scroll {
  transition: 0.4s;
  color: rgba(255, 255, 255, 0.6);
  animation: up-down 1s ease-in-out infinite alternate-reverse both;
}
#hero .btn-scroll i {
  font-size: 48px;
}
#hero .btn-scroll:hover {
  color: #ffb727;
}
@media (min-width: 1024px) {
  #hero {
    background-attachment: fixed;
  }
}
@media (max-width: 575px) {
  #hero h1 {
    font-size: 40px;
  }
  #hero h2 {
    text-align: center;
    margin-bottom: 30px;
  }
}

@-webkit-keyframes up-down {
  0% {
    transform: translateY(5px);
  }
  100% {
    transform: translateY(-5px);
  }
}

@keyframes up-down {
  0% {
    transform: translateY(5px);
  }
  100% {
    transform: translateY(-5px);
  }
}
/*--------------------------------------------------------------
# Sections General
--------------------------------------------------------------*/
section {
  padding: 60px 0;
}

.section-bg {
  background-color: white;
}

.section-title {
  text-align: center;
  padding: 30px 0;
  position: relative;
}
.section-title h2 {
  font-size: 32px;
  font-weight: 700;
  text-transform: uppercase;
  margin-bottom: 20px;
  padding-bottom: 0;
  color: #3b434a;
  position: relative;
  z-index: 2;
}
.section-title span {
  position: absolute;
  top: 30px;
  color: #eef0f2;
  left: 0;
  right: 0;
  z-index: 1;
  font-weight: 700;
  font-size: 52px;
  text-transform: uppercase;
  line-height: 0;
}
.section-title p {
  margin-bottom: 0;
  position: relative;
  z-index: 2;
}
@media (max-width: 575px) {
  .section-title h2 {
    font-size: 28px;
    margin-bottom: 15px;
  }
  .section-title span {
    font-size: 38px;
  }
}

/*--------------------------------------------------------------
# Breadcrumbs
--------------------------------------------------------------*/
.breadcrumbs {
  padding: 20px 0;
  background-color: #f4f5f6;
  min-height: 40px;
  margin-top: 78px;
}
@media (max-width: 992px) {
  .breadcrumbs {
    margin-top: 60px;
  }
}
.breadcrumbs h2 {
  font-size: 24px;
  font-weight: 300;
  margin: 0;
}
@media (max-width: 992px) {
  .breadcrumbs h2 {
    margin: 0 0 10px 0;
  }
}
.breadcrumbs ol {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  padding: 0;
  margin: 0;
  font-size: 14px;
}
.breadcrumbs ol li + li {
  padding-left: 10px;
}
.breadcrumbs ol li + li::before {
  display: inline-block;
  padding-right: 10px;
  color: #6c757d;
  content: "/";
}
@media (max-width: 768px) {
  .breadcrumbs .d-flex {
    display: block !important;
  }
  .breadcrumbs ol {
    display: block;
  }
  .breadcrumbs ol li {
    display: inline-block;
  }
}

/*--------------------------------------------------------------
# About Me
--------------------------------------------------------------*/


/*--------------------------------------------------------------
# My Resume
--------------------------------------------------------------*/
.resume .resume-title {
  font-size: 26px;
  font-weight: 700;
  margin-top: 20px;
  margin-bottom: 20px;
  color: #3b434a;
}
.resume .resume-item {
  padding: 0 0 20px 20px;
  margin-top: -2px;
  border-left: 2px solid #82909c;
  position: relative;
}
.resume .resume-item h4 {
  line-height: 18px;
  font-size: 16px;
  font-weight: 700;
  text-transform: uppercase;
  color: #ffb727;
  margin-bottom: 10px;
}
.resume .resume-item h5 {
  font-size: 16px;
  background: #eef0f2;
  padding: 5px 15px;
  display: inline-block;
  font-weight: 600;
  margin-bottom: 10px;
}
.resume .resume-item ul {
  padding-left: 20px;
}
.resume .resume-item ul li {
  padding-bottom: 10px;
}
.resume .resume-item:last-child {
  padding-bottom: 0;
}
.resume .resume-item::before {
  content: "";
  position: absolute;
  width: 16px;
  height: 16px;
  border-radius: 50px;
  left: -9px;
  top: 0;
  background: #fff;
  border: 2px solid #82909c;
}

/*--------------------------------------------------------------
# My Services
--------------------------------------------------------------*/

.services{
  background-color: #dabf8a;
}
.services .icon-box {
  padding: 30px;
  position: relative;
  overflow: hidden;
  background: #fff;
  box-shadow: 0 10px 29px 0 rgba(75, 43, 126, 0.1);
  transition: all 0.3s ease-in-out;
  text-align: center;
  border: 1px solid #fff;

}
.services .icon {
  margin: 0 auto 20px auto;
  padding-top: 17px;
  display: inline-block;
  text-align: center;
  border-radius: 50%;
  width: 72px;
  height: 72px;
  background: #b2dbe2;
}
.services .icon i {
  font-size: 36px;
  line-height: 1;
  color: #ffb727;
}
.services .title {
  font-weight: 700;
  margin-bottom: 15px;
  font-size: 18px;
}
.services .title a {
  color: #111;
  transition: 0.3s;
}
.services .description {
  font-size: 15px;
  line-height: 28px;
  margin-bottom: 0;
}
.services .icon-box:hover {
  border-color: #ffb727;
}
.services .icon-box:hover .title a {
  color: #ffb727;
}
/*--------------------------------------------------------------
#highlight*/
.theall{
  background-color: #ffdb8f;
  height:600px;

}
.services2 h2{
  margin-left: 45%;
}
.services2 .h2{
  font-weight: bold;
  padding-top: 2%;
  margin-left: 2%;
width: 50%;}
.services2 .icon-box:hover{
  transform: scale3d(1.2,1.2,1.2);
}
.services3 .icon-box:hover{
  transform: scale3d(1.2,1.2,1.2);
}
.services2 .icon-box {
  border-radius: 25%;
  padding: 5px;
  width: 100%;
  position: relative;
  overflow: hidden;
  background: linear-gradient(rgb(138, 197, 160),yellow);
  box-shadow: 0 10px 29px 0 rgba(30, 31, 32, 0.1);
  transition: all 0.3s ease-in-out;
  text-align: center;
  border: 10px solid #fff;
  margin-top: -29%;
}

.services2  img {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  border: 3px solid #ffb727;
  margin: 0 auto;
  
}
.services2 button{
  background: #ffb727;
}
.services2 .title {
  font-weight: 700;
  margin-bottom: 15px;
  font-size: 18px;
}
.services2 .title a {
  color: #111;
  transition: 0.3s;
}
.services2 .description {
  font-size: 15px;
  line-height: 28px;
  margin-bottom: 0;
}
.services2 .icon-box:hover {
  border-color: #ffb727;
}
.services2 .icon-box:hover .title a {
  color: #ffb727;
}
.services2{
  width: 100%;
  margin-top: -4%;
}

/*------------------------------------------------*/

.services3{
  width: 100%;
  margin-left: 45%;
  margin-top: -27%;
}
services3 .icon-box p span{
  float: left;
}
.services3 .icon-box {
  border-radius: 25%;
  padding: 5px;
  width: 100%;
  position: relative;
  overflow: hidden;
  background: linear-gradient(rgb(107, 185, 190),yellow);
  box-shadow: 0 10px 29px 0 rgba(30, 31, 32, 0.1);
  transition: all 0.3s ease-in-out;
  text-align: center;
  border: 10px solid #fff;
}

.services3  img {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  border: 3px solid #ffb727;
  margin: 0 auto;
  
}
.services3 .title {
  font-weight: 700;
  margin-bottom: 15px;
  font-size: 18px;
}
.services3 .title a {
  color: #111;
  transition: 0.3s;
}
.services3 .description {
  font-size: 15px;
  line-height: 28px;
  margin-bottom: 0;
}
.services3 .icon-box:hover {
  border-color: #ffb727;
}
.services3 .icon-box:hover .title a {
  color: #ffb727;
}

/*--------------------------------------------------------------
# Testimonials
--------------------------------------------------------------*/
.testimonials {
  padding: 80px 0;
  background: url("../img/mimi.png") no-repeat;
  background-position: center center;
  background-size: cover;
  position: relative;
}
.testimonials::before {
  content: "";
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  background: rgba(14, 16, 17, 0.7);
}
.testimonials .section-header {
  margin-bottom: 40px;
}
.testimonials .testimonials-carousel, .testimonials .testimonials-slider {
  overflow: hidden;
}
.testimonials .testimonial-item {
  text-align: center;
  color: #fff;
}
.testimonials .testimonial-item .testimonial-img {
  width: 100px;
  border-radius: 50%;
  border: 6px solid rgba(255, 255, 255, 0.15);
  margin: 0 auto;
}
.testimonials .testimonial-item h3 {
  font-size: 20px;
  font-weight: bold;
  margin: 10px 0 5px 0;
  color: #fff;
}
.testimonials .testimonial-item h4 {
  font-size: 14px;
  color: #ddd;
  margin: 0 0 15px 0;
}
.testimonials .testimonial-item .quote-icon-left, .testimonials .testimonial-item .quote-icon-right {
  color: rgba(255, 255, 255, 0.4);
  font-size: 26px;
}
.testimonials .testimonial-item .quote-icon-left {
  display: inline-block;
  left: -5px;
  position: relative;
}
.testimonials .testimonial-item .quote-icon-right {
  display: inline-block;
  right: -5px;
  position: relative;
  top: 10px;
}
.testimonials .testimonial-item p {
  font-style: italic;
  margin: 0 auto 15px auto;
  color: #eee;
}
.testimonials .swiper-pagination {
  margin-top: 20px;
  position: relative;
}
.testimonials .swiper-pagination .swiper-pagination-bullet {
  width: 12px;
  height: 12px;
  opacity: 1;
  background-color: rgba(255, 255, 255, 0.4);
}
.testimonials .swiper-pagination .swiper-pagination-bullet-active {
  background-color: #ffb727;
}
@media (min-width: 992px) {
  .testimonials .testimonial-item p {
    width: 80%;
  }
}

/*--------------------------------------------------------------
# My Portfolio
--------------------------------------------------------------*/
.portfolio #portfolio-flters {
  list-style: none;
  margin-bottom: 20px;
}
.portfolio #portfolio-flters li {
  cursor: pointer;
  display: inline-block;
  margin: 0 10px 10px 10px;
  font-size: 15px;
  font-weight: 600;
  line-height: 1;
  padding: 7px 10px;
  text-transform: uppercase;
  color: #444444;
  transition: all 0.3s ease-in-out;
  border: 2px solid #fff;
}
.portfolio #portfolio-flters li:hover, .portfolio #portfolio-flters li.filter-active {
  color: #f3a200;
  border-color: #ffb727;
}
.portfolio .portfolio-item {
  margin-bottom: 30px;
}
.portfolio .portfolio-item .portfolio-img {
  overflow: hidden;
}
.portfolio .portfolio-item .portfolio-img img {
  transition: all 0.8s ease-in-out;
}
.portfolio .portfolio-item .portfolio-info {
  opacity: 0;
  position: absolute;
  left: 15px;
  bottom: 0;
  z-index: 3;
  right: 15px;
  transition: all ease-in-out 0.3s;
  background: rgba(0, 0, 0, 0.5);
  padding: 10px 15px;
}
.portfolio .portfolio-item .portfolio-info h4 {
  font-size: 18px;
  color: #fff;
  font-weight: 600;
  color: #fff;
  margin-bottom: 0px;
}
.portfolio .portfolio-item .portfolio-info p {
  color: rgba(255, 255, 255, 0.8);
  font-size: 14px;
  margin-bottom: 0;
}
.portfolio .portfolio-item .portfolio-info .preview-link, .portfolio .portfolio-item .portfolio-info .details-link {
  position: absolute;
  right: 40px;
  font-size: 24px;
  top: calc(50% - 18px);
  color: #fff;
  transition: 0.3s;
}
.portfolio .portfolio-item .portfolio-info .preview-link:hover, .portfolio .portfolio-item .portfolio-info .details-link:hover {
  color: #ffc041;
}
.portfolio .portfolio-item .portfolio-info .details-link {
  right: 10px;
}
.portfolio .portfolio-item:hover .portfolio-img img {
  transform: scale(1.2);
}
.portfolio .portfolio-item:hover .portfolio-info {
  opacity: 1;
}

/*--------------------------------------------------------------
# Portfolio Details
--------------------------------------------------------------*/
.portfolio-details {
  padding-top: 40px;
}
.portfolio-details .portfolio-details-slider img {
  width: 100%;
}
.portfolio-details .portfolio-details-slider .swiper-pagination {
  margin-top: 20px;
  position: relative;
}
.portfolio-details .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet {
  width: 12px;
  height: 12px;
  background-color: #fff;
  opacity: 1;
  border: 1px solid #ffb727;
}
.portfolio-details .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet-active {
  background-color: #ffb727;
}
.portfolio-details .portfolio-info {
  padding: 30px;
  box-shadow: 0px 0 30px rgba(59, 67, 74, 0.08);
}
.portfolio-details .portfolio-info h3 {
  font-size: 22px;
  font-weight: 700;
  margin-bottom: 20px;
  padding-bottom: 20px;
  border-bottom: 1px solid #eee;
}
.portfolio-details .portfolio-info ul {
  list-style: none;
  padding: 0;
  font-size: 15px;
}
.portfolio-details .portfolio-info ul li + li {
  margin-top: 10px;
}
.portfolio-details .portfolio-description {
  padding-top: 30px;
}
.portfolio-details .portfolio-description h2 {
  font-size: 26px;
  font-weight: 700;
  margin-bottom: 20px;
}
.portfolio-details .portfolio-description p {
  padding: 0;
}


/*--------------------------------------------------------------
# Contact Me
--------------------------------------------------------------*/
.contact .info-box {
  color: #444444;
  text-align: center;
  box-shadow: 0 0 30px rgba(214, 215, 216, 0.6);
  padding: 20px 0 30px 0;
}
.contact .info-box i.bx {
  font-size: 24px;
  color: #ffb727;
  border-radius: 50%;
  padding: 15px;
  background: #fff6e4;
}
.contact .info-box h3 {
  font-size: 20px;
  color: #777777;
  font-weight: 700;
  margin: 10px 0;
}
.contact .info-box p {
  padding: 0;
  line-height: 24px;
  font-size: 14px;
  margin-bottom: 0;
}
.contact .social-links {
  margin-top: 15px;
  display: flex;
  justify-content: center;
}
.contact .social-links a {
  font-size: 18px;
  display: inline-block;
  color: #687683;
  line-height: 1;
  margin: 0 8px;
  transition: 0.3s;
  padding: 14px;
  border-radius: 50px;
  border: 1px solid #dde1e4;
}
.contact .social-links a:hover {
  color: #fff;
  border-color: #ffb727;
  background: #ffb727;
}
.contact .php-email-form {
  box-shadow: 0 0 30px rgba(214, 215, 216, 0.6);
  padding: 27px;
}
.contact .php-email-form .validate {
  display: none;
  color: red;
  margin: 0 0 15px 0;
  font-weight: 400;
  font-size: 13px;
}
.contact .php-email-form .error-message {
  display: none;
  color: #fff;
  background: #ed3c0d;
  text-align: left;
  padding: 15px;
  font-weight: 600;
}
.contact .php-email-form .error-message br + br {
  margin-top: 25px;
}
.contact .php-email-form .sent-message {
  display: none;
  color: #fff;
  background: #18d26e;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}
.contact .php-email-form .loading {
  display: none;
  background: #fff;
  text-align: center;
  padding: 15px;
}
.contact .php-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid #18d26e;
  border-top-color: #eee;
  -webkit-animation: animate-loading 1s linear infinite;
  animation: animate-loading 1s linear infinite;
}
.contact .php-email-form input, .contact .php-email-form textarea {
  border-radius: 0;
  box-shadow: none;
  font-size: 14px;
}
.contact .php-email-form input::focus, .contact .php-email-form textarea::focus {
  background-color: #ffb727;
}
.contact .php-email-form input {
  padding: 10px 15px;
}
.contact .php-email-form textarea {
  padding: 12px 15px;
}
.contact .php-email-form button[type=submit] {
  background: #ffb727;
  border: 0;
  padding: 10px 24px;
  color: #fff;
  transition: 0.4s;
  border-radius: 5px;
}
.contact .php-email-form button[type=submit]:hover {
  background: #ffc85a;
}
@-webkit-keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
@keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

/*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/
#footer {
  background: url("../img/a.jpg") top center no-repeat;
  background-size: cover;
  color: #fff;
  font-size: 14px;
  text-align: center;
  padding: 80px 0;
  position: relative;
}
#footer::before {
  content: "";
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.6);
}
#footer .container {
  position: relative;
}
#footer h3 {
  font-size: 36px;
  font-weight: 700;
  color: #fff;
  position: relative;
  font-family: "Satisfy", serif;
  padding: 0;
  margin: 0 0 15px 0;
}
#footer p {
  font-size: 15;
  font-style: italic;
  padding: 0;
  margin: 0 0 40px 0;
}
#footer .social-links {
  margin: 0 0 40px 0;
}
#footer .social-links a {
  font-size: 18px;
  display: inline-block;
  background: #ffb727;
  color: #fff;
  line-height: 1;
  padding: 8px 0;
  margin-right: 4px;
  border-radius: 50%;
  text-align: center;
  width: 36px;
  height: 36px;
  transition: 0.3s;
}
#footer .social-links a:hover {
  background: #f3a200;
  color: #fff;
  text-decoration: none;
}
#footer .copyright {
  margin: 0 0 5px 0;
}
#footer .credits {
  font-size: 13px;
}

.faq{
    background-color: #f5f5ff;
}
.section_padding_130 {
    padding: 5px;
}
.faq_area {
    position: relative;
    z-index: 1;
    background-color: #f5f5ff;
}

.faq-accordian {
    position: relative;
    z-index: 1;
}
.faq-accordian .card {
    position: relative;
    z-index: 1;
    margin-bottom: 1.5rem;
}
.faq-accordian .card:last-child {
    margin-bottom: 0;
}
.faq-accordian .card .card-header {
    background-color: #ffffff;
    padding: 0;
    border-bottom-color: #ebebeb;
}
.faq-accordian .card .card-header h6 {
    cursor: pointer;
    padding: 1.75rem 2rem;
    color: #3f43fd;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    -ms-grid-row-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
}
.faq-accordian .card .card-header h6 span {
    font-size: 1.5rem;
}
.faq-accordian .card .card-header h6.collapsed {
    color: #070a57;
}
.faq-accordian .card .card-header h6.collapsed span {
    -webkit-transform: rotate(-180deg);
    transform: rotate(-180deg);
}
.faq-accordian .card .card-body {
    padding: 1.75rem 2rem;
}
.faq-accordian .card .card-body p:last-child {
    margin-bottom: 0;
}

@media only screen and (max-width: 575px) {
    .support-button p {
        font-size: 14px;
    }
}

.support-button i {
    color: #3f43fd;
    font-size: 1.25rem;
}
@media only screen and (max-width: 575px) {
    .support-button i {
        font-size: 1rem;
    }
}

.support-button a {
    text-transform: capitalize;
    color: #2ecc71;
}
@media only screen and (max-width: 575px) {
    .support-button a {
        font-size: 13px;
    }
}

</style>

 