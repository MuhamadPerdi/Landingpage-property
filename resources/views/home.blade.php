<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
    <title>Sayana</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
  
    <!-- Favicons -->
    <link href="asset/image/sayana-removebg.png" rel="icon">
    <link href="asset/image/sayana-removebg.png" rel="apple-touch-icon">
  
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">
  
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  
    <!-- Template Main CSS File -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
  </head>
  
  <body>
  
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
      <div class="container-fluid container-xl d-flex align-items-center justify-content-center">
        <div class="logo me-auto">
            <h1><a href="index.html">Property</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
          </div>
        <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto" href="#header">Home</a></li>
              <li><a class="nav-link scrollto" href="#about">Profile</a></li>
              <li><a class="nav-link scrollto" href="#properties">Produk</a></li>
              <li><a class="nav-link scrollto" href="#facilities">Fasilitas</a></li>
              <li><a class="nav-link scrollto" href="#recent-blog-posts">Artikel</a></li>
              <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
          
  
        <!-- <a href="#book-a-table" class="book-a-table-btn scrollto">Book a table</a> -->
  
      </div>
    </header><!-- End Header -->
  
    <!-- ======= Hero Section ======= -->
  <section id="hero" >
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      
        @foreach ($slider as $item)
        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url({{asset ('storage/images/slider/' . $item->foto)}});">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>{{$item -> title }}</span></h2>
                <p class="animate__animated animate__fadeInUp">{{$item -> deskripsi}}</p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>
                  <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Book a Table</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>
        
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>
        @endforeach

      </div>
    </div>
  </section><!-- End Hero -->

    <main id="main">
  
      <section id="about" class="about">
        <div class="container">
          @foreach ($about as $item)
          <div class="row mb-4">
            <div class="col-lg-6">
              <div class="about-img">
                <img src="{{ asset('storage/images/about/' . $item->foto) }}" alt="About Us" class="img-fluid">
              </div>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <h3>About Us</h3>
              <p class="fst-italic">
                {{ $item->title }}
              </p>
              <p class="deskripsi">
                {{ Str::limit($item->deskripsi, 200) }}
                <span class="full-deskripsi" style="display: none;">
                  {{ substr($item->deskripsi, 200) }}
                </span>
              </p>
              <a href="javascript:void(0);" class="read-more">Read More</a>
              <a href="javascript:void(0);" class="read-less" style="display: none;">Read Less</a>
            </div>
          </div>
          @endforeach
        </div>
      </section>
      
      
        <!-- ======= Properties Section ======= -->
<section id="properties" class="properties">
    <div class="container">
  
      <div class="section-title">
        <h2>Our Properties</h2>
        <p>Explore our diverse range of properties and find the perfect match for your needs. Whether you're looking for residential or commercial spaces, we have something for everyone.</p>
      </div>
  
      <div class="row">
        <div class="col-lg-4 col-md-6 property-item">
          <div class="property-img">
            <img src="assets/img/about.jpg" class="img-fluid" alt="Property 1">
          </div>
          <div class="property-info">
            <h4>Luxury Apartment</h4>
            <p>Located in the heart of the city, this luxury apartment offers modern amenities and stunning views.</p>
            <a href="#" class="btn btn-primary">View Details</a>
          </div>
        </div>
  
        <div class="col-lg-4 col-md-6 property-item">
          <div class="property-img">
            <img src="assets/img/property2.jpg" class="img-fluid" alt="Property 2">
          </div>
          <div class="property-info">
            <h4>Spacious Office</h4>
            <p>This spacious office is perfect for businesses looking for a central location with excellent facilities.</p>
            <a href="#" class="btn btn-primary">View Details</a>
          </div>
        </div>
  
        <div class="col-lg-4 col-md-6 property-item">
          <div class="property-img">
            <img src="assets/img/property3.jpg" class="img-fluid" alt="Property 3">
          </div>
          <div class="property-info">
            <h4>Cozy House</h4>
            <p>A cozy house in a quiet neighborhood, ideal for families looking for a comfortable and peaceful home.</p>
            <a href="#" class="btn btn-primary">View Details</a>
          </div>
        </div>
  
      </div>
  
    </div>
  </section><!-- End Properties -->

  <!-- ======= Facilities Section ======= -->
<section id="facilities" class="facilities">
    <div class="container">
  
      <div class="section-title">
        <h2>Facilities</h2>
        <p>Our properties come with a range of top-notch facilities designed to enhance your lifestyle and comfort. Explore the amenities available with each property to find what best suits your needs.</p>
      </div>
  
      <div class="row">
        <div class="col-lg-4 col-md-6 facility-item">
          <div class="facility-icon">
            <i class="bi bi-wifi"></i>
          </div>
          <div class="facility-info">
            <h4>High-Speed Internet</h4>
            <p>Enjoy seamless connectivity with high-speed internet available across all properties.</p>
          </div>
        </div>
  
        <div class="col-lg-4 col-md-6 facility-item">
          <div class="facility-icon">
            <i class="bi bi-garage"></i>
          </div>
          <div class="facility-info">
            <h4>Secure Parking</h4>
            <p>Properties include secure parking spaces to ensure the safety of your vehicle.</p>
          </div>
        </div>
  
        <div class="col-lg-4 col-md-6 facility-item">
          <div class="facility-icon">
            <i class="bi bi-bag-heart"></i>
          </div>
          <div class="facility-info">
            <h4>Fitness Center</h4>
            <p>Stay fit and healthy with our on-site fitness centers available in select properties.</p>
          </div>
        </div>
  
        <div class="col-lg-4 col-md-6 facility-item">
          <div class="facility-icon">
            <i class="bi bi-geo-alt"></i>
          </div>
          <div class="facility-info">
            <h4>Prime Location</h4>
            <p>All properties are situated in prime locations, close to essential services and amenities.</p>
          </div>
        </div>
  
        <div class="col-lg-4 col-md-6 facility-item">
          <div class="facility-icon">
            <i class="bi bi-shield-check"></i>
          </div>
          <div class="facility-info">
            <h4>24/7 Security</h4>
            <p>Rest easy with our round-the-clock security services ensuring a safe environment.</p>
          </div>
        </div>
  
        <div class="col-lg-4 col-md-6 facility-item">
          <div class="facility-icon">
            <i class="bi bi-basket"></i>
          </div>
          <div class="facility-info">
            <h4>Shopping Amenities</h4>
            <p>Convenient access to shopping amenities within and around the property.</p>
          </div>
        </div>
  
      </div>
  
    </div>
  </section><!-- End Facilities -->

  <!-- ======= Recent Blog Posts Section ======= -->
<section id="recent-blog-posts" class="recent-blog-posts">
    <div class="container" data-aos="fade-up">

        <div class="row">

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="post-box">
                    <div class="post-img">
                        <img src="assets/img/slide/slide-1.jpg" class="img-fluid" alt="Article 1">
                    </div>
                    <div class="meta">
                        <span class="post-date">15 July 2024</span>
                        <span class="post-author">By Author Name</span>
                    </div>
                    <h3 class="post-title">Understanding Real Estate Market Trends</h3>
                    <p>Learn about the current trends in the real estate market and what they mean for buyers and investors.</p>
                   
                </div>
            </div>

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="post-box">
                    <div class="post-img">
                        <img src="assets/img/article2.jpg" class="img-fluid" alt="Article 2">
                    </div>
                    <div class="meta">
                        <span class="post-date">22 July 2024</span>
                        <span class="post-author">By Author Name</span>
                    </div>
                    <h3 class="post-title">Top Tips for First-Time Homebuyers</h3>
                    <p>Discover essential tips and advice for those looking to buy their first home and make the process smoother.</p>
                </div>
            </div>

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">
                <div class="post-box">
                    <div class="post-img">
                        <img src="assets/img/article3.jpg" class="img-fluid" alt="Article 3">
                    </div>
                    <div class="meta">
                        <span class="post-date">29 July 2024</span>
                        <span class="post-author">By Author Name</span>
                    </div>
                    <h3 class="post-title">Maximizing Property Value</h3>
                    <p>Find out how to increase the value of your property through smart renovations and improvements.</p>
                   
                </div>
            </div>

        </div>

    </div>
</section><!-- End Recent Blog Posts -->

      <!-- ======= Contact Us Section ======= -->
<section id="contact" class="contact">
    <div class="container">
        <div class="section-title">
            <h2>Contact Us</h2>
            <p>If you have any questions or need further information, feel free to get in touch with us. We're here to help!</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
                <form action="https://sayanabogor.com/kirim" method="POST" class="php-email-form">
                    <input type="hidden" name="_token" value="7YIWu1KJ5bBjnO7e81LRtrbFbNklWEQ2N4FrQinQ">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Your Name" required="">
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Company Email" required="">
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="youremail" id="youremail" placeholder="Your Email" required="">
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="komentar" rows="5" placeholder="Message" required=""></textarea>
                    </div>
                    <div class="my-3">
                        <!-- Optionally add an error or success message here -->
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section><!-- End Contact Us -->


<a href="https://wa.me/+6282188833376/?text=Hello, ada yang bisa saya bantu?" target="_blank" class="wt">
  <i class="bi bi-whatsapp"></i>
</a>
</main>



  
  
    
  
    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
  
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll('.read-more').forEach(function (element) {
          element.addEventListener('click', function () {
            const parent = this.parentElement;
            parent.querySelector('.full-deskripsi').style.display = 'inline';
            parent.querySelector('.read-more').style.display = 'none';
            parent.querySelector('.read-less').style.display = 'inline';
          });
        });
    
        document.querySelectorAll('.read-less').forEach(function (element) {
          element.addEventListener('click', function () {
            const parent = this.parentElement;
            parent.querySelector('.full-deskripsi').style.display = 'none';
            parent.querySelector('.read-more').style.display = 'inline';
            parent.querySelector('.read-less').style.display = 'none';
          });
        });
      });
    </script>
  
  
    
    
  
  
  
  
  </body>
  </html>