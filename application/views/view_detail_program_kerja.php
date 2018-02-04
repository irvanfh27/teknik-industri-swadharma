<!DOCTYPE html>
<html lang="en">
  <?php $this->load->view('header'); ?>
  <body>
    <?php $this->load->view('menubar'); ?>
    <section id="hero">
      <div class="hero-container">
        <h1>Politeknik Swadharma Teknik Industri</h1>
      </div>
      </section><!-- #hero -->
      <main id="main">
        <!--==========================
        sejarah Us Section
        ============================-->
        <section id="sejarah">
          <div class="container">
            <div class="row sejarah-container">
              <ul>
                <h2 class="title"><?php echo $post['judul']; ?></h2>
                &nbsp;&nbsp;<i class="fa fa-calendar"></i>&nbsp;<small><?php echo $post['create_at']; ?></small>
                <p>
                  <?php echo $post['deskripsi']; ?>
                </p>
              </ul>
            </div>
            <div class="col-lg-6 background order-lg-2 order-1 wow fadeInRight"></div>
            <div class="row" id="portfolio-wrapper">
              <div id="galley" class="row">
                <div id="galley" class="col-lg-3 col-md-6 portfolio-item filter-app">
                  <img  src="<?php echo base_url(); ?>admin/assets/uploads/files/<?=$post['file'];?>" alt="" width="110%" height="110%">
                  <div class="details">
                    <!--  -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </section><!-- #sejarah -->
      </main>
      <?php $this->load->view('footer'); ?>
    </body>
  </html>