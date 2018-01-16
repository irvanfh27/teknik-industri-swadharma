<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('header'); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/dist/viewer.css">

<body>

 <?php $this->load->view('menubar'); ?>
 <section id="hero">
  <div class="hero-container">
    <h1>Politeknik Swadharma Teknik Industri</h1>
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
                <!-- <li data-filter=".filter-app">App</li> -->
         <!--        <li data-filter=".filter-card">Card</li>
                <li data-filter=".filter-logo">Logo</li>
                <li data-filter=".filter-web">Web</li> -->
              </ul>
            </div>
          </div>




          <div class="row" id="portfolio-wrapper">
            <div id="galley" class="row">
              <?php foreach ($gallery->result() as $galer): ?>

                <div id="galley" class="col-lg-3 col-md-6 portfolio-item filter-app">
                  <img  src="<?php echo base_url(); ?>admin/assets/uploads/files/<?=$galer->file_url;?>" alt="" width="110%" height="110%">
                  <div class="details">
                    <h4><?=$galer->title;?></h4>
                    <span><?=$galer->deskripsi;?></span>
                  </div>
                </div>
              <?php endforeach ?>
            </div>
          </div>
        </div>
      </section><!-- #portfolio -->


    </main>
    <?php $this->load->view('footer'); ?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/dist/viewer.js"></script>
    <script>
      window.addEventListener('DOMContentLoaded', function () {
        var galley = document.getElementById('galley');
        var viewer = new Viewer(galley, {
          url: 'data-original',
          toolbar: {
            oneToOne: true,
            prev: function() {
              viewer.prev(true);
            },
            play: true,
            next: function() {
              viewer.next(true);
            },
            download: function() {
              const a = document.createElement('a');

              a.href = viewer.image.src;
              a.download = viewer.image.alt;
              document.body.appendChild(a);
              a.click();
              document.body.removeChild(a);
            },
          },
        });
      });
    </script>
  </body>
  </html>
