@include('layouts.app')
<link href="asset/style.css" rel="stylesheet">
<link href="asset/style4.css" rel="stylesheet">
<link href="{{asset('asset/img/favicon.png')}}" rel="icon">
<link href="asset/img/apple-touch-icon.png" rel="apple-touch-icon">


<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Satisfy" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="{{ asset('asset/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
<link href="{{asset('asset/glightbox/css/glightbox.min.css')}}" rel="stylesheet">

<link href="{{asset('asset/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
<link href="{{asset('asset/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
<link href="{{asset('asset/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

<body>


  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>File Details</h2>
          <img src="public\storage\img\files\book1.png" alt="">
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">
        <div class="row gy-4">

          <div class="col-lg-8">
           
             
                <iframe src="..\storage\books\{{$post->name}}" frameborder="0"></iframe>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>File information</h3>
              <ul>
                <li><strong>Category</strong>: {{$post->file_type}}</li>
                <li><strong>Posted by</strong>: {{$exp->name}}</li>
                <li><strong>Project date</strong>: {{$post->created_at}}</li>
                
                <li><strong><a href="..\storage\books\{{$post->name}}">Download</a></strong>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Detail</h2>
              <p>
                {{$post->description}}
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

 

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

 <!-- Vendor JS Files -->
 <script src="asset/purecounter/purecounter.js"></script>
 <script src="asset/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="asset/glightbox/js/glightbox.min.js"></script>
 <script src="asset/isotope-layout/isotope.pkgd.min.js"></script>
 <script src="asset/swiper/swiper-bundle.min.js"></script>
 <script src="asset/waypoints/noframework.waypoints.js"></script>
 <script src="asset/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

<style>

    /*--------------------------------------------------------------
# Portfolio Details
--------------------------------------------------------------*/
.portfolio-details {
  padding-top: 40px;
}
.portfolio-details .portfolio-details-slider img {
  width: 100%;
  height: 50%;
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
</style>