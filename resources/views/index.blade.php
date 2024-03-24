<!DOCTYPE html>
<html lang="en">

<head>
@include('layouts.head')

</head>

<body>

  <!-- ======= Top Bar ======= -->

  @include('layouts.topbar')
  <!-- ======= Header ======= -->


  @include('layouts.header_nav')


  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  @include('layouts.hero')

  <!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->

    @include('layouts.feature_service')

    <!-- End Featured Services Section -->

    <!-- ======= About Section ======= -->

    @include('layouts.about')

    <!-- End About Section -->

    <!-- ======= Skills Section ======= -->

    @include('layouts.skill')

    <!-- End Skills Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="83" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Happy Clients</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="118" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="463" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Hard Workers</p>
            </div>
          </div>

        </div>

      </div>
    </section>


    <!-- ======= Services Section ======= -->

    @include('layouts.services')

    <!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    @include('layouts.testimonial')

    <!-- End Testimonials Section -->

    <!-- ======= Portfolio Section ======= -->
    @include('layouts.portfolio')

    <!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->

    @include('layouts.team_section')
    <!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->

    <!-- End Pricing Section  -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    @include('layouts.faq')
    <!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    @include('layouts.contact_us')

    <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- Yasir Hameed -->

  <!-- ======= Footer ======= -->
  @include('layouts.footer')

  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  @include('layouts.script')
</body>

</html>
