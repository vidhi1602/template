@extends('frontView.master')

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Portfolio</h2>
          <p>Check out our beautifull portfolio</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{ asset('frontEnd') }}/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="{{ asset('frontEnd') }}/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-plus-circle"></i></a>
                <a href="#" title="More Details"><i class="icofont-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{ asset('frontEnd') }}/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="{{ asset('frontEnd') }}/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="icofont-plus-circle"></i></a>
                <a href="#" title="More Details"><i class="icofont-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{ asset('frontEnd') }}/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="{{ asset('frontEnd') }}/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="icofont-plus-circle"></i></a>
                <a href="#" title="More Details"><i class="icofont-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{ asset('frontEnd') }}/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="{{ asset('frontEnd') }}/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="icofont-plus-circle"></i></a>
                <a href="#" title="More Details"><i class="icofont-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Card 2</h4>
                <p>Card</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{ asset('frontEnd') }}/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="{{ asset('frontEnd') }}/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox" title="Web 2"><i class="icofont-plus-circle"></i></a>
                <a href="#" title="More Details"><i class="icofont-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Web 2</h4>
                <p>Web</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{ asset('frontEnd') }}/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="{{ asset('frontEnd') }}/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox" title="App 3"><i class="icofont-plus-circle"></i></a>
                <a href="#" title="More Details"><i class="icofont-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{ asset('frontEnd') }}/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="{{ asset('frontEnd') }}/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox" title="Card 1"><i class="icofont-plus-circle"></i></a>
                <a href="#" title="More Details"><i class="icofont-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{ asset('frontEnd') }}/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="{{ asset('frontEnd') }}/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox" title="Card 3"><i class="icofont-plus-circle"></i></a>
                <a href="#" title="More Details"><i class="icofont-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{ asset('frontEnd') }}/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="{{ asset('frontEnd') }}/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="icofont-plus-circle"></i></a>
                <a href="#" title="More Details"><i class="icofont-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->