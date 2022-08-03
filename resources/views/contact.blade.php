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

<section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <span>Contact Us</span>
        <h2>Contact Us</h2>
         </div>

      <div class="row">

        <div class="col-lg-6">

          <div class="row">
            <div class="col-md-12">
              <div class="info-box">
                <i class="bx bx-share-alt"></i>
                <h3>Social Profiles</h3>
                <div class="social-links">
                  <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                  <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                  <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                  <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
                  <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-envelope"></i>
                <h3>Email Us</h3>
                <p>Ooe@gmail.com</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-phone-call"></i>
                <h3>Call Us</h3>
                <p>+251 933 9801</p>
              </div>
            </div>
          </div>

        </div>

        <div class="col-lg-6">
          {!! Form::open(['action'=>'App\Http\Controllers\ContactusController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
            <div class="row">
              <div class="col-md-6 form-group">
                {{Form::text('name','',['id'=>'name','class'=>'form-control','placeholder'=>'Your Name' ] )}}
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                {{Form::email('email','',['id'=>'email','class'=>'form-control','placeholder'=>'Your Email' ] )}}
                
              </div>
            </div>
            <div class="form-group mt-3">
              {{Form::text('subject','',['id'=>'subject','class'=>'form-control','placeholder'=>'Subject'] )}}
              
            </div>
            <div class="form-group mt-3">
              {{Form::textarea('message','',['id'=>'message','class'=>'form-control','placeholder'=>'Message'] )}}
            </div>
            <br>
            <div class="text-center">
              {{Form::submit('Send Message',['class'=>'btn btn-warning form-control'] )}}
            </div>
            {!! Form::close() !!}  
        </div>

      </div>

    </div>
  </section><!-- End Contact Me Section -->

  <footer id="footer">
    <div class="container">
      <h3>OCEAN OF EXPERTISE</h3>
      <p>Smarter together</p>
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
  @endif