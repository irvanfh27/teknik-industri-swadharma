<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('header'); ?>

<body>

 <?php $this->load->view('menubar'); ?>
 <section id="hero">
  <div class="hero-container">
    <h1>Politeknik Swadharma Teknik Industri</h1>
    <h2>We are team of talanted designers making websites with Bootstrap</h2>
    <a href="#sejarah" class="btn-get-started">Get Started</a>
  </div>
</section><!-- #hero -->

<main id="main">

 
    <!--==========================
      Portfolio Section
      ============================-->
      <section id="portfolio">
        <div class="container wow fadeInUp">
          <div class="section-header">
            <h3 class="section-title">Kegiatan Organisasi</h3>
            <p><br></p>
  <!--           <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p> -->
          </div>
          <div class="row">

            <div class="col-lg-12">
              <ul id="portfolio-flters">
                <li data-filter=".filter-app, .filter-card, .filter-logo, .filter-web" class="filter-active">All</li>
                <li data-filter=".filter-app">App</li>
                <li data-filter=".filter-card">Card</li>
                <li data-filter=".filter-logo">Logo</li>
                <li data-filter=".filter-web">Web</li>
              </ul>
            </div>
          </div>

          <div class="row" id="portfolio-wrapper">
            <div class="col-lg-3 col-md-6 portfolio-item filter-app">
              <a href="">
                <img src="<?php echo base_url(); ?>regna/img/portfolio/app1.jpg" alt="">
                <div class="details">
                  <h4>App 1</h4>
                  <span>Alored dono par</span>
                </div>
              </a>
            </div>

            <div class="col-lg-3 col-md-6 portfolio-item filter-web">
              <a href="">
                <img src="<?php echo base_url(); ?>regna/img/portfolio/web2.jpg" alt="">
                <div class="details">
                  <h4>Web 2</h4>
                  <span>Alored dono par</span>
                </div>
              </a>
            </div>

            <div class="col-lg-3 col-md-6 portfolio-item filter-app">
              <a href="">
                <img src="<?php echo base_url(); ?>regna/img/portfolio/app3.jpg" alt="">
                <div class="details">
                  <h4>App 3</h4>
                  <span>Alored dono par</span>
                </div>
              </a>
            </div>

            <div class="col-lg-3 col-md-6 portfolio-item filter-card">
              <a href="">
                <img src="<?php echo base_url(); ?>regna/img/portfolio/card1.jpg" alt="">
                <div class="details">
                  <h4>Card 1</h4>
                  <span>Alored dono par</span>
                </div>
              </a>
            </div>

            <div class="col-lg-3 col-md-6 portfolio-item filter-card">
              <a href="">
                <img src="<?php echo base_url(); ?>regna/img/portfolio/card2.jpg" alt="">
                <div class="details">
                  <h4>Card 2</h4>
                  <span>Alored dono par</span>
                </div>
              </a>
            </div>

            <div class="col-lg-3 col-md-6 portfolio-item filter-web">
              <a href="">
                <img src="<?php echo base_url(); ?>regna/img/portfolio/web3.jpg" alt="">
                <div class="details">
                  <h4>Web 3</h4>
                  <span>Alored dono par</span>
                </div>
              </a>
            </div>

            <div class="col-lg-3 col-md-6 portfolio-item filter-card">
              <a href="">
                <img src="<?php echo base_url(); ?>regna/img/portfolio/card3.jpg" alt="">
                <div class="details">
                  <h4>Card 3</h4>
                  <span>Alored dono par</span>
                </div>
              </a>
            </div>

            <div class="col-lg-3 col-md-6 portfolio-item filter-app">
              <a href="">
                <img src="<?php echo base_url(); ?>regna/img/portfolio/app2.jpg" alt="">
                <div class="details">
                  <h4>App 2</h4>
                  <span>Alored dono par</span>
                </div>
              </a>
            </div>

            <div class="col-lg-3 col-md-6 portfolio-item filter-logo">
              <a href="">
                <img src="<?php echo base_url(); ?>regna/img/portfolio/logo1.jpg" alt="">
                <div class="details">
                  <h4>Logo 1</h4>
                  <span>Alored dono par</span>
                </div>
              </a>
            </div>

            <div class="col-lg-3 col-md-6 portfolio-item filter-logo">
              <a href="">
                <img src="<?php echo base_url(); ?>regna/img/portfolio/logo3.jpg" alt="">
                <div class="details">
                  <h4>Logo 3</h4>
                  <span>Alored dono par</span>
                </div>
              </a>
            </div>

            <div class="col-lg-3 col-md-6 portfolio-item filter-web">
              <a href="">
                <img src="<?php echo base_url(); ?>regna/img/portfolio/web1.jpg" alt="">
                <div class="details">
                  <h4>Web 1</h4>
                  <span>Alored dono par</span>
                </div>
              </a>
            </div>

            <div class="col-lg-3 col-md-6 portfolio-item filter-logo">
              <a href="">
                <img src="<?php echo base_url(); ?>regna/img/portfolio/logo2.jpg" alt="">
                <div class="details">
                  <h4>Logo 2</h4>
                  <span>Alored dono par</span>
                </div>
              </a>
            </div>

          </div>

        </div>
      </section><!-- #portfolio -->


  </main>
  <?php $this->load->view('footer'); ?>
</body>
</html>
