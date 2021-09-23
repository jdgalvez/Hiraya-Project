<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Hiraya</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Beth+Ellen&family=Homemade+Apple&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair+Display:400,400i,500,500i,600,600i,700,700i&subset=cyrillic" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- Start of Async Drift Code -->
  <script>
        "use strict";

        !function() {
        var t = window.driftt = window.drift = window.driftt || [];
        if (!t.init) {
            if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
            t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
            t.factory = function(e) {
            return function() {
                var n = Array.prototype.slice.call(arguments);
                return n.unshift(e), t.push(n), t;
            };
            }, t.methods.forEach(function(e) {
            t[e] = t.factory(e);
            }), t.load = function(t) {
            var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
            o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
            var i = document.getElementsByTagName("script")[0];
            i.parentNode.insertBefore(o, i);
            };
        }
        }();
        drift.SNIPPET_VERSION = '0.3.1';
        drift.load('mf8ww89upe9t');
    </script>
    <!-- End of Async Drift Code -->
</head>

<body>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column align-items-center justify-content-center">
    <h1>Hiraya Photos</h1>
    <h6>Wedding & Lifestyle Photographer</h6>
    <a href="#portfolio" class="btn-get-started scrollto"><i class="bi bi-chevron-double-down"></i></a>
  </section><!-- End Hero -->


  <!-- ======= Header ======= -->
  <?php include "header.php"; ?>


  <main id="main">
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">
        <div class="section-title">
          <h3>Galleries</h3>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>
        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-filters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-wedding">Wedding</li>
              <li data-filter=".filter-engagement">Engagement</li>
              <!-- <li data-filter=".filter-lifestyle">Lifestyle</li> -->
            </ul>
          </div>
        </div>
        <div class="row portfolio-container">
          <div class="col-lg-4 col-md-6 portfolio-item filter-wedding">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/image-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Ben &amp; Kim</h4>
                <p>Wedding</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/image-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Ben &amp; Kim"><i class="bx bx-plus"></i></a>
                <a href="page2.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-engagement">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/image-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pearson &amp; Becca</h4>
                <p>Engagement</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/image-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Pearson &amp; Becca"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-wedding">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/image-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>John &amp; Bea</h4>
                <p>Wedding</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/image-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="John &amp; Bea"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-engagement">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/image-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Rai &amp; Helena</h4>
                <p>Engagement</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/image-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Rai &amp; Helena"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-wedding">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/image-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kevin &amp; Claire</h4>
                <p>Wedding</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/image-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Kevin &amp; Claire"><i class="bx bx-plus"></i></a>
                <a href="page3.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-wedding">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/image-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Arvin &amp; Cielo</h4>
                <p>Wedding</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/image-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Arvin &amp; Cielo"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-wedding">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/image-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Lucas &amp; Ella</h4>
                <p>Wedding</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/image-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Lucas &amp; Ella"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-engagement">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/image-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Eli &amp; Celine</h4>
                <p>Engagement</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/image-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Eli &amp; Celine"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-wedding">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/image-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Lance &amp; Jessie</h4>
                <p>Wedding</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/image-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Lance &amp; Jessie"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Portfolio Section -->
     <!-- ======= Services Section ======= -->
     <section id="services" class="services section-bg">
      <div class="container">
        <div class="section-title text-center">
          <h3>Services</h3>
          <p><i>You truly deserve the best.</i></p>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box py-5">
              <span class="calligraphy">W</span><span class="calligraphy-text">edding</span>
              <p class="description">Capturing new love and bright beginnings as couples prepare for one of the most important milestones in their lives</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box py-5">
              <span class="mb-2 calligraphy">E</span><span class="calligraphy-text">ngagement</span>
              <p class="description">Celebrating the start of a lifetime of love and unity with family and friends by your side</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box py-5">
              <span class="calligraphy">D</span><span class="calligraphy-text">estination</span>
              <p class="description">Wanderlust couples who seek to celebrate their vows in the most extravagant places in the world</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box py-5">
              <span class="calligraphy">L</span><span class="calligraphy-text">ifestyle</span>
              <p class="description">Embracing what is imperfect and unpredictable, preserving the beauty of love and life in everyday moments</p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->
    <section id="" class="image-0">
      <div class="container">
        <div class="section-title text-center">
          <!-- <h3>hello</h3> -->
          <div class="quote">
            <p class="my-3"><i>We make it easy for you to book our services.</i></p>
            <p><i>Sign up. Access your account. In a few clicks, you can book and schedule your event.</i></p>
            <button class="mt-5 button" onCLick="window.location.href='./admin/register.php'">Sign Up</button>
          </div>
        </div>
      </div>
    </section>
    <!-- ======= About Section ======= -->
    <section id="about" class="about about-section-bg">
      <div class="container">
        <div class="section-title text-center">
          <h3>About Us</h3>
          <p><i>We are storytellers.</i></p>
        </div>
        <div class="row no-gutters">
          <div class="col-xl-12 ps-0 ps-lg-5 pe-lg-4 d-flex align-items-stretch">
            <div class="content d-flex flex-column justify-content-center">
              <div class="about-content"> 
              <span class="calligraphy">H</span><span class="calligraphy-text">iraya</span>
              <p>
                Our name is inspired from the ancient Filipino word which means “the fruit of one's dreams, wishes, and aspirations." 
                This studio is built on solid dreams culminated throughout the years. One of our dreams is to deliver
                outstanding photo galleries to every client and to capture genuine, priceless moments during your most important celebrations.
              </p>
              </div>
              <div class="about-content">
              <span class="calligraphy">O</span><span class="calligraphy-text">ur Style</span>
              <p>Light, natural, timeless. These are the three attributes we consider when taking images. Every shutter click on our cameras is defined by one purpose - to keep your photos organic and timeless. We also give value to creative ideas and apply them whenever appropriate.</p>
              </div>
              <div class="about-content">
              <span class="calligraphy">O</span><span class="calligraphy-text">ur Team</span>
              <p>We want to tell your stories throug heartfelt and awe-inspiring photographs. We also make sure that we provide the best service and experience. A happy working relationship with our client is a top priority for us. </p>
              </div>
              <div class="row pe-lg-4 about-content">
                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-emoji-smile"></i>
                    <span data-purecounter-start="0" data-purecounter-end="65" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Happy Clients</strong> - All of which have been our loyal clients turn friends.</p>
                  </div>
                </div>
                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-journal-richtext"></i>
                    <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Events</strong> - From weddings, engagement, to lifestyle shoots. It has been a wild, but definitely enjoyable ride for us.</p>
                  </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>
      </div>
    </section><!-- End About Section -->
    <section id="" class="image">
      <div class="container">
        <div class="section-title text-center">
          <!-- <h3>hello</h3> -->
          <div class="quote">
            <p><i>“A thing that you see in my pictures is that I was not afraid to fall in love with these people.”</i></p>
            <p class="mt-2">— Annie Leibovitz</p>
          </div>
        </div>
      </div>
    </section>
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">
        <div class="section-title text-center">
          <h3>Testimonials</h3>
          <p><i>You kind words keep us going.</i></p>
        </div>
        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  I am totally happy that we have picked the right production team for our wedding. It was pure passion and professionalism. They didn't just meet my expectations but the team went beyond my ideas. It was perfect. Hope to work with them again in time. Thank you so much, Hiraya Photos & Films. You all did great!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-1.jpeg" class="testimonial-img" alt="">
                <h3>Lab Campos-Rabaca</h3>
                <!-- <h4>Former Hiraya Bride</h4> -->
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  I highly recommend Hiraya Photos and Films. I’m extremely satisfied with their output. During the wedding preparation, I was really looking for a client sensitive service provider. Good thing Hiraya Photos Films is there. Just perfect for what I need because photos are meant to preserve the good memories. Thank you Hiraya!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-2.jpeg" class="testimonial-img" alt="">
                <h3>Thesa Mae Lacatan Gonzales</h3>
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Highly recommended! Our prenup and wedding photos and videos are really great. You exceeded pur expectations!  We received very positive feedbacks from our guests.  Very professional but caring as well, always asking if we're okay while making sure they got the best shots of us in every angle possible! Thank you so much guys for giving your best those days!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-3.jpeg" class="testimonial-img" alt="">
                <h3>Jella Candia - Domingo</h3>
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Highly Recommended! Professional and very accommodating. I really appreciate their patience in taking photos/videos of us, especially that we are not so good in posing and acting yet they can still handle us comfortably. The photos/videos from prenup to SDE are superb. We will surely treasure your hardwork!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-4.jpeg" class="testimonial-img" alt="">
                <h3>Irene Asejo</h3>
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Superb! Very professional. We appreciate their craftsmanship and their passion for photography. We genuinely thank you Hiraya Team for making our prenup and wedding day memorable. We highly recommend this team for those couples who want to make their wedding the most beautiful day in their life. 
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-5.jpeg" class="testimonial-img" alt="">
                <h3>Bethany Bethphage</h3>
              </div>
            </div><!-- End testimonial item -->
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section><!-- End Testimonials Section -->
    <section id="" class="image-1">
      <div class="container">
        <div class="section-title text-center">
          <!-- <h3>hello</h3> -->
          <div class="quote-1">
            <p><i>“Which of my photographs is my favorite? The one I'm going to take tomorrow.”</i></p>
            <p class="mt-2">— Imogene Cunningham</p>
          </div>
        </div>
      </div>
    </section>
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">
        <div class="section-title text-center">
          <h3>Contact</h3>
        </div>
        <div class="row">
          <div class="mb-5 col-lg-4 col-md-12">
            <div class="contact-about">
              <span class="calligraphy">H</span><span class="calligraphy-text">iraya</span>
              <p>You can say hello to us or follow our works through our social media channels. Let's stay connected!</p>
              <div class="social-links">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-youtube"></i></a>
              </div>
            </div>
          </div>
          <div class="mb-5 col-lg-3 col-md-12">
            <div class="info">
              <div class="d-flex align-items-center">
                <i class="bi bi-geo-alt"></i>
                <p>Davao City<br>Davao del Sur, Philippines 8000</p>
              </div>
              <div class="d-flex align-items-center mt-4">
                <i class="bi bi-envelope"></i>
                <p>hirayaphotosfilms@gmail.com</p>
              </div>
              <div class="d-flex align-items-center mt-4">
                <!-- <i class="bi bi-phone"></i> -->
                <i class="bi bi-telephone"></i>
                <p>(082) 295 xxxx </p>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-md-12">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="form-group mt-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include 'footer.php'; ?>
  <!-- End  Footer -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>