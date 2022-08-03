@include('layouts.app')
@if (!Auth::guest())
<link href="asset/style.css" rel="stylesheet">
<link href="asset/style4.css" rel="stylesheet">
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
        <span>Multimedias</span>
        <h2>Multimedias</h2>
        <p>Available multimedias</p>
      </div>

      <ul id="portfolio-flters" class="d-flex justify-content-center">
        <li data-filter="*" class="filter-active">All</li>
        <li data-filter=".filter-video">VIDEO</li>
        <li data-filter=".filter-audio">AUDIO</li>
       
      </ul>

      <div class="row portfolio-container">

        
        @foreach ($posts as $post)

        <div class="col-lg-4 col-md-6 portfolio-item filter-video">
          <div class="portfolio-img"><img src="storage\multimedias\{{$post->cover}}" class="img-fluid" alt=""></div>
          <div class="portfolio-info">
            <h4>{{$post->title}}</h4>
            
            <a href="storage\multimedias\{{$post->cover}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Book 1"><i class="bx bx-plus"></i></a>
            <a href="multimedia/{{$post->id}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>  
       
        @endforeach
        

        @foreach ($posts2 as $post2)
        
        <div class="col-lg-4 col-md-6 portfolio-item filter-audio">
          <div class="portfolio-img"><img src="storage\multimedias\{{$post2->cover}}" class="img-fluid" alt=""></div>
          <div class="portfolio-info">
            <h4>{{$post2->title}}</h4>
            <a href="storage\multimedias\{{$post2->cover}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
            <a href="multimedia/{{$post2->id}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
        @endforeach



       



      </div>

    </div>
  </section><!-- End My Portfolio Section -->

  <footer id="footer">
    <div class="container">
      <h3>OCEAN OF EXPERTISE</h3>
      <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>ocean of expertise</span></strong>. All Rights Reserved
      </div>
      
    </div>
  </footer><!-- End Footer -->
  

  <!-- Vendor JS Files -->
  <script src="asset/purecounter/purecounter.js"></script>
  <script src="asset/glightbox/js/glightbox.min.js"></script>
  <script src="asset/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="asset/swiper/swiper-bundle.min.js"></script>
  <script src="asset/waypoints/noframework.waypoints.js"></script>
  <script src="asset/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="asset/js/main.js"></script>
  </body>

      
  @else
      <div class="container">
        <h3>You must be logged in</h3>
      </div>
@endif

 
